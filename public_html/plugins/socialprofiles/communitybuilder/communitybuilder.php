<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @build-date      2016/12/24
 */

defined('_JEXEC') or die('Restricted access');

jimport('sourcecoast.plugins.socialprofile');

class plgSocialProfilesCommunityBuilder extends SocialProfilePlugin
{
    var $_isCBv1 = false;

    function __construct(&$subject, $params)
    {
        // Setup the file paths that detect if this component is actually installed.
        // Needed before calling the parent constructor
        $this->_componentFolder = JPATH_ADMINISTRATOR . '/components/com_comprofiler';
        $this->_componentFile = 'plugin.foundation.php';

        parent::__construct($subject, $params);

        $this->defaultSettings->set('import_avatar', '1');
        $this->defaultSettings->set('import_cover_photo', '1');
        $this->defaultSettings->set('import_always', '0');
        $this->defaultSettings->set('skip_activation', '1');
        $this->defaultSettings->set('registration_show_fields', '0'); //0=None, 1=Required, 2=All
        $this->defaultSettings->set('imported_show_fields', '0'); //0=No, 1=Yes
        $this->defaultSettings->set('skip_tos', '1');

        if (JFile::exists(JPATH_ROOT . "/libraries/CBLib/CB/Application/CBConfig.php"))
            $this->_isCBv1 = false;
        else
            $this->_isCBv1 = true;
    }

    protected function onAuthenticate()
    {
        $response = new profileResponse();
        $response->status = true;

        # If this is a first registration, the CBUser hasn't been created yet (done on first login)
        # Therefore, just check if they will need to confirm their email or be approved, and
        # return that response.
        # Otherwise, check their CBUser and report any errors like normal
        $dbo = JFactory::getDBO();
        $query = "SELECT user_id, confirmed, approved FROM #__comprofiler " .
            "WHERE user_id = " . $this->joomlaId;
        $dbo->setQuery($query);
        $status = $dbo->loadObject();

        $this->loadCB();
        if ($status) {
            if (!$status->confirmed) {
                if ($this->_isCBv1)
                    $response->message = _LOGIN_NOT_CONFIRMED;
                else {
                    cbimport('language.front');
                    $response->message = CBTxt::T(LOGIN_NOT_CONFIRMED);
                }
                $response->status = false;
            } else if (!$status->approved) {
                if ($this->_isCBv1)
                    $response->message = _LOGIN_NOT_APPROVED;
                else {
                    cbimport('language.front');
                    $response->message = CBTxt::T(LOGIN_NOT_APPROVED);
                }
                $response->status = false;
            }
        }
        return $response;
    }

    protected function getRegistrationForm($profileData)
    {
        $html = "";
        //Get register field forms
        $showRegistrationFields = $this->settings->get('registration_show_fields');
        $showImportedFields = $this->settings->get('imported_show_fields');

        $this->loadCB();

        global $_CB_database;
        $cbUser = new moscomprofilerUser($_CB_database);
        $cbUser->load(0);
        $cbTabs = new cbTabs(0, 2);
        $cbFields = $cbTabs->_getTabFieldsDb(null, $cbUser, 'register', null, true);

        global $_PLUGINS;
        $fieldTypes = $_PLUGINS->getUserFieldTypes(); // Load up the field types into the $_PLUGINS var

        foreach ($cbFields as $cbField) {
            $hideField = $cbField->type == 'primaryemailaddress' || $cbField->type == 'predefined' || $cbField->type == 'password' || $cbField->type == 'image' || $cbField->name == 'username';
            if ($cbField->published && $cbField->registration && !$hideField) {
                $fieldName = $this->settings->get('field_map.' . $cbField->name, 0);

                // Show All/Required Fields. Hide mapped fields if not showing imported fields
                $showField = ($showRegistrationFields == '2' || ($cbField->required && $showRegistrationFields == '1')) &&
                    ($showImportedFields == "1" || ($showImportedFields == "0" && $fieldName == '0'));

                if (!$showField) {
                    if ($fieldName != '0') // A field will be imported without the user seeing it. Some networks require explicit approval for this (LinkedIn)
                        $this->set('performsSilentImport', 1);
                    continue;
                }

                //Create field
                $className = $_PLUGINS->_fieldTypes[$cbField->type][0];
                $field = new $className();

                $fieldValue = $profileData->getFieldWithUserState($cbField->name);
                if ($className == 'CBfield_date')
                    $fieldValue = strftime("%Y/%m/%d", strtotime($fieldValue));

                $cbUser->set($cbField->name, $fieldValue);

                if ($showField) {
                    $fieldOut = $field->getField($cbFields[$cbField->fieldid], $cbUser, 'htmledit', 'register', '0');
                    if ($className == 'CBfield_date')
                        $fieldOut = str_replace('type="text"', 'type="hidden"', $fieldOut);

                    $required = ($cbField->required ? '<span class="star">&nbsp;*</span>' : '');

                    $html .= $field->getFieldTitle($cbFields[$cbField->fieldid], $cbUser, 'htmledit', 'register') . $required . "<br/>";
                    $html .= $fieldOut . "<br/>";
                }
            }
        }

        if (!$this->settings->get('skip_tos')) {
            $reg_tos_enabled = $this->getCBConfig('reg_enable_toc', 0);
            if ($reg_tos_enabled) {
                global $_CB_OneTwoRowsStyleToggle, $ueConfig;
                $html .= "<br/><input type='checkbox' name='acceptedterms' id='acceptedterms' class='required' value='1' mosReq='0' mosLabel='"
                    . htmlspecialchars(_UE_TOC)
                    . "' /> <label for='acceptedterms'>"
                    . sprintf(_UE_TOC_LINK, "<a href='" . cbSef(htmlspecialchars($ueConfig['reg_toc_url'])) . "' target='_BLANK'> ", "</a>") . '</label><br/><br/>';
            }
        }

        if ($html != "") {
            $doc = JFactory::getDocument();
            $doc->addScript(JURI::root() . 'components/com_comprofiler/js/overlib_all_mini.js');
        }

        return $html;
    }

    function socialProfilesAddFormValidation()
    {
        $doc = JFactory::getDocument();
        $scriptFile = JURI::root() . 'plugins/socialprofiles/communitybuilder/communitybuilder/cbvalidate_j15_moo12plus_j16plus.js';
        $doc->addCustomTag('<script type="text/javascript" src="' . $scriptFile . '" defer="defer"></script>');

        return true;
    }

    function socialProfilesSendsNewUserEmails()
    {
        return true;
    }

    /*     * * End Trigger Overrides ** */

    private function loadCB()
    {
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/plugin.foundation.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/plugin.class.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/comprofiler.class.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/library/cb/cb.database.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/library/cb/cb.tables.php');
        cbimport('language.all');
    }

    protected function createUser($profileData)
    {
        $this->loadCB();

        $socialName = $this->profileLibrary->fetchProfile($this->socialId, array('first_name', 'last_name'));

        $jUser = JUser::getInstance($this->joomlaId);
        // Setup the POST array of what we want CB to think is passed in
        $postArray = array(
            'id' => $jUser->id,
            'name' => $jUser->name,
            'firstname' => $socialName->get('first_name'),
            'lastname' => $socialName->get('last_name'),
            'username' => $jUser->username,
            'email' => $jUser->email,
            'email__verify' => $jUser->email,
            'password' => JRequest::getVar('password'),
            'password__verify' => JRequest::getVar('password')
        );

        // Push the default user into the database
        $userObj = new stdClass;
        $userObj->id = $this->joomlaId;
        $userObj->user_id = $this->joomlaId;
        $userObj->firstname = $socialName->get('first_name');
        $userObj->lastname = $socialName->get('last_name');

        $this->db->insertObject("#__comprofiler", $userObj, 'id');

        global $_CB_database, $_PLUGINS;
        $cbUser = new moscomprofilerUser($_CB_database);
        $cbUser->load($jUser->id);

        $ui = "1";
        # Code altered from Community Builder comprofiler.class.php
        $cbTabs = new cbTabs(0, 2);
        $fields = $cbTabs->_getTabFieldsDb(null, $cbUser, 'profile', null, true);
        global $ueConfig;
        if (is_array($fields)) {
            foreach ($fields as $oField) {
                $formValue = $profileData->getFieldWithUserState($oField->name);
                if ($formValue != null) // Add to the post array so it's saved automatically by CB later
                {
                    if ($oField->type == 'date') {
                        // spaces are only in the dates retuned by providers.
                        // If no space, it's a field entered during registration
                        //if (strpos($formValue, " ") != 0)
                        //{
                        $date = new JDate($formValue);
                        //$formValue = $date->format(str_replace('y', 'Y', $ueConfig['date_format']));
                        $formValue = $date->format("Y/m/d");
                        //}
                    }
                    $postArray[$oField->name] = $formValue;
                }
                $_PLUGINS->callField($oField->type, 'initFieldToDefault', array(&$oField, &$cbUser, 'register'), $oField);
            }
        }

        $registeripaddr = JRequest::getVar("ipaddress", $_SERVER["REMOTE_ADDR"], "post", "string", "");
        $cbUser->registeripaddr = $registeripaddr;

        $reason = "edit";
        $cbUser->email = $jUser->email;
        // initial save, uses default values (set above) and sets up user
        $cbUser->saveSafely($postArray, $ui, $reason);
        // Wish I could use CB's changeUsersStatus call, but it has a redirect at the end :(
        $skipCbActivation = $this->settings->get('skip_activation');
        if ($skipCbActivation) {
            $confirmation = 0;
            $cbactivation = '';
            $adminApproval = 0;
        } else {
            $confirmation = $this->getCBConfig('reg_confirmation', 0);
            $adminApproval = $this->getCBConfig('reg_admin_approval', 0);

            //Create an activation code
            require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/comprofiler.class.php');
            global $_CB_framework;
            $randomHash = md5(cbMakeRandomString());
            $scrambleSeed = (int)hexdec(substr(md5($_CB_framework->getCfg('secret') . $_CB_framework->getCfg('db')), 0, 7));
            $scrambleId = $scrambleSeed ^ ((int)$jUser->id);
            $cbactivation = 'reg' . $randomHash . sprintf('%08x', $scrambleId);
        }
        $this->db->setQuery(
            "UPDATE #__comprofiler " .
            "SET approved = " . ($adminApproval ? 0 : 1) . ", " .
            "	confirmed = " . ($confirmation ? 0 : 1) . ", " .
            "	cbactivation = '" . $cbactivation . "' " .
            "WHERE user_id = " . $jUser->id
        );
        $this->db->execute();
        // Reload user again.  Could just set the values written above directly, but it's nice to know the db txn succeeeded.
        $cbUser->load($jUser->id);

        // Trigger OnBeforeActivate/onUserActive plugins.
        // Send Welcome email and notify admins of new user.
        activateUser($cbUser, 0, "UserRegistration", true, true, true);
    }

    protected function saveProfileField($fieldId, $value)
    {
        //query the com_profiler_fields to get the column names
        $query = 'SELECT name, type FROM #__comprofiler_fields WHERE `name`="' . $fieldId . '"';
        $this->db->setQuery($query);
        $field = $this->db->loadObject();

        $colName = $field->name;
        $colType = $field->type;
        if ($colType == "date") {
            global $ueConfig;
            $date = new JDate($value);
            $value = $date->toSql();
        } else if ($colType == "webaddress") {
            $value = str_replace("http://", '', $value);
        }
        //Update jos_comprofiler for value for each column by id=$userId
        $this->db->setQuery('UPDATE #__comprofiler SET ' . $colName . ' = ' . $this->db->quote($value) . ' WHERE user_id = ' . $this->joomlaId . ';');
        $this->db->execute();
    }

    protected function setDefaultAvatar()
    {
        $query = "UPDATE #__comprofiler SET `avatar`=NULL WHERE id = " . $this->joomlaId;
        $this->db->setQuery($query);
        $this->db->execute();
        return true;
    }

    protected function setAvatar($socialAvatar)
    {
        global $ueConfig;

        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/plugin.foundation.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/plugin.class.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/comprofiler.class.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/library/cb/cb.database.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/library/cb/cb.tables.php');
        include_once(JPATH_SITE . '/components/com_comprofiler/plugin/language/default_language/default_language.php');
        require_once(JPATH_ADMINISTRATOR . '/components/com_comprofiler/imgToolbox.class.php');

        $errorDetected = false;
        // Get a hash for the file name.
        $avatarFileName = substr($socialAvatar, 0, strpos($socialAvatar, '.'));
        //@todo: configurable path for avatar storage?
        $avatarExtension = substr($socialAvatar, strpos($socialAvatar, '.'));

        $storage = JPATH_ROOT . '/images/comprofiler/';

        $imgToolBox = new imgToolBox();
        $imgToolBox->_conversiontype = $ueConfig['conversiontype'];
        $imgToolBox->_IM_path = $ueConfig['im_path'];
        $imgToolBox->_NETPBM_path = $ueConfig['netpbm_path'];
        $imgToolBox->_maxsize = $ueConfig['avatarSize'];
        $imgToolBox->_maxwidth = $ueConfig['avatarWidth'];
        $imgToolBox->_maxheight = $ueConfig['avatarHeight'];
        $imgToolBox->_thumbwidth = $ueConfig['thumbWidth'];
        $imgToolBox->_thumbheight = $ueConfig['thumbHeight'];
        $imgToolBox->_debug = 0;
        $alwaysResize = (isset($ueConfig['avatarResizeAlways']) ? $ueConfig['avatarResizeAlways'] : 1);

        $imageArray = array();
        $imageArray['name'] = $socialAvatar;
        $imageArray['tmp_name'] = $this->getAvatarPath() . '/' . $socialAvatar;
        $imageArray['type'] = $avatarExtension;

        $newFileName = $imgToolBox->processImage($imageArray, $avatarFileName, $storage, 0, 0, 3, $alwaysResize);

        $query = "UPDATE #__comprofiler SET `avatar`=" . $this->db->quote($newFileName) . ", `avatarapproved`=1 WHERE id=" . $this->joomlaId;
        $this->db->setQuery($query);
        $this->db->execute();

        return true;
    }

    protected function setCoverPhoto($cover)
    {
        global $_CB_framework;

        $conversionType					=	(int) ( isset( $ueConfig['conversiontype'] ) ? $ueConfig['conversiontype'] : 0 );
        $imageSoftware					=	( $conversionType == 5 ? 'gmagick' : ( $conversionType == 1 ? 'imagick' : 'gd' ) );
        $imagePath						=	$_CB_framework->getCfg( 'absolute_path' ) . '/images/comprofiler/';
        $fileName						=	'canvas_' . uniqid( $this->joomlaId . '_' );

        try {
            //$image						=	new \CBLib\Image\Image( $imageSoftware, $this->_getImageFieldParam( $field, 'avatarResizeAlways', 1 ), $this->_getImageFieldParam( $field, 'avatarMaintainRatio', 1 ) );
            $image						=	new \CBLib\Image\Image( $imageSoftware, 1, 1 );

            $image->setName( $fileName );
            $image->setSource( $cover->get('path') );
            $image->setDestination( $imagePath );

            //$image->processImage( $this->_getImageFieldParam( $field, 'avatarWidth', 200 ), $this->_getImageFieldParam( $field, 'avatarHeight', 500 ) );
            $image->processImage( 1280, 640 );

            $newFileName				=	$image->getCleanFilename();

            $image->setName( 'tn' . $fileName );

            $image->processImage( 320, 640 );

            $query = 'UPDATE #__comprofiler SET `canvas` = ' . $this->db->quote($fileName . '.jpg') . ', `canvasapproved` = 1 WHERE id = ' . $this->joomlaId;
            $this->db->setQuery($query);
            $this->db->execute();
        } catch ( Exception $e ) {
        }
    }

    // Query must return id, name
    protected function getProfileFields()
    {
        $query = 'SELECT *, `name` `id` FROM #__comprofiler_fields WHERE ( type = "predefined" AND name != "username" AND `table` = "#__comprofiler" ) OR type = "text" OR type = "textarea" OR type = "editorta" OR type="date" OR type="webaddress"';
        $this->db->setQuery($query);
        $cbFields = $this->db->loadObjectList();
        return $cbFields;
    }

    private function getCBConfig($name, $default = '')
    {
        if ($this->_isCBv1)
            require_once(JPATH_ADMINISTRATOR . "/components/com_comprofiler/ue_config.php");
        else {
            require_once(JPATH_ROOT . "/libraries/CBLib/CB/Application/CBConfig.php");
            CB\Application\CBConfig::loadLegacyCBueConfig(true);
        }

        global $ueConfig;
        if ($ueConfig && array_key_exists($name, $ueConfig)) {
            return $ueConfig[$name];
        } else {
            return $default;
        }
    }

}
<?php
/**
 * @package      Projectfork Notifications
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


class plgContentPfnotificationsInstallerScript
{
    /**
     * Called before any type of action
     *
     * @param     string              $route      Which action is happening (install|uninstall|discover_install)
     * @param     jadapterinstance    $adapter    The object responsible for running this script
     *
     * @return    boolean                         True on success
     */
    public function preflight($route, JAdapterInstance $adapter)
    {
        if (strtolower($route) == 'install' || strtolower($route) == 'update') {
            if (!defined('PF_LIBRARY')) {
                jimport('projectfork.library');
            }

            $name = htmlspecialchars($adapter->get('manifest')->name, ENT_QUOTES, 'UTF-8');

            // Check if the library is installed
            if (!defined('PF_LIBRARY')) {
                JError::raiseWarning(1, JText::_('This extension (' . $name . ') requires the Projectfork Library to be installed!'));
                return false;
            }

            // Check if the projectfork component is installed
            if (!PFApplicationHelper::exists('com_projectfork')) {
                JError::raiseWarning(1, JText::_('This extension (' . $name . ') requires the Projectfork Component to be installed!'));
                return false;
            }
        }

        return true;
    }


    /**
     * Called after any type of action
     *
     * @param     string              $route      Which action is happening (install|uninstall|discover_install)
     * @param     jadapterinstance    $adapter    The object responsible for running this script
     *
     * @return    boolean                         True on success
     */
    public function postflight($route, JAdapterInstance $adapter)
    {
        $action = strtolower($route);

        if ($action == 'install') {
            // Get the XML manifest data
            $manifest = $adapter->get('manifest');

            // Get plugin published state
            $name  = $manifest->name;
            $state = (isset($manifest->published) ? (int) $manifest->published : 0);

            if ($state) {
                PFInstallerHelper::publishPlugin($name, $state);
            }


        }

        // Move CLI scripts to cli folder
        if ($action == 'install' || $action == 'update') {
            $cli_j2_source = JPATH_SITE . '/plugins/content/pfnotifications/pfnotifications_j2.php';
            $cli_j2_dest   = JPATH_SITE . '/cli/pfnotifications_j2.php';
            $cli_j3_source = JPATH_SITE . '/plugins/content/pfnotifications/pfnotifications_j3.php';
            $cli_j3_dest   = JPATH_SITE . '/cli/pfnotifications_j3.php';


            if (file_exists($cli_j2_source)) {
                if (file_exists($cli_j2_dest)) {
                    if (JFile::delete($cli_j2_dest)) {
                        JFile::copy($cli_j2_source, $cli_j2_dest);
                    }
                }
                else {
                    JFile::copy($cli_j2_source, $cli_j2_dest);
                }
            }

            if (file_exists($cli_j3_source)) {
                if (file_exists($cli_j3_dest)) {
                    if (JFile::delete($cli_j3_dest)) {
                        JFile::copy($cli_j3_source, $cli_j3_dest);
                    }
                }
                else {
                    JFile::copy($cli_j3_source, $cli_j3_dest);
                }
            }
        }

        // Remove CLI scripts
        if ($action == 'uninstall') {
            $cli_j2_dest = JPATH_SITE . '/cli/pfnotifications_j2.php';
            $cli_j3_dest = JPATH_SITE . '/cli/pfnotifications_j3.php';

            if (file_exists($cli_j2_dest)) {
                JFile::delete($cli_j2_dest);
            }

            if (file_exists($cli_j3_dest)) {
                JFile::delete($cli_j3_dest);
            }
        }

        return true;
    }
}

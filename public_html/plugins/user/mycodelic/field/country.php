<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  User.profile
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_PLATFORM') or die;

JFormHelper::loadFieldClass('list');

/**
 * Provides input for "Date of Birth" field
 *
 * @package     Joomla.Plugin
 * @subpackage  User.profile
 * @since       3.3.7
 */
class JFormFieldCountry extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  3.3.7
	 */
	protected $type = 'Country';

	/**
	 * Method to get the field label markup.
	 *
	 * @return  string  The field label markup.
	 *
	 * @since   3.3.7
	 */
	protected function getLabel()
	{
		$label = parent::getLabel();

		// Get the info text from the XML element, defaulting to empty.
		$text  = $this->element['info'] ? (string) $this->element['info'] : '';
		$text  = $this->translateLabel ? JText::_($text) : $text;

		if ($text)
		{
			$app    = JFactory::getApplication();
			$layout = new JLayoutFile('plugins.user.profile.fields.dob');
			$view   = $app->input->getString('view', '');

			// Only display the tip when editing profile
			if ($view === 'registration' || $view === 'profile' || $app->isClient('administrator'))
			{
				$layout = new JLayoutFile('plugins.user.profile.fields.dob');
				$info   = $layout->render(array('text' => $text));
				$label  = $info . $label;
			}
		}

		return $label;
	}
    public function getOptions() {
		
		$countriesList = array (
          ["value"=>"1228", "text"=>'United States'],
          ["value"=>"1001", "text"=>'Afghanistan'],
          ["value"=>"1241", "text"=>'Åland Islands'],
          ["value"=>"1002", "text"=>'Albania'],
          ["value"=>"1003", "text"=>'Algeria'],
          ["value"=>"1004", "text"=>'American Samoa'],
          ["value"=>"1005", "text"=>'Andorra'],
          ["value"=>"1006", "text"=>'Angola'],
          ["value"=>"1007", "text"=>'Anguilla'],
          ["value"=>"1008", "text"=>'Antarctica'],
          ["value"=>"1009", "text"=>'Antigua and Barbuda'],
          ["value"=>"1010", "text"=>'Argentina'],
          ["value"=>"1011", "text"=>'Armenia'],
          ["value"=>"1012", "text"=>'Aruba'],
          ["value"=>"1013", "text"=>'Australia'],
          ["value"=>"1014", "text"=>'Austria'],
          ["value"=>"1015", "text"=>'Azerbaijan'],
          ["value"=>"1212", "text"=>'Bahamas'],
          ["value"=>"1016", "text"=>'Bahrain'],
          ["value"=>"1017", "text"=>'Bangladesh'],
          ["value"=>"1018", "text"=>'Barbados'],
          ["value"=>"1019", "text"=>'Belarus'],
          ["value"=>"1020", "text"=>'Belgium'],
          ["value"=>"1021", "text"=>'Belize'],
          ["value"=>"1022", "text"=>'Benin'],
          ["value"=>"1023", "text"=>'Bermuda'],
          ["value"=>"1024", "text"=>'Bhutan'],
          ["value"=>"1025", "text"=>'Bolivia'],
          ["value"=>"1250", "text"=>'Bonaire, Saint Eustatius and Saba'],
          ["value"=>"1026", "text"=>'Bosnia and Herzegovina'],
          ["value"=>"1027", "text"=>'Botswana'],
          ["value"=>"1028", "text"=>'Bouvet Island'],
          ["value"=>"1029", "text"=>'Brazil'],
          ["value"=>"1030", "text"=>'British Indian Ocean Territory'],
          ["value"=>"1032", "text"=>'Brunei Darussalam'],
          ["value"=>"1033", "text"=>'Bulgaria'],
          ["value"=>"1034", "text"=>'Burkina Faso'],
          ["value"=>"1036", "text"=>'Burundi'],
          ["value"=>"1037", "text"=>'Cambodia'],
          ["value"=>"1038", "text"=>'Cameroon'],
          ["value"=>"1039", "text"=>'Canada'],
          ["value"=>"1040", "text"=>'Cape Verde'],
          ["value"=>"1041", "text"=>'Cayman Islands'],
          ["value"=>"1042", "text"=>'Central African Republic'],
          ["value"=>"1043", "text"=>'Chad'],
          ["value"=>"1044", "text"=>'Chile'],
          ["value"=>"1045", "text"=>'China'],
          ["value"=>"1046", "text"=>'Christmas Island'],
          ["value"=>"1047", "text"=>'Cocos (Keeling) Islands'],
          ["value"=>"1048", "text"=>'Colombia'],
          ["value"=>"1049", "text"=>'Comoros'],
          ["value"=>"1051", "text"=>'Congo, Republic of the'],
          ["value"=>"1050", "text"=>'Congo, The Democratic Republic of the'],
          ["value"=>"1052", "text"=>'Cook Islands'],
          ["value"=>"1053", "text"=>'Costa Rica'],
          ["value"=>"1054", "text"=>'Côte d’Ivoire'],
          ["value"=>"1055", "text"=>'Croatia'],
          ["value"=>"1056", "text"=>'Cuba'],
          ["value"=>"1248", "text"=>'Curaçao'],
          ["value"=>"1057", "text"=>'Cyprus'],
          ["value"=>"1058", "text"=>'Czech Republic'],
          ["value"=>"1059", "text"=>'Denmark'],
          ["value"=>"1060", "text"=>'Djibouti'],
          ["value"=>"1061", "text"=>'Dominica'],
          ["value"=>"1062", "text"=>'Dominican Republic'],
          ["value"=>"1064", "text"=>'Ecuador'],
          ["value"=>"1065", "text"=>'Egypt'],
          ["value"=>"1066", "text"=>'El Salvador'],
          ["value"=>"1067", "text"=>'Equatorial Guinea'],
          ["value"=>"1068", "text"=>'Eritrea'],
          ["value"=>"1069", "text"=>'Estonia'],
          ["value"=>"1203", "text"=>'Eswatini'],
          ["value"=>"1070", "text"=>'Ethiopia'],
          ["value"=>"1072", "text"=>'Falkland Islands (Malvinas)'],
          ["value"=>"1073", "text"=>'Faroe Islands'],
          ["value"=>"1074", "text"=>'Fiji'],
          ["value"=>"1075", "text"=>'Finland'],
          ["value"=>"1076", "text"=>'France'],
          ["value"=>"1077", "text"=>'French Guiana'],
          ["value"=>"1078", "text"=>'French Polynesia'],
          ["value"=>"1079", "text"=>'French Southern Territories'],
          ["value"=>"1080", "text"=>'Gabon'],
          ["value"=>"1213", "text"=>'Gambia'],
          ["value"=>"1081", "text"=>'Georgia'],
          ["value"=>"1082", "text"=>'Germany'],
          ["value"=>"1083", "text"=>'Ghana'],
          ["value"=>"1084", "text"=>'Gibraltar'],
          ["value"=>"1085", "text"=>'Greece'],
          ["value"=>"1086", "text"=>'Greenland'],
          ["value"=>"1087", "text"=>'Grenada'],
          ["value"=>"1088", "text"=>'Guadeloupe'],
          ["value"=>"1089", "text"=>'Guam'],
          ["value"=>"1090", "text"=>'Guatemala'],
          ["value"=>"1245", "text"=>'Guernsey'],
          ["value"=>"1091", "text"=>'Guinea'],
          ["value"=>"1092", "text"=>'Guinea-Bissau'],
          ["value"=>"1093", "text"=>'Guyana'],
          ["value"=>"1094", "text"=>'Haiti'],
          ["value"=>"1095", "text"=>'Heard Island and McDonald Islands'],
          ["value"=>"1096", "text"=>'Holy See (Vatican City State)'],
          ["value"=>"1097", "text"=>'Honduras'],
          ["value"=>"1098", "text"=>'Hong Kong'],
          ["value"=>"1099", "text"=>'Hungary'],
          ["value"=>"1100", "text"=>'Iceland'],
          ["value"=>"1101", "text"=>'India'],
          ["value"=>"1102", "text"=>'Indonesia'],
          ["value"=>"1103", "text"=>'Iran, Islamic Republic of'],
          ["value"=>"1104", "text"=>'Iraq'],
          ["value"=>"1105", "text"=>'Ireland'],
          ["value"=>"1246", "text"=>'Isle of Man'],
          ["value"=>"1106", "text"=>'Israel'],
          ["value"=>"1107", "text"=>'Italy'],
          ["value"=>"1108", "text"=>'Jamaica'],
          ["value"=>"1109", "text"=>'Japan'],
          ["value"=>"1244", "text"=>'Jersey'],
          ["value"=>"1110", "text"=>'Jordan'],
          ["value"=>"1111", "text"=>'Kazakhstan'],
          ["value"=>"1112", "text"=>'Kenya'],
          ["value"=>"1113", "text"=>'Kiribati'],
          ["value"=>"1114", "text"=>'Korea, Democratic People\'s Republic of'],
          ["value"=>"1115", "text"=>'Korea, Republic of'],
          ["value"=>"1251", "text"=>'Kosovo'],
          ["value"=>"1116", "text"=>'Kuwait'],
          ["value"=>"1117", "text"=>'Kyrgyzstan'],
          ["value"=>"1118", "text"=>'Lao People\'s Democratic Republic'],
          ["value"=>"1119", "text"=>'Latvia'],
          ["value"=>"1120", "text"=>'Lebanon'],
          ["value"=>"1121", "text"=>'Lesotho'],
          ["value"=>"1122", "text"=>'Liberia'],
          ["value"=>"1123", "text"=>'Libya'],
          ["value"=>"1124", "text"=>'Liechtenstein'],
          ["value"=>"1125", "text"=>'Lithuania'],
          ["value"=>"1126", "text"=>'Luxembourg'],
          ["value"=>"1127", "text"=>'Macao'],
          ["value"=>"1128", "text"=>'Macedonia, Republic of'],
          ["value"=>"1129", "text"=>'Madagascar'],
          ["value"=>"1130", "text"=>'Malawi'],
          ["value"=>"1131", "text"=>'Malaysia'],
          ["value"=>"1132", "text"=>'Maldives'],
          ["value"=>"1133", "text"=>'Mali'],
          ["value"=>"1134", "text"=>'Malta'],
          ["value"=>"1135", "text"=>'Marshall Islands'],
          ["value"=>"1136", "text"=>'Martinique'],
          ["value"=>"1137", "text"=>'Mauritania'],
          ["value"=>"1138", "text"=>'Mauritius'],
          ["value"=>"1139", "text"=>'Mayotte'],
          ["value"=>"1140", "text"=>'Mexico'],
          ["value"=>"1141", "text"=>'Micronesia, Federated States of'],
          ["value"=>"1142", "text"=>'Moldova'],
          ["value"=>"1143", "text"=>'Monaco'],
          ["value"=>"1144", "text"=>'Mongolia'],
          ["value"=>"1243", "text"=>'Montenegro'],
          ["value"=>"1145", "text"=>'Montserrat'],
          ["value"=>"1146", "text"=>'Morocco'],
          ["value"=>"1147", "text"=>'Mozambique'],
          ["value"=>"1035", "text"=>'Myanmar'],
          ["value"=>"1148", "text"=>'Namibia'],
          ["value"=>"1149", "text"=>'Nauru'],
          ["value"=>"1150", "text"=>'Nepal'],
          ["value"=>"1152", "text"=>'Netherlands'],
          ["value"=>"1153", "text"=>'New Caledonia'],
          ["value"=>"1154", "text"=>'New Zealand'],
          ["value"=>"1155", "text"=>'Nicaragua'],
          ["value"=>"1156", "text"=>'Niger'],
          ["value"=>"1157", "text"=>'Nigeria'],
          ["value"=>"1158", "text"=>'Niue'],
          ["value"=>"1159", "text"=>'Norfolk Island'],
          ["value"=>"1160", "text"=>'Northern Mariana Islands'],
          ["value"=>"1161", "text"=>'Norway'],
          ["value"=>"1162", "text"=>'Oman'],
          ["value"=>"1163", "text"=>'Pakistan'],
          ["value"=>"1164", "text"=>'Palau'],
          ["value"=>"1165", "text"=>'Palestine, State of'],
          ["value"=>"1166", "text"=>'Panama'],
          ["value"=>"1167", "text"=>'Papua New Guinea'],
          ["value"=>"1168", "text"=>'Paraguay'],
          ["value"=>"1169", "text"=>'Peru'],
          ["value"=>"1170", "text"=>'Philippines'],
          ["value"=>"1171", "text"=>'Pitcairn'],
          ["value"=>"1172", "text"=>'Poland'],
          ["value"=>"1173", "text"=>'Portugal'],
          ["value"=>"1174", "text"=>'Puerto Rico'],
          ["value"=>"1175", "text"=>'Qatar'],
          ["value"=>"1179", "text"=>'Reunion'],
          ["value"=>"1176", "text"=>'Romania'],
          ["value"=>"1177", "text"=>'Russian Federation'],
          ["value"=>"1178", "text"=>'Rwanda'],
          ["value"=>"1252", "text"=>'Saint Barthélemy'],
          ["value"=>"1180", "text"=>'Saint Helena'],
          ["value"=>"1181", "text"=>'Saint Kitts and Nevis'],
          ["value"=>"1182", "text"=>'Saint Lucia'],
          ["value"=>"1253", "text"=>'Saint Martin (French part)'],
          ["value"=>"1183", "text"=>'Saint Pierre and Miquelon'],
          ["value"=>"1184", "text"=>'Saint Vincent and the Grenadines'],
          ["value"=>"1185", "text"=>'Samoa'],
          ["value"=>"1186", "text"=>'San Marino'],
          ["value"=>"1207", "text"=>'Sao Tome and Principe'],
          ["value"=>"1187", "text"=>'Saudi Arabia'],
          ["value"=>"1188", "text"=>'Senegal'],
          ["value"=>"1242", "text"=>'Serbia'],
          ["value"=>"1238", "text"=>'Serbia and Montenegro'],
          ["value"=>"1189", "text"=>'Seychelles'],
          ["value"=>"1190", "text"=>'Sierra Leone'],
          ["value"=>"1191", "text"=>'Singapore'],
          ["value"=>"1249", "text"=>'Sint Maarten (Dutch Part)'],
          ["value"=>"1192", "text"=>'Slovakia'],
          ["value"=>"1193", "text"=>'Slovenia'],
          ["value"=>"1194", "text"=>'Solomon Islands'],
          ["value"=>"1195", "text"=>'Somalia'],
          ["value"=>"1196", "text"=>'South Africa'],
          ["value"=>"1197", "text"=>'South Georgia and the South Sandwich Islands'],
          ["value"=>"1247", "text"=>'South Sudan'],
          ["value"=>"1198", "text"=>'Spain'],
          ["value"=>"1199", "text"=>'Sri Lanka'],
          ["value"=>"1200", "text"=>'Sudan'],
          ["value"=>"1201", "text"=>'Suriname'],
          ["value"=>"1202", "text"=>'Svalbard and Jan Mayen'],
          ["value"=>"1204", "text"=>'Sweden'],
          ["value"=>"1205", "text"=>'Switzerland'],
          ["value"=>"1206", "text"=>'Syrian Arab Republic'],
          ["value"=>"1208", "text"=>'Taiwan'],
          ["value"=>"1209", "text"=>'Tajikistan'],
          ["value"=>"1210", "text"=>'Tanzania, United Republic of'],
          ["value"=>"1211", "text"=>'Thailand'],
          ["value"=>"1063", "text"=>'Timor-Leste'],
          ["value"=>"1214", "text"=>'Togo'],
          ["value"=>"1215", "text"=>'Tokelau'],
          ["value"=>"1216", "text"=>'Tonga'],
          ["value"=>"1217", "text"=>'Trinidad and Tobago'],
          ["value"=>"1218", "text"=>'Tunisia'],
          ["value"=>"1219", "text"=>'Turkey'],
          ["value"=>"1220", "text"=>'Turkmenistan'],
          ["value"=>"1221", "text"=>'Turks and Caicos Islands'],
          ["value"=>"1222", "text"=>'Tuvalu'],
          ["value"=>"1223", "text"=>'Uganda'],
          ["value"=>"1224", "text"=>'Ukraine'],
          ["value"=>"1225", "text"=>'United Arab Emirates'],
          ["value"=>"1226", "text"=>'United Kingdom'],
          ["value"=>"1227", "text"=>'United States Minor Outlying Islands'],
          ["value"=>"1229", "text"=>'Uruguay'],
          ["value"=>"1230", "text"=>'Uzbekistan'],
          ["value"=>"1231", "text"=>'Vanuatu'],
          ["value"=>"1232", "text"=>'Venezuela'],
          ["value"=>"1233", "text"=>'Viet Nam'],
          ["value"=>"1031", "text"=>'Virgin Islands, British'],
          ["value"=>"1234", "text"=>'Virgin Islands, U.S.'],
          ["value"=>"1235", "text"=>'Wallis and Futuna'],
          ["value"=>"1236", "text"=>'Western Sahara'],
          ["value"=>"1237", "text"=>'Yemen'],
          ["value"=>"1239", "text"=>'Zambia'],
          ["value"=>"1240", "text"=>'Zimbabwe'],
        );
		
        array_unshift( $countriesList, JHtml::_( 'select.option', '0', "--Select A Country-- " ) );
        
		return array_merge(parent::getOptions(), $countriesList);
	}
}

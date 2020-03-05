<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

/*
require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');
$api = new civicrm_api3(array(
  // Specify location of "civicrm.settings.php".
  'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
));  
*/

$countriesList = array (
  '' => '- select -',
  1228 => 'United States',
  1001 => 'Afghanistan',
  1241 => 'Åland Islands',
  1002 => 'Albania',
  1003 => 'Algeria',
  1004 => 'American Samoa',
  1005 => 'Andorra',
  1006 => 'Angola',
  1007 => 'Anguilla',
  1008 => 'Antarctica',
  1009 => 'Antigua and Barbuda',
  1010 => 'Argentina',
  1011 => 'Armenia',
  1012 => 'Aruba',
  1013 => 'Australia',
  1014 => 'Austria',
  1015 => 'Azerbaijan',
  1212 => 'Bahamas',
  1016 => 'Bahrain',
  1017 => 'Bangladesh',
  1018 => 'Barbados',
  1019 => 'Belarus',
  1020 => 'Belgium',
  1021 => 'Belize',
  1022 => 'Benin',
  1023 => 'Bermuda',
  1024 => 'Bhutan',
  1025 => 'Bolivia',
  1250 => 'Bonaire, Saint Eustatius and Saba',
  1026 => 'Bosnia and Herzegovina',
  1027 => 'Botswana',
  1028 => 'Bouvet Island',
  1029 => 'Brazil',
  1030 => 'British Indian Ocean Territory',
  1032 => 'Brunei Darussalam',
  1033 => 'Bulgaria',
  1034 => 'Burkina Faso',
  1036 => 'Burundi',
  1037 => 'Cambodia',
  1038 => 'Cameroon',
  1039 => 'Canada',
  1040 => 'Cape Verde',
  1041 => 'Cayman Islands',
  1042 => 'Central African Republic',
  1043 => 'Chad',
  1044 => 'Chile',
  1045 => 'China',
  1046 => 'Christmas Island',
  1047 => 'Cocos (Keeling) Islands',
  1048 => 'Colombia',
  1049 => 'Comoros',
  1051 => 'Congo, Republic of the',
  1050 => 'Congo, The Democratic Republic of the',
  1052 => 'Cook Islands',
  1053 => 'Costa Rica',
  1054 => 'Côte d’Ivoire',
  1055 => 'Croatia',
  1056 => 'Cuba',
  1248 => 'Curaçao',
  1057 => 'Cyprus',
  1058 => 'Czech Republic',
  1059 => 'Denmark',
  1060 => 'Djibouti',
  1061 => 'Dominica',
  1062 => 'Dominican Republic',
  1064 => 'Ecuador',
  1065 => 'Egypt',
  1066 => 'El Salvador',
  1067 => 'Equatorial Guinea',
  1068 => 'Eritrea',
  1069 => 'Estonia',
  1203 => 'Eswatini',
  1070 => 'Ethiopia',
  1072 => 'Falkland Islands (Malvinas)',
  1073 => 'Faroe Islands',
  1074 => 'Fiji',
  1075 => 'Finland',
  1076 => 'France',
  1077 => 'French Guiana',
  1078 => 'French Polynesia',
  1079 => 'French Southern Territories',
  1080 => 'Gabon',
  1213 => 'Gambia',
  1081 => 'Georgia',
  1082 => 'Germany',
  1083 => 'Ghana',
  1084 => 'Gibraltar',
  1085 => 'Greece',
  1086 => 'Greenland',
  1087 => 'Grenada',
  1088 => 'Guadeloupe',
  1089 => 'Guam',
  1090 => 'Guatemala',
  1245 => 'Guernsey',
  1091 => 'Guinea',
  1092 => 'Guinea-Bissau',
  1093 => 'Guyana',
  1094 => 'Haiti',
  1095 => 'Heard Island and McDonald Islands',
  1096 => 'Holy See (Vatican City State)',
  1097 => 'Honduras',
  1098 => 'Hong Kong',
  1099 => 'Hungary',
  1100 => 'Iceland',
  1101 => 'India',
  1102 => 'Indonesia',
  1103 => 'Iran, Islamic Republic of',
  1104 => 'Iraq',
  1105 => 'Ireland',
  1246 => 'Isle of Man',
  1106 => 'Israel',
  1107 => 'Italy',
  1108 => 'Jamaica',
  1109 => 'Japan',
  1244 => 'Jersey',
  1110 => 'Jordan',
  1111 => 'Kazakhstan',
  1112 => 'Kenya',
  1113 => 'Kiribati',
  1114 => 'Korea, Democratic People\'s Republic of',
  1115 => 'Korea, Republic of',
  1251 => 'Kosovo',
  1116 => 'Kuwait',
  1117 => 'Kyrgyzstan',
  1118 => 'Lao People\'s Democratic Republic',
  1119 => 'Latvia',
  1120 => 'Lebanon',
  1121 => 'Lesotho',
  1122 => 'Liberia',
  1123 => 'Libya',
  1124 => 'Liechtenstein',
  1125 => 'Lithuania',
  1126 => 'Luxembourg',
  1127 => 'Macao',
  1128 => 'Macedonia, Republic of',
  1129 => 'Madagascar',
  1130 => 'Malawi',
  1131 => 'Malaysia',
  1132 => 'Maldives',
  1133 => 'Mali',
  1134 => 'Malta',
  1135 => 'Marshall Islands',
  1136 => 'Martinique',
  1137 => 'Mauritania',
  1138 => 'Mauritius',
  1139 => 'Mayotte',
  1140 => 'Mexico',
  1141 => 'Micronesia, Federated States of',
  1142 => 'Moldova',
  1143 => 'Monaco',
  1144 => 'Mongolia',
  1243 => 'Montenegro',
  1145 => 'Montserrat',
  1146 => 'Morocco',
  1147 => 'Mozambique',
  1035 => 'Myanmar',
  1148 => 'Namibia',
  1149 => 'Nauru',
  1150 => 'Nepal',
  1152 => 'Netherlands',
  1153 => 'New Caledonia',
  1154 => 'New Zealand',
  1155 => 'Nicaragua',
  1156 => 'Niger',
  1157 => 'Nigeria',
  1158 => 'Niue',
  1159 => 'Norfolk Island',
  1160 => 'Northern Mariana Islands',
  1161 => 'Norway',
  1162 => 'Oman',
  1163 => 'Pakistan',
  1164 => 'Palau',
  1165 => 'Palestine, State of',
  1166 => 'Panama',
  1167 => 'Papua New Guinea',
  1168 => 'Paraguay',
  1169 => 'Peru',
  1170 => 'Philippines',
  1171 => 'Pitcairn',
  1172 => 'Poland',
  1173 => 'Portugal',
  1174 => 'Puerto Rico',
  1175 => 'Qatar',
  1179 => 'Reunion',
  1176 => 'Romania',
  1177 => 'Russian Federation',
  1178 => 'Rwanda',
  1252 => 'Saint Barthélemy',
  1180 => 'Saint Helena',
  1181 => 'Saint Kitts and Nevis',
  1182 => 'Saint Lucia',
  1253 => 'Saint Martin (French part)',
  1183 => 'Saint Pierre and Miquelon',
  1184 => 'Saint Vincent and the Grenadines',
  1185 => 'Samoa',
  1186 => 'San Marino',
  1207 => 'Sao Tome and Principe',
  1187 => 'Saudi Arabia',
  1188 => 'Senegal',
  1242 => 'Serbia',
  1238 => 'Serbia and Montenegro',
  1189 => 'Seychelles',
  1190 => 'Sierra Leone',
  1191 => 'Singapore',
  1249 => 'Sint Maarten (Dutch Part)',
  1192 => 'Slovakia',
  1193 => 'Slovenia',
  1194 => 'Solomon Islands',
  1195 => 'Somalia',
  1196 => 'South Africa',
  1197 => 'South Georgia and the South Sandwich Islands',
  1247 => 'South Sudan',
  1198 => 'Spain',
  1199 => 'Sri Lanka',
  1200 => 'Sudan',
  1201 => 'Suriname',
  1202 => 'Svalbard and Jan Mayen',
  1204 => 'Sweden',
  1205 => 'Switzerland',
  1206 => 'Syrian Arab Republic',
  1208 => 'Taiwan',
  1209 => 'Tajikistan',
  1210 => 'Tanzania, United Republic of',
  1211 => 'Thailand',
  1063 => 'Timor-Leste',
  1214 => 'Togo',
  1215 => 'Tokelau',
  1216 => 'Tonga',
  1217 => 'Trinidad and Tobago',
  1218 => 'Tunisia',
  1219 => 'Turkey',
  1220 => 'Turkmenistan',
  1221 => 'Turks and Caicos Islands',
  1222 => 'Tuvalu',
  1223 => 'Uganda',
  1224 => 'Ukraine',
  1225 => 'United Arab Emirates',
  1226 => 'United Kingdom',
  1227 => 'United States Minor Outlying Islands',
  1229 => 'Uruguay',
  1230 => 'Uzbekistan',
  1231 => 'Vanuatu',
  1232 => 'Venezuela',
  1233 => 'Viet Nam',
  1031 => 'Virgin Islands, British',
  1234 => 'Virgin Islands, U.S.',
  1235 => 'Wallis and Futuna',
  1236 => 'Western Sahara',
  1237 => 'Yemen',
  1239 => 'Zambia',
  1240 => 'Zimbabwe',
);


?>
<div class="registration<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
		<?php // Iterate through the form fieldsets and display each one. ?>
		<?php 
        foreach ($this->form->getFieldsets() as $fieldset) : 
            $fields = $this->form->getFieldset($fieldset->name); 
            if (count($fields)) : ?>
				<fieldset>
					<?php // If the fieldset has a label set, display it as the legend. ?>
					<?php if (isset($fieldset->label)) : ?>
						<legend><?php echo JText::_($fieldset->label); ?></legend>
					<?php endif; ?>
                    <?php 
                    foreach($fields as $field){
                        $this->form->renderField($field);                    
                    };echo $this->form->renderFieldset($fieldset->name);
                    ?>
				</fieldset>
			<?php endif; ?>
		<?php endforeach; ?>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate">
					<?php echo JText::_('JREGISTER'); ?>
				</button>
				<a class="btn" href="<?php echo JRoute::_(''); ?>" title="<?php echo JText::_('JCANCEL'); ?>">
					<?php echo JText::_('JCANCEL'); ?>
				</a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
			</div>
		</div>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>

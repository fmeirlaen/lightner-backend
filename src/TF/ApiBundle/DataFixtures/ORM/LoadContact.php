<?php
/**
 * User: fred
 * Date: 20/06/2017
 * Time: 11:46
 */

namespace TF\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;


use Doctrine\Common\Persistence\ObjectManager;
use TF\ApiBundle\Entity\tab_contact;
use TF\ApiBundle\Entity\tab_country;
use TF\ApiBundle\Entity\tab_user;

class LoadContactData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Countries = array(
            array('AF', 'Afghanistan', 'Afghanistan'),
            array('AL', 'Albanie', 'Albania'),
            array('AQ', 'Antarctique', 'Antarctica'),
            array('DZ', 'Algérie', 'Algeria'),
            array('AS', 'Samoa Américaines', 'American Samoa'),
            array('AD', 'Andorre', 'Andorra'),
            array('AO', 'Angola', 'Angola'),
            array('AG', 'Antigua-et-Barbuda', 'Antigua and Barbuda'),
            array('AZ', 'Azerbaïdjan', 'Azerbaijan'),
            array('AR', 'Argentine', 'Argentina'),
            array('AU', 'Australie', 'Australia'),
            array('AT', 'Autriche', 'Austria'),
            array('BS', 'Bahamas', 'Bahamas'),
            array('BH', 'Bahreïn', 'Bahrain'),
            array('BD', 'Bangladesh', 'Bangladesh'),
            array('AM', 'Arménie', 'Armenia'),
            array('BB', 'Barbade', 'Barbados'),
            array('BE', 'Belgique', 'Belgium'),
            array('BM', 'Bermudes', 'Bermuda'),
            array('BT', 'Bhoutan', 'Bhutan'),
            array('BO', 'Bolivie', 'Bolivia'),
            array('BA', 'Bosnie-Herzégovine', 'Bosnia and Herzegovina'),
            array('BW', 'Botswana', 'Botswana'),
            array('BV', 'Île Bouvet', 'Bouvet Island'),
            array('BR', 'Brésil', 'Brazil'),
            array('BZ', 'Belize', 'Belize'),
            array('IO', 'Territoire Britannique de l\'Océan Indien', 'British Indian Ocean Territory'),
            array('SB', 'Îles Salomon', 'Solomon Islands'),
            array('VG', 'Îles Vierges Britanniques', 'British Virgin Islands'),
            array('BN', 'Brunéi Darussalam', 'Brunei Darussalam'),
            array('BG', 'Bulgarie', 'Bulgaria'),
            array('MM', 'Myanmar', 'Myanmar'),
            array('BI', 'Burundi', 'Burundi'),
            array('BY', 'Bélarus', 'Belarus'),
            array('KH', 'Cambodge', 'Cambodia'),
            array('CM', 'Cameroun', 'Cameroon'),
            array('CA', 'Canada', 'Canada'),
            array('CV', 'Cap-vert', 'Cape Verde'),
            array('KY', 'Îles Caïmanes', 'Cayman Islands'),
            array('CF', 'République Centrafricaine', 'Central African'),
            array('LK', 'Sri Lanka', 'Sri Lanka'),
            array('TD', 'Tchad', 'Chad'),
            array('CL', 'Chili', 'Chile'),
            array('CN', 'Chine', 'China'),
            array('TW', 'Taïwan', 'Taiwan'),
            array('CX', 'Île Christmas', 'Christmas Island'),
            array('CC', 'Îles Cocos (Keeling)', 'Cocos (Keeling) Islands'),
            array('CO', 'Colombie', 'Colombia'),
            array('KM', 'Comores', 'Comoros'),
            array('YT', 'Mayotte', 'Mayotte'),
            array('CG', 'République du Congo', 'Republic of the Congo'),
            array('CD', 'République Démocratique du Congo', 'The Democratic Republic Of The Congo'),
            array('CK', 'Îles Cook', 'Cook Islands'),
            array('CR', 'Costa Rica', 'Costa Rica'),
            array('HR', 'Croatie', 'Croatia'),
            array('CU', 'Cuba', 'Cuba'),
            array('CY', 'Chypre', 'Cyprus'),
            array('CZ', 'République Tchèque', 'Czech Republic'),
            array('BJ', 'Bénin', 'Benin'),
            array('DK', 'Danemark', 'Denmark'),
            array('DM', 'Dominique', 'Dominica'),
            array('DO', 'République Dominicaine', 'Dominican Republic'),
            array('EC', 'Équateur', 'Ecuador'),
            array('SV', 'El Salvador', 'El Salvador'),
            array('GQ', 'Guinée Équatoriale', 'Equatorial Guinea'),
            array('ET', 'Éthiopie', 'Ethiopia'),
            array('ER', 'Érythrée', 'Eritrea'),
            array('EE', 'Estonie', 'Estonia'),
            array('FO', 'Îles Féroé', 'Faroe Islands'),
            array('FK', 'Îles (malvinas) Falkland', 'Falkland Islands'),
            array('GS', 'Géorgie du Sud et les Îles Sandwich du Sud', 'South Georgia and the South Sandwich Islands'),
            array('FJ', 'Fidji', 'Fiji'),
            array('FI', 'Finlande', 'Finland'),
            array('AX', 'Îles Åland', 'Åland Islands'),
            array('FR', 'France', 'France'),
            array('GF', 'Guyane Française', 'French Guiana'),
            array('PF', 'Polynésie Française', 'French Polynesia'),
            array('TF', 'Terres Australes Françaises', 'French Southern Territories'),
            array('DJ', 'Djibouti', 'Djibouti'),
            array('GA', 'Gabon', 'Gabon'),
            array('GE', 'Géorgie', 'Georgia'),
            array('GM', 'Gambie', 'Gambia'),
            array('PS', 'Territoire Palestinien Occupé', 'Occupied Palestinian Territory'),
            array('DE', 'Allemagne', 'Germany'),
            array('GH', 'Ghana', 'Ghana'),
            array('GI', 'Gibraltar', 'Gibraltar'),
            array('KI', 'Kiribati', 'Kiribati'),
            array('GR', 'Grèce', 'Greece'),
            array('GL', 'Groenland', 'Greenland'),
            array('GD', 'Grenade', 'Grenada'),
            array('GP', 'Guadeloupe', 'Guadeloupe'),
            array('GU', 'Guam', 'Guam'),
            array('GT', 'Guatemala', 'Guatemala'),
            array('GN', 'Guinée', 'Guinea'),
            array('GY', 'Guyana', 'Guyana'),
            array('HT', 'Haïti', 'Haiti'),
            array('HM', 'Îles Heard et Mcdonald', 'Heard Island and McDonald Islands'),
            array('VA', 'Saint-Siège (état de la Cité du Vatican)', 'Vatican City State'),
            array('HN', 'Honduras', 'Honduras'),
            array('HK', 'Hong-Kong', 'Hong Kong'),
            array('HU', 'Hongrie', 'Hungary'),
            array('IS', 'Islande', 'Iceland'),
            array('IN', 'Inde', 'India'),
            array('ID', 'Indonésie', 'Indonesia'),
            array('IR', 'République Islamique d\'Iran', 'Islamic Republic of Iran'),
            array('IQ', 'Iraq', 'Iraq'),
            array('IE', 'Irlande', 'Ireland'),
            array('IL', 'Israël', 'Israel'),
            array('IT', 'Italie', 'Italy'),
            array('CI', 'Côte d\'Ivoire', 'Côte d\'Ivoire'),
            array('JM', 'Jamaïque', 'Jamaica'),
            array('JP', 'Japon', 'Japan'),
            array('KZ', 'Kazakhstan', 'Kazakhstan'),
            array('JO', 'Jordanie', 'Jordan'),
            array('KE', 'Kenya', 'Kenya'),
            array('KP', 'République Populaire Démocratique de Corée', 'Democratic People\'s Republic of Korea'),
            array('KR', 'République de Corée', 'Republic of Korea'),
            array('KW', 'Koweït', 'Kuwait'),
            array('KG', 'Kirghizistan', 'Kyrgyzstan'),
            array('LA', 'République Démocratique Populaire Lao', 'Lao People\'s Democratic Republic'),
            array('LB', 'Liban', 'Lebanon'),
            array('LS', 'Lesotho', 'Lesotho'),
            array('LV', 'Lettonie', 'Latvia'),
            array('LR', 'Libéria', 'Liberia'),
            array('LY', 'Jamahiriya Arabe Libyenne', 'Libyan Arab Jamahiriya'),
            array('LI', 'Liechtenstein', 'Liechtenstein'),
            array('LT', 'Lituanie', 'Lithuania'),
            array('LU', 'Luxembourg', 'Luxembourg'),
            array('MO', 'Macao', 'Macao'),
            array('MG', 'Madagascar', 'Madagascar'),
            array('MW', 'Malawi', 'Malawi'),
            array('MY', 'Malaisie', 'Malaysia'),
            array('MV', 'Maldives', 'Maldives'),
            array('ML', 'Mali', 'Mali'),
            array('MT', 'Malte', 'Malta'),
            array('MQ', 'Martinique', 'Martinique'),
            array('MR', 'Mauritanie', 'Mauritania'),
            array('MU', 'Maurice', 'Mauritius'),
            array('MX', 'Mexique', 'Mexico'),
            array('MC', 'Monaco', 'Monaco'),
            array('MN', 'Mongolie', 'Mongolia'),
            array('MD', 'République de Moldova', 'Republic of Moldova'),
            array('MS', 'Montserrat', 'Montserrat'),
            array('MA', 'Maroc', 'Morocco'),
            array('MZ', 'Mozambique', 'Mozambique'),
            array('OM', 'Oman', 'Oman'),
            array('NA', 'Namibie', 'Namibia'),
            array('NR', 'Nauru', 'Nauru'),
            array('NP', 'Népal', 'Nepal'),
            array('NL', 'Pays-Bas', 'Netherlands'),
            array('AN', 'Antilles Néerlandaises', 'Netherlands Antilles'),
            array('AW', 'Aruba', 'Aruba'),
            array('NC', 'Nouvelle-Calédonie', 'New Caledonia'),
            array('VU', 'Vanuatu', 'Vanuatu'),
            array('NZ', 'Nouvelle-Zélande', 'New Zealand'),
            array('NI', 'Nicaragua', 'Nicaragua'),
            array('NE', 'Niger', 'Niger'),
            array('NG', 'Nigéria', 'Nigeria'),
            array('NU', 'Niué', 'Niue'),
            array('NF', 'Île Norfolk', 'Norfolk Island'),
            array('NO', 'Norvège', 'Norway'),
            array('MP', 'Îles Mariannes du Nord', 'Northern Mariana Islands'),
            array('UM', 'Îles Mineures Éloignées des États-Unis', 'United States Minor Outlying Islands'),
            array('FM', 'États Fédérés de Micronésie', 'Federated States of Micronesia'),
            array('MH', 'Îles Marshall', 'Marshall Islands'),
            array('PW', 'Palaos', 'Palau'),
            array('PK', 'Pakistan', 'Pakistan'),
            array('PA', 'Panama', 'Panama'),
            array('PG', 'Papouasie-Nouvelle-Guinée', 'Papua New Guinea'),
            array('PY', 'Paraguay', 'Paraguay'),
            array('PE', 'Pérou', 'Peru'),
            array('PH', 'Philippines', 'Philippines'),
            array('PN', 'Pitcairn', 'Pitcairn'),
            array('PL', 'Pologne', 'Poland'),
            array('PT', 'Portugal', 'Portugal'),
            array('GW', 'Guinée-Bissau', 'Guinea-Bissau'),
            array('TL', 'Timor-Leste', 'Timor-Leste'),
            array('PR', 'Porto Rico', 'Puerto Rico'),
            array('QA', 'Qatar', 'Qatar'),
            array('RE', 'Réunion', 'Réunion'),
            array('RO', 'Roumanie', 'Romania'),
            array('RU', 'Fédération de Russie', 'Russian Federation'),
            array('RW', 'Rwanda', 'Rwanda'),
            array('SH', 'Sainte-Hélène', 'Saint Helena'),
            array('KN', 'Saint-Kitts-et-Nevis', 'Saint Kitts and Nevis'),
            array('AI', 'Anguilla', 'Anguilla'),
            array('LC', 'Sainte-Lucie', 'Saint Lucia'),
            array('PM', 'Saint-Pierre-et-Miquelon', 'Saint-Pierre and Miquelon'),
            array('VC', 'Saint-Vincent-et-les Grenadines', 'Saint Vincent and the Grenadines'),
            array('SM', 'Saint-Marin', 'San Marino'),
            array('ST', 'Sao Tomé-et-Principe', 'Sao Tome and Principe'),
            array('SA', 'Arabie Saoudite', 'Saudi Arabia'),
            array('SN', 'Sénégal', 'Senegal'),
            array('SC', 'Seychelles', 'Seychelles'),
            array('SL', 'Sierra Leone', 'Sierra Leone'),
            array('SG', 'Singapour', 'Singapore'),
            array('SK', 'Slovaquie', 'Slovakia'),
            array('VN', 'Viet Nam', 'Vietnam'),
            array('SI', 'Slovénie', 'Slovenia'),
            array('SO', 'Somalie', 'Somalia'),
            array('ZA', 'Afrique du Sud', 'South Africa'),
            array('ZW', 'Zimbabwe', 'Zimbabwe'),
            array('ES', 'Espagne', 'Spain'),
            array('EH', 'Sahara Occidental', 'Western Sahara'),
            array('SD', 'Soudan', 'Sudan'),
            array('SR', 'Suriname', 'Suriname'),
            array('SJ', 'Svalbard etÎle Jan Mayen', 'Svalbard and Jan Mayen'),
            array('SZ', 'Swaziland', 'Swaziland'),
            array('SE', 'Suède', 'Sweden'),
            array('CH', 'Suisse', 'Switzerland'),
            array('SY', 'République Arabe Syrienne', 'Syrian Arab Republic'),
            array('TJ', 'Tadjikistan', 'Tajikistan'),
            array('TH', 'Thaïlande', 'Thailand'),
            array('TG', 'Togo', 'Togo'),
            array('TK', 'Tokelau', 'Tokelau'),
            array('TO', 'Tonga', 'Tonga'),
            array('TT', 'Trinité-et-Tobago', 'Trinidad and Tobago'),
            array('AE', 'Émirats Arabes Unis', 'United Arab Emirates'),
            array('TN', 'Tunisie', 'Tunisia'),
            array('TR', 'Turquie', 'Turkey'),
            array('TM', 'Turkménistan', 'Turkmenistan'),
            array('TC', 'Îles Turks et Caïques', 'Turks and Caicos Islands'),
            array('TV', 'Tuvalu', 'Tuvalu'),
            array('UG', 'Ouganda', 'Uganda'),
            array('UA', 'Ukraine', 'Ukraine'),
            array('MK', 'L\'ex-République Yougoslave de Macédoine', 'The Former Yugoslav Republic of Macedonia'),
            array('EG', 'Égypte', 'Egypt'),
            array('GB', 'Royaume-Uni', 'United Kingdom'),
            array('IM', 'Île de Man', 'Isle of Man'),
            array('TZ', 'République-Unie de Tanzanie', 'United Republic Of Tanzania'),
            array('US', 'États-Unis', 'United States'),
            array('VI', 'Îles Vierges des États-Unis', 'U.S. Virgin Islands'),
            array('BF', 'Burkina Faso', 'Burkina Faso'),
            array('UY', 'Uruguay', 'Uruguay'),
            array('UZ', 'Ouzbékistan', 'Uzbekistan'),
            array('VE', 'Venezuela', 'Venezuela'),
            array('WF', 'Wallis et Futuna', 'Wallis and Futuna'),
            array('WS', 'Samoa', 'Samoa'),
            array('YE', 'Yémen', 'Yemen'),
            array('CS', 'Serbie-et-Monténégro', 'Serbia and Montenegro'),
            array('ZM', 'Zambie', 'Zambia')
        );
        foreach ($Countries as $i => $Country) {
            $newCountry = new tab_country();
            $newCountry->setcountrycode($Country[0]);
            $newCountry->setCountryName($Country[1]);
            $manager->persist($newCountry);
        }
        $manager->flush();
        $ListCountry = $manager->getRepository("TFApiBundle:tab_country");

        $c1 = $ListCountry->findBy(array('countryCode' => 'BE'));

        $Contacts = array(
            array('1', 'admin', '', '', 'Rue des cabrinhas', '1000',$c1[0] , 'BXL', 'user', '456789132', '0', '0', new \DateTime('2038-01-19 03:14:07')),
            array('2', 'user', '', '', 'Rue des coquines', '2000', $c1[0], 'Namur', 'user', '123456789', '0', '0', new \DateTime('2018-01-19 03:14:07')),
            array('3', 'Khun', '', '', 'Rue caliente', '3000', $c1[0], 'Rio de Janeiro', 'user', '44719', '0', '0', new \DateTime('2008-01-19 03:14:07'))
        );

        foreach ($Contacts as $c => $Contact) {
            $newContact = new tab_contact();
            $newContact->setContactNumber($Contact[0]);
            $newContact->setContactFsName($Contact[1]);
            $newContact->setContactLsName($Contact[2]);
            $newContact->setContactComercialName($Contact[3]);
            $newContact->setContactAddress($Contact[4]);
            $newContact->setContactCodpost($Contact[5]);
            $newContact->setStamptabCountry($Contact[6]);
            $newContact->setContactCity($Contact[7]);
            $newContact->setContactType($Contact[8]);
            $newContact->setContactVatNumber($Contact[9]);
            $newContact->setContactAmount($Contact[10]);
            $newContact->setContactTabVat($Contact[11]);
            $newContact->setContactDateCreation($Contact[12]);
            $manager->persist($newContact);

            $manager->flush();



        }

        $manager->flush();

    }


}
?>
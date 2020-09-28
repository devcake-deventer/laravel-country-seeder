<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class CountryTableSeeder extends BaseSeeder
{

    protected function getTable(): string
    {
        return config('country.nationalities_table_name');
    }

    protected function  seeds(): array
    {
        return [
            ['id' => 1, 'code' => '0300', 'nationality' => 'Afghaanse'],
            ['id' => 2, 'code' => '0050', 'nationality' => 'Albanese'],
            ['id' => 3, 'code' => '0100', 'nationality' => 'Algerijnse'],
            ['id' => 4, 'code' => '0223', 'nationality' => 'Amerikaans burger'],
            ['id' => 5, 'code' => '0437', 'nationality' => 'Amerikaans onderdaan'],
            ['id' => 6, 'code' => '0051', 'nationality' => 'Andorrese'],
            ['id' => 7, 'code' => '0101', 'nationality' => 'Angolese'],
            ['id' => 8, 'code' => '0251', 'nationality' => 'Argentijnse'],
            ['id' => 9, 'code' => '0300', 'nationality' => 'Afghaanse'],
            ['id' => 10, 'code' => '0040', 'nationality' => 'Armeense'],
            ['id' => 11, 'code' => '0400', 'nationality' => 'Australische'],
            ['id' => 12, 'code' => '0039', 'nationality' => 'Azerbeidzjaanse'],
            ['id' => 13, 'code' => '0200', 'nationality' => 'Bahamaanse'],
            ['id' => 14, 'code' => '0301', 'nationality' => 'Bahreinse'],
            ['id' => 15, 'code' => '0251', 'nationality' => 'Barbadaanse'],
            ['id' => 16, 'code' => '0038', 'nationality' => 'Belarussische'],
            ['id' => 17, 'code' => '0052', 'nationality' => 'Belgische'],
            ['id' => 18, 'code' => '0202', 'nationality' => 'Belizaanse'],
            ['id' => 19, 'code' => '0345', 'nationality' => 'Bengalese'],
            ['id' => 20, 'code' => '0111', 'nationality' => 'Beninse'],
            ['id' => 21, 'code' => '0302', 'nationality' => 'Bhutaanse'],
            ['id' => 22, 'code' => '0252', 'nationality' => 'Boliviaanse'],
            ['id' => 23, 'code' => '0105', 'nationality' => 'Botswaanse'],
            ['id' => 24, 'code' => '0253', 'nationality' => 'Braziliaanse'],
            ['id' => 25, 'code' => '0060', 'nationality' => 'Brits'],
            ['id' => 26, 'code' => '0304', 'nationality' => 'Bruneise'],
            ['id' => 27, 'code' => '0053', 'nationality' => 'Bulgaarse'],
            ['id' => 28, 'code' => '0421', 'nationality' => 'Burger van Antigua en Barbuda'],
            ['id' => 29, 'code' => '0029', 'nationality' => 'Burger van Bosnië-Herzegovina'],
            ['id' => 30, 'code' => '0110', 'nationality' => 'Burger van Congo'],
            ['id' => 31, 'code' => '0106', 'nationality' => 'Burkinese'],
            ['id' => 32, 'code' => '0303', 'nationality' => 'Burmaanse'],
            ['id' => 33, 'code' => '0104', 'nationality' => 'Burundese'],
            ['id' => 34, 'code' => '0305', 'nationality' => 'Cambodjaanse'],
            ['id' => 35, 'code' => '0204', 'nationality' => 'Canadese'],
            ['id' => 36, 'code' => '0108', 'nationality' => 'Centraal-Afrikaanse'],
            ['id' => 37, 'code' => '0254', 'nationality' => 'Chileense'],
            ['id' => 38, 'code' => '0307', 'nationality' => 'Chinese'],
            ['id' => 39, 'code' => '0255', 'nationality' => 'Colombiaanse'],
            ['id' => 40, 'code' => '0109', 'nationality' => 'Comorese'],
            ['id' => 41, 'code' => '0205', 'nationality' => 'Costa Ricaanse'],
            ['id' => 42, 'code' => '0206', 'nationality' => 'Cubaanse'],
            ['id' => 43, 'code' => '0308', 'nationality' => 'Cyprische'],
            ['id' => 44, 'code' => '0054', 'nationality' => 'Deense'],
            ['id' => 45, 'code' => '0115', 'nationality' => 'Djiboutiaanse'],
            ['id' => 46, 'code' => '0207', 'nationality' => 'Dominicaanse'],
            ['id' => 47, 'code' => '0256', 'nationality' => 'Ecuadoraanse'],
            ['id' => 48, 'code' => '0112', 'nationality' => 'Egyptische'],
            ['id' => 49, 'code' => '0113', 'nationality' => 'Equatoriaal-Guinese'],
            ['id' => 50, 'code' => '0084', 'nationality' => 'Eritrese'],
            ['id' => 51, 'code' => '0045', 'nationality' => 'Estische'],
            ['id' => 52, 'code' => '0141', 'nationality' => 'Eswatinische'],
            ['id' => 53, 'code' => '0114', 'nationality' => 'Ethiopische'],
            ['id' => 54, 'code' => '0425', 'nationality' => 'Fijische'],
            ['id' => 55, 'code' => '0309', 'nationality' => 'Filipijnse'],
            ['id' => 56, 'code' => '0056', 'nationality' => 'Finse'],
            ['id' => 57, 'code' => '0057', 'nationality' => 'Franse'],
            ['id' => 58, 'code' => '0116', 'nationality' => 'Gabonese'],
            ['id' => 59, 'code' => '0117', 'nationality' => 'Gambiaanse'],
            ['id' => 60, 'code' => '0030', 'nationality' => 'Georgische'],
            ['id' => 61, 'code' => '0118', 'nationality' => 'Ghanese'],
            ['id' => 62, 'code' => '0267', 'nationality' => 'Grenadaanse'],
            ['id' => 63, 'code' => '0059', 'nationality' => 'Griekse'],
            ['id' => 64, 'code' => '0211', 'nationality' => 'Guatemalaanse'],
            ['id' => 65, 'code' => '0139', 'nationality' => 'Guinee-Bissause'],
            ['id' => 66, 'code' => '0119', 'nationality' => 'Guinese'],
            ['id' => 67, 'code' => '0259', 'nationality' => 'Guyaanse'],
            ['id' => 68, 'code' => '0212', 'nationality' => 'Haïtiaanse'],
            ['id' => 69, 'code' => '0213', 'nationality' => 'Hondurese'],
            ['id' => 70, 'code' => '0061', 'nationality' => 'Hongaarse'],
            ['id' => 71, 'code' => '0062', 'nationality' => 'Ierse'],
            ['id' => 72, 'code' => '0063', 'nationality' => 'IJslandse'],
            ['id' => 73, 'code' => '0312', 'nationality' => 'Indiase'],
            ['id' => 74, 'code' => '0313', 'nationality' => 'Indonesische'],
            ['id' => 75, 'code' => '0314', 'nationality' => 'Iraakse'],
            ['id' => 76, 'code' => '0315', 'nationality' => 'Iraanse'],
            ['id' => 77, 'code' => '0316', 'nationality' => 'Israëlische'],
            ['id' => 78, 'code' => '0064', 'nationality' => 'Italiaanse'],
            ['id' => 79, 'code' => '0120', 'nationality' => 'Ivoriaanse'],
            ['id' => 80, 'code' => '0214', 'nationality' => 'Jamaicaanse'],
            ['id' => 81, 'code' => '0317', 'nationality' => 'Japanse'],
            ['id' => 82, 'code' => '0058', 'nationality' => 'Jemenitische'],
            ['id' => 83, 'code' => '0065', 'nationality' => 'Joegoslavische'],
            ['id' => 84, 'code' => '0319', 'nationality' => 'Jordaanse'],
            ['id' => 85, 'code' => '0121', 'nationality' => 'Kaapverdische'],
            ['id' => 86, 'code' => '0122', 'nationality' => 'Kameroense'],
            ['id' => 87, 'code' => '0037', 'nationality' => 'Kazachse'],
            ['id' => 88, 'code' => '0123', 'nationality' => 'Kenyaanse'],
            ['id' => 89, 'code' => '0035', 'nationality' => 'Kirgizische'],
            ['id' => 90, 'code' => '0445', 'nationality' => 'Kiribatische'],
            ['id' => 91, 'code' => '0320', 'nationality' => 'Koeweitse'],
            ['id' => 92, 'code' => '0087', 'nationality' => 'Kosovaarse'],
            ['id' => 93, 'code' => '0043', 'nationality' => 'Kroatische'],
            ['id' => 94, 'code' => '0321', 'nationality' => 'Laotiaanse'],
            ['id' => 95, 'code' => '0125', 'nationality' => 'Lesothaanse'],
            ['id' => 96, 'code' => '0044', 'nationality' => 'Letse'],
            ['id' => 97, 'code' => '0322', 'nationality' => 'Libanese'],
            ['id' => 98, 'code' => '0126', 'nationality' => 'Liberiaanse'],
            ['id' => 99, 'code' => '0127', 'nationality' => 'Libische'],
            ['id' => 100, 'code' => '0066', 'nationality' => 'Liechtensteinse'],
            ['id' => 101, 'code' => '0046', 'nationality' => 'Litouwse'],
            ['id' => 102, 'code' => '0067', 'nationality' => 'Luxemburgse'],
            ['id' => 103, 'code' => '0086', 'nationality' => 'Macedonische'],
            ['id' => 104, 'code' => '0128', 'nationality' => 'Malagassische'],
            ['id' => 105, 'code' => '0129', 'nationality' => 'Malawische'],
            ['id' => 106, 'code' => '0324', 'nationality' => 'Maldivische'],
            ['id' => 107, 'code' => '0325', 'nationality' => 'Maleisische'],
            ['id' => 108, 'code' => '0130', 'nationality' => 'Malinese'],
            ['id' => 109, 'code' => '0068', 'nationality' => 'Maltese'],
            ['id' => 110, 'code' => '0131', 'nationality' => 'Marokkaanse'],
            ['id' => 111, 'code' => '0047', 'nationality' => 'Marshalleilandse'],
            ['id' => 112, 'code' => '0132', 'nationality' => 'Mauritaanse'],
            ['id' => 113, 'code' => '0216', 'nationality' => 'Mexicaanse'],
            ['id' => 114, 'code' => '0443', 'nationality' => 'Micronesische'],
            ['id' => 115, 'code' => '0036', 'nationality' => 'Moldavische'],
            ['id' => 116, 'code' => '0069', 'nationality' => 'Monegaskische'],
            ['id' => 117, 'code' => '0326', 'nationality' => 'Mongolische'],
            ['id' => 118, 'code' => '0455', 'nationality' => 'Montenegrijnse'],
            ['id' => 119, 'code' => '0134', 'nationality' => 'Mozambikaanse'],
            ['id' => 120, 'code' => '0048', 'nationality' => 'Myanmarese'],
            ['id' => 121, 'code' => '0049', 'nationality' => 'Namibische'],
            ['id' => 122, 'code' => '0431', 'nationality' => 'Nauruaanse'],
            ['id' => 123, 'code' => '0001', 'nationality' => 'Nederlandse'],
            ['id' => 124, 'code' => '0328', 'nationality' => 'Nepalese'],
            ['id' => 125, 'code' => '0218', 'nationality' => 'Nicaraguaanse'],
            ['id' => 126, 'code' => '0402', 'nationality' => 'Nieuw-Zeelandse'],
            ['id' => 127, 'code' => '0136', 'nationality' => 'Nigerese'],
            ['id' => 128, 'code' => '0137', 'nationality' => 'Nigeriaanse'],
            ['id' => 129, 'code' => '0318', 'nationality' => 'Noord-Jemenitische'],
            ['id' => 130, 'code' => '0329', 'nationality' => 'Noord-Koreaanse'],
            ['id' => 131, 'code' => '0070', 'nationality' => 'Noorse'],
            ['id' => 132, 'code' => '0034', 'nationality' => 'Oekraïense'],
            ['id' => 133, 'code' => '0033', 'nationality' => 'Oezbeekse'],
            ['id' => 134, 'code' => '0327', 'nationality' => 'Omaanse'],
            ['id' => 135, 'code' => '0071', 'nationality' => 'Oostenrijkse'],
            ['id' => 136, 'code' => '0331', 'nationality' => 'Pakistaanse'],
            ['id' => 137, 'code' => '0432', 'nationality' => 'Palause'],
            ['id' => 138, 'code' => '0219', 'nationality' => 'Panamese'],
            ['id' => 139, 'code' => '0401', 'nationality' => 'Papoea-Nieuw-Guinese'],
            ['id' => 140, 'code' => '0261', 'nationality' => 'Paraguayaanse'],
            ['id' => 141, 'code' => '0262', 'nationality' => 'Peruaanse'],
            ['id' => 142, 'code' => '0072', 'nationality' => 'Poolse'],
            ['id' => 143, 'code' => '0073', 'nationality' => 'Portugese'],
            ['id' => 144, 'code' => '0333', 'nationality' => 'Qatarese'],
            ['id' => 145, 'code' => '0074', 'nationality' => 'Roemeense'],
            ['id' => 146, 'code' => '0041', 'nationality' => 'Russische'],
            ['id' => 147, 'code' => '0143', 'nationality' => 'Rwandese'],
            ['id' => 148, 'code' => '0447', 'nationality' => 'Saint Luciaanse'],
            ['id' => 149, 'code' => '0442', 'nationality' => 'Salomonseilandse'],
            ['id' => 150, 'code' => '0208', 'nationality' => 'Salvadoraanse'],
            ['id' => 151, 'code' => '0405', 'nationality' => 'Samoaanse'],
            ['id' => 152, 'code' => '0076', 'nationality' => 'San Marinese'],
            ['id' => 153, 'code' => '0334', 'nationality' => 'Saoedi-Arabische'],
            ['id' => 154, 'code' => '0145', 'nationality' => 'Senegalese'],
            ['id' => 155, 'code' => '0454', 'nationality' => 'Servische'],
            ['id' => 156, 'code' => '0444', 'nationality' => 'Seychelse'],
            ['id' => 157, 'code' => '0147', 'nationality' => 'Sierra Leoonse'],
            ['id' => 158, 'code' => '0335', 'nationality' => 'Singaporese'],
            ['id' => 159, 'code' => '0042', 'nationality' => 'Sloveense'],
            ['id' => 160, 'code' => '0027', 'nationality' => 'Slowaakse'],
            ['id' => 161, 'code' => '0148', 'nationality' => 'Soedanese'],
            ['id' => 162, 'code' => '0149', 'nationality' => 'Somalische'],
            ['id' => 163, 'code' => '0077', 'nationality' => 'Spaanse'],
            ['id' => 164, 'code' => '0306', 'nationality' => 'Sri Lankaanse'],
            ['id' => 165, 'code' => '0263', 'nationality' => 'Surinaamse'],
            ['id' => 166, 'code' => '0135', 'nationality' => 'Swazische'],
            ['id' => 167, 'code' => '0336', 'nationality' => 'Syrische'],
            ['id' => 168, 'code' => '0032', 'nationality' => 'Tadzjiekse'],
            ['id' => 169, 'code' => '0310', 'nationality' => 'Taiwanese'],
            ['id' => 170, 'code' => '0151', 'nationality' => 'Tanzaniaanse'],
            ['id' => 171, 'code' => '0337', 'nationality' => 'Thaise'],
            ['id' => 172, 'code' => '0152', 'nationality' => 'Togolese'],
            ['id' => 173, 'code' => '0430', 'nationality' => 'Tongaanse'],
            ['id' => 174, 'code' => '0154', 'nationality' => 'Tsjadische'],
            ['id' => 175, 'code' => '0028', 'nationality' => 'Tsjechische'],
            ['id' => 176, 'code' => '0155', 'nationality' => 'Tunesische'],
            ['id' => 177, 'code' => '0031', 'nationality' => 'Turkmeense'],
            ['id' => 178, 'code' => '0339', 'nationality' => 'Turkse'],
            ['id' => 179, 'code' => '0446', 'nationality' => 'Tuvaluaanse'],
            ['id' => 180, 'code' => '0138', 'nationality' => 'Ugandese'],
            ['id' => 181, 'code' => '0264', 'nationality' => 'Uruguayaanse'],
            ['id' => 182, 'code' => '0424', 'nationality' => 'Vanuatuaanse'],
            ['id' => 183, 'code' => '0079', 'nationality' => 'Vaticaanse'],
            ['id' => 184, 'code' => '0265', 'nationality' => 'Venezolaanse'],
            ['id' => 185, 'code' => '0342', 'nationality' => 'Vietnamese'],
            ['id' => 186, 'code' => '0404', 'nationality' => 'West-Samoaanse'],
            ['id' => 187, 'code' => '0124', 'nationality' => 'Zaïrese'],
            ['id' => 188, 'code' => '0156', 'nationality' => 'Zambiaanse'],
            ['id' => 189, 'code' => '0142', 'nationality' => 'Zimbabwaanse'],
            ['id' => 190, 'code' => '0140', 'nationality' => 'Zuid-Afrikaanse'],
            ['id' => 191, 'code' => '0340', 'nationality' => 'Zuid-Jemenitische'],
            ['id' => 192, 'code' => '0341', 'nationality' => 'Zuid-Koreaanse'],
            ['id' => 193, 'code' => '0157', 'nationality' => 'Zuid-Soedanese '],
            ['id' => 194, 'code' => '0080', 'nationality' => 'Zweedse'],
            ['id' => 195, 'code' => '0081', 'nationality' => 'Zwitserse'],
        ];
    }

}
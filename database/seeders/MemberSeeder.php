<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
             "id"=> 1,
             "name"=> "Dr. Chijioke K. Ukadike",
             "ciltno"=> 50495,
             "membershipstatus"=> "FCILT",
             "email"=> "cukadike@yahoo.com"
            ],
            [
             "id"=> 2,
             "name"=> "Nkwonta Chidiebere Benjamin",
             "ciltno"=> "NA",
             "membershipstatus"=> "FCILT",
             "email"=> "NA"
            ],
            [
             "id"=> 3,
             "name"=> "Ekhameye Patrick O",
             "ciltno"=> "NA",
             "membershipstatus"=> "FCILT",
             "email"=> "NA"
            ],
            [
             "id"=> 4,
             "name"=> "Commodore Oamen Michael Gregory",
             "ciltno"=> 206538,
             "membershipstatus"=> "FCILT",
             "email"=> "NA"
            ],
            [
             "id"=> 5,
             "name"=> "Funmilayo Loremikan",
             "ciltno"=> 201884,
             "membershipstatus"=> "FCILT",
             "email"=> "funmilore@yahoo.com"
            ],
            [
             "id"=> 6,
             "name"=> "Hillary Umunna",
             "ciltno"=> "NA",
             "membershipstatus"=> "FCILT",
             "email"=> "NA"
            ],
            [
             "id"=> 7,
             "name"=> "Attih Inyang Edet",
             "ciltno"=> 205488,
             "membershipstatus"=> "CMILT",
             "email"=> "NA"
            ],
            [
             "id"=> 8,
             "name"=> " Abasi-Akara Imaobong Achiever",
             "ciltno"=> 205495,
             "membershipstatus"=> "CMILT",
             "email"=> "achiever475@yahoo.com"
            ],
            [
             "id"=> 9,
             "name"=> " Kolo Audu",
             "ciltno"=> 205480,
             "membershipstatus"=> "CMILT",
             "email"=> "NA"
            ],
            [
             "id"=> 10,
             "name"=> " Onwasigwe Ndubisi Enuta",
             "ciltno"=> 205687,
             "membershipstatus"=> "CMILT",
             "email"=> "NA"
            ],
            [
             "id"=> 11,
             "name"=> " Utan Uye Utan",
             "ciltno"=> 200910,
             "membershipstatus"=> "CMILT",
             "email"=> "emmyutan@yahoo.com"
            ],
            [
             "id"=> 12,
             "name"=> "Olumati Ikechi Festus",
             "ciltno"=> "NA",
             "membershipstatus"=> "CMILT",
             "email"=> "NA"
            ],
            [
             "id"=> 13,
             "name"=> "Silas Hopewell Odoma",
             "ciltno"=> 205482,
             "membershipstatus"=> "MILT",
             "email"=> "NA"
            ],
            [
             "id"=> 14,
             "name"=> " Ohakwe Rowland",
             "ciltno"=> 205484,
             "membershipstatus"=> "MILT",
             "email"=> "NA"
            ],
            [
             "id"=> 15,
             "name"=> " Nwabuba Udonna Benjamin",
             "ciltno"=> 205472,
             "membershipstatus"=> "MILT",
             "email"=> "nwabubaudonna@gmail.com"
            ],
            [
             "id"=> 16,
             "name"=> " Mohammed Bida Usman",
             "ciltno"=> 205491,
             "membershipstatus"=> "MILT",
             "email"=> "NA"
            ],
            [
             "id"=> 17,
             "name"=> " Bello Ibrahim Yahaya",
             "ciltno"=> 205686,
             "membershipstatus"=> "MILT",
             "email"=> "bello_ib2003@yahoo.com"
            ],
            [
             "id"=> 18,
             "name"=> " Ambima J. Yusuf",
             "ciltno"=> 205681,
             "membershipstatus"=> "MILT",
             "email"=> "ambimay20@gmail.com"
            ],
            [
             "id"=> 19,
             "name"=> " Akpan Emmanuel Michael",
             "ciltno"=> 205675,
             "membershipstatus"=> "MILT",
             "email"=> "NA"
            ],
            [
             "id"=> 20,
             "name"=> "Egbe Godwin Junior",
             "ciltno"=> 206135,
             "membershipstatus"=> "MILT",
             "email"=> "godwinegbejnr@yahoo.com"
            ],
            [
             "id"=> 21,
             "name"=> "Kanu Collins Chukwuemeka",
             "ciltno"=> 205673,
             "membershipstatus"=> "MILT",
             "email"=> "greatcollins13@gmail.com"
            ],
            [
             "id"=> 22,
             "name"=> "Ginsau Haruna Usman",
             "ciltno"=> 205863,
             "membershipstatus"=> "MILT",
             "email"=> "NA"
            ],
            [
             "id"=> 23,
             "name"=> "Aina Stanley Oluwasegun",
             "ciltno"=> 206539,
             "membershipstatus"=> "MILT",
             "email"=> "stanwilderr@gmail.com"
            ],
            [
             "id"=> 24,
             "name"=> "Nnanwuno Paul Ebuka",
             "ciltno"=> 206645,
             "membershipstatus"=> "MILT",
             "email"=> "paulnnanwuno@gmail.com"
            ],
            [
             "id"=> 25,
             "name"=> "Hena, James Sindama",
             "ciltno"=> 205295,
             "membershipstatus"=> "MILT",
             "email"=> "jayhena@yahoo.com"
            ],
            [
             "id"=> 26,
             "name"=> "Andyar Aondongu Andrew ",
             "ciltno"=> 207340,
             "membershipstatus"=> "MILT",
             "email"=> "pilotandyar@gmail.com"
            ],
            [
             "id"=> 27,
             "name"=> "Chinwe U. Ogbuebile",
             "ciltno"=> "NA",
             "membershipstatus"=> "MILT",
             "email"=> "NA"
            ],
            [
             "id"=> 28,
             "name"=> "Farid Hamza Ahmad",
             "ciltno"=> 207417,
             "membershipstatus"=> "MILT",
             "email"=> "afaridhamza00@gmail.com"
            ],
            [
             "id"=> 29,
             "name"=> "Onyekachi Thaddaeus Agwara",
             "ciltno"=> 207326,
             "membershipstatus"=> "MILT",
             "email"=> "kachiagwara@gmail.com"
            ],
            [
             "id"=> 30,
             "name"=> " Edet Catherine Iquo",
             "ciltno"=> 205477,
             "membershipstatus"=> "AFFILIATE ",
             "email"=> "NA"
            ],
            [
             "id"=> 31,
             "name"=> "Kaizer, Precious",
             "ciltno"=> 205475,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "lordlaizer36@gmail.com"
            ],
            [
             "id"=> 32,
             "name"=> " Omoniyi Nathenaiel Olaolu",
             "ciltno"=> 205683,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "nathcpms@yahoo.com"
            ],
            [
             "id"=> 33,
             "name"=> " Sampson Grace Nse",
             "ciltno"=> 205715,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "grace.sampson@yahoo.com"
            ],
            [
             "id"=> 34,
             "name"=> " Ashaolu Oladimeji Sunday",
             "ciltno"=> 205479,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 35,
             "name"=> " Ashaolu Justina Boco",
             "ciltno"=> 205481,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "unimy2k@yahoo.com"
            ],
            [
             "id"=> 36,
             "name"=> " Offiong Michaels Effiong ",
             "ciltno"=> 205476,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 37,
             "name"=> " Ogungbemi Samuel Olusola",
             "ciltno"=> 205474,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "samiyanda@gmail.com"
            ],
            [
             "id"=> 38,
             "name"=> "Chechet Tachio Iliya",
             "ciltno"=> 205478,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "chechet@yahoo.com"
            ],
            [
             "id"=> 39,
             "name"=> " Ekesiobi Chuwuemeka",
             "ciltno"=> 206136,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "cj.ekesiobi@gmail.com"
            ],
            [
             "id"=> 40,
             "name"=> "Akinrinde Mary Okpen",
             "ciltno"=> 205854,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 41,
             "name"=> "Samson Daniel",
             "ciltno"=> 205856,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 42,
             "name"=> "Abdullahi Abdulmutalib",
             "ciltno"=> 205858,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 43,
             "name"=> "Folorunso Oluwafunso T.",
             "ciltno"=> 206227,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 44,
             "name"=> "Odey Mary Eneyi",
             "ciltno"=> "NA",
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 45,
             "name"=> "Eke Uche Michael",
             "ciltno"=> 207199,
             "membershipstatus"=> "AFFILIATE",
             "email"=> "NA"
            ],
            [
             "id"=> 46,
             "name"=> "Ekpenyong Effiong Kingsley",
             "ciltno"=> 205473,
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 47,
             "name"=> " Odus Benjamin",
             "ciltno"=> 205673,
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 48,
             "name"=> " Odigwe Ikhile",
             "ciltno"=> 2056732,
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 49,
             "name"=> " Effanga Henry O",
             "ciltno"=> 205674,
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 50,
             "name"=> "Akpan Imobong Okon",
             "ciltno"=> 205483,
             "membershipstatus"=> "NA",
             "email"=> "iniobong4good@yahoo.com"
            ],
            [
             "id"=> 51,
             "name"=> "Onuegbu Augustina Obiyo",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 52,
             "name"=> "Omotosho Adebayo S.",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 53,
             "name"=> "Akoede Semiu Alami Adidiran",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 54,
             "name"=> "Gabriel Eunice Akpan ",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 55,
             "name"=> "Aliyu Hamza Koko",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 56,
             "name"=> "Tolonisede Adetayo Mayomi",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 57,
             "name"=> "Alan A",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 58,
             "name"=> "Daniel O. Ezeama",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 59,
             "name"=> "Effiom Otuu ",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 60,
             "name"=> "Isaac Ovih",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 61,
             "name"=> "Judith E. Asuquo",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 62,
             "name"=> "Lawan Faruk",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 63,
             "name"=> "Akon A, Inyang",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 64,
             "name"=> "Ndubisi",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
             "id"=> 65,
             "name"=> "Odigwe Kelvin",
             "ciltno"=> "NA",
             "membershipstatus"=> "NA",
             "email"=> "NA"
            ],
            [
                "id"=> 66,
                "name"=> "Affiah Maureen Afoma",
                "ciltno"=> 203452,
                "membershipstatus"=> "CMILT",
                "email"=> "manwabueze@yahoo.com"
            ],
            [
                "id"=> 67,
                "name"=> "Dr. Ohaegbuchi Uchechukwu Magnus",
                "ciltno"=> "NA",
                "membershipstatus"=> "NA",
                "email"=> "uchenery@gmail.com"
            ]
        ];

        foreach($members as $member)
        {
            $member['pin'] = random_int(1000, 9999);
            Member::create($member);


        }
    }
}

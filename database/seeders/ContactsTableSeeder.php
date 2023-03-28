<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'firstname' => 'tony',
            'lastname' => 'tony',
            'gender' => 1,
            'email' => 'American@yahoo.com',
            'address'=>'104-0031',
            'postcode'=>'東京都中央区京橋',
            'building_name'=>'', 
            'opinion'=>'ご意見です',
        ];
        Contact::create($param);
    }
}

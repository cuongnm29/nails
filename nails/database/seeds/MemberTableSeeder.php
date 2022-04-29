<?php

use App\Member;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    public function run()
    {
        $member = [
            [
               
                'firstname'           => 'Nguyen',
                'lastname'           => 'Cuong',
                'email'          => 'cuong@admin.com',
                'password'       => '$2y$10$Y.jEitizf.DW3V7gxCnMr.SdWN2i1w4gobo28vTLGaFajqcjUl8Oy',
                'remember_token' => null,
                'created_at'     => '2019-09-19 12:08:28',
                'updated_at'     => '2019-09-19 12:08:28',
            ],
        ];

        Member::insert($member);
    }
}

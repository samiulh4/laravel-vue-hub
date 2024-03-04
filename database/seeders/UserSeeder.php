<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Modules\User\Models\Users;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            'name' => 'Jason Statham',
            'email' => 'user1@mail.com',
            'mobile_no' => '911234567891',
            'password' => Hash::make('123456a@'),
            'gender_code' => 'M',
            'unique_id' => time().Str::random(5, 'alpha'),
            'bio' => 'I love my country.',
            'country_code' => 'USA',
            'avatar' => 'https://static.vecteezy.com/system/resources/previews/024/183/502/original/male-avatar-portrait-of-a-young-man-with-a-beard-illustration-of-male-character-in-modern-color-style-vector.jpg'
        ]);

        Users::create([
            'name' => 'Dwayne Johnson',
            'email' => 'user2@mail.com',
            'mobile_no' => '911234567892',
            'password' => Hash::make('123456a@'),
            'gender_code' => 'M',
            'unique_id' => time().Str::random(5, 'alpha'),
            'bio' => 'I love my country.',
            'country_code' => 'USA',
            'avatar' => 'https://static.vecteezy.com/system/resources/previews/024/183/502/original/male-avatar-portrait-of-a-young-man-with-a-beard-illustration-of-male-character-in-modern-color-style-vector.jpg'
        ]);

        Users::create([
            'name' => 'Akshara Gowda Bikki',
            'email' => 'user3@mail.com',
            'mobile_no' => '911234567893',
            'password' => Hash::make('123456a@'),
            'gender_code' => 'F',
            'unique_id' => time().Str::random(5, 'alpha'),
            'bio' => 'I love my country.',
            'country_code' => 'IND',
            'avatar' => 'https://t3.ftcdn.net/jpg/06/17/13/26/360_F_617132669_YptvM7fIuczaUbYYpMe3VTLimwZwzlWf.jpg'
        ]);

        Users::create([
            'name' => 'Shreya Reddy',
            'email' => 'user4@mail.com',
            'mobile_no' => '911234567894',
            'password' => Hash::make('123456a@'),
            'gender_code' => 'F',
            'unique_id' => time().Str::random(5, 'alpha'),
            'bio' => 'I love my country.',
            'country_code' => 'IND',
            'avatar' => 'https://t3.ftcdn.net/jpg/06/17/13/26/360_F_617132669_YptvM7fIuczaUbYYpMe3VTLimwZwzlWf.jpg'
        ]);
    }
}

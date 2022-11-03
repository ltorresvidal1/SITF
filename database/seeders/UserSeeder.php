<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->documento="1068658609";
        $usuario->nombre="LUIS GABRIEL";
        $usuario->usuario="LTORRES";
        $usuario->password=Hash::make("1234567");
        $usuario->perfile_id="1";
        $usuario->idestado="1";
        $usuario->created_at="2022-08-16 09:12";
        $usuario->save();
    }
}

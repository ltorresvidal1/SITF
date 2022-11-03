<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call(DesplegableSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(PerfileSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ActoQuirurgicoSeeder::class);

        $this->call(AmbitoProcedimientoSeeder::class);
        $this->call(CausaExternaSeeder::class);
        $this->call(FinalidadConsultaSeeder::class);
        $this->call(FinalidadProcedimientoSeeder::class);
        $this->call(MedidaEdadSeeder::class);
        $this->call(PersonalAtiendeSeeder::class);
        $this->call(TipoDiagnosticoSeeder::class);
        $this->call(TipoServicioSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(TipoIdentificacionSeeder::class);
        
    }
}

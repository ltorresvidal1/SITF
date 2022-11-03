<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
class validacionrips implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $codigorips;
    public function __construct(string $codigorips)
    {
        $this->codigorips=$codigorips;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
      $query = 'call "Validar_Rips"('."'".$this->codigorips."'".');';
      DB::getPdo()->exec($query);   
      
      echo 'codigo enviado '. $query;
    }
}
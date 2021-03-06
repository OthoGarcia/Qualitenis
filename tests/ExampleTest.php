<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        //$this->visit('/')
          //->see('Laravel 5');
        $tenista = \App\Tenista::find(1);
        $this->actingAs($tenista, 'tenista')
        ->visit('/tenista')
        ->see('Tenista '. $tenista->nome)
        ->click('torneio_1')
        ->see('Detalhes do Torneio')
        ->check('termos')
        ->press('Inscrever');
    }
}

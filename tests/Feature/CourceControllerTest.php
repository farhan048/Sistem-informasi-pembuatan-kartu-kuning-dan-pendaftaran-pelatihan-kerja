<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Cource;
class CourceControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {
        $pelatihan = Cource::create([
            'pelatihan' => 'Operator Forklift'
        ]);

        $this->assertDatabaseHas('cources', [
            'pelatihan' => 'Operator Forklift'
    ]);	
    }
  
}

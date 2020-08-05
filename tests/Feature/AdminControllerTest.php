<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Admin;
class AdminControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     
    public function testStore()
    {
        $admin = Admin::create([
            'username' => 'admin',
            'nama' => 'farhan',
            'level' => 'Admin',
            'password' =>'12345678'
        ]);

        $this->assertDatabaseHas('admins', [
            'username' => 'admin',
            'nama' => 'farhan',
            'level' => 'Admin',
            'password' =>'12345678'
    ]);	
    }
    public function testDestroy(){
        $admin = Admin::destroy(1);
        $this->assertDatabaseMissing('admins',[
            'id' => 12
        ]);
    }
}

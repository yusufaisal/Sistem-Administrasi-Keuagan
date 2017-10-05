<?php

namespace Tests\Feature;

use App\Belanja;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BelanjaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    public function testIndex()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $response = $this->get('/belanja/');
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $belanja = factory(Belanja::class)->make();
        $belanja->save();

        $found_belanja = Belanja::find(1);
        $this->assertEquals($belanja->keterangan, $found_belanja->keterangan);
    }

    public function testDelete()
    {
        $belanja = factory(Belanja::class)->make();
        $belanja->save();

        $this->assertDatabaseHas('belanjas',['keterangan' => $belanja->keterangan]);
    }
}

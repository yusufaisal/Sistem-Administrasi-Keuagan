<?php

namespace Tests\Feature;

use App\Penerimaan;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class PenerimaanTest extends TestCase
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
        $response = $this->get('/penerimaan/');
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $penerimaan = factory(Penerimaan::class)->make();
        $penerimaan->save();
        $found_penerimaan = Penerimaan::find(1);
        $this->assertEquals($penerimaan->keterangan,$found_penerimaan->keterangan);
    }

    public function testDelete()
    {
        $penerimaan = factory(Penerimaan::class)->create();
        $penerimaan->save();
        $found_penerimaan = Penerimaan::find(1);
        $found_penerimaan->delete();

        $this->assertDatabaseMissing('penerimaans',['keterangan' => $found_penerimaan->keterangan]);
    }
}

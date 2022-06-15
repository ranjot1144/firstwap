<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;

use Tests\TestCase;
use App\Http\Controllers\ListController;
use Illuminate\Foundation\Testing\WithoutMiddleware;


class ApiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_data_not_exist() {
      $response = $this->get('/firstwap/public/list');
      $response->assertStatus(404);
    }
}

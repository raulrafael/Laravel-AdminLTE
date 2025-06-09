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
        $this->visit('/')
             ->see('Laravel');
    }

    public function testDashboardRequiresAuth()
    {
        $this->visit('/dashboard')
             ->seePageIs('/login');
    }

    public function testDashboardWorksForAuthenticatedUser()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
             ->visit('/dashboard')
             ->see('Dashboard Ejecutivo');
    }
}

<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\DefaultAdminSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;
    /**
     * login page load success
     */
    public function test_load_login_page_success()
    {
        $this->get(route('login'))
            ->assertStatus(200)
            ->assertSeeText('login form');
    }

    /**
     * send login request with wrong credentials
     */
    public function test_try_login_with_wrong_credential()
    {
        $this->post(route('authenticate'), [
            'name' => 'skdjfkj',
            'password' => 'sdfjkhsdjf'
        ])
            ->assertStatus(302)
            ->assertSessionHasErrors([
                'name' => 'username or password is wrong.'
            ]);
    }

    /**
     * login request validation
     */
    public function test_login_form_request_validation()
    {
        $this->post(route('authenticate'), [])
            ->assertStatus(302)
            ->assertSessionHasErrors([
                'name',
                'password'
            ]);
    }

    /**
     * correct credential and success login
     */
    public function test_try_login_with_correct_credential()
    {
        $this->seed(DefaultAdminSeeder::class);
        $this->post(route('authenticate'), [
            'name'     => 'admin',
            'password' => '1234'
        ])
            ->assertStatus(302)
            ->assertRedirectToRoute('dashboard');
    }

    /**
     * try admin log out
     */
    public function test_logout_request()
    {
        $user = User::factory()->create([
            'password' => Hash::make('123456')
        ]);
        $this->actingAs($user)
            ->get(route('logout'))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }
}

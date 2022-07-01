<?php

use Domain\Users\Models\User;

use function Pest\Laravel\actingAs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

uses(RefreshDatabase::class);

it('unauthenticated users cannot create page for posts', function () {
    $response = $this->get(route('admin.posts.create'));
    $response->assertRedirect(route('admin.login'));
});


it('has create page for posts', function () {
    /** @var \Illuminate\Contracts\Auth\Authenticatable */
    $user = User::factory()->create();
    actingAs($user);

    $response = $this->get(route('admin.posts.create'));
    $response->assertStatus(Response::HTTP_OK);
});

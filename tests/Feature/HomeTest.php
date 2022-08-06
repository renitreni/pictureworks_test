<?php

use App\Models\User;

it('shows home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('calls show method by id', function () {
    $response = $this->get('/user/'.User::all()->random()->id);

    $response->assertStatus(200);
});

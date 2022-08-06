<?php

use App\Models\User;

it('has validation page', function () {
    $id = User::all()->random()->id;
    $response = $this->patch(route('user.update', ['user' => $id]), [
        'id' => $id,
        'password' => config('app.password'),
        'comment' => 'sample',
    ]);
    $response->assertSessionHasNoErrors();
});

<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('user', function () {
    $user = \App\Models\User::updateOrCreate(['email' => 'test@example.com'],
    [
        'name' => 'Sample User',
        'email' => 'test@example.com',
        'password' => bcrypt('secret')
    ]);
    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
        'user' => $user,
        'token' => $token
    ];
    
    dump($token);
})->describe('Create sample user');
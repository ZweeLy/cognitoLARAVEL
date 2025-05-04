<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $grantCode = $request->get('code');
    $response = Http::asForm()->withHeaders([
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Basic Nzhwa2NsNjVrMXAzaWY2cDdjZzk2czRvZWQ6MThzNG5nNzE2MTI2Y2t0YTF2Y29lZmNlbzdvcnJuNG1tbjEyaTRvZDdlc2ozOWdlcGM5aA=='
    ])->post('https://us-west-27sonkxicj.auth.us-west-2.amazoncognito.com/oauth2/token',[
        'grant_type'=>'authorization_code',
        'code'=>$grantCode,
        'redirect_uri'=>'https://cognito.fsdevtutor.shop/'
    ]);

    $decodedResponse = json_decode($response);
    $accessToken = $decodedResponse->access_token;
    $userInfoResponse = Http::asForm()->withHeaders([
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Bearer '.$accessToken
    ])->get('https://us-west-27sonkxicj.auth.us-west-2.amazoncognito.com/oauth2/userInfo');
    $data = json_decode($userInfoResponse);


    return view('index',['data'=>$data]);
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';

<?php

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landlord.register')->name('landlord.register');
Route::post('/', fn (Request $request) => Tenant::create($request->only(['name','domain'])));

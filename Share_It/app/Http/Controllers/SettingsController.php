<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SettingsController extends Controller
{
    public function getSettings() {
        return view('settings');
    }

    public function postSettings() {
        // Update the user

    }

    public function postDelete() {
        // Delete the user and logout
        
    }
}

<?php

namespace App\Http\Controllers;

use Iluminate\http\Request;

 class HomeController extends Controller
{
    public function showWelcome() {
        return 'welcome';
    }
}
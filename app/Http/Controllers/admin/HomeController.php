<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use \App\HomePageTextSection;
use App\Howitwork;

class HomeController extends Controller
{
    public function index() {
    	return view('admin.index');

    }
}

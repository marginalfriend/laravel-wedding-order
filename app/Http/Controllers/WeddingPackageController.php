<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingPackageController extends Controller
{
    public function index() {
		$packages = WeddingPackage::all();
		return view('packages.index', ['packages' => $packages]);
	}
}

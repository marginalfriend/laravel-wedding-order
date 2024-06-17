<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeddingPackage;

class WeddingPackageController extends Controller
{
	// View
    public function index() {
		$packages = WeddingPackage::all();
		return view('packages.index', ['packages' => $packages]);
	}

	// Create Package View
	public function create() {
		return view('packages.create');
	}

	// Create Package Request
	public function store(Request $request) {
		$data = $request -> validate([
			'name' => 'required',
			'description' => 'required',
			'price' => 'required|decimal:0,2',
		]);

		$newPackage = WeddingPackage::create($data);

		return redirect(route('packages.index')) -> with('success', 'Wedding Package Created Successfully');
	}

	// Edit Package View
	public function edit(WeddingPackage $package) {
		return view('packages.edit', ['package' => $package]);
	}

	// Edit Package Request
	public function update(WeddingPackage $package, Request $request) {
		$data = $request -> validate([
			'name' => 'required',
			'description' => 'required',
			'price' => 'required|decimal:0,2',
		]);

		$package->update($data);

		return redirect(route('packages.index'))->with('success', 'Wedding Package Updated Successfully');
	}

	public function destroy(WeddingPackage $package) {
		$package -> delete();

		return redirect(route('packages.index')) -> with('success', 'Wedding Package Deleted Successfully');
	}
}

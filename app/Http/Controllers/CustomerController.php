<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
	// View
    public function index() {
		$customers = Customer::all();
		return view('customers.index', ['customers' => $customers]);
	}

	// Create customer View
	public function create() {
		return view('customers.create');
	}

	// Create customer Request
	public function store(Request $request) {
		$data = $request -> validate([
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required',
		]);

		$newCustomer = Customer::create($data);

		return redirect(route('customers.index')) -> with('success', 'Customer Created Successfully');
	}

	// Edit customer View
	public function edit(Customer $customer) {
		return view('customers.edit', ['customer' => $customer]);
	}

	// Edit customer Request
	public function update(Customer $customer, Request $request) {
		$data = $request -> validate([
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required',
		]);

		$customer->update($data);

		return redirect(route('customers.index')) -> with('success', 'Customer Updated Successfully');
	}

	public function destroy(Customer $customer) {
		$customer -> delete();

		return redirect(route('customers.index')) -> with('success', 'Customer Deleted Successfully');
	}
}

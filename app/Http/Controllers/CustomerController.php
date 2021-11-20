<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    // Read
    public function index() {
        $getCustomer = Customers::all();
        return view('customer.customer', compact('getCustomer'));
    }

    // Delete
    public function destroy($id) {
        $dropCustomer = Customers::find($id);
        $dropCustomer -> delete();
        return redirect() -> back();
    }
}

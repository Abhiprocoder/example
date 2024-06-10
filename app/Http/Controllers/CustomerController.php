<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $title = "Customer  Registration";
        $data = compact('url');
        return view('customer')->with($data);
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        /////// insert query
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view()
    {
        $title = "Customer List";
        $url = url('/customer');
        $customer = Customer::all();
        $data = compact('customer', 'url', 'title');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('customer');
        }
        $title = "Update Customer"; // Fixed the typo here
        $url = url('/customer/update') . "/" . $id;
        $data = compact('customer', 'url', 'title');

        return view('customer')->with($data);
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('customer/view');

    }
}

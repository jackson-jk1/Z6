<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booster;
use App\Models\Customers;
use App\Models\CustomerJobs;
use App\Models\Products;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = CustomerJobs::where('status','RE')->get();

        return view('admin.users.clients',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\CustomerJobs  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerJobs $customer,$id)
    {

        $customer->id_booster = $id;
        $customer->update();
        $users = CustomerJobs::where('id_booster',$customer->id_booster)->get();
        return view('booster.accept',compact('users'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerJobs  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerJobs $customer)
    {
        $customer->delete();
        return redirect()->route('booster.customers.index');
    }
}

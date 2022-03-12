<?php

namespace App\Http\Controllers;

use App\Models\orderdetails;
use App\Http\Requests\StoreorderdetailsRequest;
use App\Http\Requests\UpdateorderdetailsRequest;
use Session;

class OrderdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreorderdetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderdetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function show(orderdetails $orderdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function edit(orderdetails $orderdetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderdetailsRequest  $request
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderdetailsRequest $request, orderdetails $orderdetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderdetails $orderdetails)
    {
        //
    }
    public function seeorderDetails(){
   
        $id=Session::get("serviceId");
        $details =orderdetails::where('service_provider_id',$id)->get();
        // $details=orderdetails::all()->where('service_provider_id',$id);
     return view("pages.customerOrder.orderDetails")->with('details', $details);
       
        
    }
}

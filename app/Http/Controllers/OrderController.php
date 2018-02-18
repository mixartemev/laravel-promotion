<?php

namespace Insta\Http\Controllers;

use Insta\Acc;
use Insta\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $orders = (new Order)->latest('id')->get();
	    return view('order.index', compact('orders'));
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
	 * @param Acc $acc
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(Acc $acc)
    {
	    $acc->addOrder([
	    	'type' => \request('type'),
	    	'value' => \request('value'),
	    	'acc_id' => auth()->id(),
	    ]);

	    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \Insta\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
	    return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Insta\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Insta\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Insta\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

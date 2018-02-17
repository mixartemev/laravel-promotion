<?php

namespace Insta\Http\Controllers;

use Illuminate\Http\Response;
use Insta\Acc;
use Illuminate\Http\Request;

class AccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$accs = (new Acc)->latest('id')->get();
    	return view('acc.index', compact('accs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Insta\Acc  $acc
     * @return Response
     */
    public function show(Acc $acc)
    {
	    return view('acc.show', compact('acc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Insta\Acc  $acc
     * @return Response
     */
    public function edit(Acc $acc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Insta\Acc  $acc
     * @return Response
     */
    public function update(Request $request, Acc $acc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Insta\Acc  $acc
     * @return Response
     */
    public function destroy(Acc $acc)
    {
        //
    }
}

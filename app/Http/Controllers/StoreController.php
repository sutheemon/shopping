<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.index');
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
        $request->validate([ 
            'storeID' => 'required'
        ]);

        $products = DB::table('products')
                ->where('store_id', $request->storeID)
                ->get();

        $store = DB::table('stores')
                ->where('store_id', $request->storeID)
                ->get();

        return view('store.store', compact('products', $products))->with('store', $store);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('products')->where('product_id',$id )->delete();

        return redirect('store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function type($id, $store)
    {

        $request->validate([ 
            'storeID' => 'required'
        ]);

        $products = DB::table('products')
                ->where('store_id', $store)
                ->where('type_id', $id)
                ->get();

        $store = DB::table('stores')
                ->where('store_id', $store)
                ->get();

        // return view('store.store');
        return view('store.type', compact('products', $products))->with('store', $store);
    }
}

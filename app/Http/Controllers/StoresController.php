<?php

namespace App\Http\Controllers;

use App\Organization;
use App\Store;
use Illuminate\Http\Request;

use App\Http\Requests;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        $organizations = Organization::lists('name', 'id');

        return view('stores.index', compact('stores', 'organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::lists('name', 'id');
        return view('stores.create')->with('organization', $organizations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('StoreName')) {
            $temppin = random_int(1000,9999);

            $store = new Store;

            while ($temppin == Store::where('pin', '=', $temppin)->exists()) {
                echo $temppin . "</br>";
                $temppin = random_int(1000,9999);
            }

            $store->name = $request->StoreName;
            $store->organizationID = $request->organization;
            $store->pin = $temppin;
            $store->save();
        }

        return redirect()->action('StoresController@index');
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
        //
    }
}

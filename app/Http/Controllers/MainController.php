<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;

use App\Http\Requests;
use App\Organization;
use App\Store;
use DB;
use Illuminate\Support\Facades\Input;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $value =  $request->cookie('TimeClockLocation');

        if (!$value) {
            return view('main');
        } else {
            return view('welcome');
        }

    }

    public function cookie(CookieJar $cookieJar)
    {
        $orgPin = Input::get('orgPin');
        $storePin = Input::get('storePin');

        $org = DB::table('organizations')->where('pin', '=', $orgPin)->first();

        if ($org == null) {
            return redirect('/');
        } else {
            $store = DB::table('stores')->where('pin', '=', $storePin)->where('OrganizationID', '=', $org->id)->first();
            if ($store == null) {
                return redirect('main');
            } else {
                $cookieJar->queue(cookie('TimeClockLocation', $store->name, 10));
            }
        }

        return $data = array('status' => 'ok', 'url' => '/' );
    }

    public function login(CookieJar $cookieJar)
    {
        $orgPin = Input::get('orgPin');
        $storePin = Input::get('storePin');

        $org = DB::table('organizations')->where('pin', '=', $orgPin)->first();

        if ($org == null) {
            return redirect('/');
        } else {
            $store = DB::table('stores')->where('pin', '=', $storePin)->where('OrganizationID', '=', $org->id)->first();
            if ($store == null) {
                return redirect('main');
            } else {
                $cookieJar->queue(cookie('TimeClockLocation', $store->name, 10));
            }
        }

        return $data = array('status' => 'ok', 'url' => '/' );
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

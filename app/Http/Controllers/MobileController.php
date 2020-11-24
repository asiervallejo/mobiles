<?php

namespace App\Http\Controllers;

use App\Mobile;
use App\Range;
use App\Link;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_mobiles=Mobile::orderBy('name')->get();
        $lista_mobiles_paginate=Mobile::paginate(5);
        $lista_ranges=Range::all();
        return view('private.mobiles')
        ->with('lista_mobiles',$lista_mobiles)
        ->with('lista_ranges',$lista_ranges)
        ->with ('lista_mobiles_paginate',$lista_mobiles_paginate);
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
        //Creo el objeto:
        $mobile = new Mobile();
        $mobile->name = $request->name;
        $mobile->url_photo = $request->url_photo;
        $mobile->valuation = $request->valuation;
        $mobile->range_id = $request->opinion_range;
        //dd($request->valuation);
        //Inserto en la bbdd:
        $mobile->save();
        return redirect()->route('mobiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function show(Mobile $mobile)
    {
        $lista_links=Mobile::find($mobile->id)->links()->paginate(5);
        $lista_mobiles=Mobile::orderBy('name')->get();
        return view('private.links')
        ->with('lista_mobiles',$lista_mobiles)
        ->with('lista_links',$lista_links)
        ->with('mobile_name',$mobile->name)
        ->with('mobile_id',$mobile->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobile $mobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobile $mobile)
    {
        $mobile->name = $request->name;
        $mobile->url_photo = $request->url_photo;
        $mobile->valuation = $request->valuation;
        $mobile->range_id = $request->opinion_range;
        $mobile->update();
        return redirect()->route('mobiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobile $mobile)
    {
        $mobile = Mobile::find($mobile->id);
        $mobile->delete();
        return redirect()->route('mobiles.index');
    }
}

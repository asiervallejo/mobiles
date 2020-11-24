<?php

namespace App\Http\Controllers;

use App\Link;
use App\Mobile;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $link = new Link();
        $link->opinion_web = $request->opinion_web;
        $link->opinion_url = $request->opinion_url;
        $link->n_opinion = $request->n_opinion;
        $link->mobile_id = $request->mobile_id;
        //Inserto en la bbdd:
        $link->save();
        return redirect()->route('mobiles.show',['id'=>$link->mobile_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */

    public function show(Link $link)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $link->opinion_web = $request->opinion_web;
        $link->opinion_url = $request->opinion_url;
        $link->n_opinion = $request->n_opinion;
        $link->mobile_id = $request->mobile_id;
        $link->update();
        return redirect()->route('mobiles.show',['id'=>$link->mobile_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        $link = Link::find($link->id);
        $link->delete();
        return redirect()->route('mobiles.show',['id'=>$link->mobile_id]);
    }
    public function Mobile_Rnd()
    {
        $mobile=Mobile::inRandomOrder()->first();
        return view('public.index')
            ->with('mobile',$mobile);
    }
    public function Listar_Mobiles()
    {
        $lista_mobiles=Mobile::paginate(6);

            return view('public.mobiles')
            ->with('lista_mobiles',$lista_mobiles);
    }
    public function Listar_Links($id)
    {
        $lista_links=Mobile::find($id)->links()->get();
        return response()->json($lista_links);
        /*
            return view('public.links')
            ->with('lista_links',$lista_links);
        */
    }
}

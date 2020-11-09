<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Special;

class SpecialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Special::all();

        // dd($datas);

        return view('admin.specials.index', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.specials.create');
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
        // dd($request);

        $new_special = new Special;
        $new_special->name = $request->name;
        $new_special->description = $request->description;
        $new_special->was_price = $request->was;
        $new_special->current_price = $request->current;
        $new_special->brand = $request->brand;
        $new_special->save();

        return redirect('admin/specials');
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
        $special = Special::where('id', $id)->first();
        // dd($special);

        return view('admin.specials.edit', ['special' => $special]);
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
        // dd($request);
        $special = Special::where('id', $id)->first();
        $special->name = $request->name;
        $special->description = $request->description;
        $special->was_price = $request->was;
        $special->current_price = $request->current;
        $special->brand = $request->brand;
        $special->save();

        return redirect('admin/specials');
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
        $data = Special::where('id', $id)->first();
        $data->delete();

        return redirect('admin/specials');
    }
}

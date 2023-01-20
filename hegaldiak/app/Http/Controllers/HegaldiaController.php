<?php

namespace App\Http\Controllers;

use App\Models\Hegaldia;
use Illuminate\Http\Request;

class HegaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hegaldia::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Hegaldia::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function show(Hegaldia $hegaldia)
    {
        return $hegaldia;
    }

    public function show_hegaldia(){
        $hega = Hegaldia::all();
        return view('hegaldiak', ['hega' => $hega]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hegaldia $hegaldia)
    {
        //
    }

    public function aldatuhegaldia($id){
        $ega = Hegaldia::find($id);
        return view('hegaldiakeditatu', ['ega' => $ega]);
    }

    public function aldatuhegaldiadb(Request $request, $id){
        $egal = Hegaldia::find($id);
        $egal->irteera = $request->irteera;
        $egal->helmuga = $request->helmuga;
        $egal->egunaordua = $request->egunaordua;
        $egal->iraupena = $request->iraupena;
        $egal->save();
        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hegaldia $hegaldia)
    {
        $hegaldia->delete();
    }
}

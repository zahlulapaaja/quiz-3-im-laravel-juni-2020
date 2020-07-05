<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index() {
    	$artikel = ArtikelModel::get_all();
    	return view('artikel.index', compact('artikel'));
    }

    public function create() {
    	return view('artikel.form');
    }

    public function store(Request $request) {
    	// dd($request->all());
    	$data = $request->all();
    	unset($data["_token"]);
    	$artikel = ArtikelModel::save($data);
    	if($artikel) {
    		$artikel = ArtikelModel::get_all();
	    	return view('artikel.index', compact('artikel'));
	    }
    }

    public function show($id) {
        $artikel = ArtikelModel::get_by_id($id);
        // $user = UsersModel::get_by_id($user_id);
        return view('artikel.detail', compact('artikel'));
    }

    public function edit($id) {
        $artikel = ArtikelModel::get_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request) {
        $data = $request->all();
        $artikel = ArtikelModel::update($id, $data);
        return redirect('/artikel');
    }

    public function destroy($id) {
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }


}
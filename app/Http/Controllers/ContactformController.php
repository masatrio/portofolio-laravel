<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactform;

class ContactformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //   'nama' => 'required',
        //   'email' => 'required',
        //   'pesan' => 'required';
        // ])

        $data = new Contactform;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pesan = $request->pesan;
        $data->save();
        return view('contact');
    }
}

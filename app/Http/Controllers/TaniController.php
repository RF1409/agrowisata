<?php

namespace App\Http\Controllers;

use App\Models\Tani;
use App\Models\Cettani;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Mail\SendEmail2;

class TaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tanis.index', [
            'tanis' => Tani::where('user_id', auth()->user()->id)->get()
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tanis.create', [
            'cettanis' => Cettani::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'name_panen' => 'required|max:255',
            'cettani_id' => 'required',
            'jumlah_panen' => 'required',
            'satuan' => 'required'
            // 'satuan1' => 'required'

        ]);

        $validateData['user_id'] = auth()->user()->id;

        Tani::create($validateData);

        $isi_email = [
            'title' => 'Hasil Panen NEW',
            'body' => auth()->user()->name,
            'data' => 'Data Hasil Panen'
        ];

        $tujuan = 'koeswidayanto1@gmail.com';
        // $wakil = 'alfaathir1409@gmail.com';

        Mail::to($tujuan)->send(new SendEmail($isi_email));
        // Mail::to($wakil)->send(new SendEmail2($isi_email));

        return redirect('/dashboard/tanis')->with('success', 'Data Hasil Panen Berhasil Di Tambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tani  $tani
     * @return \Illuminate\Http\Response
     */
    public function show(Tani $tani)
    {
        return view('dashboard.tanis.show', [
            'tani' => $tani
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tani  $tani
     * @return \Illuminate\Http\Response
     */
    public function edit(Tani $tani)
    {
        return view('dashboard.tanis.edit', [
            'tani' => $tani,
            'cettanis' => Cettani::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tani  $tani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tani $tani)
    {
        $validateData = $request->validate([
            'name_panen' => 'required|max:255',
            'cettani_id' => 'required',
            'jumlah_panen' => 'required',
            'satuan' => ''
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Tani::where('id', $tani->id)
            ->update($validateData);

        return redirect('/dashboard/tanis')->with('success', 'Data Hasil Panen Berhasil di Update!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tani  $tani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tani $tani)
    {
        Tani::destroy($tani->id);

        return redirect('/dashboard/tanis')->with('success', 'Data Hasil Panen Berhasil di Hapus!');
    }
}

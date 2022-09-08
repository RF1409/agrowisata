<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Cettani;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Mail\SendEmail2;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.transaksis.index', [
            'transaksis' => Transaksi::where('user_id', auth()->user()->id)->get()
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaksis.create', [
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
            'product' => 'required|max:255',
            'cettani_id' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'status' => 'required'


        ]);

        $validateData['user_id'] = auth()->user()->id;

        Transaksi::create($validateData);

        $isi_email = [
            'title' => 'Data Transaksi NEW',
            'body' => auth()->user()->name,
            'data' => 'Data Transaksi'
        ];

        $tujuan = 'koeswidayanto1@gmail.com';

        Mail::to($tujuan)->send(new SendEmail2($isi_email));


        return redirect('/dashboard/transaksis')->with('success', 'Data Transaksi Berhasil Di Tambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('dashboard.transaksis.show', [
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('dashboard.transaksis.edit', [
            'transaksi' => $transaksi,
            'cettanis' => Cettani::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validateData = $request->validate([
            'product' => 'required|max:255',
            'cettani_id' => 'required',
            'stok' => 'required',
            'satuan' => '',
            'harga' => 'required',
            'status' => ''


        ]);

        $validateData['user_id'] = auth()->user()->id;

        Transaksi::where('id', $transaksi->id)
            ->update($validateData);

        return redirect('/dashboard/transaksis')->with('success', 'Data Transaksi Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        Transaksi::destroy($transaksi->id);

        return redirect('/dashboard/transaksis')->with('success', 'Data Transaksi Berhasil Di Hapus!');
    }
}

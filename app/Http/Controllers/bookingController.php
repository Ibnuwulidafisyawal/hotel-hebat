<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Reservasi;
use App\Models\Tipe_kamar;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tipe_kamar $TipeKamar)
    {
        $TipeKamar = Tipe_kamar::all();
        return view('booking.create',compact('TipeKamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create',compact('TipeKamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan'=>'required|max:100',
            'email'=>'required|email|unique:users,email',
            'no_hp'=>'required|max:15',
            'tipe_kamar_id'=>'required|max:15',
            'jumlah_kamar'=>'required|max:10',
            
            'nama_tamu'=>'required|max:50',
            'tgl_check_in'=>'required',
            'tgl_check_out'=>'required',

        ]);

        $pemesanan = new Pemesanan();
        $reservasi = new Reservasi;

        $reservasi->nama_tamu = $request->input('nama_tamu');
        $reservasi->tgl_check_in = $request->input('tgl_check_in');
        $reservasi->tgl_check_out = $request->input('tgl_check_out');

        if ($reservasi->save()) {
            $pemesanan = new Pemesanan();
            $pemesanan->nama_pemesan = $request->input('nama_pemesan');
            $pemesanan->email = $request->input('email');
            $pemesanan->no_hp = $request->input('no_hp');
            $pemesanan->tipe_kamar_id = $request->input('tipe_kamar_id');
            $pemesanan->jumlah_kamar = $request->input('jumlah_kamar');
            $pemesanan->reservasi_id = $reservasi->id;

            $pemesanan->save();
        }
        
        // $reservasi->save();

        // Pemesanan::create($pemesanan);
        // Reservasi::create($reservasi);
        return redirect()->route('bookingPemesanan.index')->with('success', 'Berhasil menyimpan ! ');
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

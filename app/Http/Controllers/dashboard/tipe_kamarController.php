<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\Tipe_kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class tipe_kamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipeKamar = Tipe_kamar::latest()->paginate(5);
        $tipeKamar = DB::table('tb_tipe_kamar')
                        ->select('tb_tipe_kamar.*')
                        ->leftJoin('tb_fasilitas', 'tb_fasilitas.id', '=', 'tb_tipe_kamar.fasilitas_id')
                        ->get();
                return view('dashboard.tipe_kamar.index', compact('tipeKamar'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Fasilitas $fasilitas)
    {
        $fasilitas = Fasilitas::all();
        return view('dashboard.tipe_kamar.create',compact('fasilitas',$fasilitas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tipe_kamar $tipeKamar)
    {

        $request->validate([
            'tipe_kamar'=>'required',
            'jumlah_kamar'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fasilitas_id'=>'required'
            
         ]);  
    
         $input = $request->all();
    
            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
    
            }else{
                unset($input['image']);
            }
    
         Tipe_kamar::create($input);
         return redirect()->route('tipe_kamar.index')->with('Success','Berhasil input');
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
    public function edit(Fasilitas $fasilitas,$id)
    {
        $tipeKamar = Tipe_kamar::findOrFail($id);
        $fasilitas = Fasilitas::all();
        return view('dashboard.tipe_kamar.edit',compact('tipeKamar','fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tipe_kamar $tipeKamar)
    {
        $request->validate([
            'tipe_kamar'=>'required',
            'jumlah_kamar'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fasilitas_id'=>'required'
         ]);  
         $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
    
            }else{
                unset($input['image']);
            }

         $tipeKamar->update($input);
         return redirect()->route('tipe_kamar.index')->with('success','Product updated successfully');
                      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe_kamar $tipeKamar)
    {
        $tipeKamar->delete();
        return redirect()->route('tipe_kamar.index')->with('success','Product deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;

use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(5);
        return view('dashboard.fasilitas.index', compact('fasilitas'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Fasilitas $fasilitas)
    {
     $request->validate([
        'nama_fasilitas'=>'required',
        'keterangan'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

     Fasilitas::create($input);
     return redirect()->route('fasilitas.index')->with('Success','Berhasil input');
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
        $fasilitas = Fasilitas::findOrFail($id);
        return view('dashboard.fasilitas.edit',compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilitas,$id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $request->validate([
            'nama_fasilitas'=>'required',
            'keterangan'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

         $fasilitas->update($input);
         return redirect()->route('fasilitas.index')->with('success','Product updated successfully');
                      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Fasilitas $fasilitas )
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index')->with('Success','Berhasil delete');
        
    }
}

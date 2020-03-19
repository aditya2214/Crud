<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forms;
use DB;

class formsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $forms= forms::where('title', 'like', "%{$request->get('cari')}%")
            ->orWhere('desc','like',"%{$request->get('cari')}%")
            ->orderBy('id','DESC')
            ->paginate(4);

        return view('forms/index',compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title'=>'min:4' 
        ]);
        forms::create($request->all());
        return redirect()->route('forms.create')->with('pesan','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forms = forms::find($id);
        return view('forms.show',compact('forms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forms=forms::findOrFail($id);
        return view('forms.edit',compact('forms'));
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
        $this->validate($request,[
            'title'=>'min:4' 
         ]);
        $forms=forms::findOrFail($id);
        $forms->update($request->all());
        return redirect()->route('forms.index')->with('pesan','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forms=forms::findOrFail($id);
        $forms->delete();
        return redirect()->route('forms.index')->with('pesan','Data Berhasil Dihapus');
    }

    // public function cari(Request $request)
	// {
    //     $cari = $request->cari;
    //     $forms = DB::table('forms')->where('forms','like',"%".$cari."%")->paginate(4);
    //     return view('forms.index',compact('forms'));
 
    // }
    
    
        public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("forms")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
        return view('forms/index',compact('forms'));

    }
    
}

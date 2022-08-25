<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKonsumenRequest;
use App\Http\Requests\UpdateKonsumenRequest;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        
        $konsumens = Konsumen::latest()->paginate(5);
        return view('konsumen.index',[
            'konsumens' => $konsumens
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsumen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKonsumenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKonsumenRequest $request)
    {
        $konsumen = Konsumen::create($request->validated());
        $konsumen->nik = $request->nik;
        $konsumen->name = $request->name;
        $konsumen->address = $request->address;
        $konsumen->save();

        return redirect()->route('konsumen.index')
            ->with('success','Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function show(Konsumen $konsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konsumen = Konsumen::findOrFail($id);
        return view('konsumen.edit', compact('konsumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKonsumenRequest  $request
     * @param  \App\Models\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKonsumenRequest $request, $id)
    {

        $konsumen = Konsumen::findOrFail($id);
        $konsumen->update($request->validated());
        return redirect()->route('konsumen.index')
            ->with('success', 'Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Konsumen $konsumen)
    public function destroy($id)
    {
        $konsumen = Konsumen::findOrFail($id);
        $konsumen->delete();
        return redirect()->route('konsumen.index')
            ->with('success', 'Berhasil Dihapus!');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $konsumens = Konsumen::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('konsumen.index', compact('konsumens'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

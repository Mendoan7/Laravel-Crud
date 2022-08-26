<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKonsumenRequest;
use App\Http\Requests\UpdateKonsumenRequest;

class KonsumenController extends Controller
{

    public function index(Request $request)
    {
        $pagination = 5;
        $konsumens = Konsumen::latest()->paginate(5);

        return view('konsumen.index',[
            'konsumens' => $konsumens
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create()
    {
        return view('konsumen.create');
    }

    public function store(StoreKonsumenRequest $request)
    {
        $konsumen = Konsumen::create($request->validated());

        return redirect()->route('konsumen.index')
            ->with('success','Data Berhasil Dibuat!');
    }

    public function show(Konsumen $konsumen)
    {
        //
    }

    public function edit($id)
    {
        $konsumen = Konsumen::find($id);
        return view('konsumen.edit', compact('konsumen'));
    }

    public function update(UpdateKonsumenRequest $request, $id)
    {

        $konsumen = Konsumen::find($id);
        $konsumen->update($request->validated());

        return redirect()->route('konsumen.index')
            ->with('success', 'Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $konsumen = Konsumen::find($id);
        $konsumen->delete();

        return redirect()->route('konsumen.index')
            ->with('success', 'Berhasil Dihapus!');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $konsumens = Konsumen::where('name', 'like', "%" . $keyword . "%")->paginate(5);

        return view('konsumen.index', compact('konsumens'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

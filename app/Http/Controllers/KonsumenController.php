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
        // $konsumens = Konsumen::all();
        // return view('konsumen.index',[
        //     'konsumens' => $konsumens
        // ]);

        $pagination = 5;
        $konsumens = Konsumen::when($request->keyword, function ($query) use ($request) {
            $query->where('name','like',"%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);

        $konsumens = Konsumen::latest()->paginate(5);
        return view('konsumen.index',[
            'konsumens' => $konsumens
        ]);
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
        // $konsumen = new Konsumen;
        // $konsumen->nik = $request->nik;
        // $konsumen->name = $request->name;
        // $konsumen->address = $request->address;
        // $konsumen->save();

        // return redirect()->route('konsumen.index');

        $this->validate($request, [
            'nik' => 'required|string|max:16',
            'name' => 'required',
            'address' => 'required'
        ]);

        $konsumen = Konsumen::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'address' => $request->address,
        ]);

        if ($konsumen) {
            return redirect()
                ->route('konsumen.index')
                ->with([
                    'success' => 'Data Baru Berhasil Dibuat!!!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data Gagal Dibuat!!! '
                ]);
        }
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
        // return view('konsumen.edit', [
        //     'konsumen' =>$konsumen
        // ]);
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
        $this->validate($request, [
            'nik' => 'required|string|max:16',
            'name' => 'required',
            'address' => 'required'
        ]);

        $konsumen = Konsumen::findOrFail($id);

        $konsumen->update([
            'nik' => $request->nik,
            'name' => $request->name,
            'address' => $request->address,
        ]);

        if ($konsumen) {
            return redirect()
                ->route('konsumen.index')
                ->with([
                    'success' => 'Data Berhasil di Update!!!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Update Gagal!!!'
                ]);
        }
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
        // return redirect()->route('konsumen.index');
        if ($konsumen) {
            return redirect()
                ->route('konsumen.index')
                ->with([
                    'success' => 'Data Berhasil Dihapus !'
                ]);
        } else {
            return redirect()
                ->route('konsumen.index')
                ->with([
                    'error' => 'Data Gagal Dihapus !'
                ]);
        }
    }
}

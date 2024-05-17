<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $penulis = Penulis::orderBy('id', 'desc')->get();
        return view('penulis.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_penulis => required|max:255',
            'bio => required',
        ]);

        $penulis = new Penulis();
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.show',compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_penulis' => 'required|max:255',
            'bio' => 'required',
        ]);

        $penulis = Penulis::findOrFail($id);
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')
            ->with('success', 'data berhasil di hapus');
    }
}

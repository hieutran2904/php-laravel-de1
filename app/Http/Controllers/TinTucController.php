<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use App\Models\TheLoai;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tintuc = TinTuc::paginate(5);
        return view('tintuc.index', compact('tintuc'))->with('i', (request()->input('page', 1) - 1) * 5,[
            'theloais' => TheLoai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tintuc.create', ['theloais' => TheLoai::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TinTuc::create($request->all());
        return redirect()->route('tintuc.list')->with('success', 'TinTuc created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tintuc = TinTuc::find($id);
        return view('tintuc.edit', compact('tintuc'), ['theloais' => TheLoai::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        TinTuc::find($id)->update($request->all());
        return redirect()->route('tintuc.list')->with('success', 'TinTuc updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        TinTuc::find($id)->delete();
        return back();
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $tintuc = TinTuc::where('tieude', 'like', '%' . $search . '%')->paginate(5);
        return view('tintuc.index', compact('tintuc'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

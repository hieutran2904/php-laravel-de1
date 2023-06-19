<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLoai;
use Brian2694\Toastr\Facades\Toastr;

class TheLoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $theloai = TheLoai::paginate(5);
        return view('theloai.index', compact('theloai'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('theloai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TheLoai::create($request->all());
        return redirect()->route('theloai.list')->with('success', 'TheLoai created successfully');
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
        $theloai = TheLoai::find($id);
        return view('theloai.edit', compact('theloai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $theloai = TheLoai::find($id);
        $theloai->update($request->all());
        return redirect()->route('theloai.list')->with('success', 'TheLoai updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // alert confirm
        TheLoai::find($id)->delete();
        // return redirect()->route('theloai.list')->with('success', 'TheLoai deleted successfully');
        return back();
    }

    //search
    public function search(Request $request)
    {
        $search = $request->get('search');
        $theloai = TheLoai::where('tentheloai', 'like', '%' . $search . '%')->paginate(5);
        return view('theloai.index', compact('theloai'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

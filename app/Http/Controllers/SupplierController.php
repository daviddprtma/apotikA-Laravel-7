<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use PDOException;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Supplier::all();
        return view('supplier.index',['data' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Supplier();
        $data->name = $request->get('namaSupplier');
        $data->address = $request->get('alamatSupplier');
        $data -> save();
        return redirect() -> route('suppliers.index') -> with('status','Supplier berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
        $data = $supplier;
        return view('supplier.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
        $supplier->name = $request->get('namaSupplier');
        $supplier->address = $request->get('alamatSupplier');
        $supplier->save();
        return redirect()->route('suppliers.index')->with('status','Supplier berhasil diupdate :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
       try{
            $supplier->delete();
            return redirect()->route('suppliers.index')->with('status','Data supplier berhasil dihapus');
       }
       catch(\PDOException $e){
            $msg = "Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan dengan relasi yang lain";
            return redirect()->route('suppliers.index')->with('error',$msg);
       }
    }
}

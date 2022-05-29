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
        $file = $request->file('logo');
        $imgFolder='images';
        $imgFile=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $data->logo = $imgFile;
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
        $this ->authorize('delete-permission',$supplier);
       try{
            $supplier->delete();
            return redirect()->route('suppliers.index')->with('status','Data supplier berhasil dihapus');
       }
       catch(\PDOException $e){
            $msg = "Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan dengan relasi yang lain";
            return redirect()->route('suppliers.index')->with('error',$msg);
       }
    }

    public function getEditForm(Request $request){
        $id = $request->get('id');
        $data = Supplier::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('supplier.getEditForm',compact('data'))->render()
        ),200);
    }

    public function getEditForm2(Request $request){
        $id = $request->get('id');
        $data = Supplier::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('supplier.getEditForm2',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request){
        $id = $request->get('id');
        $supplier = Supplier::find($id);
        $supplier->name=$request->get('namaSupplier');
        $supplier->address=$request->get('alamatSupplier');
        $supplier->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'supplier data updated'
        ),200);
    }

    public function deleteData(Request $request)
    {
        //
       try{
            $id=$request->get('id');
            $supplier = Supplier::find($id);
            $supplier->delete();
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'supplier data deleted'
            ),200);
       }
       catch(\PDOException $e){
        return response()->json(array(
            'status'=>'error',
            'msg'=>'supplier is not deleted. It may be used in the product'
        ),200);
       }
    }

    public function saveDataField(Request $request){
        
        $id= $request->get('id');
        $fname = $request->get('fname');
        $value = $request->get('value');

        $supplier = Supplier::find($id);
        $supplier->$fname = $value;
        $supplier -> save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'sukses mengubah data ' .$fname.' supplier'
        ),200);
    }

    public function changeLogo(Request $request)
    {
        //
        $id=$request->get("id");
        $data=Supplier::find($id);
        $file=$request->file('logo');
        $imgFolder='images';
        $imgFile=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $data->logo=$imgFile;
        $data -> save();
        return redirect() -> route('suppliers.index') -> with('status','Logo berhasil diubah');
    }
}

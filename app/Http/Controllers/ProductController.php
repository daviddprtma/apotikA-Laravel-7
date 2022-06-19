<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //query dengan menngunakan query raw
        // $queryRaw = DB::select(DB::raw("select * from products"));

        // query menggunakan query builder
        $result = Product::all();
        $cat = Category::all();
        $sup = Supplier::all();
        return view('product.index',['data' => $result,'cat'=>$cat,'sup'=> $sup]);

        // query dengan menggunakan query eloquent model
        // $queryEloquent = Product::all();

        // cara 1 dengan sintaks compact
        // return view('product.index',compact('queryBuilder'));

        // cara 2 dengan sintaks array
        // return view('product.index',['data'=>$queryBuilder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = Category::all();
        $sup = Supplier::all();
        return view('product.create',['cat'=>$cat, 'sup'=>$sup]);
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
        $data = new Product();
        $file = $request ->file('foto');
        $imgFolder = 'images';
        $imgFile = time()."_".$file->getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $data->foto = $imgFile;
        $data->product_name = $request->get('product_name');
        $data->product_price = $request->get('product_price');
        $data->category_id = $request->get('category_id');
        $data ->supplier_id = $request->get('supplier_id');
        $data -> save();
        return redirect()->route('products.index')->with('status','Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //debug program gunakan method dd()
        // dd($product);
        return view('product.show',['data' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $data = $product;
        $cat = Category::all();
        $sup = Supplier::all();
        return view('product.edit',['data'=>$data, 'cat'=>$cat, 'sup'=>$sup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->product_name = $request->get('product_name');
        $product->product_price = $request->get('product_price');
        $product->category_id = $request->get('category_id');
        $product->supplier_id = $request->get('supplier_id');
        $product->save();
        return redirect()->route('products.index')->with('status','Products berhasil diupdate :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $this->authorize('delete-product');
        try{
            $product->delete();
            return redirect()->route('products.index')->with('status','Data Produk berhasil dihapus');
       }
       catch(\PDOException $e){
            $msg = "Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan dengan relasi yang lain";
            return redirect()->route('products.index')->with('error',$msg);
       }
    }

    public function getEditProduct(Request $request){
        $cat = Category::all();
        $sup = Supplier::all();
        $id = $request->get('id');
        $data = Product::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('product.getEditProduct',['data' => $data,'cat'=>$cat,'sup'=> $sup])->render()
        ),200);
    }

    public function getEditProduct2(Request $request){
        $cat = Category::all();
        $sup = Supplier::all();
        $id = $request->get('id');
        $data = Product::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('product.getEditProduct2',['data' => $data,'cat'=>$cat,'sup'=> $sup])->render()
        ),200);
    }

    public function saveData(Request $request){
        $id = $request->get('id');
        $product = Product::find($id);
        $product->product_name=$request->get('product_name');
        $product->product_price=$request->get('product_price');
        $product->category_id = $request->get('category_id');
        $product->supplier_id = $request->get('supplier_id');
        $product->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'product data updated'
        ),200);
    }

    public function deleteData(Request $request)
    {
        //
       try{
            $id=$request->get('id');
            $product = Product::find($id);
            $product->delete();
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Product data deleted'
            ),200);
       }
       catch(\PDOException $e){
        return response()->json(array(
            'status'=>'error',
            'msg'=>'Product is not deleted.'
        ),200);
       }
    }

    public function changeFoto(Request $request)
    {
        //
        $id=$request->get("id");
        $data=Product::find($id);
        $file=$request->file('foto');
        $imgFolder='images';
        $imgFile=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $data->foto=$imgFile;
        $data -> save();
        return redirect() -> route('products.index') -> with('status','Logo berhasil diubah');
    }

}

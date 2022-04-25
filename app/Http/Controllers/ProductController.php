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
        return view('product.index',['data' => $result]);

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
    }
}

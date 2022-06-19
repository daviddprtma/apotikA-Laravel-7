<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $queryBuilder = DB::table('medicines') -> get();
        // menggunakan eloquent Model
        $result = Medicine::all();
        return view('medicine.index',['data' => $result]);
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
        $med = Medicine::all();
        return view('medicine.create',['cat'=>$cat,'med'=>$med]);
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
        $data = new Medicine();
        $data->name = $request->get('namaObat');
        $data->form = $request->get('formObat');
        $data->formula = $request->get('formulaObat');
        $data->price = $request->get('priceObat');
        $data->description = $request->get('descriptionObat');
        $data->category_id = $request->get('category_id');
        $data -> faskes1 =  $request->has('faskes_1')?1:0;
        $data -> faskes2 =  $request->has('faskes_2')?1:0;
        $data -> faskes3 =  $request->has('faskes_3')?1:0;
        $data->image = $request->get('gambarObat');
        $data->save();
        return redirect()->route('medicines.index')->with('status','Medicine berhasil ditambahkan :)');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
        $data = $medicine;
        return view('medicine.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
        $data = $medicine;
        $cat = Category::all();
        return view('medicine.edit',compact('data','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
        $this->authorize('change-medicine',$medicine);
        $medicine->name = $request->get('namaObat');
        $medicine->form = $request->get('formObat');
        $medicine->formula = $request->get('formulaObat');
        $medicine->price = $request->get('priceObat');
        $medicine->description = $request->get('descriptionObat');
        $medicine->category_id = $request->get('category_id');
        $medicine->image = $request->get('gambarObat');
        $medicine->save();
        return redirect()->route('medicines.index')->with('status','Medicine berhasil diupdate :)');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
        try{
            $medicine->delete();
            return redirect()->route('medicines.index')->with('status','Data Medicine berhasil dihapus');
       }
       catch(\PDOException $e){
            $msg = "Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan dengan relasi yang lain";
            return redirect()->route('medicines.index')->with('error',$msg);
       }
    }

    public function coba1(){
        // query builder filter
        // $result = DB::table('medicines')
        //         ->where('name','like','%fen%')
        //         -> get();

        // group by filter
        // $result = DB::table('medicines')
        //         -> select('name')
        //         ->groupBy('name')
        //         -> having('name','>',1)
        //         -> get();

        // aggregate count
        // $result = DB::table('medicines')
        //         -> count();
        // result 16

        // aggregate max
        // $result = DB::table('medicines') -> max('price');
        // result 35.000;

        // aggregate + filter
        // $result = DB::table('medicines')
        //           -> where('price','<',20000)
        //           -> count();
        // result 11

        // // join
        // $result = DB::table('medicines')
        //           -> join('categories','medicines.category_id','=','categories.id')
        //           -> orderBy('price','DESC')
        //           ->get();

        // // Eloquent
        // $result = Medicine::where('price','>',20000)
        //          -> orderBy('price',"DESC")
        //          -> get();

        // // ambil 1 data id
        // $result = Medicine::find(3);

        // ambil max price
        $result = Medicine::max('price');
       dd($result);
    }

    public function coba2(){
        // query 1 table
        // query builder categories
        $result = DB::table('categories')
                  -> get();

        // query eloquent categories
        $result = Category::all();

        // query builder medicines
        $result = DB::table('medicines')
                -> select('name','formula','price')
                -> get();

          // query eloquent medicines
        $result = Medicine::select('name','formula','price')
                  -> get();

        // query inner join 2 tables
        // query builder medicines & category
        $result = DB::table('medicines')
                  -> select('medicines.name','medicines.formula','categories.category_name')
                  -> join('categories','medicines.category_id','=','categories.id')
                  -> get();

        // query eloquent medicines & category
        $result = Medicine::select('medicines.name','medicines.formula','categories.category_name')
                  -> join('categories','medicines.category_id','=','categories.id')
                  -> get();

        // aggregation sum & count dengan 2 tabel
        // query builder medicines & category
        $result = DB::table('categories')
                  -> select('medicines.category_id')
                  -> join('medicines', 'medicines.category_id','=','categories.id')
                  -> count();
        // query eloquent medicines & category
        $result = Category::select('medicines.category_id')
                  ->join('medicines', 'medicines.category_id','=','categories.id')
                  ->count();

        // query builder medicines & category
        // Tampilkan nama kategori yang tidak memiliki data medicines satupun
        $result = DB::table('categories')
                  -> select('category_name')
                  ->whereNotIn('id', DB::table('medicines') ->select('category_id'))
                  -> get();

         // query eloquent medicines & category
         $result = Category::select('category_name')
                   ->whereNotIn('id', DB::table('medicines') ->select('category_id'))
                   -> get();

        // query builder medicines & category
        // Tampilkan rata-rata harga setiap kategori obat. Bila tidak ada obat maka berikan 0
        $result = DB::table('medicines as m')
                  ->select('c.id','c.category_name',DB::raw('IFNULL(avg(m.price),0) as RataRataHarga'))
                  ->rightJoin('categories as c','m.category_id','=','c.id')
                  ->groupBy('c.id','c.category_name')
                  ->get();

         // query eloquent medicines & category
            $result = Medicine:: select('c.id','c.category_name',DB::raw('IFNULL(avg(medicines.price),0) as RataRataHarga'))
                      ->rightjoin('categories as c','c.id','=','medicines.category_id')
                      ->groupBy('c.id','c.category_name')
                      ->get();

        // query builder medicines & category
        // 4. Tampilkan kategori obat yang memiliki 1 produk medicines saja
            $result = DB::table('categories as c')
                      -> select('c.category_name')
                      ->join('medicines as m','m.category_id','=','c.id')
                      ->groupBy('c.category_name')
                      ->having(DB::raw('count(m.category_id)'),'=',1)
                      ->get();

        // query eloquent medicines & category
              $result = Category::select('categories.category_name')
                        ->join('medicines as m','m.category_id','=','categories.id')
                        ->groupBy('categories.category_name')
                        ->having(DB::raw('count(m.category_id)'),'=',1)
                        ->get();

        // query builder medicines
        // Tampilkan obat yang memiliki satu form
            $result = DB::table('medicines as m')
                      ->select('m.name')
                      ->groupBy('m.name')
                      ->having(DB::raw('count(m.form)'),'=',1)
                      ->get();

        // query eloquent medicines
        $result = Medicine::select('name')
                  ->groupBy('name')
                  ->having(DB::raw('count(form)'),'=',1)
                  ->get();

        // query builder medicines & category
        // Tampilkan kategori dan nama obat yang memiliki harga termahal
        $result = DB::table('medicines as m')
                  ->select('m.name','c.category_name','m.price')
                  ->join('categories as c','c.id','=','m.category_id')
                  ->where('m.price',DB::raw('(select max(price) from medicines)'))
                  ->get();

        // query eloquent medicines
        $result = Medicine::select('medicines.name','c.category_name','medicines.price')
                  ->join('categories as c','c.id','=','medicines.category_id')
                  ->where('medicines.price',DB::raw('(select max(price) from medicines)'))
                  ->get();
        dd($result);
    }

    public function obattermahal(){
        $hasilTermahal = Medicine::orderBy('price','DESC')->first();
        return view('report.maxpricemedicine',['data'=>$hasilTermahal]);
    }

    public function showInfo(){
        $obatTermahal = Medicine::orderBy('price','DESC')->first();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
                     Did you know? <br> The most expensive product is ".$obatTermahal -> name. " with price Rp. ".$obatTermahal -> price."</div>"
        ),200);
    }

    public function front_index(){
        $product = Medicine::all();
        return view('frontend.product',compact('product'));
    }

    public function addToCart($id){

        $p = Medicine::find($id);
        $cart = session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id]=[
                "name"=>$p->name,
                "quantity"=>1,
                "price"=>$p->price,
                "image"=>$p->image
            ];
        }
        else{
            $cart[$id]['quantity']++;
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success', 'Product ' . $cart[$id]['name'] . " jumlah " . $cart[$id]['quantity']. " berhasil ditambahkam");

    }

    public function cart(){
        return view('frontend.cart');
    }

    public function mostbuymedicine(){
        $data = Medicine:: select('medicines.name','medicines.form','medicines.price',DB::raw('IFNULL(sum(t.quantity),0) as totalbeli'))
        ->rightjoin('medicine_transaction as t','t.medicine_id','=','medicines.id')
        ->groupBy('id')
        ->orderBy('totalbeli','DESC')
        ->take(5)
        ->get();

        return view('report.mostbuymedicine',['data'=>$data]);
    }

}

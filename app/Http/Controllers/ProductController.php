<?php

namespace App\Http\Controllers;


use Illuminate\Pagination\Paginator;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Supplier;
use Carbon\Carbon;
use PDF;

class ProductController extends Controller
{
    
    public function index()
    {
        //   $product = Product::all();
            
        $product = Product::simplePaginate(5);
        $supplier = Supplier::all(); 
    //    $product = Product::orderBy('id','desc')->paginate(1);
        
      //  $employees = DB::table('employees')
        //->leftJoin('city', 'employees.city_id', '=', 'city.id')
        //->leftJoin('department', 'employees.department_id', '=', 'department.id')
        //->leftJoin('state', 'employees.state_id', '=', 'state.id')
        //->leftJoin('country', 'employees.country_id', '=', 'country.id')
        //->leftJoin('division', 'employees.division_id', '=', 'division.id')
        //->select('employees.*', 'department.name as department_name', 'department.id as department_id', 'division.name as division_name', 'division.id as division_id')
      

      return view('product/index', ['product' => $product,'supplier' => $supplier]);
        
        //return view('product.index')->($product);
      //   return view('product.index')->with('product', $product);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            
        $product = Product::simplePaginate(5);
        $supplier = Supplier::all(); 
        return view('product/create', ['product' => $product,'supplier' => $supplier]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Product::create([
            'nama_produk' => $request['nama_produk'],
            'type_produk' => $request['type_produk'],
            'jumlah_produk' => $request['jumlah_produk'],
            'nama_supplier' => $request['nama_supplier'],
             'status_permintaan' => 'Menunggu',
            'tanggal_request' => Carbon::now(),
         
         ]);
//          DB::table('suppliers')->insert(array("nama_supplier"=>$request['nama_supplier'], "alamat_supplier"=>'Surabaya',"status_permintaan" => 'Belum Dikonfirmasi'));
        return redirect()->intended('product');
    }
                                         
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $product = Product::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($product == null || count($product) == 0) {
            return redirect()->intended('/product');
        }

        return view('product/edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $product = Product::findOrFail($id);
       
        $input = [
            'nama_produk' => $request['nama_produk'],
            'type_produk' => $request['type_produk'],
            'jumlah_produk' => $request['jumlah_produk'],
            'nama_supplier' => $request['nama_supplier'],
            'tanggal_request' => Carbon::now()
        ];
        Product::where('id', $id)
            ->update($input);
        
        return redirect()->intended('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        Product::where('id', $id)->delete();
         return redirect()->intended('/product');

    }
    
    public function getPdf()
    {
        $product = Product::all();
        $supplier = Supplier::all(); 
        $pdf = PDF::loadView('pdf/product',compact('product'))
                    ->setPaper('a4');
     
        return $pdf->stream();
    }
}

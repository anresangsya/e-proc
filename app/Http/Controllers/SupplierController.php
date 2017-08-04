<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use PDF;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               
     //   $supplier = 'ASD';
//      $suppliers = DB::table('suppliers')->all();
        
        $supplier = Supplier::simplePaginate(5);
        
    //    $product = Product::orderBy('id','desc')->paginate(1);
        
      //  $employees = DB::table('employees')
        //->leftJoin('city', 'employees.city_id', '=', 'city.id')
        //->leftJoin('department', 'employees.department_id', '=', 'department.id')
        //->leftJoin('state', 'employees.state_id', '=', 'state.id')
        //->leftJoin('country', 'employees.country_id', '=', 'country.id')
        //->leftJoin('division', 'employees.division_id', '=', 'division.id')
        //->select('employees.*', 'department.name as department_name', 'department.id as department_id', 'division.name as division_name', 'division.id as division_id')
      

   return view('/supplier/index', ['supplier' => $supplier]);
// return view('supplier')->with('supplier', $supplier);
        //echo "aaa";
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        Supplier::create([
            'nama_supplier' => $request['nama_supplier'],
            'alamat_supplier' => $request['alamat_supplier'],
            'no_telepon' => $request['no_telepon']
         
         ]);
//          DB::table('suppliers')->insert(array("nama_supplier"=>$request['nama_supplier'], "alamat_supplier"=>'Surabaya',"status_permintaan" => 'Belum Dikonfirmasi'));
        return redirect()->intended('supplier');
    }
                      
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            $supplier = Supplier::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($supplier == null || count($supplier) == 0) {
            return redirect()->intended('/supplier');
        }

        return view('supplier/edit', ['supplier' => $supplier]);
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
        
        $supplier = Supplier::findOrFail($id);
       
        $input = [
            'nama_supplier' => $request['nama_supplier'],
            'alamat_supplier' => $request['alamat_supplier'],
            'no_telepon' => $request['no_telepon']
        ];
        Supplier::where('id', $id)
            ->update($input);
        
        return redirect()->intended('/supplier');
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        Supplier::where('id', $id)->delete();
         return redirect()->intended('/supplier');
    }
    
       public function getPdf()
    {
        $supplier = Supplier::all(); 
        $pdf = PDF::loadView('pdf/supplier',compact('supplier'))
                    ->setPaper('a4');
     
        return $pdf->stream();
    }
//       public function getPdf()
//    {
//        $product = Product::all();
//        $supplier = Supplier::all(); 
//        $pdf = PDF::loadView('pdf',compact('product','supplier'))
//                    ->setPaper('a4');
//     
//        return $pdf->stream();
//    }
}

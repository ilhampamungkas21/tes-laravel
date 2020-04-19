<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelCompanies;
use App\ModelEmployee;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $data= ModelCompanies::all();
        return view('admin.index')->with('data',$data);
    }






    public function create_companies()
    {

        return view('admin.perusahaan.create_companies');
    }





    public function storecompanies(Request $request)
    {
        $this->validate($request,[

        'nama'              => 'required',
        'email'             => 'required',
        'website'           => 'required',
        'logo'              => 'required|image|mimes:png|max:2048'
        ]);

        
        $tambah = new ModelCompanies();
        $tambah ->nama           = $request['nama'];
        $tambah ->email       = $request['email'];
        $tambah ->website       = $request['website'];


        $file       = $request->file('logo');                 
        $fileName   = $file->getClientOriginalName();           
        $request->file('logo')->move("storage/app/company/", $fileName);    
        $tambah->logo = $fileName;


        $tambah ->save();

        return redirect('/')->with('message', 'Berhasil Input!');
    }




    public function edit_companies($id)
    {

        $edit = DB::table('companies')->where('id', $id )->first();
        return view('admin.perusahaan.edit_companies')
        ->with('edit', $edit);    
    }


    public function update_companies(Request $request,$id)
    {
        $this->validate($request,[

        'nama'              => 'required',
        'email'             => 'required',
        'website'           => 'required',
        'logo'              => 'required|image|mimes:png|max:2048'
        ]);

        
       $update = ModelCompanies::where('id',$id)->first();
        $update ->nama           = $request['nama'];
        $update ->email       = $request['email'];
        $update ->website       = $request['website'];


        $file       = $request->file('logo');                 
        $fileName   = $file->getClientOriginalName();           
        $request->file('logo')->move("storage/app/company/", $fileName);    
        $update->logo = $fileName;


        $update ->save();

        return redirect('/')->with('message', 'Berhasil Update companies!');
    }



    public function destroy_companies($id)
    {
      $hapus = ModelCompanies::find($id);
      $hapus->delete();
      return redirect('/')->with('message', 'Berhasil Hapus Data!');
    }

////// EMPLOYEE /////////////////








    public function view_employee($id)
    {

        $company_id = DB::table('companies')->where('id', $id )->first();

        $data = ModelEmployee::where('company_id', $id)->paginate(5);
        return view('admin.karyawan.view_employee')
        ->with('data', $data)
        ->with('company_id',$company_id);    
    }



    public function create_employee($company_id)
    {

           return view('admin.karyawan.create_employee',compact('company_id'));
    }

    public function storeemployee(Request $request)
    {
        $this->validate($request,[

        'nama'              => 'required',
        'email'             => 'required',
        'company_id'           => 'required',
        ]);

        
        $tambah = new ModelEmployee();
        $tambah ->nama           = $request['nama'];
        $tambah ->email       = $request['email'];
        $tambah ->company_id       = $request['company_id'];



        $tambah ->save();

       return redirect('/');
    }





    public function edit_employee($id)
    {

        $edit = DB::table('employees')->where('id', $id )->first();
        return view('admin.karyawan.edit_employee')
        ->with('edit', $edit);    
    }



    public function read_employee($id)
    {
        $read = ModelEmployee::where('id', $id)->first();
       // $read = DB::table('employees')->where('id', $id )->first();
        return view('admin.karyawan.read_employee')->with('read', $read);    
    }






    public function update_employee(Request $request,$id)
    {
        $update = ModelEmployee::where('id',$id)->first();

        $update ->nama           = $request['nama'];
        $update ->email             = $request['email'];
        $update ->company_id       = $request['company_id'];


        $update ->save();


        return redirect('/');
    }







    public function destroy_employee($id)
    {
      $hapus = ModelEmployee::find($id);
      $hapus->delete();
      return redirect('/')->with('message', 'Berhasil Hapus Data!');
    }









}

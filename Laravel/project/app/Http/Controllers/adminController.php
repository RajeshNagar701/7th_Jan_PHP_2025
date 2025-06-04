<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');
    }

    public function authlogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'pass' => 'required',
        ]);

        $data = admin::where('email', $request->email)->first();
        if (! $data || ! Hash::check($request->pass, $data->pass)) {
            echo "<script>
           alert('Login failed due to wrong credancial !');
           window.location='/admin-login';
           </script>";
        } else {
               
                echo $rem=$request->rem;
                if(isset($rem))
                {
                    Cookie::queue(Cookie::make('aemail', $data->email, 15));
                    Cookie::queue(Cookie::make('apass', $data->pass, 15));
                    
                }
             // session create
                session()->put('aid',$data->id); 
                session()->put('aname',$data->name); 
                session()->put('aemail',$data->email);

            echo "<script>
            alert('Login Success !');
            window.location='/dashboard';
            </script>";
        }
    }
     public function adminlogout()
    {
        session()->pull('aid');
        session()->pull('aname');
        session()->pull('aemail');
         echo "<script>
         alert('Logout Success !');
            window.location='/admin-login';
        </script>";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = customer::all();
        return view('admin.manage_customers', ['data' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|unique:customers',
            'pass' => 'required|min:8|max:12',
            'mobile' => 'required|digits:10',
            'gender' => 'required|in:Male,Female',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $customer = new customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->pass = Hash::make($request->pass);
        $customer->gender = $request->gender;
        $customer->lag = implode(",", $request->lag); // lag arr to string
        $customer->mobile = $request->mobile;

        $file = $request->file('image'); // $_FILES['image']		
        $filename = time() . "_img." . $request->file('image')->getClientOriginalExtension(); // 12345678_img.jpg
        $file->move('admin/upload/customer/', $filename);  // use move for move image in public/images
        $customer->image = $filename; // name store in db

        $res = $customer->save();
        if ($res) {
            echo "<script> 
                alert('Signup Success'); 
                window.location='/signup';
                </script>";
        }
    }

    public function login()
    {
        return view('website.login');
    }

    public function authlogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'pass' => 'required',
        ]);

        $data = customer::where('email', $request->email)->first();
        if (! $data || ! Hash::check($request->pass, $data->pass)) {
            echo "<script>
           alert('Login failed due to wrong credancial !');
           window.location='/login';
           </script>";
        } else {
            if ($data->status == "Unblock") {
                echo "<script>
            alert('Login Success !');
            window.location='/';
            </script>";
            } else {
                echo "<script>
            alert('Login failed due to Blocked Account !');
             window.location='/login';
            </script>";
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        return view('website.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        return view('website.edit_profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }

    public function logout()
    {
        //
    }
}

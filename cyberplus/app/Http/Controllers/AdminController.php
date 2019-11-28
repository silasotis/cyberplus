<?php

namespace Cyberplus\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // check if user accessing this function is logged in
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    // directs admin to dashboard
    public function index()
    {
        return view('admin.dashboard');
    }

    // directs admin to add store owner page
    public function getAddUserPage()
    {
        return view('admin.add-owner');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOwner(Request $request)
    {
        $user_name = $request->get('user_name');
        $email = $request->get('email');
        $role_id = 2 ;

        DB::table('users')->insert([
            'user_name' => $user_name,
            'email' =>  $email ,
            'password' => bcrypt('password'),
            'role_id' =>  $role_id,
        ]);
       
        //   return redirect()->back()->with('message','added store owner successfully');
          return $user_name;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

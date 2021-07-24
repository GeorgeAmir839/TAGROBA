<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        return view('user.showuser', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.registeruser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(
            request(),
            [
                'name' => 'required|min:5|max:20',
                'email' => 'required|email',
                'password' => 'required',
            ]

        );
        $massge = '';
        $data['password'] = bcrypt($data['password']);


        //['name'=>$data['name'],'phone'=>$data['phone'],'email'=>$data['email'],'password'=>bcrypt($data['password'])]
        $op = User::create($data);
        if ($op) {
            $massge = 'youer register sucsesfully';
            // session()->put('massege',$massge);
            session()->flash('massege', $massge);
            return redirect(url('/user'));
        } else {
            echo "error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        if ($data) {
            return view('user.showsingleuser', ['data' => $data]);
        } else {
            echo "error delete";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findorfail($id);
        if ($data) {
            return view('user.edituser', ['data' => $data]);
        } else {
            echo "error edit";
        }
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
        $data = $this->validate(
            request(),
            [
                'name' => 'required|min:5|max:20',
                'email' => 'required|email',
            ]

        );

        $op = User::where('id', $request->id)->update(['name' => $request->name, 'email' => $request->email]);
        if ($op) {
            // echo 'ddd';
            return redirect(url('/user'));
        } else {
            echo "error";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = User::findorfail($id);
        if ($data) {
            return view('user.deleteuser', ['data' => $data]);
        } else {
            return back();
        }
    }

    public function destroy($id)
    {
        $op = User::where('id', $id)->delete();
        if ($op) {
            return redirect(url('/user'));
        } else {
            echo "error delete";
        }
    }

    public function loginuser(Request $request)
    {
        $data = $this->validate(
            request(),
            [

                'email' => 'required|email',
                'password' => 'required',
            ]

        );
        //    Auth()->attempt($data,true);
        if (Auth::attempt($data, true)) {
            return redirect(url('/user'));
        } else {
            echo "<div class='alert alert-danger'><ul> <li>invalid login</li></ul></div>";
            return view('user.loginuser');
        }
    }
    public function logoutuser()
    {
        Auth::logout();
        return view('user.loginuser');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctor::get();
        return view('doctor.showdoctor', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.registerdoctor');
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
                'phone' => 'required',
                'age' => 'required',
                'specialization' => 'required',
            ]

        );
        $massge = '';
        $data['password'] = bcrypt($data['password']);
        $op = Doctor::create($data);
        if ($op) {
            $massge = 'youer register sucsesfully';
            session()->flash('massege', $massge);
            return redirect(url('/doctor'));
        } else {
            echo "error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view("doctor.showsingledoctor", ["data" => $doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view("doctor.editdoctor", ["data" => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $data = $this->validate(
            request(),
            [
                'name' => 'required|min:5|max:20',
                'email' => 'required|email',
                'phone' => 'required',
                'age' => 'required',
                'specialization' => 'required',

            ]

        );
        // $doctor->fill($data);
        // $doctor->save();
        $op = Doctor::where('id', $request->id)->update($data);
        if ($op) {
            // echo 'ddd';
            return redirect(url('/doctor'));
        } else {
            echo "error";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
       $op=$doctor->delete();
      
       if ($op) {
        return redirect(url('/doctor'));
       } else {
           echo "error delete";
       }
       
    }
    public function logindoctor(Request $request)
    {
        $data = $this->validate(
            request(),
            [

                'email' => 'required|email',
                'password' => 'required',
            ]

        );
        //    Auth()->attempt($data,true);
        
        if (auth()->guard('doctor')->attempt($data, true)) {
            return redirect(url('/doctor'));
        } else {
            // echo "<div class='alert alert-danger'><ul> <li>invalid login</li></ul></div>";
            return redirect(url('/logindoctor'));
        }
    }
    public function logoutdoctor()
    {
        Auth::logout();
        return view('user.logindoctor');
    }
}

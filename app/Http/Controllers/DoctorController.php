<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index() {
        $doctors = Doctor::paginate(25);
        return view('doctor.index',compact('doctors'));
    }
}

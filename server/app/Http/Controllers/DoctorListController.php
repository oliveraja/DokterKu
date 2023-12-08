<?php

namespace App\Http\Controllers;

class DoctorListController extends Controller
{
    public function doctorList() {
        return view('doctorList');
    }
}
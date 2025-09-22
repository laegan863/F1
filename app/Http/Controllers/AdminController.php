<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Demographicprofile;

class AdminController extends Controller
{
    public function dashboard() {
        $totalRecords = Demographicprofile::count();
        return view('admin.files.dashboard', compact('totalRecords'));
    }

    public function records(){
        $data = Demographicprofile::where('status', 1)
                ->orderBy('id', 'desc')
                ->get();
        return view('admin.files.records', compact('data'));
    }
}

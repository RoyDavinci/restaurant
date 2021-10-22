<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users(){
        $user = User::all();
        return view('admin.user', compact('user'));
    }
    public function delete($id){
        $data = User::find($id)->delete();
        return redirect()->back();
    }
}
<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Warranty;
use App\Models\WarrantyGroup;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index(Request $request) {
        $path = $request->getPathInfo();
        $route = explode('/', $path);


        if(isset($route[2]) && $route[2] != '')
            return view("warranties.$route[2]");
        else
            return view('warranties.index');
    }

    public function addeditwarranty(Warranty $warranty = null) {
        $users = User::orderBy('sector')->orderBy('name')->get();

        return view('warranties.add', [
            'warranty' => $warranty,
            'users' => $users,
            'warrantyGroups' => WarrantyGroup::all()
        ]);
    }

    public function warrantydetail(Warranty $warranty) {
        return view('warranties.details', [
            'warranty' => $warranty,
        ]);
    }

    public function addotherwarranty() {
        return view('warranties.newOtherWarranty');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\DashModel;
use Illuminate\Http\Request;
use App\Models\Company;
class DashController extends Controller
{
    protected $model;

    public function __construct(DashModel $info)
    {
        $this->model = $info;
    }

    public function index(Request $request){

        
        //$user= auth()->user();
        
        //$search = $request->search;
        
        //infos = Company::where('id_user', $user->id)->first();
        
        return view('dashboard.index');
    }
}
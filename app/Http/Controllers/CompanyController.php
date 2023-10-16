<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    //
    protected $model;

    public function __construct(Company $comp)
    {
        $this->model = $comp;
    }

    public function index(){

        return view('search.index');
    }


}

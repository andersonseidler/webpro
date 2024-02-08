<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Company;
use App\Models\User;

class TenantController extends Controller
{
    //
    protected $model;

    public function __construct(tenant $comp)
    {
        $this->model = $comp;
    }

    /* public function index(){

        return view('search.index');
    } */

    public function index(Request $request){
        
        //$search = $request->search;
        //dd($search);
        //$infoUser = auth()->user();
        //$companies = Company::getEmpresa(search: $request->search ?? '');
        $companies = Tenant::all();
        //dd($company);

        return view('company.index', compact('companies'));
    }

    public function create(){
        $campanies = Tenant::all();
        return view('company.create', compact('campanies'));
    }

    public function store(Request $request){
        //dd($request->all());

        //USUARIO DO TENANT
        $tenant1 = Tenant::create([
            'id' => $request->domain,
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'telefone' => $request->telefone,
            'celular' => $request->celular,
            'foto' => $request->foto,
            'status' => $request->status,
        ]);

        Tenant::all()->runForEach(function () {
            User::create([
                'name' => 'Anderson',
            'email' => 'anderson@gmail.com',
            'password' => '$2y$10$NqqEvty.OR6S5oqN8cgMDO6a/w7ZyHHIZpWxTMYgXpfxgmN8liW5a',]);
        });

        
        //DOMINIO DO TENANT
        $tenant1->domains()->create([
            'domain' => $request->domain . '.localhost'
        ]);
        
        
        if($tenant1){
            alert()->success('Usuário cadastrado com sucesso!');
            return redirect()->route('company.index');
            /* session()->flash('success', 'Usuário cadastrado com sucesso!'); */
        }
    }


}

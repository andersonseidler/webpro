<?php

namespace App\Http\Controllers;

use App\Models\DashModel;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Tenant;
use App\Models\User;
class RegisterCompanyController extends Controller
{
    protected $model;

    public function __construct(DashModel $info){
        $this->model = $info;
    }

    public function index(Request $request){

        
        //$user= auth()->user();
        
        //$search = $request->search;
        
        //$infos = Company::where('id_user', $user->id)->first();
        
        return view('register.index');
    }

    public function create(){
        return view('register.create');
    }

    public function store(Request $request){

        
        //dd($request->all());
        $tenant1 = Tenant::create([
            'id' => $request->domain,
            'nome' => $request->nome,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'telefone' => $request->telefone,
            'celular' => $request->celular,
            'password' => $request->password,
        ]);
        
        Tenant::all()->runForEach(function ($request) {
            $data['password'] = bcrypt($request->password);
            //dd($request->all());
            User::create([
                'name' => $request->nome,
                'email' => $request->email,
                'password' => $data['password']]);
        });

        $tenant1->domains()->create([
            'domain' => $request->domain . '.localhost'
        ]);

        //dd($request->domain);
        
        if($tenant1){
            alert()->success('Cadastro realizado com sucesso!');
            //return view('index');
            session()->flash('success', "Usuário cadastrado com sucesso!");
            return redirect('http://' . $request->domain . '.localhost:8989/login');

        }
    }
}
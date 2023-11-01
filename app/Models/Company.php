<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'endereco',
        'cidade',
        'telefone',
        'celular',
        'foto',
    ];

    public function getEmpresa(string|null $search = null){

        $users = $this->where(function ($query) use ($search) {
            if($search){
                $query->where('nome', 'LIKE', "%{$search}%");
            }
        })->paginate(10);
        //dd($users);
        return $users;
    }

}
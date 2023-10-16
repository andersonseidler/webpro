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

    public function getBusca(string|null $estabelecimento = null, string|null $localizacao = null){

        $companies = $this->where(function ($query) use ($estabelecimento, $localizacao) {
            if($estabelecimento){
                $query->where('nome', 'LIKE', "%{$estabelecimento}%");
            }
            if($localizacao){
                $query->where('cidade', 'LIKE', "%{$localizacao}%");
            }
        })->paginate(10);

        return $companies;
    }

}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'nome' => 'Fernando',
            'endereco' => 'Rua Santa Tereza, 214',
            'cidade' => 'Canoas/RS',
            'telefone' => '(51)99132.4546',
            'celular' => '(51)9999.4546',
            'foto' => 'users/weXdPodpa940j2I6Mhbtavn9TW9Y7jTyHeMdShYe.png',
            'status' => 'Ativo',
            'comp_id' => '2',
        ]);
    }
}

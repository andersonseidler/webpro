<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        //Company::factory(30)->create();

        if (tenant()) {
            User::factory()->create([
                'name'  => tenant()->id . ' User',
                'email' => tenant()->id . '@example.com',
            ]);
        } else {
           
            $tenant = Tenant::query()->create([
                'id'    => 'foo',
                'name'  => 'foo',
                'logo'  => 'https://w7.pngwing.com/pngs/402/36/png-transparent-lorem-ipsum-logo-font-ofset-text-logo-integer.png',
                'color' => '#dc2b2b',
                'from'  => 'foo@foo.test',
            ]);
            $tenant->domains()->create(['domain' => 'foo.test']);

            $tenant = Tenant::query()->create([
                'id'    => 'bar',
                'name'  => 'bar',
                'logo'  => 'https://image.similarpng.com/very-thumbnail/2020/12/Lorem-ipsum-logo-isolated-clipart-PNG.png',
                'color' => '#000000',
                'from'  => 'bar@bar.test',
            ]);
            $tenant->domains()->create(['domain' => 'bar.test']);
        }

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocsApiTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('personal_access_tokens')->insert([
            'name'=>'Docs Token',
            'tokenable_type'=>'App\Models\User',
            'tokenable_id' => '25',
            'token'=>'46033d10ec0796dd6c54350ca3abd26632db684a8dead8d1cb18b1093b9e17a1',
            'abilities'=>'["read","create","update","delete"]'
        ]);

    }
}

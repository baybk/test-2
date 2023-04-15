<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $adminUser = User::factory()->create([
            'id' => 1,
            'email' => 'admin@gmail.com',
            'is_admin' => USER_IS_ADMIN
        ]);
        $adminUser->createToken('APPLICATION');
        
        $defaultUser = User::factory()->create([
            'id' => 2,
            'email' => 'user@gmail.com',
            'is_admin' => USER_IS_NOT_ADMIN
        ]);
        $defaultUser->createToken('APPLICATION');

        $coachUser = User::factory()->create([
            'id' => 3,
            'email' => 'coach@gmail.com',
            'is_admin' => USER_IS_COACH
        ]);
        $coachUser->createToken('APPLICATION');

        for ($i = 4; $i <= USER_MAX_NUMB_SEED; $i++) {
            $user = User::factory()->create([
                'id' => $i,
                'is_admin' => USER_IS_NOT_ADMIN
            ]);
            $user->createToken('APPLICATION');
        }
    }
}

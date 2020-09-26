<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(50)->create();

        $user = User::find(1);
        $user->name = 'Test';
        $user->email = 'test@test.com';
        $user->is_admin = true;
        $user->save();

        $user = User::find(2);
        $user->name = 'Monkey';
        $user->email = 'monkey@test.com';
        $user->save();
    }
}

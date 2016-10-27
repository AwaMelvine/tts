<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->first_name = "Awa";
        $user->last_name = "Melvine";
        $user->email = "melvineawa@gmail.com";
        $user->phone = "676811129";
        $user->gender ="Male";
        $user->id_card_num = "111111111";
        $user->journeys_count = 6;
        $user->status = '1';
        $user->slug = "awa-melvine";
        $user->password = bcrypt('melvine');
        $user->save();
    }
}

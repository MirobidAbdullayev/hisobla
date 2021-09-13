<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Asset;
use App\Models\Expense;
use App\Models\Withdraw;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'        => "Mirobid",
            'email'       => 'abdullayevmirobid2707@gmail.com',
            'password'    => Hash::make('password'),
            'created_at'  => now(),
            'updated_at'  => now()
        ]);
        
        Asset::insert([
            'asset'       => 50000,
            'comment'     => 'dasdasdas',
            'day'         => 4,
            'month'       => 8,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Asset::insert([
            'asset'       => 30000,
            'comment'     => 'dasdasdas',
            'day'         => 17,
            'month'       => 8,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Asset::insert([
            'asset'       => 45000,
            'comment'     => 'dasdasdas',
            'day'         => 6,
            'month'       => 7,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Expense::insert([
            'expense'     => 4000,
            'comment'     => 'dasdasdas',
            'day'         => 16,
            'month'       => 8,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Expense::insert([
            'expense'     => 25000,
            'comment'     => 'dasdasdas',
            'day'         => 26,
            'month'       => 8,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Expense::insert([
            'expense'     => 32000,
            'comment'     => 'dasdasdas',
            'day'         => 6,
            'month'       => 7,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Withdraw::insert([
            'withdraw'    => 6000,
            'comment'     => 'dasdasdas',
            'day'         => 3,
            'month'       => 7,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Withdraw::insert([
            'withdraw'    => 32000,
            'comment'     => 'dasdasdas',
            'day'         => 24,
            'month'       => 8,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Withdraw::insert([
            'withdraw'    => 18000,
            'comment'     => 'dasdasdas',
            'day'         => 15,
            'month'       => 7,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Withdraw::insert([
            'withdraw'    => 1000,
            'comment'     => 'dasdasdas',
            'day'         => 15,
            'month'       => 7,
            'is_mine'     => 1,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Withdraw::insert([
            'withdraw'    => 6750,
            'comment'     => 'dasdasdas',
            'day'         => 26,
            'month'       => 7,
            'is_mine'     => 1,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Withdraw::insert([
            'withdraw'    => 5050,
            'comment'     => 'dasdasdas',
            'day'         => 27,
            'month'       => 7,
            'is_mine'     => 1,
            'year'        => now(),
            'user_id'     => 1,
        ]);
        
        Withdraw::insert([
            'withdraw'    => 2456,
            'comment'     => 'dasdasdas',
            'day'         => 30,
            'month'       => 8,
            'is_mine'     => 1,
            'year'        => now(),
            'user_id'     => 1,
        ]);
    }
}

















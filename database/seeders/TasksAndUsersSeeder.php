<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksAndUsersSeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::today();
        $yesterday = $today->copy()->subDay();
        $tomorrow = $today->copy()->addDay();

        DB::table('users')->delete();
        DB::table('tasks')->delete();

        DB::table('users')->insert([
            'username' => 'demo_user',
            'full_name' => 'Demo User',
            'email' => 'demo@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tasks')->insert([
            [
                'title' => 'Buy groceries',
                'status' => 'completed',
                'task_date' => $yesterday,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clean the room',
                'status' => 'completed',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Do homework',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Read a book',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wash the dishes',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Exercise',
                'status' => 'pending',
                'task_date' => $tomorrow,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Visit a friend',
                'status' => 'pending',
                'task_date' => $tomorrow,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prepare school materials',
                'status' => 'pending',
                'task_date' => $tomorrow,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\TodoList;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * A few rows so a fresh clone does not open on an empty table.
     */
    public function run(): void
    {
        $items = [
            ['Finish OJT application letter', true],
            ['Study Laravel routing and middleware', true],
            ['Push portfolio updates to Vercel', false],
            ['Review database normalisation notes', false],
            ['Prepare slides for capstone defense', false],
        ];

        foreach ($items as [$name, $isComplete]) {
            $item = new TodoList;
            $item->name = $name;
            $item->is_complete = $isComplete;
            $item->save();
        }
    }
}

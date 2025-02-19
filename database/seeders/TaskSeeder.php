<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Menjalankan seeder untuk memasukkan data tugas ke dalam database.
     */
    public function run(): void
    {
        // Array daftar tugas yang akan dimasukkan ke dalam database
        $tasks = [
            [
                'name' => 'Belajar Laravel',
                'description' => 'Belajar Laravel di santri koding',
                'is_completed' => false, // Status tugas belum selesai
                'priority' => 'medium', // Prioritas tugas
                'list_id' => TaskList::where('name', 'Belajar')->first()->id, // Mengambil ID dari TaskList dengan nama 'Belajar'
            ],
            [
                'name' => 'Belajar React',
                'description' => 'Belajar React di WPU',
                'is_completed' => true, // Status tugas sudah selesai
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Pantai',
                'description' => 'Liburan ke Pantai bersama keluarga',
                'is_completed' => false,
                'priority' => 'low',
                'list_id' => TaskList::where('name', 'Liburan')->first()->id,
            ],
            [
                'name' => 'Villa',
                'description' => 'Liburan ke Villa bersama teman sekolah',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Liburan')->first()->id,
            ],
            [
                'name' => 'Matematika',
                'description' => 'Tugas Matematika bu Nina',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'PAIBP',
                'description' => 'Tugas presentasi pa budi',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'Project Ujikom',
                'description' => 'Membuat project Todo App untuk ujikom',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'ferii',
                'description' => 'Membuat project Todo App untuk ujikom',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'FERI')->first()->id,
            ],
        ];

        // Memasukkan semua data tugas ke dalam tabel 'tasks' sekaligus
        Task::insert($tasks);
    }
}

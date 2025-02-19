<?php

namespace App\Models; // Menentukan namespace agar sesuai dengan struktur folder Laravel

use Illuminate\Database\Eloquent\Model; // Menggunakan Eloquent Model Laravel

// Mendefinisikan model TaskList yang mewakili tabel dalam database
class TaskList extends Model
{
    // Menentukan kolom yang boleh diisi secara massal menggunakan metode create() atau fill()
    protected $fillable = ['name'];

    // Menentukan kolom yang tidak boleh diisi secara massal (keamanan)
    protected $guarded = [
        'id',         // ID tidak boleh diisi secara massal agar terhindar dari perubahan yang tidak disengaja
        'created_at', // Timestamp pembuatan tidak boleh diisi secara manual
        'updated_at'  // Timestamp pembaruan tidak boleh diisi secara manual
    ];

    // Mendefinisikan relasi One-to-Many dengan model Task
    public function tasks() {
        return $this->hasMany(Task::class, 'list_id');
        // Artinya, satu TaskList memiliki banyak Task yang berelasi melalui 'list_id' pada tabel tasks
    }
}

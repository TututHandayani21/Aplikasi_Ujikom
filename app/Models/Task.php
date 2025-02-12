<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TaskList;

//berfungsi untuk mendefinisikan model Task yang mewakili tabel tasks dalam database
class Task extends Model
{
                //$fillable digunakan dalam model Eloquent untuk menentukan field apa saja yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'name',
        'description',
        'is_completed',
        'priority',
        'list_id'
    ];

                //$guarded digunakan untuk menentukan kolom mana yang tidak boleh diisi 
                //secara massal (mass assignment) saat menggunakan metode seperti create() atau update()
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
            //digunakan untuk mendeklarasikan konstanta dalam sebuah class. Konstanta ini bersifat tetap (immutable), artinya nilainya tidak bisa diubah setelah dideklarasikan
    const PRIORITIES = [
        'low',          //Rendah
        'medium',       //Sedang
        'high'          //Tinggi
    ];

                    //untuk menghitung atau mengubah nilai atribut sebelum ditampilkan
    public function getPriorityClassAttribute() {
        return match($this->attributes['priority']) {
            'low' => 'success',         //Hijau, biasanya untuk berhasil
            'medium' => 'warning',      //Kuning, biasanya untuk peringatan
            'high' => 'danger',         //Merah, biasanya untuk bahaya
            default => 'secondary'      //Jika tidak ada kecocokan  (Abu-abu, default)
        };
    }

                    //berfungsi untuk mendefinisikan relasi antar model di Laravel menggunakan Eloquent ORM
    public function list() {
        return $this->belongsTo(TaskList::class, 'list_id'); //(one to many)mengindikasikan bahwa model yang mendeklarasikan fungsi ini memiliki relasi "belongs to" (milik) dengan model lain, dalam hal ini TaskList
    }
}
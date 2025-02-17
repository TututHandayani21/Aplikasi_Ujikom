<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk mengelompokkan controller dalam aplikasi

use App\Models\TaskList; // Mengimpor model TaskList yang berhubungan dengan daftar tugas
use App\Models\Task; // Mengimpor model Task yang berhubungan dengan tugas individu dalam daftar
use Illuminate\Http\Request; // Mengimpor class Request untuk menangani permintaan HTTP

class TaskListController extends Controller // Mendefinisikan controller untuk menangani daftar tugas
{
    // Method untuk menampilkan detail daftar tugas berdasarkan ID yang diberikan
    public function show($id) {
        $list = TaskList::findOrFail($id); // Mencari daftar tugas berdasarkan ID atau mengembalikan error jika tidak ditemukan
    
        $data = [ // Menyiapkan data yang akan dikirim ke view
            'title' => $list->name, // Mengatur judul halaman sesuai dengan nama daftar tugas
            'lists' => TaskList::all(), // Mengambil semua daftar tugas untuk ditampilkan
            'list' => $list, // Menyimpan daftar tugas yang sedang ditampilkan
            'tasks' => $list->tasks // Mengambil semua tugas yang termasuk dalam daftar tugas ini
        ];
    
        return view('pages.details', $data); // Mengirim data ke tampilan 'pages.details'
    }

    // Method untuk menyimpan daftar tugas baru
    public function store(Request $request) {
        $request->validate([ // Melakukan validasi input dari form
            'name' => 'required|max:100' // Nama harus diisi dan maksimal 100 karakter
        ]);

        TaskList::create([ // Menyimpan daftar tugas baru ke dalam database
            'name' => $request->name // Mengambil nilai 'name' dari input pengguna
        ]);

        return redirect()->back(); // Mengembalikan pengguna ke halaman sebelumnya setelah menyimpan
    }

    // Method untuk menghapus daftar tugas berdasarkan ID yang diberikan
    public function destroy($id) {
        TaskList::findOrFail($id)->delete(); // Mencari daftar tugas berdasarkan ID dan menghapusnya

        return redirect()->back(); // Mengembalikan pengguna ke halaman sebelumnya setelah menghapus
    }
}

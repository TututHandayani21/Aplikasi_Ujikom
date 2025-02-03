<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
                    //index () digunakan untuk menampilkan daftar data dari database.
    public function index() {
        $data = [
            'title' => 'Home',
            'lists' => TaskList::all(),
            'tasks' => Task::orderBy('created_at', 'desc')->get(),
            'priorities' => Task::PRIORITIES
        ];
                //Mengarahkan ke folder view dan mengirimkan $data
        return view('pages.home', $data);
    }
                //store (Request) $request digunakan untuk menyimpan data baru ke dalam database
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'list_id' => 'required'
        ]);
                //Menambahkan Database
        Task::create([
            'name' => $request->name,
            'list_id' => $request->list_id
        ]);

                //Mengembalikan ke halaman sebelum'nya
        return redirect()->back();
    }
                    //complete($id) biasanya digunakan dalam Controller untuk menandai suatu item sebagai selesai atau memperbarui statusnya berdasarkan ID
    public function complete($id) {
        Task::findOrFail($id)->update([
            'is_completed' => true
        ]);

                //Mengembalikan ke halaman sebelum'nya
        return redirect()->back();
    }

    public function destroy($id) {
        Task::findOrFail($id)->delete();

        return redirect()->back();
    }
}
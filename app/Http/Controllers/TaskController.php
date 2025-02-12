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
            'test'  => 'Apa yah' ,
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
            'description'=> 'required|max:100',
            'priority' => 'required|in:low,medium,high',
            'list_id' => 'required'
        ]);
                //Menambahkan Database
        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'priority' => $request->priority,
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
            //digunakan untuk menghapus data berdasarkan ID-nya dari database
    public function destroy($id) {
                //berfungsi untuk mencari data dalam tabel tasks berdasarkan ID yang diberikan dan kemudian menghapusnya
        Task::findOrFail($id)->delete();

                //Mengembalikan ke halaman sebelum'nya
        return redirect()->back();
    }
    public function show($id) {
        $task = Task::findOrfail($id);

        $data = [
            'title' => 'Details',
            'task' => $task,
        ];
        
        return view('pages.details', $data);
    }
}
    
@extends('layouts.app') 
{{-- Menggunakan template utama dari layouts.app --}}

@section('content')
    <div id="content" class="d-flex vh-100 overflow-hidden p-3">
        {{-- Menampilkan pesan jika tidak ada daftar tugas --}}
        @if ($lists->count() == 0)
            <div class="d-flex flex-column align-items-center justify-content-center flex-grow-1">
                <p class="fw-bold text-center">Belum ada tugas yang ditambahkan</p>
                <button type="button" class="btn btn-sm d-flex align-items-center gap-2 btn-outline-primary">
                    <i class="bi bi-plus-square fs-3"></i> Tambah
                </button>
            </div>
        @endif

        {{-- Container utama untuk daftar tugas, dengan horizontal scrolling jika banyak --}}
        <div class="d-flex gap-3 px-3 flex-nowrap flex-grow-1 overflow-x-scroll" style="white-space: nowrap;">
            
            {{-- Looping untuk menampilkan daftar tugas --}}
            @foreach ($lists as $list) 
                <div class="card flex-shrink-0 bg-secondary d-flex flex-column"
                    style="width: 20rem; height: 80%; max-height: 120%;">
                    
                    {{-- Header card untuk menampilkan nama daftar tugas dan tombol hapus --}}
                    <div class="bg-primary card-header d-flex align-items-center justify-content-between">
                        <h4 class="card-title">{{ $list->name }}</h4>
                        <form action="{{ route('lists.destroy', $list->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm p-0">
                                <i class="bi bi-trash fs-5 text-danger"></i>
                            </button>
                        </form>
                    </div>

                    {{-- Body card yang berisi daftar tugas --}}
                    <div class="card-body d-flex flex-column gap-2 flex-grow-1 overflow-auto">
                        @foreach ($tasks as $task)
                            @if ($task->list_id == $list->id)
                                <div class="card">
                                    
                                    {{-- Header tugas yang berisi nama tugas, status, dan tombol hapus --}}
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex flex-column justify-content-center gap-2">
                                                <a href="{{ route('tasks.show' , $task->id)}}"
                                                    class="fw-bold lh-1 m-0 {{ $task->is_completed ? 'text-decoration-line-through' : '' }}">
                                                    {{ $task->name }}
                                                </a>
                                                <span class="badge text-bg-{{ $task->priorityClass }} badge-pill">
                                                    {{ $task->priority }}
                                                </span>
                                            </div>
                                            
                                            {{-- Tombol untuk menghapus tugas --}}
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm p-0">
                                                    <i class="bi bi-x-circle text-danger fs-5"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- Body tugas yang menampilkan deskripsi singkat --}}
                                    <div class="card-body">
                                        <p class="card-text text-truncate">
                                            {{ $task->description }}
                                        </p>
                                    </div>

                                    {{-- Tombol "Selesai" hanya muncul jika tugas belum selesai --}}
                                    @if (!$task->is_completed)
                                        <div class="card-footer">
                                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-sm btn-primary w-100">
                                                    <span class="d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-check fs-5">Selesai</i>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endforeach

                        {{-- Tombol untuk menambahkan tugas baru ke dalam daftar --}}
                        <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal"
                            data-bs-target="#addTaskModal" data-list="{{ $list->id }}">
                                <i class="bi bi-plus fs-5">Tambah </i>
                        </button>
                    </div>

                    {{-- Footer card yang menampilkan jumlah tugas dalam daftar --}}
                    <div class="card-footer bg-primary d-flex justify-content-between align-items-center">
                        <p class="card-text">{{ $list->tasks->count() }} Tugas</p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

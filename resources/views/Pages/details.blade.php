@extends('layouts.app')

@section('content')
    <div id="content" class="d-flex vh-100 overflow-hidden p-3">
        <div class="d-flex gap-3 px-3 flex-nowrap flex-grow-1 overflow-x-scroll" style="white-space: nowrap;">
            {{-- Pengulangan Data untuk Setiap List --}}
            <div class="card flex-shrink-0 bg-secondary d-flex flex-column"
                style="width: 20rem; height: 80%; max-height: 120%;">
                
                {{-- Header Card Menampilkan Nama List dan Tombol Hapus --}}
                <div class=" bg-primary card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">{{ $list->name }}</h4>
                    <form action="{{ route('lists.destroy', $list->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm p-0">
                            <i class="bi bi-trash fs-5 text-danger"></i>
                        </button>
                    </form>
                </div>
                
                {{-- Bagian Body Card Menampilkan Daftar Tugas --}}
                <div class="card-body d-flex flex-column gap-2 flex-grow-1 overflow-auto">
                    @foreach ($list->tasks as $task)
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column justify-content-center gap-2">
                                        {{-- Nama Tugas dengan Efek Coret Jika Selesai --}}
                                        <a href="{{ route('tasks.show', $task->id) }}"
                                            class="fw-bold lh-1 m-0 {{ $task->is_completed ? 'text-decoration-line-through' : '' }}">
                                            {{ $task->name }}
                                        </a>
                                        {{-- Badge Prioritas Tugas --}}
                                        <span class="badge text-bg-{{ $task->priorityClass }} badge-pill">
                                            {{ $task->priority }}
                                        </span>
                                    </div>
                                    {{-- Tombol Hapus Tugas --}}
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm p-0">
                                            <i class="bi bi-x-circle text-danger fs-5"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            {{-- Deskripsi Tugas --}}
                            <div class="card-body">
                                <p class="card-text text-truncate">
                                    {{ $task->description }}
                                </p>
                            </div>
                            {{-- Tombol Menandai Tugas Sebagai Selesai Jika Belum Selesai --}}
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
                    @endforeach
                    {{-- Tombol untuk Menambahkan Tugas Baru --}}
                    <button type="button" class="btn btn-sm btn-outline-light" data-bs-toggle="modal"
                        data-bs-target="#addTaskModal" data-list="{{ $list->id }}">
                        <i class="bi bi-plus fs-5">Tambah </i>
                    </button>
                </div>
                {{-- Footer Card Menampilkan Jumlah Tugas --}}
                <div class="card-footer bg-primary d-flex justify-content-between align-items-center">
                    <p class="card-text">{{ $list->tasks->count() }} Tugas</p>
                </div>
            </div>
            {{-- Tombol untuk Menambahkan List Baru --}}
            <button type="button" class="btn btn-outline-primary flex-shrink-0" style="width: 18rem; height: fit-content;"
                data-bs-toggle="modal" data-bs-target="#addListModal">
                <span class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-plus fs-5"></i>
                    Tambah
                </span>
            </button>
        </div>
    </div>
@endsection

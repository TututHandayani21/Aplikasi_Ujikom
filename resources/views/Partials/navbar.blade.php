<section id="content">
    <!-- NAVBAR -->
    <nav>
        <!-- Form pencarian -->
        <form action="#">
            <div class="row my-3">
                <div class="col-12 d-flex">
                    <!-- Form pencarian yang mengarah ke halaman home -->
                    <form action="{{ route('home') }}" method="GET" class="d-flex gap-2">
                        <!-- Input teks untuk mencari sesuatu -->
                        <input type="text" class="form-control w-100 rounded-5" name="query" placeholder="search"
                            value="{{ request()->query('query') }}">
                        <!-- Tombol submit untuk melakukan pencarian -->
                        <button type="submit" class="btn btn-outline-primary">
                            <i class="bi bi-search"></i> <!-- Ikon pencarian -->
                        </button>
                    </form>
                </div>
            </div>
        </form>
            <div>
                 {{-- Tombol untuk menambahkan daftar tugas baru --}}
            <button type="button" class="btn btn-outline-primary flex-shrink-0" style="width: 18rem; height: fit-content;"
            data-bs-toggle="modal" data-bs-target="#addListModal">
            <span class="d-flex align-items-center justify-content-center">
                <i class="bi bi-plus fs-5"></i>
                Tambah
            </span>
        </button>
            </div>
        <!-- Link menuju halaman profil pengguna -->
        <a href="{{route('profile')}}" class="profile">
            <!-- Menampilkan gambar profil -->
            <img src="{{ asset('foto/Profile.jpg') }}">
        </a>
    </nav>
    <!-- NAVBAR -->
</section>

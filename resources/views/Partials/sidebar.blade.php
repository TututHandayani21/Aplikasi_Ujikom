<!-- Sidebar untuk navigasi aplikasi -->
<section id="sidebar"> 
    <!-- Logo atau brand aplikasi -->
    <a href="#" class="brand">
        <i class='bx bx-receipt h1'></i> <!-- Ikon logo -->
        <span class="text">To Do List</span> <!-- Nama aplikasi -->
    </a>

    <!-- Menu navigasi utama -->
    <ul class="side-menu top">
        <!-- Item menu untuk Dashboard -->
        <li class="{{ $title === 'Home' ? 'active' : '' }}">
            <a href="{{ route('home') }}">
                <i class='bx bxs-dashboard'></i> <!-- Ikon dashboard -->
                <span class="text">Dashboard</span>
            </a>
        </li>

        <!-- Looping melalui daftar list yang ada dan menampilkannya di sidebar -->
        @foreach ($lists as $list)
            <li class="{{ $title === $list->name ? 'active' : '' }}">
                <a href="{{ route('lists.show', $list->id) }}">
                    <i class='bx bxs-dashboard'></i> <!-- Ikon untuk list -->
                    <span class="text">{{ $list->name }}</span> <!-- Nama list -->
                </a>
            </li>
        @endforeach
    </ul>
</section>
<!-- Akhir Sidebar -->

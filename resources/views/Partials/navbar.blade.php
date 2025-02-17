<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu h3'></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="row my-3">
                <div class="col-12  d-flex">
                    <form action="{{ route('home') }}" method="GET" class="d-flex gap-2 ">
                        <input type="text" class="form-control w-100 rounded-5" name="query" placeholder="search"
                            value="{{ request()->query('query') }}">
                        <button type="submit" class="btn btn-outline-primary"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </form>

        <a href="{{route('profile')}}" class="profile">
            <img src="{{ asset('foto/Profile.jpg') }}">
        </a>
    </nav>
    <!-- NAVBAR -->


</section>

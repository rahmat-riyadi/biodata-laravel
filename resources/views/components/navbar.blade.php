<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Kelompok Berapa ?</a>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" class="d-inline" method="post">
                @csrf
                <button type="submit" class="btn text-white">Logout</button>
            </form>
        </div>
    </div>
</header>
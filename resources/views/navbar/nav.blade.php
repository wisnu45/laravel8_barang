<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand text-light">DAVVEM <i class="bi bi-cloud-haze2-fill"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ $title === 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form action="/cari" method="post">
                    <div class="input-group">
                        @csrf
                        <input type="text" class="form-control" placeholder="Cari barang" name="cari"
                            value="{{ request('cari') }}">
                        <button class="btn btn-light" type="submit">cari</button>
                    </div>
                </form>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (auth()->user()->level == 'admin')
                                <a class="dropdown-item" href="/admin">Data baju <i class="bi bi-archive-fill"></i></a>
                            @elseif (auth()->user()->level == 'user')
                                <a class="dropdown-item" href="/hasil">pembelian <i class="bi bi-archive-fill"></i></a>
                                <a class="dropdown-item" href="/history">history</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out
                                    <i class="bi bi-box-arrow-right"></i></button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item {{ $title === 'login' ? 'active' : '' }}">
                        <a class="nav-link disabled" href="/login">login</a>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>

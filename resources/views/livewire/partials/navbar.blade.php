<div>
    <style>
        /* Style for menu */
        .custom-menu .nav-link {
            position: relative;
        }

        .custom-menu .nav-link::before {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: #007bff;
            transition: width 0.3s;
        }

        .custom-menu .nav-link:hover::before {
            width: 100%;
        }

        .custom-menu .dropdown-menu:hover {
            background-color: rebeccapurple;

        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container">
            <a class="navbar-brand" href="/" wire:navigate>Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="custom-menu navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="/" wire:navigate>Barang Masuk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Aktivitas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bintobin</a></li>
                            <li><a class="dropdown-item" href="#">Transfer Produksi</a></li>
                            <li><a class="dropdown-item" href="#">Transfer FG</a></li>
                            <li><a class="dropdown-item" href="#">Pengambilan Stock</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pemgirim
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/vendor" >Vendor</a></li>
                            <li><a class="dropdown-item" href="#">Distributor</a></li>
                            <li><a class="dropdown-item" href="#">Transporter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

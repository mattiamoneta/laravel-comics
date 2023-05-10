<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
            <a class="navbar-brand" href="#">
                <img class="nav-logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li v-for="(link) in navItems" class="nav-item py-4 px-2 text-uppercase small fw-bold">
                        <a class="nav-link active" aria-current="page" href="link.href">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
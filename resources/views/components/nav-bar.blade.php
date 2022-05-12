<!-- Header -->
<header>
    <div class="top">
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center justify-content-end mb-0">
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-telegram-plane"></i></a></li>
                <li><a href=""><i class="fab fa-github"></i></a></li>
                <li class="faq-text"><a href="">FAQ</a></li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Technology
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('overview')}}">Overview</a></li>
                            <li><a class="dropdown-item" href="#">Stake</a></li>
                            <li><a class="dropdown-item" href="#">Roadmap</a></li>
                            <li><a class="dropdown-item" href="#">Whitepaper</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ecosystem
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Testnet</a></li>
                            <li><a class="dropdown-item" href="#">Mainnet</a></li>
                            <li><a class="dropdown-item" href="#">Hyra Wallet</a></li>
                            <li><a class="dropdown-item" href="#">Hyra Dex</a></li>
                            <li><a class="dropdown-item" href="#">Hyra Invest</a></li>
                            <li><a class="dropdown-item" href="#">NFT Market Place</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            External Environment
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pindias</a></li>
                            <li><a class="dropdown-item" href="#">Divega</a></li>
                            <li><a class="dropdown-item" href="#">RapitalBank</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('brand-kit')}}">Brand kit</a></li>
                            <li><a class="dropdown-item" href="{{ route('news-blog')}}">Blog</a></li>
                            <li><a class="dropdown-item" href="{{ route('guide-line')}}">Guildeline</a></li>
                            <li><a class="dropdown-item" href="{{ route('hyra-validator')}}">Become Validator <img src="{{ asset('img/icon-authenticator.svg') }}" width="22" class="ms-2"></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('about-us')}}">About us</a></li>
                            <li><a class="dropdown-item" href="#">Community</a></li>
                            <li><a class="dropdown-item" href="{{ route('hyra-faq')}}">FAQ</a></li>
                            <li><a class="dropdown-item" href="{{ route('hyra-contact')}}">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <div>
                    <a href="" class="btn btnPink boxShadowPink">Buy Hyra</a>
                </div>
            </div>
        </div>
    </nav>
</header>
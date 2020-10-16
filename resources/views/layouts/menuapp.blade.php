 <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="/./assets/images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                               
                        @if (Route::has('login'))
                        <ul class="navbar-nav ml-auto">
                                <ul class="navbar-nav ml-auto">
                                        <!-- <li class="nav-item"><a class="page-scroll" href="#service">Services</a></li>
                                        <li class="nav-item"><a class="page-scroll" href="#work">Portfolio</a></li> -->
                                        
                                        <li class="nav-item"><a class="page-scroll" href="#blog">Blog</a></li>
                                         <li class="nav-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
                                    @auth
                                        <li class="nav-item active"><a class="page-scroll"  href="{{ url('/home') }}">Home</a></li>
                                    @else
                                        <li class="nav-item"><a class="page-scroll" href="{{ route('login') }}">Login</a></li>
                                    @if (Route::has('register'))
                                        <li class="nav-item"><a class="page-scroll" href="{{ route('register') }}">Register</a></li>
                                    @endif
                                    @endauth
                                        
                                       <li class="nav-item"><a class="page-scroll" href="#contact">We Believe</a></li>
                                    </ul>
                            </div> <!-- navbar collapse -->
                              @endif
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

       
    </header>
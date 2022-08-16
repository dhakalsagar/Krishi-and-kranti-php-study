<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a style="color: green;" href="#" class="logo">
                            Krishi-Kranti
                        </a>
                        <ul class="nav">
                        @if (Route::has('login'))
                                @auth
                                    <x-app-layout>
                                    </x-app-layout>

                                @else
                                    <li class="scroll-to-section"><a href="{{ route('login') }}" >Log in</a></li>

                                    @if (Route::has('register'))
                                        <li class="scroll-to-section"><a href="{{ route('register') }}" >Register</a></li>
                                    @endif
                                @endauth
                        @endif 
                        </ul>  
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="redirect?page=1#[object%20Object]" class="active">Home</a></li>
                            
                        </ul> 
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
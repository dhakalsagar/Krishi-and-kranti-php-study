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
                        <a href="#" class="logo">
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
                        <div class="search-icon">
                                <a href="#search"><i class="fa fa-search"></i></a>
                            </div>
                        </ul>  
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>

                            
                        </ul> 
 
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="{{url('search')}}" method="get">
          @csrf
            <fieldset>
                <input type="search" name="search" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/sheep.jpg" alt="">
                <div class="text-content">
                  <h3>Welcome to Krishi-Kranti</h3>
                  <h5>Smart Cattel Pedigree Framework</h5>
                  <a href="#" class="main-stroked-button">Learn More</a>
                  <a href="#" class="main-filled-button">Get It Now</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/main.jpg" alt="">
                <div class="text-content">
                  <h3>Welcome to Krishi-Kranti</h3>
                  <h5>Smart Cattel Pedigree Framework</h5>
                  <a href="#" class="main-stroked-button">Read More</a>
                  <a href="#" class="main-filled-button">Take Action</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/bhes.jpg" alt="">
                <div class="text-content">
                  <h3>Welcome to Krishi-Kranti</h3>
                  <h5>Smart Cattel Pedigree Framework</h5>
                  <a href="#" class="main-stroked-button">Learn More</a>
                  <a href="#" class="main-filled-button">Get It Now</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">OPEN LEARNING</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/courses">Courses</a></li>
                <li><a href="/instructor">Instructor</a></li>
                @if(auth()->user())
                <li class="dropdown">
                    <a href="#"><span>{{ auth()->user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/profile" class="btn btn-link">Profile</a></li>
                        <li><a href="/change" class="btn btn-link">Change Password</a></li>
                        <li>
                            <form action="/signout" method="POST">
                                @csrf
                                @method('post')
                                <button type="submit" class="btn btn-link">Sign Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            </li>
            @else
            <a href="/signup" class="btn btn-link">Get Started</a>
            @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

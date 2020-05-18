<nav class="primary-menu navbar navbar-expand-lg ml-auto">
    <div id="header-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('help')}}">Help</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
            @guest
            @else
                <li class="ml-lg-3"><a href="{{route('dashboard')}}">Dashboard</a></li>
            @endguest
        </ul>
    </div>
</nav>
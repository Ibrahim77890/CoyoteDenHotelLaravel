<header class="h_header">
    <div class="h_header_logo">
        <h1><a href="{{ url('/') }}">Coyote Den Hostel</a></h1>
    </div>

    <ul class="h_header_nav_list">
        <!-- Show Login and Register buttons only if the user is a guest (not logged in) -->
        @guest
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @endguest

        <!-- Show Logout button only if the user is authenticated (logged in) -->
        @auth
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background:none; border:none; cursor:pointer; color:inherit;">Logout</button>
                </form>
            </li>
        @endauth

        <li><a href="{{ url('/service') }}">Services</a></li>
        <li><a href="{{ route('services.create') }}">Add new Service</a></li>
        <li><a href="{{ route('services.index') }}">Delete Service</a></li>
        <li><a href="{{ route('services.index') }}">Update a  Service</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        <li onclick="changeBackground(this)">Change Background</li>
        <li style="text-decoration: none; cursor:default;">
            Font Size:
            <i class="fa fa-plus" aria-hidden="true" style="font-size: 1.2rem;" onclick="increaseFontSize()"></i>
            <i class="fa fa-minus" aria-hidden="true" style="font-size: 1.2rem;" onclick="decreaseFontSize()"></i>
        </li>
        <li style="text-decoration: none; cursor:default;">Dark Mode:</li>
        <li>
            <div class="toggle-switch">
                <input type="checkbox" id="toggle" onclick="toggleDarkMode(this)"/>
                <label for="toggle"></label>
            </div>
        </li>
    </ul>
</header>

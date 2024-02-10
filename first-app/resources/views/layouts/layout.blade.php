<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test: @yield('title')</title>
</head>
<body>
    <header>
        @guest
            {{-- User is not authenticated (guest) --}}
            <a href="{{ route('login') }}">Login</a>
        @else
            {{-- User is authenticated --}}
            <div>
                <span>Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout
                    </a>
                </form>
            </div>

            {{-- Display link to CMS if user has 'admin' role --}}
            @if(auth()->user()->user_role === 'admin')
                {{-- <a href="{{ route('cms') }}">CMS</a> --}}
                <a href="cms">Will link to CMS</a>
            @endif
        @endguest

        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/films') }}">All Films</a></li>
            </ul>
        </nav>

        <h2>Search Films</h2>
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Search films...">
            <button type="submit">Search</button>
        </form>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>&copy; {{ date('Y') }}</footer>
</body>
</html>

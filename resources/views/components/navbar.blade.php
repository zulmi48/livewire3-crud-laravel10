<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('students.*')" href="{{ route('students.index') }}">Students</x-nav-link>
            </ul>
            <ul class="navbar-nav ms-auto">
                <x-nav-link :active="request()->routeIs('students.*')" href="{{ route('students.index') }}">UserName</x-nav-link>
                <x-nav-link :active="request()->routeIs('students.*')" href="{{ route('students.index') }}">Login</x-nav-link>
            </ul>
        </div>
    </div>
</nav>

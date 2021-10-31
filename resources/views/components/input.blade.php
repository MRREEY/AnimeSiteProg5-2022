@auth
    @if (Auth::user()->comments()->count() >= 3)
        <x-dropdown-item href="/about" >About!</x-dropdown-item>
    @endif
@endauth


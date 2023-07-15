<nav class="flex justify-between items-center mb-4 fixed-top">
    <a href="/">
        <img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo" />
    </a>
    <ul class="flex space-x-6 mr-6 text-lg text-primary">
        
        @auth
        <li>
            <span class="font-bold uppercase  btn btn-light">
                Welcome {{auth()->user()->name}}
            </span>
        </li>
        <li>
            <a href="/listings/manage" class="hover:text-laravel btn-btn-primary"
                ><i class="fa-solid fa-gear"></i>
                Manage Listings</a
            >
        </li>
        <li>
            <form class="inline btn btn-light" method="POST" action="/logout">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-door-closed"></i>
                     Logout
                </button>
            </form>
        </li>
        @else
        
        
        <li>
            <a href="/register" class="hover:text-laravel btn btn-light"
                ><i class="fa-solid fa-user-plus"></i> Register</a
            >
        </li>
        <li>
            <a href="/login" class="hover:text-laravel  btn btn-light"
                ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                Login</a
            >
        </li>
        @endauth

    </ul>
</nav>
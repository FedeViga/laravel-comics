<header>

    <nav>
    
        <div class="container">
    
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo DC">
    
            <ul>
                @foreach($links as $currentLink)
                    <li>
                        {{$currentLink}}
                    </li>
                @endforeach
            </ul>
    
        </div>
    
    </nav>

    <div class="jumbo">
        
    </div>
    
</header>
<footer>

    <div id="footer-top">

        
        <div class="container">

            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Footer logo">

            <div class="links">

                @foreach($footerLinks as $linkList)
                <div class="link-list">
                    <h2>
                        {{ $linkList['title'] }}
                    </h2>

                    <ul>
                        @foreach($linkList['list'] as $link)
                        <li>
                            <a href="#">{{ $link}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div id="footer-bottom">

        <div class="container">

            <div class="button">
                SIGN-UP NOW!
            </div>

            <div class="social">

                <div class="title">

                    <h2>
                        FOLLOW US
                    </h2>
                </div>

                @foreach($imgList as $currentImg)
                <div class="img-list">
                    <img src="{{ Vite::asset("resources/img/$currentImg") }}">
                </div>
                @endforeach
            </div>

        </div>
    </div>
    

</footer>
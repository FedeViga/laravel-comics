@extends('layouts/app')

@section('content')

<main>
    
    <section class="comics">

        <div class="container">

            <div class="current-series">
                current-series
            </div>

            <div class="comics-list">

                @foreach($comics as $currentComic)

                <div class="my_card">

                    <div class="image">
            
                        <img src="{{$currentComic['thumb']}}">
            
                        <div class="info">
                
                            <h4>
                                <span>{{$currentComic['type']}}</span>
                            </h4>
                    
                            <h4>
                                <span>{{$currentComic['price']}}</span>
                            </h4>
                        </div>
                    </div>
            
                    <h3>
                        {{$currentComic['title']}}
                    </h3>
            
                </div>
                @endforeach

            </div>

            
            <div class="load-more">
                load more
            </div>

        </div>
        
    </section>

    <section class="icon-bar">

        <div class="container">
    
            <div class="my_row">

                @foreach($icons as $currentIcon)
                <div class="my_col">
                    <img src="{{Vite::asset("resources/img/{$currentIcon['image']}")}}">
                    <div class="text">
                        {{$currentIcon['text']}}
                    </div>
                </div>
                @endforeach

            </div>
    
        </div>

    </section>
</main>

@endsection
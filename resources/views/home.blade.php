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
</main>

@endsection
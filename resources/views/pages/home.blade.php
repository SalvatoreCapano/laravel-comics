@extends('layouts.main')

@section('page_title')
    {{ $title }}
@endsection

@section('content')
    <section class="heroSection">
    </section> <!-- /heroSection-->


    <section class="contentSection">

        <div class="container">

            <h2 class="sectionTitle">current series</h2>

            <div class="cardsContainer">

                {{-- <SeriesCard class="card" v-for="elem in seriesData" --}}
                {{-- :title="elem.series" --}}
                {{-- :url="elem.thumb" --}}
                {{-- /> --}}

                @foreach ($comicsData as $comic)
                <div class="card">
                   
                    <div>
                        <div class="imgContainer">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                
                        <h3 class="seriesTitle">{{ $comic['title'] }}</h3>
                    </div>

                </div> 
                @endforeach

            </div> <!-- /cardsContainer-->

            <button class="actionBtn">load more</button>

        </div> <!-- /container-->

    </section> <!-- /contentSection-->


    <section class="actionsSection">
        <div class="container">

            @include('partials.actions')

        </div> <!-- /container-->
    </section> <!-- /actionsSection-->
@endsection
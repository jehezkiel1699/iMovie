@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($movies as $movie)
                        <div class="col-md-4">
                            <div class="card mt-3" style="background-image: linear-gradient(to right top, #636b75, #718890, #84a6a4, #a5c3af, #d4ddba);">
                                <div class="card-body">
                                    <a href="{{route('detailmovie.show', $movie->id)}}">
                                        <img src="{{ asset('img/'."$movie->image") }}" width="100%" height="100px">
                                    </a>
                                    <center>
                                        <h3 class="mt-3">{{$movie->name}}</h3>
                                        <h4>{{ $movie->durasi }}</h4>
                                        
                                    </center>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="background-image: linear-gradient(to right top, #636b75, #718890, #84a6a4, #a5c3af, #d4ddba);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mt-2">
                                        <div class="col-md-12 text-center">
                                            <h5>{{ $movie->name }}</h5>
                                        </div>
                                    </div>
                                    <hr style="border: 0.5px solid black">
                                    <div class="row mt-5">
                                        <div class="col-md-12 ">
                                            <img src="{{ asset('img/'."$movie->image") }}" style="width:99%; margin-right:10px; margin-bottom: 10px;">
                                        </div>
                                        <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                                            
                                        </div> -->
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <img src="{{ asset('img/clock.svg')}}" height="20px" width="20px" class="mx-2">{{ $movie->durasi }}
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <p>Lokasi: {{ $movie->teater }}</p>
                                            
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <p>{{ $movie->deskripsi }}</p>
                                            
                                        </div>
                                    </div>
                                    
                                    <!-- Buat Komentar -->
                                    @guest
                                    @else
                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <form method="post" action="{{ route('movie.commentStore', $movie['id']) }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="comment">Comment:</label>
                                                    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                                                </div>
                                                <div class="form-group text-right">
                                                    <input type="submit" class="btn btn-primary" value="Add">

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment -->
            @foreach($movie->comments as $comment)
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card" style="background-image: linear-gradient(to right top, #636b75, #718890, #84a6a4, #a5c3af, #d4ddba);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $comment->user->name }} • {{\Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $comment->komentar }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection



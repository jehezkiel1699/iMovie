@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-image: linear-gradient(to right top, #636b75, #718890, #84a6a4, #a5c3af, #d4ddba);">Manage Movie</div>

                <div class="card-body">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                    @if($message = Session::get('delete'))
                    <div class="alert alert-danger">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <!-- <th width="50%">Deskripsi</th> -->
                                <!-- <th scope="col">idComment</th> -->
                                <!-- <th scope="col">idReview</th> -->
                                <th>Durasi</th>
                                <th>Teater</th>
                                <th>Button</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                            <tr>
                                <th>{{$movie->id}}</th>

                                <th>{{ $movie->name }}</th>
                                <th><img src="{{ asset('img/'."$movie->image") }}" width="50px" height="50px"></th>
                                <!-- <th>{{ $movie->deskripsi }}</th> -->
                                <!-- <th>{{ $movie->idcomment }}</th> -->
                                <th>{{ $movie->durasi }}</th>
                                <th>{{ $movie->teater }}</th>
                                <th>
                                    <a href="{{route('admin.content.edit', $movie['id'])}}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.content.destroy', $movie['id']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.home') }}" class="btn btn-primary">Back</a>
                    <a href="{{ route('admin.content.create') }}" class="btn btn-primary btn-right">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

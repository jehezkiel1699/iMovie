@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-image: linear-gradient(to right top, #636b75, #718890, #84a6a4, #a5c3af, #d4ddba);">Edit</div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.content.update', $id)}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$movie->name}}">
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi: </label>
                            <input type="text" name="durasi" class="form-control" id="durasi" placeholder="Durasi" value="{{$movie->durasi}}">
                        </div>
                        <div class="form-group">
                            <label for="teater">Teater:</label>
                            <input type="text" class="form-control" id="teater" name="teater" placeholder="Teater" value="{{ $movie->teater }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi:</label>
                            <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <a href="{{ route('admin.content.index') }}" class="btn btn-primary">Back</a>
                            <input type="submit" class="btn btn-primary" value="Edit">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

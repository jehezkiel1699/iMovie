@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-image: linear-gradient(to right top, #636b75, #718890, #84a6a4, #a5c3af, #d4ddba);">Edit</div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.users.update', $id)}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Back</a>
                            <input type="submit" class="btn btn-primary" value="Edit">
                            
                        </div>
                        <!-- <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Submit</a> -->
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

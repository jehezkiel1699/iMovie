@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Comment</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama Movie</th>
                                <th scope="col">User</th>
                                <th scope="col">Komentar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                            <tr>
                                <th>{{ implode(', ', $comment->movies()->get()->pluck('name')->toArray())}}</th>
                                <th>{{ implode(', ', $comment->users()->get()->pluck('name')->toArray()) }}></th>
                                <th>{{ $comment->komentar }}</th>
                                <th>
                                    <a href="{{ route('admin.comment.index', $user->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                    <a href="{{ route('admin.comment.destroy', $user->id) }}">
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.home') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

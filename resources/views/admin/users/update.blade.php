@extends('layouts.app')

@section('content')
    <div class="user-update">
        <h1>Update user</h1>
        <form action="{{ route('users.edit', $user->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" value="{{ $user->name }}" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input disabled type="email" class="form-control" id="exampleFormControlInput1" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('users.index') }}" class="btn btn-info">Back</a>
            </div>
        </form>
    </div>

@endsection

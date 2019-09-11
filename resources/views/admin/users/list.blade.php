@extends('layouts.app')

@section('content')
    <div class="user-list">
        <h1>List user</h1>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $key=> $user)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.update', $user->id) }}" class="btn btn-primary">Update</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

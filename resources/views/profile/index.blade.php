@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Created At</td>
                            <td>Updated At</td>
                            <td></td>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td><a href="{{ route('profiles.edit', [$user]) }}"><i class="fa fas-edit"></i>Edit</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

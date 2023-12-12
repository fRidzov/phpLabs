@extends('layouts.users')

@section('routeName', 'show')

@section('content')

    <div class="bg-gray-200">
        <h2>User Details</h2>

        <p><strong>Name:</strong> {{$user -> name}}</p>
        <p><strong>Email:</strong> {{$user -> email}}</p>

        <p><strong>Actions:</strong></p>


        <a href="{{ route('users.index') }}">Users list</a>

        <a href="{{ route('users.edit', $user) }}">Edit</a>

        <form action="{{ route('users.destroy', $user) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button" onclick="confirmDelete()">Delete User</button>
        </form>

        <script>
            function confirmDelete() {
                if (window.confirm('Are you sure you want to delete this user?')) {
                    // If user confirms, submit the form
                    document.querySelector('form').submit();
                }
            }
        </script>
    </div>
@endsection



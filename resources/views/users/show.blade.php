@extends('layouts.users')

@section('routeName', 'show')

@section('content')

    <div
        class="m-auto max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">User Details</h5>

        <p class="font-normal text-gray-700 dark:text-gray-400"><strong>Name:</strong> {{$user -> name}}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400"><strong>Email:</strong> {{$user -> email}}</p>

        <p class="mt-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><strong>Actions:</strong></p>

        <div class="flex items-start justify-between ">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    onclick="window.location='{{ route('users.index') }}'">Users list
            </button>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    onclick="window.location='{{ route('users.edit', $user) }}'">Edit
            </button>

            <form class="self-center" action="{{ route('users.destroy', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded" type="button"
                        onclick="confirmDelete()">Delete User
                </button>
            </form>
        </div>
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



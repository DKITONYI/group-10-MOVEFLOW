@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg p-8 rounded">

    <h2 class="text-3xl font-bold text-center mb-6">Create an Account</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 px-4 py-2 rounded">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" required autofocus
                   class="w-full border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" required
                   class="w-full border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Password</label>
            <input type="password" name="password" required
                   class="w-full border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Confirm Password</label>
            <input type="password" name="password_confirmation" required
                   class="w-full border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring-blue-500">
        </div>

        <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
            Register
        </button>

        <p class="mt-4 text-center text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
        </p>

    </form>
</div>
@endsection

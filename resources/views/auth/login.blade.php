@extends('layouts.app')
 
@section('title', 'Login | Laravel Lab')
 
@section('content')
<main class="flex min-h-screen items-center justify-center px-4 py-12">
    <section class="w-full max-w-md rounded-2xl bg-white p-8 shadow-lg">
        <p class="text-sm font-semibold uppercase tracking-widest text-indigo-600">
            Web Development
        </p>
        <h1 class="mt-2 text-3xl font-bold">Welcome back</h1>
        <p class="mt-2 text-sm text-slate-500">Sign in to open your dashboard.</p>
 
        @if ($errors->any())
            <div role="alert" class="mt-6 rounded-lg bg-red-50 p-4 text-sm text-red-700">
                <ul class="list-inside list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 
        <form method="POST" action="{{ route('login.submit') }}" class="mt-6 space-y-5">
            @csrf
 
            <div>
                <label for="email" class="mb-2 block text-sm font-medium">Email address</label>
                <input id="email" name="email" type="email"
                    value="{{ old('email') }}" required autofocus autocomplete="username"
                    placeholder="Enter your email"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
            </div>
 
            <div>
                <label for="password" class="mb-2 block text-sm font-medium">Password</label>
                <input id="password" name="password" type="password"
                    required autocomplete="current-password" placeholder="Enter your password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200">
            </div>
 
            <button type="submit"
                class="w-full rounded-lg bg-indigo-600 px-4 py-3 font-semibold text-white transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Login
            </button>
        </form>
    </section>
</main>
@endsection
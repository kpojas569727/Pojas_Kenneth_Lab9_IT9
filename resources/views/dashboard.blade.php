@extends('layouts.app')
 
@section('title', 'Dashboard | Laravel Lab')
 
@section('content')
<header class="border-b border-slate-200 bg-white">
    <nav aria-label="Main navigation"
        class="mx-auto flex max-w-5xl items-center justify-between gap-4 px-6 py-4">
        <a href="{{ route('dashboard') }}" class="text-lg font-bold text-indigo-600">
            Laravel Lab
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="rounded-lg bg-slate-900 px-4 py-2 text-sm font-semibold text-white hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2">
                Logout
            </button>
        </form>
    </nav>
</header>
 
<main class="mx-auto max-w-5xl px-6 py-10">
    <section class="rounded-2xl bg-indigo-600 p-6 text-white shadow-lg sm:p-10">
        <p class="text-sm font-medium text-indigo-100">Your Dashboard</p>
        <h1 class="mt-3 text-3xl font-bold sm:text-4xl">Hi, {{ auth()->user()->name }}!</h1>
        <p class="mt-3 text-indigo-100">You have successfully logged in to your Laravel application.</p>
    </section>
 
    <section aria-label="Account information" class="mt-8 grid gap-5 md:grid-cols-3">
        <article class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-sm font-medium text-slate-500">Account Name</h2>
            <p class="mt-2 text-xl font-semibold">{{ auth()->user()->name }}</p>
        </article>
        <article class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-sm font-medium text-slate-500">Email Address</h2>
            <p class="mt-2 break-all font-semibold">{{ auth()->user()->email }}</p>
        </article>
        <article class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-sm font-medium text-slate-500">Account Status</h2>
            <p class="mt-2 font-semibold text-emerald-600">Signed in</p>
        </article>
    </section>
</main>
@endsection
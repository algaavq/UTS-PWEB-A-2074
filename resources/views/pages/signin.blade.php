@extends('layouts.app')

@section('title')
    Sign in
@endsection

@section('content')
<div class="flex h-[70vh] flex-col justify-center px-6 py-12 w-[500px] rounded-2xl bg-white">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Masuk ke Akun </h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="px-[10px] block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-[#37385b] hover:text-[#4d4e75]">Lupa Password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="px-[10px] block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button onclick="window.location.href='/home'" type="submit" class="flex w-full justify-center rounded-md bg-[#37385b] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#4d4e75] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a href="{{ route('home') }}">Masuk</a></button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Bukan member?
      <a href="{{ route('signup') }}" class="font-semibold leading-6 text-[#37385b] hover:text-[#4d4e75]">Daftar</a>
    </p>
  </div>
</div>
@endsection
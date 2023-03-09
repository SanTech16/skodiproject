@extends('layouts.master')

@section('nav')

<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('index') }}">
                    <img src="{{ asset('/assets/img/logo 1.png') }}" width="50px" height="50px">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="max-w-screen-sm">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                        {{ __('Langganan') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('kelas')" :active="request()->routeIs('kelas')">
                        {{ __('Kelas') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('event')" :active="request()->routeIs('event')">
                        {{ __('Event') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('tentang')" :active="request()->routeIs('tentang')">
                        {{ __('Tentang') }}
                    </x-nav-link>
                </div>
                <!-- </div> -->
                
            </div>
        </div>
    </div>
</nav>
@endsection
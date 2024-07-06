@extends('layouts.app')

@section('content')

    <div class="max-w-screen-xl mx-auto px-5">
        <livewire:landing-menu/>
    </div>

    <footer class="my-20"> <p class="text-center text-sm text-slate-500">
            Copyright © {{ date('Y') }} CertiSwift. All rights reserved.
        </p> <p class="text-center text-xs text-slate-500 mt-1">
            Made by <a href="https://web3templates.com" target="_blank" rel="noopener" class="hover:underline">
                Ammar Razaman
            </a> </p> </footer>
@endsection

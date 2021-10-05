@extends('layouts.app')

@section('content')
    @include('layouts.wedding.header')

    <!-- Begin Main Content -->
    <div class="main-content">
        @include('layouts.wedding.pesan')
        {{-- @include('layouts.wedding.ucapan') --}}
        @livewire('add-ucapan')
    </div>

@endsection

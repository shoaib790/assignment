@extends('layouts.app')

@section('head')
@include('layouts.backend.partials.headersection')
@endsection

@section('content')

    @if(Request::is('companies'))
        @livewire('show-companies')
    @elseif (Request::is('news'))
        @livewire('show-news')
    @elseif (Request::is('add_news'))
        @livewire('add-news')
    @endif

@endsection

@push('js')
<script src="{{ asset('backend/admin/assets/js/sweetalert2.all.min.js') }}"></script>
@endpush
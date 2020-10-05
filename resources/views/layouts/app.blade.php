@extends('layouts.base')

@section('body')
<x-navbar></x-navbar>
<div class="container-fluid">
    @yield('content')
</div>
@endsection

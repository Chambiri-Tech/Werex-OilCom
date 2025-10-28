@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-primary">Welcome, {{ auth()->user()->name }}!</h1>
    <p class="text-center">This is your dashboard. Only verified users can access this page.</p>
</div>
@endsection

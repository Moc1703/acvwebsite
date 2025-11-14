@extends('layouts.app')

@section('title', 'KOL Specialist Indonesia | Test')

@section('content')
<div class="container py-5">
    <h1>Test Page - KOL Specialist</h1>
    <p>This is a test page to verify Blade syntax works.</p>

    @if(true)
        <p>Conditional rendering works!</p>
    @endif

    <ul>
        @foreach(['Service 1', 'Service 2', 'Service 3'] as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
</div>
@endsection
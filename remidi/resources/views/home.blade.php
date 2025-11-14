@extends('layouts.masterlayouts')

@section('title', 'Home')

@section('content')
{{-- content  --}}
<div class="container mt-4">
    <div class="row">
        @foreach($data as $imguniv)
            <div class="col-12 mb-5">
                <div class="card border-0 shadow-sm">

                    {{-- FOTO --}}
                    <img src="{{ asset('img/' . $imguniv['foto']) }}" class="card-img-top img-fluid rounded" alt="{{ $imguniv['nama'] }} "
                     style="width: 150rem; height: 23rem ; object-fit: cover;">
                    <div class="card-body text-center">
                    {{-- NAMA --}}
                    <h4 class="card-title fw-bold">{{ $imguniv['nama'] }}</h4>
                    {{-- DESKRIPSI --}}
                    <p class="card-text text-muted">{{ $imguniv['deskripsi'] }}</p>
                    {{-- LINK READ MORE --}}
                    <a href="{{ url('/post/' . $imguniv['id']) }}" class="text-decoration-none">
                     Read More →
                    </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- content end --}}
@endsection

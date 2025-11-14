@extends('layouts.masterlayouts')
@section('title', 'Post')
@section('content')
{{-- content mulai di sini  --}}


<h1>{{ $post['nama'] }}</h1>
    <p>{{ $post['deskripsi'] }}</p>
    
    <hr>
    
    <a href="{{ url('/home') }}">← kembali</a>

{{-- content berakhir di sini --}}
@endsection
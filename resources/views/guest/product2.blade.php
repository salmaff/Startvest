<link rel="stylesheet" href="{{ url('/static/css/khansa/product-style.css') }}">

@extends('layouts.main')

@section('main-content')
<div class="main-container">
    <div class="banner">
        <object data="{{ url("/static/image/khansa/Banner.svg") }}" type=""></object>
    </div>

    <div class="category-container">
        <div class="category-nav">
            <div class="category-desc">
            Kategori
            </div>
            <div class="all-category">
            View all
            </div>
        </div>
        <div class="item-container">
            <div class="item-category">
                <object data="{{ url("/static/image/khansa/teknologi.svg") }}" type=""></object>
                <div>Teknologi</div>
            </div>
            <div class="item-category">
                <object data="{{ url("/static/image/khansa/kesehatan.svg") }}" type=""></object>
                <div>Kesehatan</div>
            </div>
            <div class="item-category">
                <object data="{{ url("/static/image/khansa/properti.svg") }}" type=""></object>
                <div>Properti</div>
            </div>
            <div class="item-category">
                <object data="{{ url("/static/image/khansa/konveksi.svg") }}" type=""></object>
                <div>Konveksi</div>
            </div>
        </div>
    </div>

    <div class="projects-container">
        <div class="projects">
            @php
                $rows = [0, 1];
                $cols = [0, 1, 2];
            @endphp
            {{-- <object data="{{ url("/static/image/khansa/keyboard.svg") }}" type=""></object> --}}
            @foreach ($rows as $row)
                <div class="projects-row">
                    @foreach ($cols as $col)
                        <x-productCard />
                    @endforeach
                </div>
            @endforeach
        </div>
</div>
@endsection


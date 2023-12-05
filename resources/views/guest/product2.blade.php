
@extends('layouts.main')

@section('main-content')
<div class="container text-center">
    <img src="{{ url("/static/image/khansa/Banner.svg") }}" class="img-fluid" alt="banner">

    <div class="card">
        <div class="d-flex">
            <div class="p-2 w-100">Kategori</div>
            <div class="p-2 flex-shrink-1">View all</div>
        </div>

        <div class="d-flex justify-content-evenly">
            <div class="card" style="width: 250px;">
                <img src="{{ url("/static/image/khansa/teknologi.svg") }}" class="card-img-top" alt="teknologi">
                <div class="card-body">
                    <h5 class="card-title">Teknologi</h5>
                </div>
            </div>

            <div class="card" style="width: 250px;">
                <img src="{{ url("/static/image/khansa/kesehatan.svg") }}" class="card-img-top" alt="kesehatan">
                <div class="card-body">
                    <h5 class="card-title">Kesehatan</h5>
                </div>
            </div>

            <div class="card" style="width: 250px;">
                <img src="{{ url("/static/image/khansa/properti.svg") }}" class="card-img-top" alt="kesehatan">
                <div class="card-body">
                    <h5 class="card-title">Kesehatan</h5>
                </div>
            </div>

            <div class="card" style="width: 250px;">
                <img src="{{ url("/static/image/khansa/konveksi.svg") }}" class="card-img-top" alt="kesehatan">
                <div class="card-body">
                    <h5 class="card-title">Kesehatan</h5>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-evenly">
            
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

    <div class="projects">
    </div>
    </div>
@endsection


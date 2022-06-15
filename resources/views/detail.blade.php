@extends('olshop-layouts.app')
@section('title', 'Detail')
@section('content')

<div id="content">


                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        
                    

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header bg-primary py-3">
                            <a>
                                <span class="text-white">Detail - {{ $product->name }}</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('img/product/'. $product->image) }}" class="img-fluid">
                            <h5 class="card-title mt-2 fw-bold">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            @if($product->status == 'tersedia')
                            <p class="text-success">{{ $product->status }}</p>
                            @else
                            <p class="text-danger">Habis</p>
                            @endif
                            <p class="card-text">Rp. {{ $product->price }}</p>
                            @if($product->status == 'tersedia')
                            <a href="https://wa.me/?text={{urlencode(url()->current()) }}%0A%0AApakah%20barang%20tersebut%20masih%20tersedia%3F" class="btn btn-success">Pesan</a>
                            @else
                            <button type="button" class="btn btn-success" disabled>Pesan</button>
                            @endif
                            <a href="{{url()->previous()}}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>

                    <!-- Content Row -->


                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection
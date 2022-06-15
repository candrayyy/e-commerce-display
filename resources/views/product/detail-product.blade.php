@extends('layouts.app')
@section('title', 'Detail - Product')
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
                                <span class="text-white">Detail - {{ $detail->name }}</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('img/product/'. $detail->image) }}" class="img-fluid">
                            <h5 class="card-title mt-2 fw-bold">{{ $detail->name }}</h5>
                            <p class="card-text">{{ $detail->description }}</p>
                            @if($detail->status == 'tersedia')
                            <p class="text-success">{{ $detail->status }}</p>
                            @else
                            <p class="text-danger">Habis</p>
                            @endif
                            <p class="card-text">Rp. {{ $detail->price }}</p>
                        </div>
                    </div>

                    <!-- Content Row -->


                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection
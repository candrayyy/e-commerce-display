@extends('olshop-layouts.app')
@section('title', 'Olshop')
@section('content')

<div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                    </div> -->

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach($products as $product)
                        <div class="col">
                        <div class="card mb-3 shadow">
                            <a href="{{ asset('img/product/'.$product->image) }}" data-lightbox="photos">
                                <img src="{{ asset('img/product/'.$product->image) }}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                @if($product->status == 'tersedia')
                                <p class="text-success">{{ $product->status }}</p>
                                @else
                                <p class="text-danger">Habis</p>
                                @endif
                                <p class="card-text">Rp. {{ $product->price }}</p>
                                <a href="{{ url('olshop',$product->slug) }}" class="btn btn-warning">Details</a>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $products->links() }}
                </div>
                <!-- /.container-fluid -->

</div>

@endsection
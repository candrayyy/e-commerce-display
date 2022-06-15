@extends('layouts.app')
@section('title', 'Create - Product')
@section('content')

<div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header bg-primary py-3">
                            <a>
                                <span class="text-white">Ubah Data Produk</span>
                            </a>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="mb-3" hidden>
                                <input type="text" id="user_id" name="user_id" class="form-control" value="{{ Auth::user()->id }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Pilih Gambar</label>
                                <input type="file" id="image" name="image" class="form-control" style="height: 45px">
                            </div>
                            <a href="{{ asset('img/product/'.$product->image) }}" data-lightbox="image">
                                <img src="{{ asset('img/product/'.$product->image) }}" width="100" class="img-thumbnail mb-2">
                            </a>
                            <div class="form-group">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Deskripsi Produk</label>
                                <textarea type="text" id="description" name="description" class="form-control" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label">Status Produk</label>
                                <input type="text" id="status" name="status" class="form-control" value="{{ $product->status }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price" class="form-label">Harga Produk</label>
                                <input type="number" id="price" name="price" min="0" class="form-control" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Simpan</button>
                                <a href="{{url()->previous()}}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection
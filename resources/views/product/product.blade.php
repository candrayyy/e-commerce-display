@extends('layouts.app')
@section('title', 'Product')
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
                            <a href="{{ route('product.create') }}" class="btn btn-light" type="button">
                                <span class="text-primary">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Deskpripsi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ asset('img/product/'.$item->image) }}" data-lightbox="image">
                                                <img src="{{ asset('img/product/'.$item->image) }}" width="100" class="img-thumbnail">
                                            </a>
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{!! Str::limit($item->description, 15) !!}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>Rp. {{ $item->price }}</td>
                                        <td>
                                            <a href="{{ url('product/detail', $item->slug) }}" class="btn btn-warning btn-icon btn-sm"><span>Detail</span></a>
                                            <a href="{{ route('product.edit',$item->id) }}" class="btn btn-success btn-icon btn-sm" type="button"><span>Ubah</span></a>
                                            <a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" type="button"><span>Hapus</span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $product->links() }}
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection
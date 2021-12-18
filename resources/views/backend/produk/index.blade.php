@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                {{-- content tabel --}}
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{ route('produk-add') }}" class="btn btn-primary" >Tambah</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($produks as $key => $produk)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td>{{ $produk->kategori->nama_kategori }}</td>
                
                                        <td> Rp. {{ number_format($produk->harga)  }}</td>
                                        <td>
                                            <img src="{{ asset('storage/'.$produk->gambar) }}" alt="">    
                                        </td>
                                        <td>
                                            <a href="{{ route('produk-edit', $produk->id ) }}" class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{ route('produk-delete', $produk->id ) }}" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data tidak ada</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

@endsection

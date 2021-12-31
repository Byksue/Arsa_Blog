@extends('dashboard.layouts.main')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">Post Categories</h1>
        <a href="/dashboard/categories/create" class="d-none d-sm-inline-block btn btn-sm btn-primary  shadow-sm"><i class="fas fa-plus text-white-50"></i> Tambah Kategori Baru</a>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>     
                            <th>Alat</th>     
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th>Alat</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($categories as $category)    
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-info text-light"><i class="fas fa-search"></i></a>
                                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning text-light"><i class="fas fa-edit"></i></a>
                                    <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Are You Sure to Delete This Post?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
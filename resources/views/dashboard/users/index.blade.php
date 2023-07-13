@extends('dashboard.layouts.index')
@section('title')
    Users
@endsection
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Users
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        @if (session('success') > 0)
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <meta http-equiv="refresh" content="1; url={{ url('/dashboard/users') }}">
        @endif
        <div class="row">
            <div class="col-lg-12">
                @if (Auth::user()->role == 'admin')
                    <a href="{{ url('/dashboard/users/create') }}" class="btn btn-gradient-primary mb-3">+ Tambah Data</a>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-success table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        @if (Auth::user()->role == 'admin')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->role }}</td>
                                            @if (Auth::user()->role == 'admin')
                                                <td>
                                                    <a class="btn btn-warning btn-sm"
                                                        href="{{ url('/dashboard/users/' . $item->id . '/edit') }}"><i
                                                            class="mdi mdi-pen"></i></a>
                                                    <form action="{{ url('/dashboard/users', $item->id) }}" class="d-inline"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            onclick="if(!confirm('Anda yakin akan menghapus data {{ $item->name }} ?')) {return false};"
                                                            class="btn btn-danger btn-sm"><i
                                                                class="mdi mdi-delete"></i></button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

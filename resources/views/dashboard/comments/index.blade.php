@extends('dashboard.layouts.index')
@section('title')
    Comments
@endsection
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Comments
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
            <meta http-equiv="refresh" content="1; url={{ url('/dashboard/comments') }}">
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-success table-bordered">
                                    <tr>
                                        @if (Auth::user()->role == 'admin')
                                            <th>Action</th>
                                        @endif
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Movie</th>
                                        <th>User</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $item)
                                        <tr>
                                            @if (Auth::user()->role == 'admin')
                                                <td>
                                                    <form action="{{ url('/dashboard/comments', $item->id) }}"
                                                        class="d-inline" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            onclick="if(!confirm('Anda yakin akan menghapus data ?')) {return false};"
                                                            class="btn btn-danger btn-sm"><i
                                                                class="mdi mdi-delete"></i></button>
                                                    </form>
                                                </td>
                                            @endif
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->movie->title }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->comment }}</td>
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

@extends('dashboard.layouts.index')
@section('title')
    Movies
@endsection
@section('content')
    <!-- partial -->
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Movies
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ url('/dashboard/movies') }}" class="btn btn-gradient-primary mb-3"> Back</a>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Movies</h4>
                        <div class="row">
                            <div class="col-md-3 d-flex flex-column">
                                <img src="{{ $movie->poster_url }}" class="mb-2 img-thumbnail align-center">
                                <iframe width="100%" height="315" src="{{ $movie->video_url }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-9">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Title:</strong></td>
                                            <td>{{ $movie->title }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Description:</strong></td>
                                            <td class="text-wrap">
                                                <p class="text-justify">{{ $movie->description }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Release Date:</strong></td>
                                            <td>{{ $movie->release_date }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Country:</strong></td>
                                            <td>{{ $movie->country->name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Genre:</strong></td>
                                            <td>{{ $movie->genre->name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Rating:</strong></td>
                                            <td>{{ $movie->rating }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

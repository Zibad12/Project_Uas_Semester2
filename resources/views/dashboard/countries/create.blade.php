@if (Auth::user()->role == 'admin')
    @extends('dashboard.layouts.index')
    @section('title')
        Create countries
    @endsection
    @section('content')
        <!-- partial -->
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-book"></i>
                    </span> Form countrie
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i
                                class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Add countries</h3><br />
                    <!-- form validasi -->
                    <form class="forms-sample" action="{{ url('/dashboard/countries') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Name Countries</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name Countries" value="{{ old('name') }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('name') }}</small></i>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="flag_url" class="col-sm-4 col-form-label">Flag url</label>
                            <div class="col-sm-8">
                                <input type="url" class="form-control" id="flag_url" name="flag_url"
                                    placeholder="https://" value="{{ old('flag_url') }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('flag_url') }}</small></i>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
@else
    @php
        abort(403, 'FORBIDDEN  | UNAUTHORIZED ACTION.');
    @endphp
@endif

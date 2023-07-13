@if (Auth::user()->role == 'admin')

    @extends('dashboard.layouts.index')
    @section('title')
        Create movies
    @endsection
    @section('content')
        <!-- partial -->
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-book"></i>
                    </span> Form Movies
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
                    <h3>Add movies</h3><br />
                    <!-- form validasi -->
                    <form class="forms-sample" action="{{ url('/dashboard/movies') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label">Title Movies</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Title Movies" value="{{ old('title') }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('title') }}</small></i>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country_id" class="col-sm-4 col-form-label">Country</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="country_id" name="country_id">
                                    <option value="">-- Select Country --</option>
                                    @foreach ($countries as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('country_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('country_id') }}</small></i>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="genre_id" class="col-sm-4 col-form-label">Genre</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="genre_id" name="genre_id">
                                    <option value="">-- Select Genre --</option>
                                    @foreach ($genres as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('genre_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('genre_id') }}</small></i>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="release_date" class="col-sm-4 col-form-label">Release date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="release_date" name="release_date"
                                    placeholder="Release_date Movies" value="{{ old('release_date') }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('release_date') }}</small></i>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                            <div class="col-sm-8">
                                <input type="number" min="1" max="10" class="form-control" id="rating"
                                    name="rating" placeholder="Rating Movies" value="{{ old('rating') }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('rating') }}</small></i>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="poster_url" class="col-sm-4 col-form-label">Poster url</label>
                            <div class="col-sm-8">
                                <input type="url" class="form-control" id="poster_url" name="poster_url"
                                    placeholder="https://" value="{{ old('poster_url') }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('poster_url') }}</small></i>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="video_url" class="col-sm-4 col-form-label">Video url</label>
                            <div class="col-sm-8">
                                <input type="url" class="form-control" id="video_url" name="video_url"
                                    placeholder="https://" value="{{ old('video_url') }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('video_url') }}</small></i>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="description" name="description" placeholder="Description Movies"
                                    value="{{ old('description') }}"> {{ old('description') }}</textarea>
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('description') }}</small></i>
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

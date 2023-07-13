@if (Auth::user()->role == 'admin')
    @extends('dashboard.layouts.index')
    @section('title')
        Edit users
    @endsection
    @section('content')
        <!-- partial -->
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-book"></i>
                    </span> Form user
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
                    <h3>Add user</h3><br />
                    <!-- form validasi -->
                    <form class="forms-sample" action="{{ url('/dashboard/users', $user->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <<div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Name Users</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name Users" value="{{ $user->name }}">
                                @if (count($errors) > 0)
                                    <i class="text-danger"><small>{{ $errors->first('name') }}</small></i>
                                @endif
                            </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" min="1" max="10" class="form-control" id="email"
                            name="email" placeholder="Email Users" value="{{ $user->email }}">
                        @if (count($errors) > 0)
                            <i class="text-danger"><small>{{ $errors->first('email') }}</small></i>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="password" name="password">
                        @if (count($errors) > 0)
                            <i class="text-danger"><small>{{ $errors->first('password') }}</small></i>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-sm-4 col-form-label">Role</label>
                    <div class="col-sm-8">
                        <input type="radio" id="admin" name="role" value="admin"
                            {{ $user->role == 'admin' ? 'checked' : '' }}> <label for="admin">admin</label>
                        <input type="radio" id="manager" name="role" value="manager"
                            {{ $user->role == 'manager' ? 'checked' : '' }}> <label for="manager">manager</label>
                        <input type="radio" id="user" name="role" value="user"
                            {{ $user->role == 'user' ? 'checked' : '' }}> <label for="user">user</label>
                        @if (count($errors) > 0)
                            <i class="text-danger"><small>{{ $errors->first('role') }}</small></i>
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

@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Validation</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Form Validation</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form method="POST" action="{{ route('employee.store') }}">
                                @csrf
                                <div class="card-header">
                                    <h4>Add Employee</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="name"
                                            class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                            name="name" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Last Name</label>
                                        <input id="name" type="name"
                                            class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                            name="name" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Last Name</label>
                                        <input id="name" type="name"
                                            class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                            name="name" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Last Name</label>
                                        <input id="name" type="name"
                                            class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                            name="name" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Last Name</label>
                                        <input id="name" type="name"
                                            class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                            name="name" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush

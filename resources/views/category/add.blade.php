@extends('layouts.template')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-primary">
                    <div class="card-header d-flex">
                        <h3 class="mr-auto">Add Category</h3>
                        <a class="btn btn-sm btn-danger pt-2" href="{{ url('category') }}">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ url('category') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">Category Name</label>
                                <input type="text" class="form-control @error('category') is-invalid @enderror"
                                    id="category" name="category" value="{{ old('category') }}" autofocus>
                                @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

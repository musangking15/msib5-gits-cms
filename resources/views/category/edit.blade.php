@extends('layouts.template')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-primary">
                    <div class="card-header d-flex">
                        <h3 class="mr-auto">Edit Category</h3>
                        <a class="btn btn-sm btn-danger pt-2" href="{{ url('category') }}">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ url('category/'. $id) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">Category Name</label>
                                <input type="text" class="form-control @error('category') is-invalid @enderror"
                                    id="category" name="category" value="{{ $category }}" autofocus>
                                @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

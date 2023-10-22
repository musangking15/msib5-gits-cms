@extends('layouts.template')

@section('contents')

<div class="container">
    <h1 class="mb-4 text-center">Category</h1>
    <button class="btn btn-sm btn-primary mb-2" type="button">
        <i class="fas fa-plus-circle"></i> Add Category
    </button>
    <table class="table table-hover table-sm">
        <thead>
          <tr class="text-center">
            <th>#</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($category as $row)
              <tr class="text-center">
                <th>{{ $loop->iteration }}</th>
                <td>{{ $row->category }}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection
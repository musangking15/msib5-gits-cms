@extends('layouts.template')

@section('contents')

<div class="container">
    <h1 class="mb-4 text-center">Category</h1>
    <a class="btn btn-sm btn-primary mb-2" href="{{ url('category/add') }}">
        <i class="fas fa-plus-circle"></i> Add Category
    </a>
    @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <table class="table table-hover table-sm">
        <thead>
          <tr class="text-center">
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($category as $row)
              <tr class="text-center">
                <th>{{ $loop->iteration }}</th>
                <td>{{ $row->category }}</td>
                <td>
                  <a href="{{ url('category/'. $row->id) }}" class="btn btn-sm btn-warning" title="Edit data">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form onsubmit="return deleteData('{{ $row->category }}')" action="{{ url('category/'. $row->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="Hapus data" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
<script>
  function deleteData(name){
    pesan = confirm(`Are you sure you wanna delete this '${name}' ?`);
    return pesan
  }
</script>
@endsection
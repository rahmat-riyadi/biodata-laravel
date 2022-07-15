@extends('dashboard.layout.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <p class="fs-3" >{{ session('success') }}</p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nama</th>
            <th scope="col">email</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($members as $i => $member)
              <tr>
                  <th scope="row">{{ $i+1 }}</th>
                  <td>{{ $member->nama }}</td>
                  <td>{{ $member->email }}</td>
                  <td>
                    <a href="/admin/detail/{{ $member->id }}" class="btn btn-success">edit</a>
                    <form action="/admin/detail/{{ $member->id }}" method="post" class="d-inline">
                        @method('delete') @csrf
                        <button class="btn btn-danger">delete</button>
                    </form>
                  </td>
              </tr>
            @endforeach
            <tr>
              <td colspan="4" class="text-center" ><a href="/admin/add" class="btn btn-info text-white">add data</a></td>
            </tr>
        </tbody>
    </table>
  </div>

    
@endsection
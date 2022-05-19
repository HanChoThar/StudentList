@extends('layouts.app')

@section('content')
@if(session('info'))
    <div class="alert alert-info">
    {{ session('info') }}
    </div>
@endif
<div class="container mx-auto" style="max-width: 900px">
  @include('studentlists.searchbar')

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Email</th>
        <th scope="col">NRC</th>
        <th scope="col">Courses</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tablelists as $tablelist)
        <tr>
          <td>{{ $tablelist->name }}</td>
          <td>{{ $tablelist->birth }}</td>
          <td>{{ $tablelist->email }}</td>
          <td>{{ $tablelist->nrc }}</td>
          <td>{{ $tablelist->courses }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
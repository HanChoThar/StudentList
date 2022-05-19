@extends('layouts.app')

@section('content')

<div class="container mx-auto" style="max-width: 900px">
@include('studentlists.searchbar')
@if(!empty($searchlists))
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
    @foreach($searchlists as $tablelist)
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
@else
<div class="text-center">No Result Found!</div>
@endif
@endsection
</div>
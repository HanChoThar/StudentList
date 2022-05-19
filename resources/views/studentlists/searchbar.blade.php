{{-- For Component usage in every page --}}

<h2 class="py-4 d-flex justify-content-between">
  <a href="{{ url('/lists') }}" class="text-decoration-none text-dark">Student List</a>
  <a href="{{ url('/') }}" class="btn btn-primary">Register</a>
</h2>
<form method="get" action="{{ url('/search') }}" class="d-flex pb-4" role="search">
  <input class="form-control me-2 mx-2" name="search" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
  <button class="btn btn-outline-success" type="submit">Search</button>

  @if(request()->route()->uri !== "lists")
  <a href="{{ url('/lists') }}" class="btn btn-outline-success" style="margin-left: 10px">Reset</a>
  @endif
</form>

    

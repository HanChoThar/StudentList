  @extends ('layouts/app')

  @section ('content')
  <div class="container mx-auto pt-4 d-flex justify-content-between align-items-center" style="max-width: 700px">
    <h1 class="mb-4">Form Register</h1>
    <a href="{{ url('/lists') }}" class="text-gray">Student Lists</a>
  </div>
  
  <div class="container" style="max-width: 700px">
    @if($errors->any())
      <div class="alert alert-danger">
        <ol>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ol>
      </div>
    @endif
  </div>
  
  <form method="post" class="container pb-4" style="max-width: 700px" autocomplete="off">
    @csrf
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Name</label>
      <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputDate" class="form-label">Date Of Birth</label>
      <input type="date" value="{{ old('birth') }}" name="birth" class="form-control" id="exampleInputDate">
    </div>
    <div class="mb-3">
      <label for="exampleInputNrc" class="form-label">NRC</label>
      <input type="text" value="{{ old('nrc') }}" name="nrc" class="form-control" id="exampleInputNrc">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email</label>
      <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="exampleInputEmail">
    </div>
    <div class="mb-3">
      <p>Choose Your Courses</p>
      <div class="form-check">
        <input class="form-check-input" name="courses[]" type="checkbox" value="english" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">English</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="courses[]" type="checkbox" value="math" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">Math</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="courses[]" type="checkbox" value="physics" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">Physics</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="courses[]" type="checkbox" value="chemistry" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">Chemistry</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="courses[]" type="checkbox" value="bio" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">Bio</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="courses[]" type="checkbox" value="eco" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">Eco</label>
      </div>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  @endsection
</body>
</html>
@extends('layout.app')

@section('section')
  <h1>This is the test!!</h1>

  <form class="" action="index.html" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName">
      </div>
      <div class="form-group col-md-6">
        <label for="inputCity">Age</label>
        <input type="text" class="form-control" id="inputAge">
      </div>
    </div>
    <div class="group">

    </div>
  </form>

  <input class="btn btn-primary" type="submit" value="Submit">
@endsection

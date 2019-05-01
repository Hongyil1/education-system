@extends('layout.app')

@section('section')
  <h1>This is the test!!</h1>

  <form class="" action="{{ action('PageController@pass') }}" method="Post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName">Name</label>
        <input type="text" name='input_name' class="form-control" id="inputName">
      </div>
      <div class="form-group col-md-6">
        <label for="inputCity">Age</label>
        <input type="text" name='input_age' class="form-control" id="inputAge">
      </div>
    </div>
    <div class="group">

    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>


  <br>
  @if (count($input) > 0)
      <p>Name: {{ $input['name'] }}</p>
      <p>Age: {{ $input['age'] }}</p>
    </div>
  @elseif (count($input) === 0)
    <h2>Nothing!</h2>
  @endif
@endsection

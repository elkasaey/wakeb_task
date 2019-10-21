@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a record</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('Dashboard.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" class="form-control" name="image" />
          </div>
          <div class="form-group">
              <label for="screen_name">Screen Name:</label>
              <input type="text" class="form-control" name="screen_name"/>
          </div>
          <div class="form-group">
              <label for="content">Content:</label>
              <input type="text" class="form-control" name="content"/>
          </div>
          <div class="form-group">
              <label for="description">Description:</label>
              <input type="textarea" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="user_name">User Name:</label>
              <input type="text" class="form-control" name="user_name"/>
          </div>
          <div class="form-group">
              <label for="date">Date:</label>
              <input type="date" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="statuse">Statuse:</label>
              <input type="text" class="form-control" name="statuse"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add</button>
      </form>
  </div>
</div>
</div>

@endsection

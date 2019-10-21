@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a record</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('Dashboard.update', $data->id) }}"  enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT')}}
            <div class="form-group">

                <label for="name">Title:</label>
                <input type="text" class="form-control" name="name" value={{ $data->name }} />
            </div>

            <div class="form-group">
                <label for="image">Status:</label>
                <input type="file" class="form-control" name="image" value={{ $data->image }}  />
            </div>

            <div class="form-group">
                <label for="screen_name">Phone:</label>
                <input type="text" class="form-control" name="screen_name" value={{ $data->screen_name }} />
            </div>
            <div class="form-group">
                <label for="content">Contract Start Date:</label>
                <input type="text" class="form-control" name="content" value={{ $data->content }} />
            </div>
            <div class="form-group">
                <label for="description">Contract End Date:</label>
                <input type="textarea" class="form-control" name="description" value={{ $data->description }} />
            </div>
            <div class="form-group">
                <label for="user_name">Description:</label>
                <input type="text" class="form-control" name="user_name" value={{ $data->user_name }} />
            </div>
            <div class="form-group">
                <label for="date">Description:</label>
                <input type="date" class="form-control" name="date" value={{ $data->date }} />
            </div>
            <div class="form-group">
                <label for="statuse">Description:</label>
                <input type="text" class="form-control" name="statuse" value={{ $data->statuse }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

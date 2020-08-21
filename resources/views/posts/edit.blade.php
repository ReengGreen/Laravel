@extends('layouts.app')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create</h1>
  <div>
      <form method="post" action="/update/{{$table_post->id}}">
      @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{$table_post->name}}"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$table_post->email}}"/>
          </div>
          <div class="form-group">
              <label for="phone_num">Phone Number:</label>
              <input type="text" class="form-control" name="phone_num" value="{{$table_post->phone_num}}"/>
          </div>
          <div class="form-group">
              <label for="message">Messages:</label>
              <input type="text" class="form-control" name="message" value="{{$table_post->message}}"/>
          </div>                       
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
@endsection
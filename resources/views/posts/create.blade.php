@extends('layouts.app')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create</h1>
  <div>
      <form method="post" action="\store">
      @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Please Your Enter Name"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" placeholder="Please Enter Your Email"/>
          </div>
          <div class="form-group">
              <label for="phone_num">Phone Number:</label>
              <input type="text" class="form-control" name="phone_num" placeholder="Please Enter Your Phone Number"/>
          </div>
          <div class="form-group">
              <label for="message">Messages:</label>
              <input type="text" class="form-control" name="message" placeholder="Please Enter Your Message"/>
          </div>                       
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
</div>
@endsection
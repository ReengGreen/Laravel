@extends('layouts.app')
@section('content')
<div class="container lg-5">
  <div class="row mt-3">
    <div class="col-sm-12">   
    <h1 class="display-3">Contacts</h1> 
      <a href="\create" class="btn btn-success mb-2">Create</a>
      <table class="table table-bordered" style="width:100%; text-align:center">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Phone Number</td>
              <td>Messages</td>
              <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($table_post as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->phone_num}}</td>
                <td>{{$post->message}}</td>
                <td>
                  <a href="\edit\{{$post->id}}" class="btn btn-success">Edit</a> |
                  <a href="\delete\{{$post->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
        <!-- < ?php
        echo '<pre>';
        print_r($table_post);
        echo '</pre>';
        die();
        ?> -->
      </table>
    <div>
  </div>
</div>
@endsection
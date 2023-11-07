@extends('layouts.app2')

@section('mytitle', 'ToDo')

@section('bodyContent')

<div class="d-flex justify-content-between mt-5">
    <h2>All tasks</h2>
    <a href="{{route('createPage')}}" class="btn btn-outline-primary">Add New</a>
</div>
<table class="mt-3 table table-bordered">
  <thead>
    <tr>
      <th class="col-2">#</th>
      <th class="col-7">Task Title</th>
      <th class="col-3">Action</th>
    </tr>
  </thead>
  <tbody>
   
      <tr>
        <td></td>
        <td></td>
        <td>
          <div class="d-flex justify-content-between">
            <a href="" type="submit" class="btn btn-primary btn-small">Details</a>
            <a href="" type="submit" class="btn btn-success btn-small">Edit</a>
            <a href="" type="submit" class="btn btn-danger btn-small">Delete</a>
          </div>
        </td>
      </tr>
   
  </tbody>
</table>




@endsection
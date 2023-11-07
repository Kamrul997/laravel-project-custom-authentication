@extends('layouts.app')

@section('mytitle', 'Create New Task')

@section('bodyContent')

<h2 class = "text-center">Create New Task</h2>
<form class="mt-3" method="POST" action="{{route('createNewTaskPage')}}" >
@csrf
  <div class="form-group my-2">
    <label class = "mb-2">Title:</label>
    <input type="text" class="form-control" name="taskTitle" placeholder="Title">
    <div class="text-danger">
      @error('taskTitle')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Description:</label>
    <textarea class="form-control" row="10" name="taskDescription" placeholder="Description"></textarea>
    <div class="text-danger">
      @error('taskDescription')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Start Date:</label>
    <input type="date" class="form-control" name="taskStartDate">
    <div class="text-danger">
      @error('taskStartDate')
        {{$message}}
      @enderror
    </div>
  </div>

  <div class="form-group my-2">
    <label class = "mb-2">Deadline:</label>
    <input type="date" class="form-control" name="taskDeadline">
    <div class="text-danger">
      @error('taskDeadline')
        {{$message}}
      @enderror
    </div>
  </div>
 
  <input type="submit" class="btn btn-primary mt-2" value="Create Task">
</form>


@endsection
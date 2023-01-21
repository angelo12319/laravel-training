@extends('layouts.app')
@section('content')
<div class="container justify-content center">
  <div class="m4-4 card">
    <div class="card-body bg-white">
 <div class="container">
  <div class="card">
    <div class="card-body">
      <form>
        <div class="form-group">
          <label for="formGroupExampleInput">Id</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="enter id number">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Created_at</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="created_at">
        </div>
      
        <div class="form-group">
          <label for="formGroupExampleInput">Updated_at</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="updated_at">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Assignee</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="assignee">
        </div>
      
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Status</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="input your status">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>
{{-- </div>
</div> --}}
@endsection


            

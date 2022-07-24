@extends('layouts.dashlayout')

@section('content')

<div class="container p-3">
    <form  action="/admin/controller/subject/create" method="post"  class="pl-5 pr-5">
      {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter name" name='name'>
        </div>
        <div class="form-group">
          <label for="exampleInputdescription1">description</label>
          <input type="text" class="form-control" id="exampleInputdescription1" placeholder="description" name="description">
        </div>
       
        <button type="submit" class="btn btn-primary">create</button>
      </form>

</div>
@endsection
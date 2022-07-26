@extends('layouts.dashlayout')

@section('content')

   <div class="d-flex justify-content-center align-items-center p-4 " style="min-height: 50vh;">

    <div class="d-flex justify-content-center  p-4 " >
    <div class="container p-3  bg-primary" style="max-width: 50%; ">
<h3> {{$subject[0]->name}}</h3>
<br>
<p>
    {{$subject[0]->descreption}}
</p>
<div class="d-flex justify-content-around pb-1">
    <a href="/admin/controller/subject/edit/{{{$subject[0]->id}}}" type="button" class="btn btn-warning">Edit</a>
    <a  href="/admin/controller/subject/delete/{{{$subject[0]->id}}}" type="button" class="btn btn-danger" >Delete</a>
  </div>
    </div>
    <div class="container p-3  bg-success">

    <h3> Sub Subjects</h3>
    <ul>



@foreach ($childsubs as $item)

    <li>
<h4>{{$item->name}}</h4>
<p> {{$item->description}}</p>
<div class="text-right">
<a  href="/admin/controller/childsubject/delete/{{{$item->id}}}" type="button" class="btn btn-danger" >Delete</a>
</div>
    </li>


@endforeach
@empty($childsubs)
<h3>Nothing to show.Add some sub subjects</h3>

@endempty

</ul>
    <form  action="/admin/controller/child_subject/add" method="post"  class="pl-5 pr-5">
        {{csrf_field()}}
        <div class="form-group" style="display: none">
            <label for="exampleid">Name</label>
            <input type="text" class="form-control" id="id" aria-describedby="nameHelp" value="{{$subject[0]->id}}" name='id'>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter name" name='name'>
          </div>
          <div class="form-group">
            <label for="exampleInputdescription1">description</label>
            <input type="text" class="form-control" id="exampleInputdescription1" placeholder="description" name="description">
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
        </form>

    </div>
    </div>

</div>





@endsection

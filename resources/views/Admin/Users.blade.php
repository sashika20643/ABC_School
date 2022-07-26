@extends('layouts.dashlayout')

@section('content')
<h1>Users</h1>
<div class="d-flex flex-wrap">

@foreach ($users as $user)
<section class="" style="background-color: #f4f5f7;">
    <div class="container py-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col col-lg-10 mb-1 ">
          <div class="card mb-1" style="border-radius: .5rem;">
            <div class="row">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5>Marie Horwitz</h5>
                <p>Web Designer</p>
                <i class="far fa-edit mb-1"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>{{$user->name}}</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div >
                      <h6>Age: {{$user->age}}</h6>

                    </div>
                  </div>
                  <div class="d-flex justify-content-start">
                    <a href="/admin/profile/view/{{{$user->id}}}" type="button" class="btn btn-primary">View</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endforeach

</div>
@endsection

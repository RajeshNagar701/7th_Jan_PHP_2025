
@extends('website.layout.main')


@section('main_content')

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">User Profile</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Profile</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
    <section class="w3l-about-2 py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
               
                <div class="col-lg-6 about-2-secs-left">
                    <h5 class="small-title mb-2">Profile</h5>
                    
                    <h3 class="title-style mb-2">NAME : {{$data->name}}</h3>
                    <p>ID : {{$data->id}}</p>
                    <ul class="list-about-2 mt-sm-4 mt-3">
                        <li class="py-1"><i class="far fa-check-square"></i>
                        Gender : {{$data->gender}}
                        </li>
                        <li class="py-2"><i class="far fa-check-square"></i>
                        Laungauges : {{$data->lag}}
                        </li>
                    </ul>
                    <a class="btn btn-style mt-lg-5 mt-4" href="{{url('/edit_profile/'.$data->id)}}">Edit Profile</a>
                </div>
                <div class="col-lg-6 about-2-secs-right mt-lg-4 mt-5">
                    <img src="{{url('admin/upload/customer/'.$data->image)}}" alt="" class="img-fluid radius-image" />
                </div>
              
            </div>
        </div>
    </section>
    <!-- //about section -->

   

    @endsection
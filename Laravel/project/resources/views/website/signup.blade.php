@extends('website.layout.main')


@section('main_content')

<!-- inner banner -->
<section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-5 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Signup Us</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><i class="fas fa-angle-right mx-2"></i>Signup Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- contact -->
<section class="w3l-contact-info-main py-5" id="contact">
    <div class="container pt-lg-5 pt-md-4 pt-2">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
            <h3 class="title-style">Signup Here</h3>
        </div>
        <div class="row">

            <div class="offset-md-3 col-md-6 right-cont-contact ps-md-4 mt-md-0 mt-5">

                <form method="post" enctype="multipart/form-data" class="w3layouts-contact-fm" action="{{url('/insert_user')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="name" id="w3lName" placeholder="Your Name"
                            required="">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="email" name="email" id="w3lSender"
                            placeholder="Your Email" required="">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" name="pass" id="w3lSender"
                            placeholder="Your Password" required="">
                    </div>
                    Gender :
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input" value="Male">Male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input" value="Female">Female
                        </label>
                    </div>

                    lag :
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="lag[]" class="form-check-input" value="Hindi">Hindi
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="lag[]" class="form-check-input" value="English">English
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="lag[]" class="form-check-input" value="Gujarati">Gujarati
                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="tel" name="mobile" id="w3lSender"
                            placeholder="Your Mobile" required="">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="file" name="image" id="w3lSender"
                            placeholder="Your Imaghe" required="">
                    </div>

                    <div class="form-group-2 mt-3 text-end">
                        <button type="submit" sane="submit" class="btn btn-style">Signup</button>
                    </div>
                    <div class="form-group-2 mt-3 text-start">
                        <a href="login">Login Here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="map-contact pt-5">
    <iframe class="map-w3layouts"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
<!-- //contact -->
@endsection
@extends('pages.master')

@section('content')

<section class="vh-100" data-aos="fade-in">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form action="/signup" method="POST" class="mx-1 mx-md-4">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" class="form-control @error('name')
                                                is-invalid
                                            @enderror" name="name" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" class="form-control @error('email')
                                                is-invalid
                                            @enderror" name="email" />
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control @error('password')
                                                is-invalid
                                            @enderror" name="password" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="hidden" id="form3Example4c" class="form-control" name="is_admin" value="0" />
                                        </div>
                                    </div>

                                    <input type="hidden" name="special" value="unlisted">

                                    <input type="hidden" name="desc" value="unlisted">

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-success btn-lg">Register</button>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <p>Already have account ? Sign in <a href="/signin">here</a>. </p>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('pages.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        <h2>Account Setting</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
</div><!-- End Breadcrumbs -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-6">
                <div class="card">
                    <div class="card-header">Your Account</div>
                    <div class="card-body">
                        <form action="/change" method="POST" class="mx-1 mx-md-4">
                            @csrf
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="password" id="form3Example1c" class="form-control @error('curr_password')
                                        is-invalid
                                    @enderror" value="{{old('curr_password')}}" name="curr_password" />
                                    @error('curr_password')
                                    {{ $message }}
                                    @enderror
                                    <label class="form-label" for="form3Example1c">Your Current Password</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="password" id="form3Example3c" class="form-control @error('password')
                                        is-invalid
                                    @enderror" value="{{ old('password') }}" name="password" />
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                    <label class="form-label" for="form3Example3c">New Password</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="password" id="form3Example4c" class="form-control @error('password_confirmation')
                                        is-invalid
                                    @enderror" name="password_confirmation" />
                                    @error('password_confirmation')
                                    {{ $message }}
                                    @enderror
                                    <label class="form-label" for="form3Example4c">Confirm Password</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button type="submit" class="btn btn-success btn-lg">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('sweetalert::alert')
@endsection

@extends('pages.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs breadcumbs-profile" data-aos="fade-in">
    <div class="container">
        <h2>Profile</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
</div>
<!-- End Breadcrumbs -->
<div class="container">
    <div class="row mt-5">

        <div class="col-md-5">
            <div class="info">
                <div class="address">
                    <h3>Your Name</h3>
                    <p>{{ auth()->user()->name }}</p>
                </div>

                <div class="email">
                    <h3>Your Email</h3>
                    <p>{{ auth()->user()->email }}</p>
                </div>

                <div class="phone">

                    <h3>Your Password</h3>
                    <p>{{ auth()->user()->password }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

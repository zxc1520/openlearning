@extends('pages.master')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Trainers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
</div>

<section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

        @foreach ($data as $d)
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{ asset('img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>{{ $d->name }}</h4>
                        <span>{{ $d->special }}</span>
                        <p>
                            {{ $d->desc }}
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</section>
@endsection

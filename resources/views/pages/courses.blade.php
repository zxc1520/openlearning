@extends('pages.master')

@section('content')
<div class="breadcrumbs">
     <div class="container">
          <h2>Courses</h2>
          <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
     </div>
</div>
<section id="courses" class="courses">
     <div class="container" data-aos="fade-up">

        <form action="/search" method="GET">
            @csrf
          <input class="form-control" type="text" id="search" name="search" placeholder="Search Anything" aria-label="Search">
        </form>


          @if(count($data))
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($data as $d)
               <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">

                         <img src="{{ asset('img/course-1.jpg')}}" class="img-fluid" alt="...">
                         <div class="course-content">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                   <h4>{{ $d->category }}</h4>
                                   <p class="price">FREE</p>
                              </div>

                              <h3><a href="/courses/{{$d->id}}">{{ $d->title }}</a></h3>
                              <p>{{ $d->description }}</p>
                              <input type="hidden" value="{{ $d->content }}">
                              <div class="trainer d-flex justify-content-between align-items-center">
                                   <div class="trainer-profile d-flex align-items-center">
                                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                        <span>{{ $d->user->name }}</span>
                                   </div>
                                   <div class="trainer-rank d-flex align-items-center">
                                        &nbsp;&nbsp;
                                        <i class="bx bx-heart"></i>&nbsp;{{ $d->likes }}
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
               @endforeach <!-- End Course Item-->

          </div>
          @else
          <img src="{{ asset('img/404.jpg') }}" alt="" style="width: 20%;">
          <h3>Oops, There is no available courses</h3>
          @endif

     </div>
</section>
@endsection

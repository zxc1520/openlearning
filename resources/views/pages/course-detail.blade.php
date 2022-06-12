@extends('pages.master')

@section('content')

<div class="breadcrumbs" data-aos="fade-in">
     <div class="container">
          <h2>{{ $data->title }}</h2>
          <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
     </div>
</div><!-- End Breadcrumbs -->
<section id="course-details" class="course-details">
     <div class="container" data-aos="fade-up">

          <div class="row">
               <div class="col-lg-8">
                    <iframe src="https://www.youtube.com/watch?v=dQw4w9WgXcQ" frameborder="0"></iframe>
                    <img src="{{ asset('img/course-details.jpg') }}" class="img-fluid" alt="">
                    <h3>Et enim incidunt fuga tempora</h3>
                    <p>
                         {{ $data->content }}
                    </p>
               </div>
               <div class="col-lg-4">

                    <div class="course-info d-flex justify-content-between align-items-center">
                         <h5>Trainer</h5>
                         <p><a href="#">{{ $data->user->name }}</a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                         <h5>Course Fee</h5>
                         <p>FREE</p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                         <h5>Category</h5>
                         <p>{{ $data->category }}</p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                         <h5>Schedule</h5>
                         <p>5.00 pm - 7.00 pm</p>
                    </div>

               </div>
          </div>

     </div>
</section>

@endsection

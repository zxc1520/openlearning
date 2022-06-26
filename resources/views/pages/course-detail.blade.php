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

                    <img src="{{ asset('img/course-details.jpg') }}" class="img-fluid" alt="">
                    <span class="badge bg-secondary">{{ $data->requirements }}</span>
                    <h3>Et enim incidunt fuga tempora </h3>
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

               </div>
          </div>

     </div>
</section>

<section id="cource-details-tabs" class="cource-details-tabs">
     <div class="container" data-aos="fade-up">

        @if (count($data2) > 0)
        <div class="row">
        @foreach ($data2 as $data2)

               <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">

                         <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#tab-{{ $data2->id }}">{{$data2->sec_title}}</a>
                              <p>{{ $data2->sec_desc }}</p>
                         </li>

                    </ul>
               </div>

               <div class="col-lg-9 mt-4 mt-lg-0">

                    <div class="tab-content">
                         <div class="tab-pane active show" id="tab-">
                              <div class="row">
                                   <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>{{ $data2->sec_title }}</h3>
                                        <p class="fst-italic">{{ $data2->sec_desc }}</p>
                                        <p>
                                             <x-embed url="{{ $data2->sec_media }}" class="img-fluid" aspect-ratio="4:3" />
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

          @endforeach
          </div>
        @else
        <img src="{{ asset('img/404.jpg') }}" alt="" style="width: 20%;">
        <h3>Oops, There is no course section</h3>
        <p>Contact admin, for futher information</p>
        @endif

     </div>
</section>

@endsection

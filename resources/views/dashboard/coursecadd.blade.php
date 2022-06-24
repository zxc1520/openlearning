@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid">
     <div id="content-wrapper" class="d-flex flex-column">
          <div id="content">
               <div class="card shadow mb-4">
                    <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">Create New Course</h6>
                    </div>
                    <div class="card-body">
                         <form action="/coursection/add" method="POST">
                              @csrf
                              @method('post')
                              <input type="hidden" name="course_id" value="{{ $data->id }}">

                              <div class="mb-3">
                                   <label for="inputPassword5" class="form-label">Section Title</label>
                                   <input type="text" id="inputPassword5" name="sec_title" class="form-control @error('sec_title')
                               is-invalid
                           @enderror" aria-describedby="passwordHelpBlock" value="{{ old('sec_title') }}">
                                   @error('sec_title')
                                   <div class="invalid-feedback">
                                        {{ $message }}
                                   </div>
                                   @enderror
                              </div>

                              <div class="mb-3">
                                   <div class="form-floating">
                                        <div class="form-floating">
                                             <label for="content">Section Description</label>
                                             <textarea name="sec_desc" id="sec_desc" class="ckeditor form-control @error('sec_desc')
                                               is-invalid
                                            @enderror"></textarea>
                                        </div>
                                   </div>
                              </div>

                              <div class="mb-3">
                                   <label for="basic-url" class="form-label">Your Media URL</label>
                                   <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">https://youtube.com/users/</span>
                                        <input type="text" class="form-control" name="sec_media" id="basic-url" aria-describedby="basic-addon3">
                                   </div>
                              </div>

                              <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>

@endsection

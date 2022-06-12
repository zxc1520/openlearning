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
                         <form action="/course" method="POST">
                              @csrf
                              @method('post')
                              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                              <div class="mb-3">
                                   <label for="inputPassword5" class="form-label">Title</label>
                                   <input type="text" id="inputPassword5" name="title" class="form-control @error('title')
                                is-invalid
                            @enderror" aria-describedby="passwordHelpBlock" value="{{ old('title') }}">
                                   @error('title')
                                   <div class="invalid-feedback">
                                        {{ $message }}
                                   </div>
                                   @enderror
                              </div>

                              <div class="mb-3">
                                   <label for="inputPassword5" class="form-label">Category</label>
                                   <input type="text" id="inputPassword5" name="category" class="form-control @error('category')
                                is-invalid
                            @enderror" aria-describedby="passwordHelpBlock" value="{{ old('category') }}">
                                   @error('category')
                                   <div class="invalid-feedback">
                                        {{ $message }}
                                   </div>
                                   @enderror
                              </div>

                              <div class="mb-3">
                                   <label for="inputPassword5" class="form-label">Description</label>
                                   <input type="text" id="inputPassword5" name="description" class="form-control @error('description')
                                is-invalid
                            @enderror" aria-describedby="passwordHelpBlock" value="{{ old('description') }}">
                                   @error('description')
                                   <div class="invalid-feedback">
                                        {{ $message }}
                                   </div>
                                   @enderror
                              </div>

                              <div class="mb-3">
                                   <label for="inputPassword5" class="form-label">Requirement</label>
                                   <input type="text" id="inputPassword5" name="requirements" class="form-control @error('requirements')
                                is-invalid
                            @enderror" aria-describedby="passwordHelpBlock" value="{{ old('requirement') }}">
                                   @error('requirements')
                                   <div class="invalid-feedback">
                                        {{ $message }}
                                   </div>
                                   @enderror
                              </div>

                              <div class="mb-3">
                                   <div class="form-floating">
                                        <div class="form-floating">
                                             <label for="content">Content</label>
                                             <textarea name="content" id="content" class="ckeditor form-control"></textarea>

                                             {{-- <textarea name="content" id="" cols="30" rows="10"></textarea> --}}
                                        </div>
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

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
                                   <select class="form-select form-control" name="category" id="inputPassword5" aria-label="Default select example">
                                        <option value="Web Development">Web Development</option>
                                        <option value="Mobile Development">Mobile Development</option>
                                        <option value="Data Science">Data Science</option>
                                        <option value="IoT">IoT</option>
                                   </select>
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
                                   <label for="inputPassword5" class="form-label">Requirements</label>
                                   <input type="text" name="requirements" id="inputPassword5" class="form-control @error('requirements')
                                       is-invalid
                                   @enderror" aria-label="Recipient's username" aria-describedby="button-addon2">
                                   @error('requirements')
                                   <div class="invalid-feedback">
                                        {{ $message }}
                                   </div>
                                   @enderror
                                   {{-- <button class="btn btn-outline-secondary" type="button" id="button-addon2">+</button> --}}
                              </div>

                              <div class="mb-3">
                                   <div class="form-floating">
                                        <div class="form-floating">
                                             <label for="content">Content</label>
                                             <textarea name="content" id="content" class="ckeditor form-control @error('content')
                                                is-invalid
                                             @enderror"></textarea>
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

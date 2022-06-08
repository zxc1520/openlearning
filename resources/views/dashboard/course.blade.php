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
                            @enderror" aria-describedby="passwordHelpBlock">
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
                            @enderror" aria-describedby="passwordHelpBlock">
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
                            @enderror" aria-describedby="passwordHelpBlock">
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
                            @enderror" aria-describedby="passwordHelpBlock">
                            @error('requirements')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                {{-- <input id="content" type="hidden" name="content">
                                @error('content')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                                <trix-editor input="content"></trix-editor> --}}
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="content" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Content</label>
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
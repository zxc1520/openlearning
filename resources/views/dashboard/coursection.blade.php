@extends('dashboard.layouts.main')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
     <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
               </button>

               <!-- Topbar Search -->
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                         <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                         <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                   <i class="fas fa-search fa-sm"></i>
                              </button>
                         </div>
                    </div>
               </form>

               <!-- Topbar Navbar -->
               @include('dashboard.partials.topbar')

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Section Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
               </div>

               <h1 class="h3 mb-2 text-gray-800">Your Course</h1>
               <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

               <!-- DataTales Example -->
               <div class="card shadow mb-4">
                    <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                         @if(count($data))
                         <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                        <tr>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Section Title</th>
                                             <th>Section Description</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tfoot>
                                        <tr>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Section Title</th>
                                             <th>Section Description</th>
                                             <th>Action</th>
                                        </tr>
                                   </tfoot>
                                   <tbody>
                                        @foreach ($data as $d)
                                        <tr>
                                             <td>{{ $d->course->title }}</td>
                                             <td>{{ $d->sec_title}}</td>
                                             <td>{{ $d->sec_desc }}</td>
                                             <td>
                                                  <x-embed url="{{ $d->sec_media }}" class="img-fluid" aspect-ratio="4:3" />
                                             </td>
                                             <td>
                                                  <a href="/coursection/add/{{ $d->id }}">Add Section</a>
                                             </td>
                                        </tr>
                                        @endforeach

                                   </tbody>
                              </table>
                         </div>
                         @else
                         <h3>There is no available course</h3>
                         @endif

                    </div>
               </div>

          </div>
          <!-- /.container-fluid -->

          @include('dashboard.partials.footer')
     </div>
</div>
@endsection

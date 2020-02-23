@extends('backend.layouts.app')

@section('title','Blogs')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
<div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="{{route('home')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>

     

      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          blogs
        <button class="btn btn-primary float-right" onclick="add_new_blog()">Add New</button></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SL No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @forelse($blogs as $key=>$blog) 
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$blog->title}}</td>
                <td><img src="{{asset('images/blogs/'.$blog->image)}}" width="100%" alt=""></td>
                <td>{{$blog->created_at->format('F d Y')}}</td>
                <td>
                 
                  <input type="checkbox" onchange="change_status({{$blog->id}},{{$blog->status}})" data-id="{{ $blog->id }}" name="status" class="js-switch" {{ $blog->status == 1 ? 'checked' : '' }}>
                </td>
                <td>
                  <button type="button" class="btn btn-warning" onclick="edit_blog({{$blog->id}})">Edit</button>
                </td>
                </tr>
                @empty 
                
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
    
   @include('backend.layouts.footer')
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="add_new_blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <div id="form_data">
          <form action="{{route('blogs.store')}}" method="post" id="blog_form" enctype="multipart/form-data">
            @csrf
            <span style="display:none" id="set_method"></span> 
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" id="description" cols="30" rows="4" placeholder="Description" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
              
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit" id="add_button">Save</button>
            <button class="btn btn-warning" type="submit" id="edit_button">Update</button>
            <button class="btn btn-success" type="reset">Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

  elems.forEach(function(html) {
      let switchery = new Switchery(html,  { size: 'small' });
  });</script>
  <script>
      function add_new_blog(){
        $('#blog_form').attr('action', "{{url('blogs')}}");
        $('#blog_form').trigger('reset');
        $('#edit_button').css('display','none');
        $('#add_button').css('display','block');
          $('#add_new_blog').modal('show');
          $('#set_method').empty();
      }

      function edit_blog(id){
        if(id){
          $.ajax({
            type : 'get',
            url : "{{url('blogs')}}/"+id,
            success : function(data){
              console.log(data);
              $('#title').val(data.title);
              $('#description').val(data.description);
              $('#add_new_blog').modal('show');
              $('#blog_form').attr('action', "{{url('blogs')}}/"+id);
              var html = `@method('put')`;
              $('#set_method').html(html);
              $('#add_button').css('display','none');
              $('#edit_button').css('display','block');
            }
          });
        }
      }

      function change_status(blog_id,status){
        if(blog_id){
          $.ajax({
            type : 'get',
            url : "{{url('change_blog_status')}}/"+blog_id,
            data : {status:status},
            success : function(data){
              toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(data.message); 
            }
          });
        }
      }
  </script>
@endpush
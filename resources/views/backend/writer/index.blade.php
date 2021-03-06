@extends('backend.layouts.app')

@section('title','Writer')

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
          Writers
        <button class="btn btn-primary float-right" onclick="add_new_writer()">Add New</button></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SL No</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @forelse($writers as $key=>$writer) 
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$writer->name}}</td>
                <td>{{$writer->description}}</td>
                <td>{{$writer->created_at->format('F d Y')}}</td>
                <td>
                  <input type="checkbox" 
                  {{-- onchange="change_status({{$writer->id}},{{$writer->status}})"  --}}
                  data-id="{{ $writer->id }}" name="status" class="js-switch" {{ $writer->status == 1 ? 'checked' : '' }}>
                </td>
                <td>
                  <button type="button" class="btn btn-warning" onclick="edit_writer({{$writer->id}})">Edit</button>
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
  <div class="modal fade" id="add_new_writer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
          <form action="{{route('writers.store')}}" method="post" id="writer_form" enctype="multipart/form-data">
            @csrf
            <span style="display:none" id="set_method"></span> 
            <div class="row">
              <div class="col-lg-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                  </div>
                  <div class="form-group">
                      <label for="dob">Date of Birth</label>
                      <input type="date" name="dob" id="dob" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea name="address" id="address" cols="30" rows="4" placeholder="Address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="4" placeholder="Description" class="form-control"></textarea>
                </div>
                <img src="" alt="" id="edit_image" width="20%">
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
    $(document).ready(function(){
      $('.js-switch').change(function(){
        var status = $(this).prop('checked') === true ? 1 : 0;
        var writer_id = $(this).data('id');
        $.ajax({
          type : 'GET',
          dataType : 'json',
          url : "{{route('writers.status.update')}}",
          data : {status : status, writer_id : writer_id},
          success : function(data){
            toastr.options.closeButton = true;
            toastr.options.closeMethod = 'fadeOut';
            toastr.options.closeDuration = 100;
            toastr.success(data.message);
          }
        });
      });
    });

      function add_new_writer(){
        $('#modal_title').html('Add Writer');
        $('#writer_form').attr('action', "{{url('writers')}}");
        $('#writer_form').trigger('reset');
        $('#edit_button').css('display','none');
        $('#add_button').css('display','block');
          $('#add_new_writer').modal('show');
          $('#set_method').empty();
      }

      function edit_writer(id){
        if(id){
          $.ajax({
            type : 'get',
            url : "{{url('writers')}}/"+id,
            success : function(data){
              console.log(data);
              $('#modal_title').html('Edit Writer');
              $('#name').val(data.name);
              $('#email').val(data.email);
              $('#phone').val(data.phone);
              $('#dob').val(data.dob);
              $('#description').val(data.description);
              $('#address').val(data.address);
              $('#edit_image').attr("src", "images/writers/"+data.image);
              $('#add_new_writer').modal('show');
              $('#writer_form').attr('action', "{{url('writers')}}/"+id);
              var html = `@method('put')`;
              $('#set_method').html(html);
              $('#add_button').css('display','none');
              $('#edit_button').css('display','block');
            }
          });
        }
      }

      function change_status(cat_id,status){
        if(cat_id){
          $.ajax({
            type : 'get',
            url : "{{url('change_writer_status')}}/"+cat_id,
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
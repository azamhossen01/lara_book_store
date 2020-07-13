@extends('backend.layouts.app')

@section('title','Orders')

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
          Book Return
        {{-- <button class="btn btn-primary float-right" onclick="add_new_category()">Add New</button></div> --}}
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                  <th>Order No</th>
                  <th>Customer</th>
                  <th>Book</th>
                  <th>Amount</th>
                  <th>Bkash Number</th>
                  <th>Type</th>
                  <th>Order Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Order No</th>
                  <th>Customer</th>
                  <th>Book</th>
                  <th>Amount</th>
                  <th>Bkash Number</th>
                  <th>Type</th>
                  <th>Order Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @forelse($book_returns as $key=>$book_return) 
                <tr>
                <td>{{$book_return->order->id}}</td>
                <td>{{$book_return->customer->name}}</td>
                <td>{{$book_return->book->title}}</td>
                <td> {{App\OrderDetail::where([['order_id',$book_return->order_id],['book_id',$book_return->book_id]])->first()->sub_total}} </td>
                <td>{{$book_return->bkash_number}}</td>
                <td>{{$book_return->bkash_type}}</td>
                <td>{{$book_return->order->created_at->format('F d Y')}}</td>
                <td>
                <span class="badge badge-{{$book_return->status==0?'warning':'success'}}">{{$book_return->status==0?'Pending':'Completed'}}</span>
                </td>
                <td>
                <a onclick="return confirm('Are you sure?')" href="{{route('complete_book_return',$book_return->id)}}" class="btn btn-sm btn-success {{$book_return->status == 1 ? 'disabled btn-danger':''}}">{{$book_return->status==1?'Confirmed':'Confirm'}}</a>
                 
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
  <div class="modal fade" id="add_new_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <form action="{{route('categories.store')}}" method="post" id="category_form">
            @csrf
            <span style="display:none" id="set_method"></span> 
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" id="description" cols="30" rows="4" placeholder="Description" class="form-control"></textarea>
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
      function add_new_category(){
        $('#category_form').attr('action', "{{url('categories')}}");
        $('#category_form').trigger('reset');
        $('#edit_button').css('display','none');
        $('#add_button').css('display','block');
          $('#add_new_category').modal('show');
          $('#set_method').empty();
      }

      function edit_category(id){
        if(id){
          $.ajax({
            type : 'get',
            url : "{{url('categories')}}/"+id,
            success : function(data){
              $('#name').val(data.name);
              $('#description').val(data.description);
              $('#add_new_category').modal('show');
              $('#category_form').attr('action', "{{url('categories')}}/"+id);
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
            url : "{{url('change_category_status')}}/"+cat_id,
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
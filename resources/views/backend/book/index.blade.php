@extends('backend.layouts.app')

@section('title','Book')

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
        <button class="btn btn-primary float-right" onclick="add_new_book()">Add New</button></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SL No</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th width="20%">Image</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @forelse($books as $key=>$book) 
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->category->name}}</td>
                <td><img src="{{asset('images/books/'.$book->image)}}" width="20%" alt=""></td>
                <td>{{$book->price}}</td>
                <td><span class="badge badge-{{$book->status == 1 ? 'success':'warning'}}">{{$book->status == 1 ? 'Active':'Deactive'}}</span></td>
                <td>
                  <button type="button" class="btn btn-warning" onclick="edit_book({{$book->id}})">Edit</button>
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
  <div class="modal fade" id="add_new_book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
          <form action="{{route('books.store')}}" method="post" id="book_form" enctype="multipart/form-data">
            @csrf
            <span style="display:none" id="set_method"></span> 
            <div class="row">
              <div class="col-lg-6">
                  <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                      <option value="" selected>No data selected</option>
                      @forelse($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @empty 
                      @endforelse
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" name="price" id="price" class="form-control" placeholder="Price">
                  </div>
                  
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                  </div>
              </div>
              <div class="col-lg-6">
              <div class="form-group">
                    <label for="writer_id">Writer</label>
                    <select name="writer_id" id="writer_id" class="form-control">
                      <option value="" selected>No data selected</option>
                      @forelse($writers as $writer)
                        <option value="{{$writer->id}}">{{$writer->name}}</option>
                      @empty 
                      @endforelse
                    </select>
                  </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Description" class="form-control"></textarea>
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
  <script>
      function add_new_book(){
        $('#book_form').attr('action', "{{url('books')}}");
        $('#book_form').trigger('reset');
        $('#edit_button').css('display','none');
        $('#add_button').css('display','block');
          $('#add_new_book').modal('show');
          $('#set_method').empty();
      }

      function edit_book(id){
        if(id){
          $.ajax({
            type : 'get',
            url : "{{url('books')}}/"+id,
            success : function(data){
              console.log(data);
              $('#title').val(data.title);
              $('#category_id').val(data.category_id);
              $('#writer_id').val(data.writer_id);
              $('#description').val(data.description);
              $('#price').val(data.price);
              $('#edit_image').attr("src", "images/books/"+data.image);
              $('#add_new_book').modal('show');
              $('#book_form').attr('action', "{{url('books')}}/"+id);
              var html = `@method('put')`;
              $('#set_method').html(html);
              $('#add_button').css('display','none');
              $('#edit_button').css('display','block');
            }
          });
        }
      }
  </script>
@endpush
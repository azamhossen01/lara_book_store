@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--4 bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">All Writers</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">All Writers</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
<section class="wn__checkout__area section-padding--lg bg__white">
    <div class="container">
     
        <div class="row">
            <div class="col-lg-12">

                <h1>All Writers</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Name</th>
                            <td>Photo</td>
                            <th>Phone</th>
                            <th>Email</th>
                            <td>Address</td>
                            <td>Description</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($writers as $key=>$writer) 
                        <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$writer->name}}</td>
                        <td><img src="{{asset('images/writers/'.$writer->image)}}" alt=""></td>
                        <td>{{$writer->phone}}</td>
                        <td>{{$writer->email}}</td>
                        <td>{{$writer->address}}</td>
                        <td>{{$writer->description}}</td>
                        </tr>
                        @empty 

                        @endforelse
                    </tbody>
                </table>
              
            </div>

        </div>

    </div>
</section>

@endsection

@push('js')

<script>
    // $('#defaultCheck2').click(function(){
    //         if($(this).prop("checked") == true){
    //         $('#transaction_no').show();
    //         $("#transaction_id").prop('required',true);
    //         $("#defaultCheck1").prop('required',false);
    //     }
    //     else if($(this).prop("checked") == false){
    //         $('#transaction_no').hide();
    //         $("#transaction_id").prop('required',false);
    //         $("#defaultCheck1").prop('required',true);
    //     }
    // });
    $('#bkash_payment').click(function () {
        $('#transaction_no').show();
        $("#cash_payment").prop('required', false);
        $("#transaction_id").prop('required', true);
    });

    $('#cash_payment').click(function () {
        $('#transaction_no').hide();
        $("#transaction_id").prop('required', false);


    });

</script>

@endpush

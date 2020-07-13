@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--4 bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Order History</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Order History</span>
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
        @if(Auth::check() == true)
        <div class="row">
            <div class="col-lg-6 col-12">
                
            <h1>Order History</h1><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#Order ID</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $key=>$order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->created_at->format('h:i A, F d, Y')}}</td>
                            <td>  <a href="{{route('order_details',$order->id)}}" class="btn btn-success">Details</a>  </td>
                        </tr>
                    @empty 

                    @endforelse
                </tbody>
            </table>
            </div>

        </div>

        @endif

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

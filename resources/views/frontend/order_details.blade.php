@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--4 bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Order Details</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Order Details</span>
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

                <h1 class="d-inline-block">Order Details</h1> <a href="{{route('order_history')}}" class="btn btn-primary float-right">Back</a>
                <br><br>
                <h3>Order Date : {{$order_details->first()->order->created_at->format('F d Y')}}</h3><br>
                <ul class="list-group">
                @forelse($order_details as $key=>$od)
                <li class="list-group-item">{{$key+1}} ) {{$od->book->title}} : <span>{{$od->qty}} X {{($od->sub_total/$od->qty)}}</span> = <span>{{$od->sub_total}}</span></li>
                @empty

                @endforelse
                   
                </ul>
                <br>
                <h3>Payment Method : {{$od->order->payment_method=='cash_on_delivery'?'Cash On Delivery':'Bkash'}}</h3>
                
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

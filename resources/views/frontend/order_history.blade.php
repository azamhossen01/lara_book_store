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
        <div class="row" id="printableArea">
            <div class="col-lg-12 col-12">
                
            <h1 class="d-inline-block">Order History ({{Auth::user()->name}})</h1> <button id="print_button" onclick="printDiv('printableArea')" class="btn btn-info float-right"><i class="fa fa-print"></i> Print</button><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#Order ID</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="hide_class">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $key=>$order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->total}}</td>
                        <td>{{$order->status == 0 ? 'Pending':($order->status == 1 ? 'Processing' : 'Completed')}}</td>
                            <td>{{$order->created_at->format('h:i A, F d, Y')}}</td>
                            <td  class="hide_class">  <a href="{{route('order_details',$order->id)}}" class="btn btn-success">Details</a>  </td>
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
    // $(document).ready(()=>{
    //     $('#print_button').show();
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

   

    function printDiv(divName) {
    $('#print_button').hide();
    $('.hide_class').hide();
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     $('#print_button').show();
     $('.hide_class').show();
}

</script>

@endpush

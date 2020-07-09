@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--4 bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Book Return</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Book Return</span>
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

                <h1>Book Return</h1>
<form action="{{route('submit_book_return')}}" method="post">
@csrf
  <table class="table table-bordered">

                    <tbody>
                        @forelse($orders as $order)
                        <tr>
                            <th>{{$order->created_at->format('F d Y')}}</th>
                            <td>
                                @forelse($order->orderDetails->where('status','pending') as $od)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="order_detail_id[]" value="{{$od->id}}">{{$od->book->title}}
                                    </label>
                                </div>
                                @empty

                                @endforelse
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>

                </table>

                <div class="form-group">
                    <input type="text" class="form-control" required name="bkash_number" placeholder="Bkash Number">
                </div>
                <div class="form-control">
                <div class="row">
                                <div class="col-lg-12 ml-3">
                <label for="bkash_type">Bkash Type</label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="bkash_type"  type="radio" value="personal" id="personal" checked>
                                        <label class="form-check-label" for="personal">
                                          Personal
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input"  name="bkash_type" type="radio" value="agent" id="agent" >
                                        <label class="form-check-label" for="agent">
                                          Agent
                                        </label>
                                      </div>
                                      
                                </div>
                            </div>
                </div>
<br>
                <button class="btn btn-primary" type="submit">Submit</button>

</form>
              
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

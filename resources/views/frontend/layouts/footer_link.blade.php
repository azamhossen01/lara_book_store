<script src="{{asset('frontend')}}/js/vendor/jquery-3.2.1.min.js"></script>
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins.js"></script>
<script src="{{asset('frontend')}}/js/active.js"></script>
<script>
    function show_product_details(book_id){
            if(book_id){
                $.ajax({
                    type : 'get',
                    url : "{{route('get_book')}}",
                    data : {book_id:book_id},
                    dataType : 'json',
                    success : function(data){
                        console.log(data);
                        $('#book_title').text(data.title);
                        $('#book_image').attr("src", "{{asset('images/books')}}/"+data.image);
                        $('#price').text('BDT '+data.price);
                        $('#discounted_price').text('BDT '+data.discounted_price);
                        $('#description').text(data.description);
                        $('#bookmodal').modal('show');
                    }
                });
            }
        }


        // cart functions 
        $(document).ready(function(){
        get_cart_data();
    });



    function get_cart_data(){
       get_total();
        $.ajax({
            type : 'get',
            url : "{{route('get_cart_data')}}",
            dataType : 'json',
            success : function(data){
                var book_count = $.map(data, function(n, i) { return i; }).length;
                $('#product_qun').text(book_count);
                $('#cart_items').text(book_count+" items");
              
                var html = ``;
                $.each(data,function(key,value){
                    // console.log(value);
                    // console.log(value.associatedModel.image);
                    html += `
                    <div class="item01 d-flex">
                        <div class="thumb">
                            <a href="product-details.html"><img src="{{asset('images/books')}}/${value.associatedModel.image}" alt="product images"></a>
                        </div>
                        <div class="content">
                            <h6><a href="{{url('single_product')}}/${value.associatedModel.id}">${value.associatedModel.title}</a></h6>
                            <span class="prize">BDT ${value.associatedModel.price}</span>
                            <div class="product_prize d-flex justify-content-between">
                                <span class="qun">Qty : ${value.quantity}</span>
                                <ul class="d-flex justify-content-end">
                                    <li><a href="{{url('single_product')}}/${value.associatedModel.id}"><i class="zmdi zmdi-settings"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-delete" onclick="delete_to_cart(${key})"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `;
                });
                
                $('#add_to_cart').html(html);
            }
        });
    }
       

    function add_to_cart(book_id,qty=false){
        
        if(book_id){
            $.ajax({
                type : 'get',
                url : "{{route('add_to_cart')}}",
                data : {book_id:book_id},
                success : function(data){
                    // var total = "{{\Cart::getTotal()}}";
                    
                get_total();
               
                    get_cart_data();
                    // console.log(data);
                }
            });
        }
    }

    function delete_to_cart(row_id){
        // alert(row_id);
        if(row_id){
            $.ajax({
                type : 'get',
                url : "{{route('delete_to_cart')}}",
                data : {row_id:row_id},
                success : function(data){
                    get_total();
                    get_cart_data();
                }
            });
        }
    }


    function get_total(){
        $.ajax({
            type : 'get',
            url : "{{route('get_total')}}",
            success : function(data){
                console.log(data);
                
                $('#cart_subtotal').text("BDT "+data);
                
            }
        });
    }
</script>
@stack('js')
</body>
</html>
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
</script>
@stack('js')
</body>
</html>
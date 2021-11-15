<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>


<script>
    //Profile

    var fileupload = $('#propic');
    $('#propic').on('change', function(e){
        console.log($('#propic').prop('files')[0]);
        const url = "{{ route('addimage')  }}";
        var file_data = $('#propic').prop('files')[0]

        //var dataURL = canvas.toDataURL(fileupload.target.files[0], 1.0)
        //var blob = dataURItoBlob(dataURL)
        //var fr = new FileReader();
        //fr.readAsDataURL(("#propic")[0].files[0]);
        var formData = new FormData();
        formData.append('image',file_data);
        formData.append('_token', '{{csrf_token()}}')

        console.log(formData)

        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.send(formData);
        console.log(xhr.responseText);
        if(xhr.responseText=='success'){
            $('#pict').load(document.URL + ' #pict');
        }


    });
</script>

<script>



    function addtoWishlist(prodId){
        const url = "{{route('wishlist.add')}}"

        $.ajax({
            url: url,
            method: "POST",
            data: {
                productId:prodId,
                _token: '{{csrf_token()}}',
            }
            }

        )

    }

    function removewishbyid(id){
        //$id = id;
        const url = 'wishlist/remove/' + id;

        $.ajax({
            url: url,
            method: "GET",
            success: function (data) {

                $("#wishlistloader").load(document.URL + " #wishlistloader");
            }
        });
    }
    function getMessage(id) {
        //console.log("button presses function called!");
        //console.log(id);
        //console.log(size);
        let size = "";
        //const size = $("#sizeprod").val();
        if( $(".sizebox:checked ").val()!=null){
            size = $(".sizebox:checked ").val();
        }
        else{
            size = $("#option1").val()
        }

		//console.log(size);
        const quantity = $("#quantity").val();
        const url = "{{route('product.cart.add')}}";

        $.ajax({
            url: url,
            method: "POST",
            data:{id:id,
                quantity: quantity,
                size:size,
                _token: '{{csrf_token()}}'},
            success:function (data){
                let c = "{{ Cart::getTotalQuantity() }}";
                //let nott = document.getElementById("#notify-cart");
                //nott.setAttribute("data-notify", c);
                //$("#notq").load(document.URL+ " #notify-cart");
            }

        });

    }
    $(document).ready(function () {

        $('#reloadcart').click(function(){
            //document.getElementById("sidecart").innerText = "Lekhaaaaa";
            let url = window.location.href;
            $.ajax({
                url: url,
                method: "GET",
                success:function(data)
                {
                    console.log("{{ Cart::getTotalQuantity() }}")
                    $("#sidecart").load(document.URL + " #sidecart");

                    //$("#sidecart").load("") = doc.getElementById("sidecart")

                }
            })

        });
    })









</script>

<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->


<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");


				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});




	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});


	</script>
<script>
    function openNav() {
        document.getElementById("mySidenavpc").style.width = "20%";
        document.getElementById("mySidenav").style.width = "200px";

    }

    function closeNav() {
        document.getElementById("mySidenavpc").style.width = "0";
        document.getElementById("mySidenav").style.width = "0";

    }
</script>


<!--===============================================================================================-->



    <script src="{{ asset('js/main.js') }}"></script>

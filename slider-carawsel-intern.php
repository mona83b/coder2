<?php  

	add_shortcode('slidercarawselintern','slidercarawselintern');
	function slidercarawselintern($one, $two){ 

		$escort_sin_photo = shortcode_atts([


			'photo-1'				=> '',		
			'photo-2'				=> '',		
			'photo-3'				=> '',		
			'photo-4'				=> '',		
			'name-1'					=> '',		
			'name-2'					=> '',		
			'name-3'					=> '',		
			'name-4'					=> '',		
			'description-1'			=> '',		
			'description-2'			=> '',		
			'description-3'			=> '',		
			'description-4'			=> '',		
			'page_url-1'				=> '',
			'page_url-2'				=> '',
			'page_url-3'				=> '',
			'page_url-4'				=> '',
			'photo-5'				=> '',		
			'photo-6'				=> '',		
			'photo-7'				=> '',		
			'photo-8'				=> '',		
			'photo-9'				=> '',		
			'photo-10'				=> '',		
			'photo-11'				=> '',		
			'photo-12'				=> '',		
			'photo-13'				=> '',		
			'photo-14'				=> '',		
			'photo-15'				=> '',		
			'photo-16'				=> '',		
			'name-5'					=> '',		
			'name-6'					=> '',		
			'name-7'					=> '',		
			'name-8'					=> '',		
			'name-9'					=> '',		
			'name-10'					=> '',		
			'name-11'					=> '',		
			'name-12'					=> '',		
			'name-13'					=> '',		
			'name-14'					=> '',		
			'name-15'					=> '',		
			'name-16'					=> '',		
			'description-5'			=> '',		
			'description-6'			=> '',		
			'description-7'			=> '',		
			'description-8'			=> '',		
			'description-9'			=> '',		
			'description-10'			=> '',		
			'description-11'			=> '',		
			'description-12'			=> '',		
			'description-13'			=> '',		
			'description-14'			=> '',		
			'description-15'			=> '',		
			'description-16'			=> '',		
			'page_url-5'				=> '',
			'page_url-6'				=> '',
			'page_url-7'				=> '',
			'page_url-8'				=> '',
			'page_url-9'				=> '',
			'page_url-10'				=> '',
			'page_url-11'				=> '',
			'page_url-12'				=> '',
			'page_url-13'				=> '',
			'page_url-14'				=> '',
			'page_url-15'				=> '',
			'page_url-16'				=> '',

		


			
			

		], $one);

			ob_start();
		?>


   	
<div class="container slide-desk-intern">
<div id="bsi" class="slider carousel slide" data-ride="carousel" data-interval="false">
		
		<div class="carousel-inner ciner" >

	


	<style>

				.slide-desk-intern{
					    margin-left: -56px;
				}

				.slide-desk-intern .tboxsl1{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
				}

				.slide-desk-intern .tboxsl2{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}
				
				.slide-desk-intern .tboxsl3{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}

				.slide-desk-intern .tboxsl4{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}

				.slide-desk-intern .tboxsl5{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}

				.slide-desk-intern .tboxsl6{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}

				.slide-desk-intern .tboxsl7{

					width: 8%;					
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}

				.slide-desk-intern .tboxsl8{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}


				.slide-desk-intern .tboxsl9{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
				}


				.slide-desk-intern .tboxsl10{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}


				.slide-desk-intern .tboxsl11{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}


				.slide-desk-intern .tboxsl12{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}


				.slide-desk-intern .tboxsl13{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}


				.slide-desk-intern .tboxsl14{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}


				.slide-desk-intern .tboxsl15{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}


				.slide-desk-intern .tboxsl16{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:10px
				}



				.slide-desk-intern .box1 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-1'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box2 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-2'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box3 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-3'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern .box4 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-4'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}



				.slide-desk-intern .box5 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-5'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box6 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-6'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box7 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-7'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern .box8 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-8'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .textt{
					margin-top: 0px !important;
					text-align: center !important;
				}

				.slide-desk-intern .textt h3{
    				margin-top: 0px !important;
    				margin-bottom: -5px !important;
    				font-size: 13px !important;
				}

				.slide-desk-intern .textt h3 a {
					color: #C35E1C !important;
				}

				.slide-desk-intern .textt span {
					    margin-top: -28px !important;
				}

				.slide-desk-intern .textt span a {
						color: #ffffff !important;
					    margin-top: -220px !important;
				}

				.slide-desk-intern {
					margin-top: -20px;
				}
				
				




		</style>






<script>

		     (function($){

       $(document).ready(function(){





            $('.tboxsl1').click(function(){
			document.location.href = "<?php echo $escort_sin_photo['page_url-1']; ?>";
				});


		   $('.tboxsl2').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-2']; ?>";
				});


			$('.tboxsl3').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-3']; ?>";
				});

			$('.tboxsl4').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-4']; ?>";
				});

			$('.tboxsl5').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-5']; ?>";
				});
			
			$('.tboxsl6').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-6']; ?>";
				});

			$('.tboxsl7').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-7']; ?>";
				});

			$('.tboxsl8').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-8']; ?>";
				});
			
			$('.tboxsl9').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-9']; ?>";
				});

			$('.tboxsl10').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-10']; ?>";
				});

			$('.tboxsl11').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-11']; ?>";
				});

			$('.tboxsl12').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-12']; ?>";
				});

			$('.tboxsl13').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-13']; ?>";
				});

			$('.tboxsl14').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-14']; ?>";
				});

			$('.tboxsl15').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-15']; ?>";
				});

			$('.tboxsl16').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-16']; ?>";
				});









       });


     })(jQuery)


</script>






<div class="carousel-item citm active">







				





						<div class="tboxsl1">
							<div class="con">
				             
								<div class="box1">

						
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-1']; ?>"><?php echo $escort_sin_photo['name-1']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-1']; ?>"><?php echo $escort_sin_photo['description-1']; ?></a></span>

							</div>

						</div>










						<div class="tboxsl2">
							<div class="con">
				             
								<div class="box2">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-2']; ?>"><?php echo $escort_sin_photo['name-2']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-2']; ?>"><?php echo $escort_sin_photo['description-2']; ?></a></span>

							</div>

						</div>










						<div class="tboxsl3">
							<div class="con">
				             
								<div class="box3">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-3']; ?>"><?php echo $escort_sin_photo['name-3']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-3']; ?>"><?php echo $escort_sin_photo['description-3']; ?></a></span>

							</div>

						</div>












						<div class="tboxsl4">
							<div class="con">
				             
								<div class="box4">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-4']; ?>"><?php echo $escort_sin_photo['name-4']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-4']; ?>"><?php echo $escort_sin_photo['description-4']; ?></a></span>

							</div>

						</div>





						<div class="tboxsl5">
							<div class="con">
				             
								<div class="box5">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-5']; ?>"><?php echo $escort_sin_photo['name-5']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-5']; ?>"><?php echo $escort_sin_photo['description-5']; ?></a></span>

							</div>

						</div>




						<div class="tboxsl6">
							<div class="con">
				             
								<div class="box6">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-6']; ?>"><?php echo $escort_sin_photo['name-6']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-6']; ?>"><?php echo $escort_sin_photo['description-6']; ?></a></span>

							</div>

						</div>





						<div class="tboxsl7">
							<div class="con">
				             
								<div class="box7">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-7']; ?>"><?php echo $escort_sin_photo['name-7']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-7']; ?>"><?php echo $escort_sin_photo['description-7']; ?></a></span>

							</div>

						</div>





						<div class="tboxsl8">
							<div class="con">
				             
								<div class="box8">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-8']; ?>"><?php echo $escort_sin_photo['name-8']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-8']; ?>"><?php echo $escort_sin_photo['description-8']; ?></a></span>

							</div>

						</div>







	
</div>


			












	<style>


				.slide-desk-intern .box9 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-9'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box10 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-10'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box11 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-11'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern .box12 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-12'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}


				.slide-desk-intern .box13 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-13'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box14 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-14'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern .box15 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-15'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern .box16 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}


				.slide-desk-intern .caraw-intern-pre{
					height: 20px;
				    position: absolute;
				    top: 2082px !important;
				    width: 20px;
				    left: 8px;
				}

				.slide-desk-intern .caraw-intern-nx{
					height: 20px;
				    position: absolute;
				    top: 2082px !important;
				    width: 20px;
				    right: 76px;
				}

				.newinter p strong{
					font-size: 14px !important;
					margin-left: -40px !important;
					color: #ffffff !important;
				}


		</style>






			<div class="carousel-item citm">







					





						<div class="tboxsl9">
							<div class="con">
				             
								<div class="box9">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-9']; ?>"><?php echo $escort_sin_photo['name-9']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-9']; ?>"><?php echo $escort_sin_photo['description-9']; ?></a></span>
							  
							</div>

						</div>










						<div class="tboxsl10">
							<div class="con">
				             
								<div class="box10">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-10']; ?>"><?php echo $escort_sin_photo['name-10']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-10']; ?>"><?php echo $escort_sin_photo['description-10']; ?></a></span>

							</div>

						</div>










						<div class="tboxsl11">
							<div class="con">
				             
								<div class="box11">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-11']; ?>"><?php echo $escort_sin_photo['name-11']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-11']; ?>"><?php echo $escort_sin_photo['description-11']; ?></a></span>

							</div>

						</div>












						<div class="tboxsl12">
							<div class="con">
				             
								<div class="box12">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-12']; ?>"><?php echo $escort_sin_photo['name-12']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-12']; ?>"><?php echo $escort_sin_photo['description-12']; ?></a></span>
	
							</div>

						</div>






					<div class="tboxsl13">
							<div class="con">
				             
								<div class="box13">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-13']; ?>"><?php echo $escort_sin_photo['name-13']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-13']; ?>"><?php echo $escort_sin_photo['description-13']; ?></a></span>

							</div>

					</div>





					<div class="tboxsl14">
							<div class="con">
				             
								<div class="box14">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-14']; ?>"><?php echo $escort_sin_photo['name-14']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-14']; ?>"><?php echo $escort_sin_photo['description-14']; ?></a></span>

							</div>

					</div>

			





					<div class="tboxsl15">
							<div class="con">
				             
								<div class="box15">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-15']; ?>"><?php echo $escort_sin_photo['name-15']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-15']; ?>"><?php echo $escort_sin_photo['description-15']; ?></a></span>

							</div>

					</div>

				





					<div class="tboxsl16">
							<div class="con">
				             
								<div class="box16">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-16']; ?>"><?php echo $escort_sin_photo['name-16']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-16']; ?>"><?php echo $escort_sin_photo['description-16']; ?></a></span>

							</div>

					</div>

					








	


		</div>



	</div>


</div>


















		<!-- <ul class="carousel-indicators">
			<li data-target="#bs" data-slide-to="0" class="active"></li>
			<li data-target="#bs" data-slide-to="1" ></li>
			<li data-target="#bs" data-slide-to="2" ></li>
			<li data-target="#bs" data-slide-to="3" ></li>
			<li data-target="#bs" data-slide-to="4" ></li>
		</ul> -->

		<a class="carousel-control-prev caraw-intern-pre" href="#bsi" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>

		<a class="carousel-control-next caraw-intern-nx" href="#bsi" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>









<!-- ----------------------for mobile----------------------------- -->






<div class="container slide-desk-intern-mb">
<div id="bsimb" class="slider carousel slide" data-ride="carousel" data-interval="false">
		
		<div class="carousel-inner">

	


	<style>

				.slide-desk-intern-mb{
					    margin-left: -56px;
				}

				.slide-desk-intern-mb .tboxsl1{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
				}

				.slide-desk-intern-mb .tboxsl2{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}
				
				.slide-desk-intern-mb .tboxsl3{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}

				.slide-desk-intern-mb .tboxsl4{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}

				.slide-desk-intern-mb .tboxsl5{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}

				.slide-desk-intern-mb .tboxsl6{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}

				.slide-desk-intern-mb .tboxsl7{

					width: 8%;					
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}

				.slide-desk-intern-mb .tboxsl8{

					width: 8%;
					height: 190px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}


				.slide-desk-intern-mb .tboxsl9{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
				}


				.slide-desk-intern-mb .tboxsl10{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}


				.slide-desk-intern-mb .tboxsl11{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}


				.slide-desk-intern-mb .tboxsl12{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}


				.slide-desk-intern-mb .tboxsl13{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}


				.slide-desk-intern-mb .tboxsl14{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}


				.slide-desk-intern-mb .tboxsl15{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}


				.slide-desk-intern-mb .tboxsl16{

					width: 8%;
					height: 177px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:6px;
				}



				.slide-desk-intern-mb .box1 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-1'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box2 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-2'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box3 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-3'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern-mb .box4 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-4'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}



				.slide-desk-intern-mb .box5 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-5'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box6 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-6'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box7 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-7'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern-mb .box8 {
					width: 100%;
					height: 137px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-8'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .textt{
					margin-top: 0px !important;
					text-align: center !important;
				}

				.slide-desk-intern-mb .textt h3{
    				margin-top: 0px !important;
    				margin-bottom: -5px !important;
    				font-size: 13px !important;
				}

				.slide-desk-intern-mb .textt h3 a {
					color: #C35E1C !important;
				}

				.slide-desk-intern-mb .textt span {
					    margin-top: -28px !important;
				}

				.slide-desk-intern-mb .textt span a {
						color: #ffffff !important;
					    margin-top: -220px !important;
				}

				.slide-desk-intern-mb .slide-desk-intern-mb {
					margin-top: -20px !important;
				}



				@media all and (max-width: 480px){

					.slide-desk-intern-mb {
					    margin-left: -16px !important;
					    background-color: #1A202C !important;
    					height: 250px !important;
					}

					.slide-desk-intern-mb .slider{
					    margin-top: 45px !important;
					}

					.slide-desk-intern-mb .tboxsl1 {
					    width: 13% !important;
					    margin-left: 20px !important;
					}.slide-desk-intern-mb .tboxsl2 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl3 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl4 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl5 {
					    width: 13% !important;
					    margin-left: 20px !important;
					}.slide-desk-intern-mb .tboxsl6 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl7 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl8 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl9 {
					    width: 13% !important;
					    margin-left: 20px !important;
					}.slide-desk-intern-mb .tboxsl10 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl11 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl12 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl13 {
					    width: 13% !important;
					    margin-left: 20px !important;
					}.slide-desk-intern-mb .tboxsl14 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl15 {
					    width: 13% !important;
					}.slide-desk-intern-mb .tboxsl16 {
					    width: 13% !important;
					}

					.slide-desk-intern-mb .textt {
					    margin-top: -13px !important;
					    height: 67px;
					}

					.slide-desk-intern-mb .textt span a {
					    color: #ffffff !important;
					    margin-top: 0px !important;
					    text-align: center;
					    display: block;
					}

					.slide-desk-intern-mb .caraw-intern-pre {
      					top: 2543px !important;
  						left: 71px !important;
					}
					
					.slide-desk-intern-mb .caraw-intern-nx {
      					top: 2543px !important;
 						right: 24px !important;
					}



				}


				@media all and (max-width: 414px){

					.slide-desk-intern-mb .tboxsl1 {
					    width: 10% !important;
					    margin-left: 30px !important;
					}.slide-desk-intern-mb .tboxsl2 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl3 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl4 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl5 {
					    width: 10% !important;
					    margin-left: 30px !important;
					}.slide-desk-intern-mb .tboxsl6 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl7 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl8 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl9 {
					    width: 10% !important;
					    margin-left: 30px !important;
					}.slide-desk-intern-mb .tboxsl10 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl11 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl12 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl13 {
					    width: 10% !important;
					    margin-left: 30px !important;
					}.slide-desk-intern-mb .tboxsl14 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl15 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl16 {
					    width: 10% !important;
					}

					.slide-desk-intern-mb .caraw-intern-pre {
    					top: 2582px !important;
    					left: 71px !important;
					}

					.slide-desk-intern-mb .caraw-intern-nx {
    					top: 2582px !important;
    					right: 55px !important;
					}



				}



				@media all and (max-width: 384px){

					.slide-desk-intern-mb {
					    margin-left: -16px !important;
					    background-color: #1A202C !important;
    					height: 250px !important;
					}

					.slide-desk-intern-mb .slider{
					    margin-top: 45px !important;
					}


					.slide-desk-intern-mb .tboxsl1 {
					    
					    width: 10% !important;
					}

					.slide-desk-intern-mb .tboxsl1 {
					    width: 10% !important;
					    margin-left: 15px !important;
					}.slide-desk-intern-mb .tboxsl2 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl3 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl4 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl5 {
					    width: 10% !important;
					    margin-left: 15px !important;
					}.slide-desk-intern-mb .tboxsl6 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl7 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl8 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl9 {
					    width: 10% !important;
					    margin-left: 15px !important;
					}.slide-desk-intern-mb .tboxsl10 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl11 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl12 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl13 {
					    width: 10% !important;
					    margin-left: 15px !important;
					}.slide-desk-intern-mb .tboxsl14 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl15 {
					    width: 10% !important;
					}.slide-desk-intern-mb .tboxsl16 {
					    width: 10% !important;
					}

					.slide-desk-intern-mb .textt {
					    margin-top: -13px !important;
					    height: 67px;
					    text-align: center !important;
					}

					.slide-desk-intern-mb .textt span a {
					    color: #ffffff !important;
					    margin-top: 0px !important;
					    text-align: center;
					    display: block;
					}

					.slide-desk-intern-mb .caraw-intern-pre {
    					top: 2673px !important;
    					left: 55px !important;
					}

					.slide-desk-intern-mb .caraw-intern-nx {
						top: 2673px !important;
					}

			}


				@media all and (max-width: 375px){

					.newinter p strong {
					    position: absolute !important;
					    top: 3566px !important;
					}

					.slide-desk-intern-mb .caraw-intern-pre {
    					top: 2672px !important;
					}

					.slide-desk-intern-mb .caraw-intern-nx {
    					top: 2672px !important;
    					right: 50px !important;
					}

										
				}

				@media all and (max-width: 360px){

					

					.slide-desk-intern-mb .caraw-intern-pre {
    					    top: 2707px !important;
    					    left: 55px !important;
					}

					.slide-desk-intern-mb .caraw-intern-nx {
    					    top: 2707px !important;
    					    right: 40px !important;
					}
					
				}
				




		</style>






<script>

		     (function($){

       $(document).ready(function(){





            $('.tboxsl1').click(function(){
			document.location.href = "<?php echo $escort_sin_photo['page_url-1']; ?>";
				});


		   $('.tboxsl2').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-2']; ?>";
				});


			$('.tboxsl3').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-3']; ?>";
				});

			$('.tboxsl4').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-4']; ?>";
				});

			$('.tboxsl5').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-5']; ?>";
				});
			
			$('.tboxsl6').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-6']; ?>";
				});

			$('.tboxsl7').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-7']; ?>";
				});

			$('.tboxsl8').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-8']; ?>";
				});
			
			$('.tboxsl9').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-9']; ?>";
				});

			$('.tboxsl10').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-10']; ?>";
				});

			$('.tboxsl11').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-11']; ?>";
				});

			$('.tboxsl12').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-12']; ?>";
				});

			$('.tboxsl13').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-13']; ?>";
				});

			$('.tboxsl14').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-14']; ?>";
				});

			$('.tboxsl15').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-15']; ?>";
				});

			$('.tboxsl16').click(function(){
					document.location.href = "<?php echo $escort_sin_photo['page_url-16']; ?>";
				});









       });


     })(jQuery)


</script>






<div class="carousel-item active">







				





						<div class="tboxsl1">
							<div class="con">
				             
								<div class="box1">

						
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-1']; ?>"><?php echo $escort_sin_photo['name-1']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-1']; ?>"><?php echo $escort_sin_photo['description-1']; ?></a></span>

							</div>

						</div>










						<div class="tboxsl2">
							<div class="con">
				             
								<div class="box2">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-2']; ?>"><?php echo $escort_sin_photo['name-2']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-2']; ?>"><?php echo $escort_sin_photo['description-2']; ?></a></span>

							</div>

						</div>










						<div class="tboxsl3">
							<div class="con">
				             
								<div class="box3">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-3']; ?>"><?php echo $escort_sin_photo['name-3']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-3']; ?>"><?php echo $escort_sin_photo['description-3']; ?></a></span>

							</div>

						</div>












						<div class="tboxsl4">
							<div class="con">
				             
								<div class="box4">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-4']; ?>"><?php echo $escort_sin_photo['name-4']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-4']; ?>"><?php echo $escort_sin_photo['description-4']; ?></a></span>

							</div>

						</div>

	</div>	



	<div class="carousel-item">





						<div class="tboxsl5">
							<div class="con">
				             
								<div class="box5">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-5']; ?>"><?php echo $escort_sin_photo['name-5']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-5']; ?>"><?php echo $escort_sin_photo['description-5']; ?></a></span>

							</div>

						</div>




						<div class="tboxsl6">
							<div class="con">
				             
								<div class="box6">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-6']; ?>"><?php echo $escort_sin_photo['name-6']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-6']; ?>"><?php echo $escort_sin_photo['description-6']; ?></a></span>

							</div>

						</div>





						<div class="tboxsl7">
							<div class="con">
				             
								<div class="box7">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-7']; ?>"><?php echo $escort_sin_photo['name-7']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-7']; ?>"><?php echo $escort_sin_photo['description-7']; ?></a></span>

							</div>

						</div>





						<div class="tboxsl8">
							<div class="con">
				             
								<div class="box8">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-8']; ?>"><?php echo $escort_sin_photo['name-8']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-8']; ?>"><?php echo $escort_sin_photo['description-8']; ?></a></span>

							</div>

						</div>





</div>


			












	<style>


				.slide-desk-intern-mb .box9 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-9'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box10 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-10'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box11 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-11'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern-mb .box12 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-12'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}


				.slide-desk-intern-mb .box13 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-13'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box14 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-14'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}

				.slide-desk-intern-mb .box15 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-15'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}	

				.slide-desk-intern-mb .box16 {
					width: 100%;
					height: 120px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
				}


				.slide-desk-intern-mb .caraw-intern-pre{
					height: 20px;
				    position: absolute;
				    top: 2945px;
				    width: 20px;
				    left: 8px;
				}

				.slide-desk-intern-mb .caraw-intern-nx{
					height: 20px;
				    position: absolute;
				    top: 2945px;
				    width: 20px;
				    right: 123px;
				}


					


					@media all and (max-width: 320px){


					    .slide-desk-intern-mb {
					    	width: 644px !important;
					    	margin-left: -27px !important;
					    }

					    .newinter p strong {
						      top: 3727px !important;
						      margin-left: 5px !important;
						}

						.slide-desk-intern-mb .caraw-intern-pre {
						        top: 2795px !important;
    							left: 40px !important;
						}

						.slide-desk-intern-mb .caraw-intern-nx {
						        top: 2795px !important;
    							right: 66px !important;
						}

						.deluxe-dw .subsc-up {
						    width: 95% !important;
						    margin-left: -5px !important;
						}

						.b-links a:nth-child(12) {
						    left: 158px !important;
						}.b-links a:nth-child(13) {
						    left: 158px !important;
						}.b-links a:nth-child(14) {
						    left: 158px !important;
						}.b-links a:nth-child(15) {
						    left: 158px !important;
						}.b-links a:nth-child(16) {
						    left: 158px !important;
						}

						.v1 {
						    margin-left: 97px !important;
						}
						.dm1 {
						    margin-left: 97px !important;
						}

						.cherry1 {
						    margin-left: -17px !important;
						}

						.pun {
						    left: 183px !important;
						}

						.lon-es {
						    margin-left: -28px !important;
						}

						.uk-es {
						    margin-left: 56px !important;
						}

						.lon-k a{
							margin-left: -26px !important;
						}

						.slide-desk-intern-mb .textt span a {
						    font-size: 10px !important;
						}

							

					}


				


		</style>







					

<div class="carousel-item">



						<div class="tboxsl9">
							<div class="con">
				             
								<div class="box9">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-9']; ?>"><?php echo $escort_sin_photo['name-9']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-9']; ?>"><?php echo $escort_sin_photo['description-9']; ?></a></span>
							  
							</div>

						</div>










						<div class="tboxsl10">
							<div class="con">
				             
								<div class="box10">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-10']; ?>"><?php echo $escort_sin_photo['name-10']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-10']; ?>"><?php echo $escort_sin_photo['description-10']; ?></a></span>

							</div>

						</div>










						<div class="tboxsl11">
							<div class="con">
				             
								<div class="box11">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-11']; ?>"><?php echo $escort_sin_photo['name-11']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-11']; ?>"><?php echo $escort_sin_photo['description-11']; ?></a></span>

							</div>

						</div>












						<div class="tboxsl12">
							<div class="con">
				             
								<div class="box12">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-12']; ?>"><?php echo $escort_sin_photo['name-12']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-12']; ?>"><?php echo $escort_sin_photo['description-12']; ?></a></span>
	
							</div>

						</div>



</div>



<div class="carousel-item">



					<div class="tboxsl13">
							<div class="con">
				             
								<div class="box13">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-13']; ?>"><?php echo $escort_sin_photo['name-13']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-13']; ?>"><?php echo $escort_sin_photo['description-13']; ?></a></span>

							</div>

					</div>





					<div class="tboxsl14">
							<div class="con">
				             
								<div class="box14">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-14']; ?>"><?php echo $escort_sin_photo['name-14']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-14']; ?>"><?php echo $escort_sin_photo['description-14']; ?></a></span>

							</div>

					</div>

			





					<div class="tboxsl15">
							<div class="con">
				             
								<div class="box15">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-15']; ?>"><?php echo $escort_sin_photo['name-15']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-15']; ?>"><?php echo $escort_sin_photo['description-15']; ?></a></span>

							</div>

					</div>

				





					<div class="tboxsl16">
							<div class="con">
				             
								<div class="box16">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-16']; ?>"><?php echo $escort_sin_photo['name-16']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-16']; ?>"><?php echo $escort_sin_photo['description-16']; ?></a></span>

							</div>

					</div>

					

					








	


		</div>



	</div>


</div>


















		<!-- <ul class="carousel-indicators">
			<li data-target="#bs" data-slide-to="0" class="active"></li>
			<li data-target="#bs" data-slide-to="1" ></li>
			<li data-target="#bs" data-slide-to="2" ></li>
			<li data-target="#bs" data-slide-to="3" ></li>
			<li data-target="#bs" data-slide-to="4" ></li>
		</ul> --> 

		<a class="carousel-control-prev caraw-intern-pre" href="#bsimb" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>

		<a class="carousel-control-next caraw-intern-nx" href="#bsimb" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>









	<?php 

		return ob_get_clean();
	}


	add_action('vc_before_init','vc_for_slider_carawsel_intern');

    function vc_for_slider_carawsel_intern(){

    	vc_map([
		'name' 				=> 'Slider Carawsel International',
		'base'				=> 'slidercarawselintern',
		'category'			=> 'Escort-slider-carawsel',
		'icon'				=> get_template_directory_uri().'/images/food.png',
		'params'			=> [


						[

							'param_name'    => 'photo-1',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-2',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-3',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-4',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],


						[

							'param_name'    => 'photo-5',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-6',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-7',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-8',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-9',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-10',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-11',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-12',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-13',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-14',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-15',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-16',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[   

							'param_name'    => 'page_url-1',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-2',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-3',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-4',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-5',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-6',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-7',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-8',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-9',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-10',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-11',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-12',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-13',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-14',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-15',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'page_url-16',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],
						[   

							'param_name'    => 'name-1',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-2',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-3',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-4',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-5',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-6',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-7',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-8',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-9',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-10',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-11',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-12',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-13',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-14',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-15',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'name-16',
							'type'			=> 'textfield',
							'heading'		=> 'Name'

						],
						[   

							'param_name'    => 'description-1',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-2',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-3',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-4',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-5',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-6',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-7',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-8',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-9',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-10',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-11',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-12',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-13',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-14',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-15',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						],
						[   

							'param_name'    => 'description-16',
							'type'			=> 'textfield',
							'heading'		=> 'Put description'

						]
						
				
			
      ]

	]);

    }

<?php  

	add_shortcode('reviewsfront','reviewsfront');
	function reviewsfront($one, $two){ 

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
			'rev_url-1'				=> '',
			'rev_url-2'				=> '',
			'rev_url-3'				=> '',
			'rev_url-4'				=> '',
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
			'name-5'				=> '',		
			'name-6'				=> '',		
			'name-7'				=> '',		
			'name-8'				=> '',		
			'description-5'			=> '',		
			'description-6'			=> '',		
			'description-7'			=> '',		
			'description-8'			=> '',		
			'date-1'				=> '',
			'date-2'				=> '',
			'date-3'				=> '',
			'date-4'				=> '',
			'rev1'					=> '',
			'rev2'					=> '',
			'rev3'					=> '',
			'rev4'					=> ''

		


			
			

		], $one);

			ob_start();
		?>


   	
<div class="reviewss">
		


	


	<style>

				.reviewss{
					width: 108%;
				}

				.reviewss .tboxsl1{

					width: 24.5%;
    				height: 92px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
				}

				.reviewss .tboxsl2{

					width: 24.5%;
					height: 92px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:5px;
				}
				
				.reviewss .tboxsl3{

					width: 24.5%;
					height: 92px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:5px;
				}

				.reviewss .tboxsl4{

					width: 24.5%;
					height: 92px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:5px;
				}


				.reviewss .box1 {
					width: 22%;
    				height: 61px;
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
					float: left;
				}

				.reviewss .box2 {
					width: 22%;
    				height: 61px;
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
					float: left;
				}

				.reviewss .box3 {
					width: 22%;
    				height: 61px;
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
					float: left;
				}	

				.reviewss .box4 {
					width: 22%;
    				height: 61px;
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
					float: left;
				}


				.reviewss .textt{
					margin-top: -16px !important;
					float: left;
					height: auto;
					text-align: left !important;
				}

				.reviewss .textt h3:nth-child(1){
    				margin-top: 0px !important;
    				margin-bottom: -5px !important;
    				font-size: 13px !important;
    				margin-left: 4px !important;
				}

				.reviewss .textt h3:nth-child(2){
    				font-size: 11px !important;
    				margin-left: 4px !important;
    				margin-top: 4px !important;
    				margin-bottom: 0px !important;
				}

				.reviewss .textt h3 a {
					color: #C35E1C !important;
				}

				.reviewss .textt span {
					font-size: 13px !important;
    				margin-left: 5px !important;
				}

				.reviewss .textt span a {
					color: #ffffff !important;
					margin-top: -220px !important;
				}
				
				.reviewss .datee {
					float: left !important;
					margin-left: 12px;
				}

				.reviewss .datee span{
    				font-size: 9px !important;
				}

				.reviewsss p strong{
					font-size: 14px !important;		    
				}

				@media all and (max-width: 480px){

					.reviewss {
					    width: 133% !important;
					    height: 220px !important;
					}

					.reviewss .tboxsl1 {
					   width: 42% !important;
					   height: 77px !important;
					   margin-left: 40px !important;
					   border-radius: 5px !important;
					   background-color: #1A202C !important;
					}


					.reviewss .box1 {
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px!important;
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}


					.reviewss .textt {
					    width: 73px !important;
					    height: 67px !important;
					    margin-top: -7px !important;
					}

					.reviewss .datee {
					    float: left !important;
					    margin-left: -11px !important;
					}


					.reviewss .datee span {
					    font-size: 9px !important;
					}


					.reviewss .tboxsl2 {
					    width: 42% !important;
					    height: 77px !important;
					    margin-left: 9px !important;
					    border-radius: 5px !important;
					    background-color: #1A202C !important;
					}


					.reviewss .box2 {
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}

					.reviewss .tboxsl3 {
					    width: 42% !important;
					    height: 77px !important;
					    margin-left: 40px !important;
					    border-radius: 5px !important;
					    background-color: #1A202C !important;
					    margin-top: 10px !important;
					}


					.reviewss .box3 {
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}


					.reviewss .tboxsl4 {
					    width: 42% !important;
					    height: 77px !important;
					    margin-left: 9px !important;
					    border-radius: 5px !important;
					    background-color: #1A202C !important;
					    margin-top: 10px !important;
					}


					.reviewss .box4 {
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}
				}


				@media all and (max-width: 414px){

					.reviewss {
    				    width: 124% !important;
					}

				}



				@media all and (max-width: 384px){

					.reviewss {
    				width: 124% !important;
					}

				}


				
				@media all and (max-width: 384px){

					.reviewss {
					    width: 118% !important;
					}

					.reviewss .tboxsl1 {
					    width: 42% !important;
					    height: 77px !important;
					    margin-left: 40px !important;
					    border-radius: 5px !important;
					    background-color: #1A202C !important;
					}


					.reviewss .box1 {
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}


					.reviewss .textt {
					    width: 73px !important;
					    height: 67px !important;
					    margin-top: -7px !important;
					}

					.reviewss .datee {
					    float: left !important;
					    margin-left: -11px !important;
					}


					.reviewss .datee span {
					    font-size: 9px !important;
					}


					.reviewss .tboxsl2 {
					    width: 42% !important;
					    height: 77px !important;
					    margin-left: 9px !important;
					    border-radius: 5px !important;
					    background-color: #1A202C !important;
					}


					.reviewss .box2 {
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}

					.reviewss .tboxsl3 {
					    width: 42% !important;
					    height: 77px !important;
					    margin-left: 40px !important;
					    border-radius: 5px !important;
					    background-color: #1A202C !important;
					    margin-top: 10px !important;
					}


					.reviewss .box3 {
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}


					.reviewss .tboxsl4 {
					    width: 42% !important;
					    height: 77px !important;
					    margin-left: 9px !important;
					    border-radius: 5px !important;
					    background-color: #1A202C !important;
					    margin-top: 10px !important;
					}


					.reviewss .box4 {
					    margin-top: 8px !important;
					    margin-left: 5px !important;
					}


				}


				@media all and (max-width: 320px){

					.reviewss {
					    width: 111% !important;
					    margin-left: -49px !important;
					}

					.reviewss .textt h3 {
					    margin-left: 3px !important;
					    font-size: 11px !important;
					}

					.reviewss .textt span {
					    font-size: 11px !important;
					}

					.reviewss .datee {
					    margin-left: -17px !important;
					}

					.reviewss .datee span {
					    font-size: 7px !important;
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
			







       });


     })(jQuery)


</script>






						<div class="tboxsl1">
							<div class="con">
				             
								<div class="box1">

						
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-1']; ?>"><?php echo $escort_sin_photo['name-1']; ?></a></h3>
							     <h3><a href="<?php echo $escort_sin_photo['rev_url-1']; ?>"><?php echo $escort_sin_photo['rev1']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-1']; ?>"><?php echo $escort_sin_photo['description-1']; ?></a></span>

							</div>

							<div class="datee">
							     <span><?php echo $escort_sin_photo['date-1']; ?></span>

							</div>

						</div>










						<div class="tboxsl2">
							<div class="con">
				             
								<div class="box2">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-2']; ?>"><?php echo $escort_sin_photo['name-2']; ?></a></h3>
							     <h3><a href="<?php echo $escort_sin_photo['rev_url-2']; ?>"><?php echo $escort_sin_photo['rev2']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-2']; ?>"><?php echo $escort_sin_photo['description-2']; ?></a></span>

							</div>

							<div class="datee">
							     <span><?php echo $escort_sin_photo['date-2']; ?></span>

							</div>

						</div>










						<div class="tboxsl3">
							<div class="con">
				             
								<div class="box3">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-3']; ?>"><?php echo $escort_sin_photo['name-3']; ?></a></h3>
							     <h3><a href="<?php echo $escort_sin_photo['rev_url-3']; ?>"><?php echo $escort_sin_photo['rev3']; ?></a></h3>
							     <span><a href="<?php echo $escort_sin_photo['page_url-3']; ?>"><?php echo $escort_sin_photo['description-3']; ?></a></span>

							</div>

							<div class="datee">
							     <span><?php echo $escort_sin_photo['date-3']; ?></span>

							</div>

						</div>












						<div class="tboxsl4">
							<div class="con">
				             
								<div class="box4">

							
									
								</div>


								

							</div>

							<div class="textt">
							     <h3><a href="<?php echo $escort_sin_photo['page_url-4']; ?>"><?php echo $escort_sin_photo['name-4']; ?></a></h3>
							     <h3><a href="<?php echo $escort_sin_photo['rev_url-4']; ?>"><?php echo $escort_sin_photo['rev4']; ?></a></h3>
							     <span><?php echo $escort_sin_photo['description-4']; ?></span>

							</div>

							<div class="datee">
							     <span><?php echo $escort_sin_photo['date-4']; ?></span>

							</div>

						</div>



	
</div>


		







	<?php 

		return ob_get_clean();
	}


	add_action('vc_before_init','reviewsh');

    function reviewsh(){

    	vc_map([
		'name' 				=> 'Reviews for Home',
		'base'				=> 'reviewsfront',
		'category'			=> 'Reviews',
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

							'param_name'    => 'page_url-1',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for name'

						],
						[   

							'param_name'    => 'page_url-2',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for name'

						],
						[   

							'param_name'    => 'page_url-3',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for name'

						],
						[   

							'param_name'    => 'page_url-4',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for name'

						],	
						[   

							'param_name'    => 'rev_url-1',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for review'

						],

						[   

							'param_name'    => 'rev_url-2',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for review'

						],

						[   

							'param_name'    => 'rev_url-3',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for review'

						],

						[   

							'param_name'    => 'rev_url-4',
							'type'			=> 'textfield',
							'heading'		=> 'Put url for review'

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

							'param_name'    => 'rev1',
							'type'			=> 'textfield',
							'heading'		=> 'Put text review'

						],
						[   

							'param_name'    => 'rev2',
							'type'			=> 'textfield',
							'heading'		=> 'Put text review'

						],
						[   

							'param_name'    => 'rev3',
							'type'			=> 'textfield',
							'heading'		=> 'Put text review'

						],
						[   

							'param_name'    => 'rev4',
							'type'			=> 'textfield',
							'heading'		=> 'Put text review'

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

							'param_name'    => 'date-1',
							'type'			=> 'textfield',
							'heading'		=> 'Put date'

						],

						[   

							'param_name'    => 'date-2',
							'type'			=> 'textfield',
							'heading'		=> 'Put date'

						],
						[   

							'param_name'    => 'date-3',
							'type'			=> 'textfield',
							'heading'		=> 'Put date'

						],
						[   

							'param_name'    => 'date-4',
							'type'			=> 'textfield',
							'heading'		=> 'Put date'

						]
						
				
			
      ]

	]);

    }

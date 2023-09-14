<?php  

	add_shortcode('sliderphotogallery','sliderphotogallery');
	function sliderphotogallery($one, $two){ 

		$escort_sin_photo = shortcode_atts([


			'photo-1'				=> '',		
			'photo-2'				=> '',		
			'photo-3'				=> '',		
			'photo-4'				=> '',		
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
			'photo-16'				=> ''	
				


			
			

		], $one);

			ob_start();
		?>


   	
<div class="container slide-ph-gally">
<div id="bs" class="slider carousel slide" data-ride="carousel" data-interval="false">
		
		<div class="carousel-inner" >

	


	<style>

				.slide-ph-gally{
					margin-left: 18px;
    				float: left;
    				width: 110%;
    				margin-top: 153px;
				}

				.slide-ph-gally .tboxsl1{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl2{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;

				}
				
				.slide-ph-gally .tboxsl3{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl4{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl5{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl6{
					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl7{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl8{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl9{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl10{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl11{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl12{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl13{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl14{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl15{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl16{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl17{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}
				
				.slide-ph-gally .tboxsl18{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl19{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}
				
				.slide-ph-gally .tboxsl20{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}
				
				.slide-ph-gally .tboxsl21{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl22{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl23{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl24{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl25{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl26{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl27{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl28{

					width: 47%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl29{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl30{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}

				.slide-ph-gally .tboxsl31{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:15px;
					margin-bottom: 20px;
				}


				.slide-ph-gally .tboxsl32{

					width: 40.2%;
					height: 546px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:50px;
					margin-bottom: 20px;
				}



				.slide-ph-gally .box1 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-1'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box2 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-2'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box3 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-3'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}	

				.slide-ph-gally .box4 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-4'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}



				.slide-ph-gally .box5 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-5'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box6 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-6'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box7 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-7'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}	

				.slide-ph-gally .box8 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-8'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box9 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-9'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box10 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-10'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box11 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-11'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}	

				.slide-ph-gally .box12 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-12'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}


				.slide-ph-gally .box13 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-13'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box14 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-14'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box15 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-15'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}	

				.slide-ph-gally .box16 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box17 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box18 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}
				
				.slide-ph-gally .box19 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box20 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box21 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box22 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}


				.slide-ph-gally .box23 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box24 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box25 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box26 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box27 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box28 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box29 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box30 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box31 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				.slide-ph-gally .box32 {
					width: 100%;
					height: 546px;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					transition: 2s;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
				}

				


				.slide-pho-pre{
					width: 25px;
				    height: 25px;
				    position: absolute;
				    top: 60px;
				    left: 566px;
				}

				.slide-pho-nx{
				    width: 25px;
				    height: 25px;
				    position: absolute;
				    top: 60px;
				    right: 90px;
				}




				@media all and (max-width: 480px){

					.slide-pho-pre {
					    top: -190px !important;
					    left: 31% !important;
					}

					.slide-pho-nx {
					    top: -190px !important;
					    right: 31% !important;
					}

					.slide-ph-gally {
					    margin-left: -30px !important;
					    float: left !important;
					    width: 114% !important;
					    margin-top: 0px !important;
					    padding-left: 20px !important;
					    padding-right: 28px !important;
					}

					.slide-ph-gally .tboxsl1 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl2 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box1 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box2 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl3 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl4 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box3 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box4 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl5 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl6 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box5 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box6 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl7 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl8 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box7 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box8 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl9 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl10 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box9 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box10 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl11 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl12 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box11 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box12 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl13 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl14 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box13 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box14 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl15 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl16 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box15 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box16 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl17 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl18 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box17 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box18 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl19 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl20 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box19 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box20 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl21 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl22 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box21 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box22 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl23 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl24 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box23 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box24 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl25 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl26 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box25 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box26 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl27 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl28 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box27 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box28 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .tboxsl29 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl30 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box29 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box30 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}


					.slide-ph-gally .tboxsl31 {
					    width: 46.2% !important;
					    height: 258px !important;
					}

					.slide-ph-gally .tboxsl32 {
					    width: 46.2% !important;
					    height: 258px !important;
					    margin-left: 12px !important;
					    margin-bottom: 20px !important;
					}

					.slide-ph-gally .box31 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}

					.slide-ph-gally .box32 {
					    height: 258px !important;
					    border-top-left-radius: 5px !important;
					    border-top-right-radius: 5px !important;
					    border-bottom-left-radius: 5px !important;
					    border-bottom-right-radius: 5px !important;
					}


			}


			@media all and (max-width: 414px){

				.call-n {
				        margin-left: 184px !important;
				}

				.slide-ph-gally {
				    width: 112% !important;
				    padding-right: 48px !important;
				}


			}


			@media all and (max-width: 384px){

				.slide-pho-pre {
    				left: 26% !important;
				}

				.slide-pho-nx {
    				right: 35% !important;
				}

				.call-n {
				    margin-left: 168px !important;
				}

				.slide-ph-gally {
				    padding-right: 55px !important;
				    width: 115% !important;
				    margin-left: -35px !important;
				    padding-left: 15px !important;
				}

				.m-border-en .member.vc_btn3-center {
				    margin-left: 111px !important;
				}

				.chel-t h3 {
				    margin-left: -52px !important;
				}

			}


			@media all and (max-width: 375px){


				.slide-ph-gally {
				    padding-right: 58px !important;
				    width: 116% !important;
				    padding-left: 11px !important;
				}


			}


			@media all and (max-width: 360px){


				.slide-pho-pre {
				    left: 24% !important;
				}

				.slide-pho-nx {
				    right: 36% !important;
				}

				.call-n {
				    margin-left: 156px !important;
				}

				.slide-ph-gally {
				    padding-left: 15px !important;
				    padding-right: 53px !important;
				}


				.slide-ph-gally .tboxsl1 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl2 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl3 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl4 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl5 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl6 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl7 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl8 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl9 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl10 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl11 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl12 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl13 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl14 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl15 {
				    width: 44.2% !important;
				}.slide-ph-gally .tboxsl16 {
				    width: 44.2% !important;
				}


			}


			@media all and (max-width: 320px){
				.slide-pho-pre {
				    left: 22% !important;
				}

				.slide-pho-nx {
				    right: 38% !important;
				}

				.slide-ph-gally {
				    padding-left: 11px !important;
				    padding-right: 65px !important;
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
				             	<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-1'], 'full'); ?>">
									<div class="box1">

						
									
								   </div>

								</a>


								

							</div>


						</div>










						<div class="tboxsl2">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-2'], 'full'); ?>">
									<div class="box2">

						
									
								   </div>

								</a>

								

							</div>


						</div>










						<div class="tboxsl3">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-3'], 'full'); ?>">
									<div class="box3">

						
									
								   </div>

								</a>


								

							</div>


						</div>












						<div class="tboxsl4">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-4'], 'full'); ?>">
									<div class="box4">

						
									
								   </div>

								</a>


								

							</div>


						</div>





						<div class="tboxsl5">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-5'], 'full'); ?>">
									<div class="box5">

						
									
								   </div>

								</a>


								

							</div>


						</div>




						<div class="tboxsl6">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-6'], 'full'); ?>">
									<div class="box6">

						
									
								   </div>

								</a>


								

							</div>


						</div>





						<div class="tboxsl7">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-7'], 'full'); ?>">
									<div class="box7">

						
									
								   </div>

								</a>


								

							</div>


						</div>





						<div class="tboxsl8">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-8'], 'full'); ?>">
									<div class="box8">

						
									
								   </div>

								</a>


								

							</div>


						</div>



						<div class="tboxsl9">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-9'], 'full'); ?>">
									<div class="box9">

						
									
								   </div>

								</a>


								

							</div>


						</div>










						<div class="tboxsl10">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-10'], 'full'); ?>">
									<div class="box10">

						
									
								   </div>

								</a>


								

							</div>


						</div>










						<div class="tboxsl11">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-11'], 'full'); ?>">
									<div class="box11">

						
									
								   </div>

								</a>


								

							</div>


						</div>












						<div class="tboxsl12">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-12'], 'full'); ?>">
									<div class="box12">

						
									
								   </div>

								</a>


								

							</div>

						</div>






					<div class="tboxsl13">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-13'], 'full'); ?>">
									<div class="box13">

						
									
								   </div>

								</a>


								

							</div>

					</div>





					<div class="tboxsl14">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-14'], 'full'); ?>">
									<div class="box14">

						
									
								   </div>

								</a>


								

							</div>

					</div>

			





					<div class="tboxsl15">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-15'], 'full'); ?>">
									<div class="box15">

						
									
								   </div>

								</a>


								

							</div>

					</div>

				





					<div class="tboxsl16">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-16'], 'full'); ?>">
									<div class="box16">

						
									
								   </div>

								</a>

								

							</div>

					</div>







	
</div>


			





			<div class="carousel-item">







						<div class="tboxsl17">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-17'], 'full'); ?>">
									<div class="box17">

						
									
								   </div>

								</a>


								

							</div>


						</div>










						<div class="tboxsl18">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-18'], 'full'); ?>">
									<div class="box18">

						
									
								   </div>

								</a>


								

							</div>


						</div>










						<div class="tboxsl19">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-19'], 'full'); ?>">
									<div class="box19">

						
									
								   </div>

								</a>

								

							</div>

						</div>












						<div class="tboxsl20">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-20'], 'full'); ?>">
									<div class="box20">

						
									
								   </div>

								</a>


								

							</div>


						</div>





						<div class="tboxsl21">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-21'], 'full'); ?>">
									<div class="box21">

						
									
								   </div>

								</a>


								

							</div>


						</div>




						<div class="tboxsl22">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-22'], 'full'); ?>">
									<div class="box22">

						
									
								   </div>

								</a>


								

							</div>


						</div>





						<div class="tboxsl23">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-23'], 'full'); ?>">
									<div class="box23">

						
									
								   </div>

								</a>


								

							</div>


						</div>





						<div class="tboxsl24">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-24'], 'full'); ?>">
									<div class="box24">

						
									
								   </div>

								</a>


								

							</div>


						</div>



						<div class="tboxsl25">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-25'], 'full'); ?>">
									<div class="box25">

						
									
								   </div>

								</a>


								

							</div>


						</div>










						<div class="tboxsl26">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-26'], 'full'); ?>">
									<div class="box26">

						
									
								   </div>

								</a>


								

							</div>


						</div>










						<div class="tboxsl27">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-27'], 'full'); ?>">
									<div class="box27">

						
									
								   </div>

								</a>


								

							</div>


						</div>












						<div class="tboxsl28">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-28'], 'full'); ?>">
									<div class="box28">

						
									
								   </div>

								</a>


								

							</div>


						</div>






					<div class="tboxsl29">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-29'], 'full'); ?>">
									<div class="box29">

						
									
								   </div>

								</a>


								

							</div>


					</div>





					<div class="tboxsl30">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-30'], 'full'); ?>">
									<div class="box30">

						
									
								   </div>

								</a>


								

							</div>

					</div>

			





					<div class="tboxsl31">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-31'], 'full'); ?>">
									<div class="box31">

						
									
								   </div>

								</a>


								

							</div>


					</div>

				





					<div class="tboxsl32">
							<div class="con">
				             
								<a class="alpha-lightbox" href="<?php echo wp_get_attachment_image_url($escort_sin_photo['photo-32'], 'full'); ?>">
									<div class="box32">

						
									
								   </div>

								</a>


								

							</div>


					</div>
					








	


		</div>



	</div>


</div>






<!-- 		<ul class="carousel-indicators">
			<li data-target="#bs" data-slide-to="0" class="active"></li>
			<li data-target="#bs" data-slide-to="1" ></li>
			<li data-target="#bs" data-slide-to="2" ></li>
			<li data-target="#bs" data-slide-to="3" ></li>
			<li data-target="#bs" data-slide-to="4" ></li>
		</ul> -->

		<a class="carousel-control-prev slide-pho-pre" href="#bs" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>

		<a class="carousel-control-next slide-pho-nx" href="#bs" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>








	<?php 

		return ob_get_clean();
	}


	add_action('vc_before_init','vc_for_slider_ph_gallery');

    function vc_for_slider_ph_gallery(){

    	vc_map([
		'name' 				=> 'Slider Photo Gallery',
		'base'				=> 'sliderphotogallery',
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

							'param_name'    => 'photo-17',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],

						[

							'param_name'    => 'photo-18',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],

						[

							'param_name'    => 'photo-19',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-20',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],

						[

							'param_name'    => 'photo-21',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-22',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-23',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-24',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-25',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-26',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-27',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-28',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-29',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-30',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-31',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						],
						[

							'param_name'    => 'photo-32',
							'type'			=> 'attach_image',
							'heading'		=> 'Attach photo'

						]
						
				
			
      ]

	]);

    }

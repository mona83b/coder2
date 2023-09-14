<?php  

	add_shortcode('sliderduophotogallery','sliderduophotogallery');
	function sliderduophotogallery($one, $two){ 

		$escort_sin_photo = shortcode_atts([


			'photo-1'				=> '',		
			'photo-2'				=> '',		
			'photo-3'				=> '',		
			'photo-4'				=> '',		
			'name-1'				=> '',		
			'name-2'				=> '',		
			'name-3'				=> '',		
			'name-4'				=> '',		
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
			'page_url1'				=> '',
			'page_url2'				=> '',
			'page_url3'				=> '',
			'page_url4'				=> ''
		


			
			

		], $one);

			ob_start();
		?>


   	
<div class="container slide-duo-ph-gally">
<div id="bsduo" class="slider carousel slide" data-ride="carousel" data-interval="false">
		
		<div class="carousel-inner">

	


	<style>

				.slide-duo-ph-gally{
					margin-left: -10px;
				    float: left;
				    width: 110%;
				    margin-top: -27px;
				}

				.slide-duo-ph-gally .leftside{
					width: 42%;
    				float: left;
    				margin-left: 30px;
    				text-align: center;
				}

				.slide-duo-ph-gally .leftside .lft{
					font-size: 18px !important;
					color: #a74811 !important;
				}

				.slide-duo-ph-gally .rightside .rgt{
					font-size: 18px !important;
					color: #a74811 !important;
				}

				.slide-duo-ph-gally .rightside{
					width: 42%;
    				float: left;
    				margin-left: 10px;
    				text-align: center;
				}

				.slide-duo-ph-gally .tboxsl1{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl2{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;

				}
				
				.slide-duo-ph-gally .tboxsl3{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl4{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl5{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl6{
					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl7{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl8{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl9{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl10{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl11{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl12{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl13{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl14{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl15{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl16{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl17{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}
				
				.slide-duo-ph-gally .tboxsl18{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl19{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}
				
				.slide-duo-ph-gally .tboxsl20{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}
				
				.slide-duo-ph-gally .tboxsl21{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl22{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl23{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl24{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl25{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl26{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl27{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl28{

					width: 47%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl29{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl30{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}

				.slide-duo-ph-gally .tboxsl31{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}


				.slide-duo-ph-gally .tboxsl32{

					width: 100%;
					height: 496px;
					position: relative;
					overflow:hidden;
					float:left;
					margin-left:0px;
					margin-bottom: 20px;
				}



				.slide-duo-ph-gally .box1 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box2 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box3 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box4 {
					width: 100%;
					height: 496px;
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



				.slide-duo-ph-gally .box5 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box6 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box7 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box8 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box9 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box10 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box11 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box12 {
					width: 100%;
					height: 496px;
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


				.slide-duo-ph-gally .box13 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box14 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box15 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box16 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box17 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box18 {
					width: 100%;
					height: 496px;
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
				
				.slide-duo-ph-gally .box19 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box20 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box21 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box22 {
					width: 100%;
					height: 496px;
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


				.slide-duo-ph-gally .box23 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box24 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box25 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box26 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box27 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box28 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box29 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box30 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box31 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .box32 {
					width: 100%;
					height: 496px;
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

				.slide-duo-ph-gally .leftside .lft a{
					color: #ff9900 !important;
				}

				.slide-duo-ph-gally .leftside .lft a:hover{
					color: #ffffff !important;
					text-decoration: underline !important;
				}

				.slide-duo-ph-gally .rightside .rgt a{
					color: #ff9900 !important;
				}

				.slide-duo-ph-gally .rightside .rgt a:hover{
					color: #ffffff !important;
					text-decoration: underline !important;
				}

				


				.slide-duo-pho-pre{
					width: 25px;
				    height: 25px;
				    position: absolute;
				    top: 60px;
				    left: 663px;
				}

				.slide-duo-pho-nx{
				    width: 25px;
				    height: 25px;
				    position: absolute;
				    top: 60px;
				    right: 90px;
				}


			@media all and (max-width: 480px){


				.slide-duo-ph-gally {
				    width: 108% !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox1 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox3 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox5 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox7 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox9 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox11 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox13 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox15 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox17 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox19 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox21 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox23 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox25 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox27 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox29 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox31 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox33 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox35 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}

				.slide-duo-ph-gally .duo-d .tdubox37 {
				    width: 40.5% !important;
				    height: 410px !important;
				    margin-left: 115px !important;
				}


				.slide-duo-ph-gally .box1 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box2 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box3 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box4 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box5 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box6 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box7 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box8 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box9 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box10 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box11 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box12 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box13 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box14 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box15 {
				    height: 257px !important;
				}.slide-duo-ph-gally .box16 {
				    height: 257px !important;
				}





				.slide-duo-ph-gally {
			        margin-left: 80px !important;
			        width: 100% !important;
			    }

			    .slide-duo-ph-gally .leftside {
			    width: 38% !important;
			    margin-left: 18px !important;
			    }

			    .slide-duo-ph-gally .rightside {
			    width: 38% !important;
			    margin-left: 10px !important;
			    }

			  .slide-duo-ph-gally .tboxsl1 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl2 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl3 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl4 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl5 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl6 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl7 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl8 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl9 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl10 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl11 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl12 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl13 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl14 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl15 {
			      height: 266px !important;
			  }.slide-duo-ph-gally .tboxsl16 {
			      height: 266px !important;
			  }




				.duo-d .best {
				    padding-top: 126px !important;
				    margin-left: 95px !important;
				    width: 44.5% !important;
				    text-align: center;
				}

				.slide-duo-pho-pre {
				    top: 33px !important;
				    left: 42% !important;
				}

				.slide-duo-pho-nx {
				    top: 33px !important;
				    right: 29% !important;
				}
				
			}

			@media all and (max-width: 414px){

				.slide-duo-ph-gally {
				    margin-left: 72px !important;
				    width: 97% !important;
				}

			}


			@media all and (max-width: 384px){

				.slide-duo-ph-gally {
				    margin-left: 16px !important;
				    width: 91% !important;
				}

				.slide-duo-ph-gally .leftside {
				    width: 39% !important;
				    float: left !important;
				    margin-left: 75px !important;
				    text-align: center !important;
				}


				.slide-duo-ph-gally .rightside {
				    width: 39% !important;
				    float: left !important;
				    margin-left: 10px !important;
				    text-align: center !important;
				}

				.slide-duo-ph-gally .tboxsl1 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl1 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl2 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl3 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl4 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl5 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl6 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl7 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl8 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl9 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl10 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl11 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl12 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl13 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl14 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl15 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl16 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl17 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl18 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl19 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl20 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl21 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl22 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl23 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl24 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl25 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl26{
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl27 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl28 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl29 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl30 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl31 {
				    height: 257px !important;
				}				.slide-duo-ph-gally .tboxsl32 {
				    height: 257px !important;
				}


				.slide-duo-pho-pre {
				    left: 41% !important;
				}

				.slide-duo-pho-nx {
				    right: 30% !important;
				}


			}


			@media all and (max-width: 375px){

				.m-border-en .duo-show {
				    width: 70.5% !important;
				}

				.m-border-en .duo-show h3 {
				    font-size: 11px !important;
				}

				.slide-duo-ph-gally {
				    margin-left: 14px !important;
				    width: 90.5% !important;
				}

				.slide-duo-ph-gally .leftside {
				    width: 38% !important;
				    margin-left: 77px !important;
				}

				.slide-duo-ph-gally .rightside {
				    width: 38% !important;
				}

				.slide-duo-pho-pre {
				    left: 41% !important;
				}

				.slide-duo-pho-nx {
				    right: 31% !important;
				}


			}


			@media all and (max-width: 360px){

				.m-border-en .duo-show {
				    width: 68.5% !important;
				    margin-left: 90px !important;
				}

				.m-border-en .duo-show h3 {
				    font-size: 10px !important;
				}

			}


			@media all and (max-width: 320px){

				.slide-duo-ph-gally {
				    margin-left: 10px !important;
				    width: 87.5% !important;
				}

			}



		</style>






<div class="carousel-item active">






				


		<div class="leftside">

				<div class="lft">

					<a href="<?php echo $escort_sin_photo['page_url1']; ?>"><?php echo $escort_sin_photo['name-1']; ?></a>

				</div>


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


			</div>



			<div class="rightside">

					<div class="rgt">
						<a href="<?php echo $escort_sin_photo['page_url2']; ?>"><?php echo $escort_sin_photo['name-2']; ?></a>
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





	
</div>


			





<div class="carousel-item">



			<div class="leftside">

					<div class="lft"><a href="<?php echo $escort_sin_photo['page_url3']; ?>"><?php echo $escort_sin_photo['name-3']; ?></a></div>

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


			</div>


			<div class="rightside">

					<div class="rgt"><a href="<?php echo $escort_sin_photo['page_url4']; ?>"><?php echo $escort_sin_photo['name-4']; ?></a></div>

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


</div>


















<!-- 		<ul class="carousel-indicators">
			<li data-target="#bs" data-slide-to="0" class="active"></li>
			<li data-target="#bs" data-slide-to="1" ></li>
			<li data-target="#bs" data-slide-to="2" ></li>
			<li data-target="#bs" data-slide-to="3" ></li>
			<li data-target="#bs" data-slide-to="4" ></li>
		</ul> -->

		<a class="carousel-control-prev slide-duo-pho-pre" href="#bsduo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>

		<a class="carousel-control-next slide-duo-pho-nx" href="#bsduo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>








	<?php 

		return ob_get_clean();
	}


	add_action('vc_before_init','vc_for_slider_duo_ph_gallery');

    function vc_for_slider_duo_ph_gallery(){

    	vc_map([
		'name' 				=> 'Slider Duo Photo Gallery',
		'base'				=> 'sliderduophotogallery',
		'category'			=> 'Escort-slider-carawsel',
		'icon'				=> get_template_directory_uri().'/images/food.png',
		'params'			=> [


						[

							'param_name'    => 'name-1',
							'type'			=> 'textfield',
							'heading'		=> 'Put name for leftside'

						],

						[   

							'param_name'    => 'page_url1',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],

						[

							'param_name'    => 'name-2',
							'type'			=> 'textfield',
							'heading'		=> 'Put name for rightside'

						],

						[   

							'param_name'    => 'page_url2',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],

						[

							'param_name'    => 'name-3',
							'type'			=> 'textfield',
							'heading'		=> 'Put name for leftside for next slide'

						],

						[   

							'param_name'    => 'page_url3',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],

						[

							'param_name'    => 'name-4',
							'type'			=> 'textfield',
							'heading'		=> 'Put name for rightside for next slide'

						],

						[   

							'param_name'    => 'page_url4',
							'type'			=> 'textfield',
							'heading'		=> 'Put url'

						],

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
							'heading'		=> 'Attach photo for next slide from here'

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

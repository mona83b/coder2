<?php  

	add_shortcode('singlephotoduo','singlephotoduo');
	function singlephotoduo($one, $two){ 

		$escort_sin_photoo = shortcode_atts([

			'top-header'			=> '',
			'photoleft'			=> '',		
			'photoright'			=> '',		
			'name-left'				=> '',		
			'name-right'			=> '',			
			'road'					=> '',		
			'price'					=> '',
			'page_url1'				=> '',
			'top-left'				=> '',
			'top-right'				=> '',
			'girl-left'				=> '',
			'girl-right'			=> '',
			'girl'					=> '',
			'tdubox'				=> '',
			'boxdu1'				=> '',
			'boxdu2'				=> '',
			'page_url1'				=> '',
			'page_url_lo'			=> ''

			


			
			

		], $one);

			ob_start();
		?>

		<script>

			(function($){

		       $(document).ready(function(){


				   $('.boxdu<?php echo $escort_sin_photoo['boxdu1']; ?> , .boxdu<?php echo $escort_sin_photoo['boxdu2']; ?>').click(function(){
					document.location.href = "<?php echo $escort_sin_photoo['page_url1']; ?>";


				});



		       });


		     })(jQuery)

		</script>

        <style>



        		.tdubox<?php echo $escort_sin_photoo['tdubox']; ?>{

						width: 74%;
						height: 447px !important;
						position: relative;
						overflow:hidden;
						margin-left: 150px;
					    border: 1px solid #3e3e3e;
					    border-radius: 3px;
					    margin-bottom: 10px;
					}

				.cond {
					height: 76%;
				}


				.boxdu<?php echo $escort_sin_photoo['boxdu1']; ?> {
					width: 38%;
					height: 91%;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photoo['photoleft'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
    				border-bottom-right-radius: 5px;
					float:left;
					margin-left: 45px;
				}

					.boxdu<?php echo $escort_sin_photoo['boxdu2']; ?> {
					width: 38%;
					height: 91%;
					background-color: red;
					background-image: url('<?php echo wp_get_attachment_image_url($escort_sin_photoo['photoright'], 'full'); ?>');
					background-size: 100% 100%;
					background-position: center center;
					position: relative;
					overflow: hidden;
					border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
    				border-bottom-right-radius: 5px;
					float:left;
					margin-left: 45px;
				}

				.duotop{
					text-align: center;
				    margin-bottom: -29px !important;
				    width: 76%;
				    margin: auto;
				    margin-top: -20px !important;
				}

				.duotop h5 {
				    font-size: 20px;
				    color:#ffffff !important;
				}

				.duo{
					width: 100%;
				}

				.dun1{
					width: 38%;
				    float: left;
				    margin-left: 45px !important;
				    text-align: center;
					}

				.dun1 a{
					color: #CF6B20;
    				font-size: 15px;
					}

				.dun2{
					width: 38%;
				    float: left;
				    text-align: center;
				    margin-left: 301px !important;
					margin-top: -23px !important;
				    }

				.dun2 a{
					color: #CF6B20;
    				font-size: 15px;
				    }

				.texttd{
					margin-top: 1px !important;
				    width: 76%;
				    height: 50px;
				    text-align: center;
				    margin: auto;
					}

				.texttd span a{
					color: #ffffff !important;
				}



					@media all and (max-width: 480px){

					.m-border-du .duo-d .tdubox1 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox1 .boxdu1 {
					  margin-left: 27px !important;
					}  

					.m-border-du .duo-d .duotop {
					  width: 87% !important;
					}

					.m-border-du .duo-d .dun1 {
					    width: 38%;
					    margin-left: 27px !important;
					}

					.m-border-du .duo-d .dun2 {
					    width: 38% !important;
					    margin-left: 235px !important;
					}

					.m-border-du .duo-d .tdubox3 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox3 .boxdu3 {
					  margin-left: 27px !important;
					}  

					.m-border-du .duo-d .tdubox5 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox5 .boxdu5 {
					  margin-left: 27px !important;
					}

					.m-border-du .duo-d .tdubox7 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox7 .boxdu7 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox9 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox9 .boxdu9 {
					  margin-left: 27px !important;
					}  

					.m-border-du .duo-d .tdubox11 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox11 .boxdu11 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox13 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox13 .boxdu13 {
					  margin-left: 27px !important;
					}

					.m-border-du .duo-d .tdubox15 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox15 .boxdu15 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox17 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox17 .boxdu17 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox19 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox19 .boxdu19 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox21 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox21 .boxdu21 {
					  margin-left: 27px !important;
					}

					.m-border-du .duo-d .tdubox23 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox23 .boxdu23 {
					  margin-left: 27px !important;
					}

					.m-border-du .duo-d .tdubox25 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox25 .boxdu25 {
					  margin-left: 27px !important;
					}

					.m-border-du .duo-d .tdubox27 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox27 .boxdu27 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox29 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox29 .boxdu29 {
					  margin-left: 27px !important;
					}

					.m-border-du .duo-d .tdubox31 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox31 .boxdu31 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox33 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox33 .boxdu33 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox35 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox35 .boxdu35 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox37 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox37 .boxdu37 {
					  margin-left: 27px !important;
					} 

					.m-border-du .duo-d .tdubox39 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					}  

					.m-border-du .duo-d .tdubox39 .boxdu39 {
					  margin-left: 27px !important;
					}

					.m-border-du .duo-d .tdubox41 {
					    width: 100% !important;
					    height: 410px !important;
					    margin-left: 0px !important;
					} 


					}



					@media all and (max-width: 414px){

						.m-border-du .duo-d .duotop {
						    width: 100% !important;
						}

						.m-border-du .duo-d .tdubox1 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox1 .boxdu1 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox1 .boxdu2 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}

						.m-border-du .duo-d .dun1 {
						    width: 45% !important;
						    margin-left: 14px !important;
						}

						.m-border-du .duo-d .dun2 {
						    width: 45% !important;
						    margin-left: 187px !important;
						}

						.m-border-du .duo-d .tdubox3 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox3 .boxdu3 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox3 .boxdu4 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox5 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox5 .boxdu5 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox5 .boxdu6 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox7 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox7 .boxdu7 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox7 .boxdu8 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox9 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox9 .boxdu9 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox9 .boxdu10 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}



						
						.m-border-du .duo-d .tdubox11 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox11 .boxdu11 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox11 .boxdu12 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox13 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox13 .boxdu13 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox13 .boxdu14 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox15 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox15 .boxdu15 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox15 .boxdu16 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox17 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox17 .boxdu17 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox17 .boxdu18 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox19 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox19 .boxdu19 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox19 .boxdu20 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox21 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox21 .boxdu21 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox21 .boxdu22 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox23 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox23 .boxdu23 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox23 .boxdu24 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox25 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox25 .boxdu25 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox25 .boxdu26 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox27 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox27 .boxdu27 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox27 .boxdu28 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox29 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox29 .boxdu29 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox29 .boxdu30 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox31 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox31 .boxdu31 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox31 .boxdu32 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox33 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox33 .boxdu33 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox33 .boxdu34 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox35 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox35 .boxdu35 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox35 .boxdu36 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox37 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox37 .boxdu37 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox37 .boxdu38 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}




						.m-border-du .duo-d .tdubox39 {
						    margin-left: 0px !important;
						    width: 93% !important;
						}

						.m-border-du .duo-d .tdubox39 .boxdu40 {
						    margin-left: 3.5% !important;
    						width: 45% !important;
						}

						.m-border-du .duo-d .tdubox39 .boxdu41 {
						    width: 45% !important;
						    margin-left: 3% !important;
						}

						.m-border-du .deluxe-dw .subsc-up {
						    width: 67% !important;
						    padding-left: 0 !important;
						    padding-right: 0 !important;
						}

						.m-border-du .deluxe-dw .subsc-up p {
						    width: 100% !important;
						}

						.m-border-du .member.vc_btn3-center {
						    width: 61% !important;
						    margin-left: 21.5% !important;
						}

						.m-border-du .cherry-v {
						    margin-left: 4% !important;
						}

					}					



					@media all and (max-width: 414px){

						.m-border-du .duo-d .dun1 {
						    margin-left: 13px !important;
						}

						.m-border-du .duo-d .dun2 {
						    margin-left: 186px !important;
						}
					}



					@media all and (max-width: 384px){


						.m-border-du .boxsearch {
						    width: 125% !important;
						    margin-left: 15% !important;
						}

						.m-border-du .boxsearch .fo {
						    margin-left: -364px !important;
						}

						.m-border-du .boxsearch .u {
						    margin-left: -247px !important;
						}

						.m-border-du .boxsearch .v {
						    margin-left: -132px !important;
						}

						.m-border-du .boxsearch .w {
						    margin-left: -312px !important;
						}

						.m-border-du .boxsearch .x {
						    margin-left: -206px !important;
						}

						.boxdrop1 .fai {
						    height: 20px !important;
						    margin-left: -18px !important;
						}


						.m-border-du .duo-d .tdubox1 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox3 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox5 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox7 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox9 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox11 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox13 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox15 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox17 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox19 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox21 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox23 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox25 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox27 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox29 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox31 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox33 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox35 {
						    width: 89.5% !important;
						}.m-border-du .duo-d .tdubox37 {
						    width: 89.5% !important;
						}


						.m-border-du .deluxe-dw .subsc-up p {
						    width: 97% !important;
						}

						.m-border-du .cherry-v {
						    margin-left: 2% !important;
						}


					}


					@media all and (max-width: 360px){

						.m-border-du .boxsearch {
						    margin-left: 14% !important;
						}

						.m-border-du .boxsearch .fo {
						    margin-left: -348px !important;
						}
					    
					    .m-border-du .boxsearch .u {
						    margin-left: -237px !important;
						}

						.m-border-du .boxsearch .v {
						    margin-left: -128px !important;
						}

						.m-border-du .boxsearch .w {
						    margin-left: -299px !important;
						}

						.m-border-du .boxsearch .x {
						    margin-left: -195px !important;
						}

						.m-border-du .duo-d .best {
						    width: 94% !important;
						    padding-left: 4% !important;
						    padding-right: 3% !important;
						}

						.m-border-du .duo-d .tdubox1 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox3 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox5 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox7 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox9 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox11 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox13 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox15 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox17 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox19 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox21 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox23 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox25 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox27 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox29 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox31 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox33 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox35 {
						    margin-left: -6px !important;
						}.m-border-du .duo-d .tdubox37 {
						    margin-left: -6px !important;
						}

						.m-border-du .deluxe-dw .subsc-up {
						    width: 63% !important;
						}

						.m-border-du .deluxe-dw .subsc-up p {
						    width: 100% !important;
						}

						.m-border-du .member.vc_btn3-center {
						    width: 58% !important;
						    margin-left: 22.5% !important;
						}

						.m-border-du .cherry-v {
						    margin-left: -0.7% !important;
						}

						.duotop h5 {
						    font-size: 18px !important;
						}


					}



					@media all and (max-width: 320px){

						.m-border-du .boxsearch {
						    margin-left: 13.8% !important;
						    width: 131% !important;
						}

						.m-border-du .boxsearch .fo {
						    margin-left: -310px !important;
						}

						.m-border-du .boxsearch .u {
						    margin-left: -203px !important;
						}

						.m-border-du .boxsearch .v {
						    margin-left: -123px !important;
						}

						.m-border-du .boxsearch .w {
						    margin-left: -276px !important;
						}

						.m-border-du .boxsearch .x {
						    margin-left: -176px !important;
						}

						.m-border-du .duo-d .best {
						    width: 89% !important;
						}

						.m-border-du .duo-d .best h1 {
						    font-size: 14px !important;
						}

						.m-border-du .duo-d .duotop {
						    margin-bottom: -18px !important;
						}

						.duotop h5 {
    						font-size: 16px !important;
						}

						.m-border-du .duo-d .dun1 {
						    margin-left: 11px !important;
						}

						.m-border-du .duo-d .dun2 {
						    margin-left: 146px !important;
						}

						.m-border-du .duo-d .tdubox1 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox3 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox5 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox7 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox9 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox11 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox13 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox15 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox17 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox19 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox21 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox23 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox25 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox27 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox29 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox31 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox33 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox35 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .duo-d .tdubox37 {
						    margin-left: -6px !important;
						    width: 84.5% !important;
						    height: 370px !important;
						}

						.m-border-du .deluxe-dw .subsc-up {
						    width: 59% !important;
						    padding-left: 13px !important;
						    padding-right: 5px !important;
						}

						.m-border-du .member.vc_btn3-center {
						    width: 55% !important;
						    margin-left: 24% !important;
						}

						.m-border-du .cherry-v {
						    margin-left: -5% !important;
						}

						.m-border-en .cherry1 {
						    margin-left: 122px !important;
						}

					}




		</style>


		<div class="tdubox<?php echo $escort_sin_photoo['tdubox']; ?>">
			<div class="duotop">
				<h5><?php echo $escort_sin_photoo['top-header']; ?></h5>
			</div>
			<div class="cond">

				<div class="duo"><div class="dun1"><a href="<?php echo $escort_sin_photoo['page_url1']; ?>"><?php echo $escort_sin_photoo['name-left']; ?></a></div><div class="dun2"><a href="<?php echo $escort_sin_photoo['page_url1']; ?>"><?php echo $escort_sin_photoo['name-right']; ?></a></div>

			</div>
             
			<div class="boxdu<?php echo $escort_sin_photoo['boxdu1']; ?>">

			
					
			</div>

			<div class="boxdu<?php echo $escort_sin_photoo['boxdu2']; ?>">

			
					
			</div>
		

				

			</div>

			<div class="texttd">			     
			     <span><a href="<?php echo $escort_sin_photoo['page_url_lo']; ?>"><?php echo $escort_sin_photoo['road']; ?></a></span><br>
			     <span><?php echo $escort_sin_photoo['price']; ?></span>
			</div>

		</div>
        
	


	<?php 

		return ob_get_clean();
	}


	add_action('vc_before_init','vc_for_duo');

    function vc_for_duo(){

    	vc_map([
		'name' 				=> 'Double Photo Duo',
		'base'				=> 'singlephotoduo',
		'category'			=> 'Escort-double-photo-duo',
		'icon'				=> get_template_directory_uri().'/images/food.png',
		'params'			=> [


			[

				'param_name'    => 'tdubox',
				'type'			=> 'textfield',
				'heading'		=> 'Put serial number for the same page'

			],
			[

				'param_name'    => 'boxdu1',
				'type'			=> 'textfield',
				'heading'		=> 'Put serial number for the same page'

			],
			[

				'param_name'    => 'boxdu2',
				'type'			=> 'textfield',
				'heading'		=> 'Put serial number for the same page as serially to down'

			],
			[

				'param_name'    => 'top-header',
				'type'			=> 'textfield',
				'heading'		=> 'Put top header'

			],
			[

				'param_name'    => 'photoleft',
				'type'			=> 'attach_image',
				'heading'		=> 'Attach photo'

			],
			[   

				'param_name'    => 'name-left',
				'type'			=> 'textfield',
				'heading'		=> 'Name'

			],
			[

				'param_name'    => 'photoright',
				'type'			=> 'attach_image',
				'heading'		=> 'Attach photo'

			],
			[   

				'param_name'    => 'name-right',
				'type'			=> 'textfield',
				'heading'		=> 'Name'

			],

			[   

				'param_name'    => 'page_url1',
				'type'			=> 'textfield',
				'heading'		=> 'Put url link for the name and photo'

			],

			[   

				'param_name'    => 'page_url_lo',
				'type'			=> 'textfield',
				'heading'		=> 'Put url link for the street location'

			],
		
		
			[   

				'param_name'    => 'road',
				'type'			=> 'textfield',
				'heading'		=> 'Put road name'

			],
			[   

				'param_name'    => 'price',
				'type'			=> 'textfield',
				'heading'		=> 'Put price'

			]	

			

	
			
		]
	]);

    }

	







?>



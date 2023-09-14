<?php  

	add_shortcode('ddsearch','ddsearch');
	function ddsearch($one, $two){ 

		$escort_sin_photo = shortcode_atts([




			
			

		], $one);

			ob_start();
		?>


		<style>
		
				.boxsearch {
					width: 132%;
					height: auto;
					margin-top: 2px;
				}

				.boxsearch ul {
					list-style: none;
					width: 100%;
					background-color: #141414;

				}

				.boxsearch ul li{
					padding-left: 20px;
				}

				.boxsearch ul a{
					text-decoration: none;
					font-size: 16px;
					color: #8f8f8f;
				}

				.boxsearch ul li:hover {
					background-color: #525254;
					color: #d6d2d2;
				}


				.fi{
				    width: 10%;
				    float: left;
				    height: 22px;
				    margin-left: -55px;
				}
				.s{
					width: 10%;
				    float: left;
				    margin-left: -7px;
				}
				
				.t{
					width: 10%;
				    float: left;
				    margin-left: -20px;
				}

				.fo{
					width: 9%;
				    float: left;
				    margin-left: -21px;
				}

				.mybox1 {

				z-index:1 !important;
				position: absolute;
				border: none;
				font: 24px/36px sans-serif;
				overflow-y: auto;
				overflow-x: hidden;
				display: none;
				}

				.mybox1 ul {
				margin-bottom: 0px;
				}

				.mybox2 ul {
				margin-bottom: 0px;
				}

				.mybox3 ul {
				margin-bottom: 0px;
				}

				.mybox4 ul {
				margin-bottom: 0px;
				}

				.boxdrop1{

				width: 87%;
				height:40px;
				background-color: #141414;
			    font-size: 18px;
			    height: 22px;
			    border-radius: 5px;
			    border: 1px solid #f90 !important;
					
				}

				.boxdrop1 .fai{

				float: left;
				width: 20%;
				text-align: right;
				margin-top: -8px;
				margin-left: -26px;

				}
				
				.boxdrop1 .fai i{

					margin-left: 12px;
				}

				.boxdrop1 .mtext{

					float: left;
				    width: 100%;
				    text-align: right;
				    height: 20px;
				    margin-top: -9px;
				    margin-left: 5px;
				}

				.boxdrop2 .fai{

					float: left;
				    width: 20%;
				    text-align: right;
				    margin-top: -8px;
    				margin-left: -18px;
				}

				.boxdrop2 .mtext{

					float: left;
					width:100%;
					text-align: right;
					height: 20px;
    				margin-top: -9px;
				}

				.boxdrop3 .fai{

					float: left;
					width: 33%;
					text-align: right;
					margin-top: -8px;
					margin-left: -32px;
				}

				.boxdrop3 .fai p{

					margin-left: 8px;
				}

				.boxdrop3 .mtext{

					float: left;
				    width: 100%;
				    text-align: right;
				    height: 20px;
				    margin-top: -9px;
				    margin-left: 5px;
				}

				.boxdrop4 .fai{

					float: left;
				    width: 20%;
				    text-align: right;
				    margin-top: -8px;
				    margin-left: -21px;
				}

				.boxdrop4 .mtext{

					float: left;
					width:100%;
					text-align: right;
					height: 20px;
    				margin-top: -9px;
				}

				.boxdrop1 p{

					color:#fff;
					padding-top:10px;
					display:inline-block;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}
				

				.mybox2 {

					z-index:1 !important;
					position: absolute;
					border: none;
					font: 24px/36px sans-serif;
					width: 23.3%;
					height: 365px;
					overflow-y: scroll;
					overflow-x: hidden;
					display: none;
					border-top: 2px solid #7a7ef7;
					border-left: 2px solid #7a7ef7;
					border-bottom: 2px solid #7a7ef7;
					}

				.boxdrop2{

					width: 75%;
					height:40px;
					background-color: #141414;
					text-align: center;
					height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
				}

				.boxdrop2 p{

					color:#fff;
					padding-top:10px;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}

				.mybox3 {

					z-index:1 !important;
					position: absolute;
					border: none;
					font: 24px/36px sans-serif;
					width: 23.3%;
					height: 252px;
					overflow-y: scroll;
					overflow-x: hidden;
					display: none;
					border-top: 2px solid #7a7ef7;
					border-left: 2px solid #7a7ef7;
					border-bottom: 2px solid #7a7ef7;
					}

				.boxdrop3{

					width: 73%;
					height:40px;
					background-color: #141414;
					text-align: center;
					height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
				}

				.boxdrop3 p{

					color:#fff;
					padding-top:10px;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}

				.mybox4 {

					z-index:1 !important;
					position: absolute;
					border: none;
					font: 24px/36px sans-serif;
					width: 23.3%;
					height: 365px;
					overflow-y: scroll;
					overflow-x: hidden;
					display: none;
					border-top: 2px solid #7a7ef7;
					border-left: 2px solid #7a7ef7;
					border-bottom: 2px solid #7a7ef7;
					}

				.boxdrop4{

					width:100%;
					height:40px;
					background-color: #141414;
					text-align: center;
					height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
				}

				.boxdrop4 p{

					color:#fff;
					padding-top:10px;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}




				/*-------------------------------------------------*/


				.u{
				    width: 10%;
				    float: left;
				    height: 22px;
				    margin-left: 6px;
				}
				.v{
					width: 9%;
				    float: left;
				    margin-left: 6px;
				}
				.w{
					width: 8%;
				    float: left;
				    margin-left: 6px;
				}
				.x{
					width: 10%;
				    float: left;
				    margin-left: 6px;
				}

				.y{
					width: 8%;
				    float: left;
				    margin-left: 6px;
				}

				.mybox5 {

				z-index:1 !important;
				position: absolute;
				border: none;
				font: 24px/36px sans-serif;
				width: 23.3%;
				height: 365px;
				overflow-y: auto;
				overflow-x: hidden;
				display: none;
				border-top: 2px solid #7a7ef7;
				border-left: 2px solid #7a7ef7;
				border-bottom: 2px solid #7a7ef7;
				}

				.mybox5 ul {
				margin-bottom: 0px;
				}

				.mybox6 ul {
				margin-bottom: 0px;
				}

				.mybox7 ul {
				margin-bottom: 0px;
				}

				.mybox8 ul {
				margin-bottom: 0px;
				}

				.mybox9 ul {
				margin-bottom: 0px;
				}

				.boxdrop5{

					width:100%;
					height:40px;
					background-color: #141414;
				    font-size: 18px;
				    height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
					
				}

				.boxdrop5 .fai{

					float: left;
					width: 33%;
					text-align: right;
					margin-top: -8px;
					margin-left: -36px;
				}

				.boxdrop5 .mtext{

					float: left;
					width:100%;
					text-align: right;
					height: 20px;
    				margin-top: -9px;
				}

				.boxdrop6 .fai{

					float: left;
				    width: 20%;
				    text-align: right;
				    margin-top: -8px;
				    margin-left: -18px;
				}

				.boxdrop6 .mtext{

					float: left;
					width:100%;
					text-align: right;
					height: 20px;
    				margin-top: -9px;
				}

				.boxdrop7 .fai{

					float: left;
				    width: 18%;
				    text-align: right;
				    margin-top: -8px;
				    margin-left: -24px;
				}

				.boxdrop7 .mtext{

					float: left;
					width:100%;
					text-align: right;
					height: 20px;
    				margin-top: -9px;
				}

				.boxdrop8 .fai{

					float: left;
				    width: 20%;
				    text-align: right;
				    margin-top: -8px;
				    margin-left: -20px;
				}

				.boxdrop8 .mtext{

					float: left;
					width: 100%;
					text-align: right;
					height: 20px;
    				margin-top: -9px;
				}

				.boxdrop9 .fai{

					float: left;
				    width: 16%;
				    text-align: right;
				    margin-top: -8px;
				    margin-left: -29px;
				}

				.boxdrop9 .mtext{

					float: left;
				    width: 100%;
				    text-align: right;
				    height: 20px;
				    margin-top: -9px;
				}

				.boxdrop5 p{

					color:#fff;
					padding-top:10px;
					display:inline-block;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
					
				}
				

				.mybox6 {

					z-index:1 !important;
					position: absolute;
					border: none;
					font: 24px/36px sans-serif;
					width: 23.3%;
					height: 365px;
					overflow-y: scroll;
					overflow-x: hidden;
					display: none;
					border-top: 2px solid #7a7ef7;
					border-left: 2px solid #7a7ef7;
					border-bottom: 2px solid #7a7ef7;
					}

				.boxdrop6{

					width:100%;
					height:40px;
					background-color: #141414;
					text-align: center;
					height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
				}

				.boxdrop6 p{

					color:#fff;
					padding-top:10px;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}

				.mybox7 {

					z-index:1 !important;
					position: absolute;
					border: none;
					font: 24px/36px sans-serif;
					width: 23.3%;
					height: 252px;
					overflow-y: scroll;
					overflow-x: hidden;
					display: none;
					border-top: 2px solid #7a7ef7;
					border-left: 2px solid #7a7ef7;
					border-bottom: 2px solid #7a7ef7;
					}

				.boxdrop7{

					width:100%;
					height:40px;
					background-color: #141414;
					text-align: center;
					height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
				}

				.boxdrop7 p{

					color:#fff;
					padding-top:10px;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}

				.mybox8 {

					z-index:1 !important;
					position: absolute;
					border: none;
					font: 24px/36px sans-serif;
					width: 23.3%;
					height: 365px;
					overflow-y: scroll;
					overflow-x: hidden;
					display: none;
					border-top: 2px solid #7a7ef7;
					border-left: 2px solid #7a7ef7;
					border-bottom: 2px solid #7a7ef7;
					}

				.boxdrop8{

					width:100%;
					height:40px;
					background-color: #141414;
					text-align: center;
					height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
				}

				.boxdrop8 p{

					color:#fff;
					padding-top:10px;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}


				.mybox9 {

					z-index:1 !important;
					position: absolute;
					border: none;
					font: 24px/36px sans-serif;
					width: 23.3%;
					height: 365px;
					overflow-y: scroll;
					overflow-x: hidden;
					display: none;
					border-top: 2px solid #7a7ef7;
					border-left: 2px solid #7a7ef7;
					border-bottom: 2px solid #7a7ef7;
					}

				.boxdrop9{

					width:100%;
					height:40px;
					background-color: #141414;
					text-align: center;
					height: 22px;
				    border-radius: 5px;
				    border: 1px solid #f90 !important;
				}

				.boxdrop9 p{
					color:#fff;
					padding-top:10px;
					font-size: 11px !important;
					text-align: center !important;
					width: 100% !important;	
				}


				.carousel-control-prev{
					height: 139px;
    				position: absolute;
    				top: 122px;
				}


				.carousel-control-next{
					height: 139px;
    				position: absolute;
    				top: 122px;
				}



	    </style>

<div class="boxsearch">



		<div class="fi">

			<div class="boxdrop1">
				<div class="mtext"><p>By Category</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox1">

					<ul>
						<a><li>By Category</li></a>
						<a href="https://dirtyangels.co.uk/categories/all-london-escorts/"><li>All London Escorts (186)</li></a>
						<a href="https://dirtyangels.co.uk/categories/porn-stars/"><li>A level (34)</li></a>
						<a href="https://dirtyangels.co.uk/categories/newest-girls/"><li>Newest Girls (24)</li></a>
						<a href="https://dirtyangels.co.uk/categories/young-teen/"><li>Young Teen (28)</li></a>
						<a href="https://dirtyangels.co.uk/categories/busty/"><li>Busty (76)</li></a>
						<a href="https://dirtyangels.co.uk/categories/selfies/"><li>Selfies (55)</li></a>
						<a href="https://dirtyangels.co.uk/categories/tall/"><li>Tall (24)</li></a>
						<a href="https://dirtyangels.co.uk/categories/petite/"><li>Petite (37)</li></a>
						<a href="https://dirtyangels.co.uk/categories/curvy/"><li>Curvy (45)</li></a>
						<a href="https://dirtyangels.co.uk/categories/skinny/"><li>Skinny (35)</li></a>
						<a href="https://dirtyangels.co.uk/categories/redhead/"><li>Redhead (4)</li></a>
						<a href="https://dirtyangels.co.uk/categories/elite/"><li>Elite (15)</li></a>
						<a href="https://dirtyangels.co.uk/categories/bisexual-for-couples/"><li>Bisexual for Couples (57)</li></a>
						<a href="https://dirtyangels.co.uk/categories/schoolgirls/"><li>Schoolgirls (4)</li></a>
						<a href="https://dirtyangels.co.uk/categories/blonde/"><li>Blonde (61)</li></a>
						<a href="https://dirtyangels.co.uk/categories/brunette/"><li>Brunette (102)</li></a>
						<a href="https://dirtyangels.co.uk/categories/video-gallery/"><li>Video Gallery (166)</li></a>
						<a href="https://dirtyangels.co.uk/categories/credit-card/"><li>Credit Card (185)</li></a>
						<a href="https://dirtyangels.co.uk/categories/tongue-piercing/"><li>Tongue Piercing (1)</li></a>
						<a href="https://dirtyangels.co.uk/categories/athletic/"><li>Athletic (12)</li></a>
						<a href="https://dirtyangels.co.uk/categories/overnight/"><li>Overnight (184)</li></a>
						<a href="https://dirtyangels.co.uk/categories/adventurous/"><li>Adventurous (162)</li></a>
						<a href="https://dirtyangels.co.uk/categories/interracial-escorts/"><li>Interracial Escorts (12)</li></a>
						<a href="https://dirtyangels.co.uk/categories/mature-milf/"><li>Mature Milf (11)</li></a>
						<a href="https://dirtyangels.co.uk/categories/party-girls/"><li>Party Girls (147)</li></a>
						<a href="https://dirtyangels.co.uk/categories/open-minded/"><li>Open Minded (88)</li></a>
						<a href="https://dirtyangels.co.uk/categories/russian/"><li>Russian (17)</li></a>
						<a href="https://dirtyangels.co.uk/categories/slim/"><li>Slim (53)</li></a>
						<a href="https://dirtyangels.co.uk/categories/fetish-mistress-bdsm/"><li>Fetish Mistress BDSM (16)</li></a>
						<a href="https://dirtyangels.co.uk/categories/fitness/"><li>Fitness (5)</li></a>
						<a href="https://dirtyangels.co.uk/categories/black-ebony/"><li>Black Ebony (1)</li></a>
						<a href="https://dirtyangels.co.uk/categories/cheap-min/"><li>Cheap / 30 min (50)</li></a>
						<a href="https://dirtyangels.co.uk/categories/british-english/"><li>British English (1)</li></a>
						<a href="https://dirtyangels.co.uk/categories/tattooed/"><li>Tattooed (3)</li></a>
						<a href="https://dirtyangels.co.uk/categories/femdom/"><li>Femdom (18)</li></a>
						<a href="https://dirtyangels.co.uk/categories/outcalls-to-private-place/"><li>Outcalls to Private Place (118)</li></a>
						<a href="https://dirtyangels.co.uk/categories/outcall-to-hotels/"><li>Outcall to Hotels (186)</li></a>
						<a href="https://dirtyangels.co.uk/categories/available-morning/"><li>Available Morning 247 (116)</li></a>


					</ul>
			</div>

	  </div>




		<div class="s">

			<div class="boxdrop2">
				<div class="mtext"><p>By Name</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox2">

					<ul>
						<a><li>By Name </li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/AALIYAH/"><li>Earl's Court (25)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/ADELE/"><li>Bayswater (20)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/AMANDA/"><li>Gloucester Road (17)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/AMY/"><li>Paddington (15)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/ANCA/"><li>South Kensington (12)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/ANISE/"><li>Knightsbridge (10)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/ANN/"><li>Baker Street (7)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/MARIE/"><li>Marble Arch (7)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/ARIANNA/"><li>Marylebone (6)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/CARINA/"><li>High Street Kensington (4)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/CATALEYA/"><li>Sloane Square (4)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/CHLOE/"><li>Bond Street (3)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/CLAUDIA/"><li>Fulham Broadway (2)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/EMILY/"><li>Edgware Road (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/EMMA/"><li>West Brompton (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/EVA/"><li>Queensway (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/JASMIN/"><li>Warren Street (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/JESSIKA/"><li>Outcalls Only (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/JORDEN/"><li>Piccadilly Circus W1 (3)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/JULIA/"><li>Angel N1 (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/KAT/"><li>Baker Street W1 (9)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/KATYA/"><li>Bayswater W2 (50)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/KELLY/"><li>Belgrave SW1 (4)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/KITTY/"><li>Chelsea SW10 (6)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/LOLITA/"><li>Chelsea SW10 (6)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/MADELYN/"><li>Earls Court SW5 (12)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/MARIA/"><li>Fulham SW6 (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/MATAHARI/"><li>Gloucester Road SW5 (12)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/MELANIE/"><li>Great Portland Street W1 (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/MICHELLE/"><li>High St Kensington W8 (4)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/MIMI/"><li>Kensington Olympia W14 (3)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/PATRICIA/"><li>Knightsbridge SW1 (13)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/SABRINA/"><li>Lancaster Gate W2 (12)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/SARA/"><li>Marble Arch W1 (8)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/SAVANNA/"><li>Marylebone NW1 (14)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/SONIA/"><li>Mayfair W1 (8)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/TERESA/"><li>Notting Hill Gate W2 (9)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/VANESSA/"><li>Oxford Circus W1 (1)</li></a>
						<a href="https://dirtyangels.co.uk/all-escorts/VICTORIA/"><li>Queensway W2 (16)</li></a>												
						
					</ul>

			</div>

	  </div>


	  <div class="t">

			<div class="boxdrop3">
				<div class="mtext"><p>By Price</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox3">

					<ul>
						<a><li>By Price</li></a>
						<a href="https://dirtyangels.co.uk/by-price/150-2/"><li>£150 (36)</li></a>
						<a href="https://dirtyangels.co.uk/by-price/200-2/"><li>£200 (67)</li></a>
						<a href="https://dirtyangels.co.uk/by-price/250-2/"><li>£250 (24)</li></a>
						<a href="https://dirtyangels.co.uk/by-price/300-2/"><li>£300 + (36)</li></a>
						<a href="https://dirtyangels.co.uk/by-price/45-min/"><li>45 min (32)</li></a>
						<a href="https://dirtyangels.co.uk/by-price/cheap-min/"><li>Cheap / 30 min (50)</li></a>
						
					</ul>

			</div>

	  </div>


		<div class="fo">

			<div class="boxdrop4">
				<div class="mtext"><p>By Location</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox4">

					<ul>
						<a><li>By Location</li></a>
						<a href="https://dirtyangels.co.uk/location/baker-street-w1/"><li>Baker Street W1 (13)</li></a>
						<a href="https://dirtyangels.co.uk/location/bayswater-w2/"><li>Bayswater W2 (45)</li></a>
						<a href="https://dirtyangels.co.uk/location/belgrave-sw1/"><li>Belgrave SW1 (3)</li></a>
						<a href="https://dirtyangels.co.uk/location/bond-street-w1/"><li>Bond Street W1 (19)</li></a>
						<a href="https://dirtyangels.co.uk/location/chelsea-sw10/"><li>Chelsea SW10 (1)</li></a>
						<a href="https://dirtyangels.co.uk/location/city-e1/"><li>City E1 (1)</li></a>
						<a href="https://dirtyangels.co.uk/location/covent-garden-wc2/"><li>Covent Garden WC2 (1)</li></a>
						<a href="https://dirtyangels.co.uk/location/earls-court-sw5/"><li>Earls Court SW5 (35)</li></a>
						<a href="https://dirtyangels.co.uk/location/edgware-road-w2/"><li>Edgware Road W2 (37)</li></a>
						<a href="https://dirtyangels.co.uk/location/gloucester-road-sw5/"><li>Gloucester Road SW5 (44)</li></a>
						<a href="https://dirtyangels.co.uk/location/great-portland-street-w1/"><li>Great Portland Street W1 (2)</li></a>
						<a href="https://dirtyangels.co.uk/location/green-park-w1/"><li>Green Park W1 (4)</li></a>
						<a href="https://dirtyangels.co.uk/location/high-st-kensington-w8/"><li>High St Kensington W8 (21)</li></a>
						<a href="https://dirtyangels.co.uk/location/hyde-park-corner-sw1/"><li>Hyde Park Corner SW1 (4)</li></a>
						<a href="https://dirtyangels.co.uk/location/kensington-olympia-w14/"><li>Kensington Olympia W14 (1)</li></a>
						<a href="https://dirtyangels.co.uk/location/knightsbridge-sw1/"><li>Knightsbridge SW1 (20)</li></a>
						<a href="https://dirtyangels.co.uk/location/lancaster-gate-w2/"><li>Lancaster Gate W2 (36)</li></a>
						<a href="https://dirtyangels.co.uk/location/marble-arch-w1/"><li>Marble Arch W1 (17)</li></a>
						<a href="https://dirtyangels.co.uk/location/marylebone-nw1/"><li>Marylebone NW1 (18)</li></a>
						<a href="https://dirtyangels.co.uk/location/mayfair-w1/"><li>Mayfair W1 (16)</li></a>
						<a href="https://dirtyangels.co.uk/location/outcalls-only/"><li>Outcalls Only (4)</li></a>
						<a href="https://dirtyangels.co.uk/location/oxford-circus-w1/"><li>Oxford Circus W1 (4)</li></a>
						<a href="https://dirtyangels.co.uk/location/paddington-w2/"><li>Paddington W2 (38)</li></a>
						<a href="https://dirtyangels.co.uk/location/queensway-w2/"><li>Queensway W2 (35)</li></a>
						<a href="https://dirtyangels.co.uk/location/royal-oak-w2/"><li>Royal Oak W2 (8)</li></a>
						<a href="https://dirtyangels.co.uk/location/sloane-avenue-sw3/"><li>Sloane Avenue SW3 (3)</li></a>
						<a href="https://dirtyangels.co.uk/location/sloane-square-sw1/"><li>Sloane Square SW1 (10)</li></a>


						<a href="https://dirtyangels.co.uk/location/south-kensington-sw5/"><li>South Kensington SW5 (33)</li></a>
						<a href="https://dirtyangels.co.uk/location/st.Jame's-park-sw1)/"><li>St.Jame's Park SW1 (2)</li></a>
						<a href="https://dirtyangels.co.uk/location/victoria-sw1/"><li>Victoria SW1 (6)</li></a>
						<a href="https://dirtyangels.co.uk/location/visiting-hotel/"><li>Visiting Hotel (106)</li></a>
						<a href="https://dirtyangels.co.uk/location/warren-street-w1/"><li>Warren Street W1 (1)</li></a>
						<a href="https://dirtyangels.co.uk/location/west-kensington-w14/"><li>West Kensington W14 (2)</li></a>
						<a href="https://dirtyangels.co.uk/location/westminster/"><li>Westminster (4)</li></a>
						
					</ul>

			</div>

	    </div>


	    <!-- ----------------------------------------------------- -->




	    		<div class="u">

			<div class="boxdrop5">
				<div class="mtext"><p>By Service</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox5">

					<ul>
						<a><li>By Service</li></a>
						<a href="https://dirtyangels.co.uk/by-service/adult-baby-minding/"><li>Adult Baby Minding</li></a>
						<a href="https://dirtyangels.co.uk/by-service/anal-play/"><li>Anal Play</li></a>
						<a href="https://dirtyangels.co.uk/by-service/bdsm/"><li>BDSM</li></a>
						<a href="https://dirtyangels.co.uk/by-service/bdsm-giving/"><li>BDSM Giving</li></a>
						<a href="https://dirtyangels.co.uk/by-service/belly-dance/"><li>Belly dance</li></a>
						<a href="https://dirtyangels.co.uk/by-service/bisexual-for-couples/"><li>Bisexual for Couples</li></a>
						<a href="https://dirtyangels.co.uk/by-service/bj/"><li>BJ</li></a>
						<a href="https://dirtyangels.co.uk/by-service/blindfold/"><li>Blindfold</li></a>
						<a href="https://dirtyangels.co.uk/by-service/chastity/"><li>Chastity</li></a>
						<a href="https://dirtyangels.co.uk/by-service/body-to-body-massage/"><li>Body to Body Massage</li></a>
						<a href="https://dirtyangels.co.uk/by-service/body-worship-receiving/"><li>Body Worship Receiving</li></a>
						<a href="https://dirtyangels.co.uk/by-service/butt-plugs/"><li>Butt Plugs</li></a>
						<a href="https://dirtyangels.co.uk/by-service/candle-wax/"><li>Candle Wax</li></a>
						<a href="https://dirtyangels.co.uk/by-service/caning/"><li>Caning</li></a>
						<a href="https://dirtyangels.co.uk/by-service/cbt-balls-torture/"><li>CBT Balls Torture</li></a>
						<a href="https://dirtyangels.co.uk/by-service/cif-facial/"><li>CIF Facial</li></a>
						<a href="https://dirtyangels.co.uk/by-service/cim/"><li>CIM</li></a>
						<a href="https://dirtyangels.co.uk/by-service/clit-toys/"><li>Clit Toys</li></a>
						<a href="https://dirtyangels.co.uk/by-service/cob/"><li>COB</li></a>

					</ul>
			</div>

	  </div>




		<div class="v">

			<div class="boxdrop6">
				<div class="mtext"><p>International</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox6">

					<ul>
						<a><li>International</li></a>
						<a href="https://dirtyangels.co.uk/international/all-international-escorts/"><li>ALL INTERNATIONAL ESCORTS (11)</li></a>
						<a href="https://dirtyangels.co.uk/international/budapest-hungary/"><li>Budapest Hungary (1)</li></a>
						<a href="https://dirtyangels.co.uk/international/cyprus/"><li>Cyprus (1)</li></a>
						<a href="https://dirtyangels.co.uk/international/dubai-uae-escorts/"><li>Dubai UAE Escorts (1)</li></a>
						<a href="https://dirtyangels.co.uk/international/monte-carlo-monaco/"><li>Monte Carlo Monaco (1)</li></a>
						<a href="https://dirtyangels.co.uk/international/moscow-russia/"><li>Moscow Russia (1)</li></a>
						<a href="https://dirtyangels.co.uk/international/paris-france/"><li>Paris France (4)</li></a>
						<a href="https://dirtyangels.co.uk/international/prague-czech-republic/"><li>Prague Czech Republic (1)</li></a>
						<a href="https://dirtyangels.co.uk/international/rome-italy/"><li>Rome Italy (1)</li></a>
						<a href="https://dirtyangels.co.uk/international/zurich-switzerland/"><li>Zurich Switzerland (1)</li></a>												
						
					</ul>

			</div>

	  </div>


	  <div class="w">

			<div class="boxdrop7">
				<div class="mtext"><p>By Size</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox7">

					<ul>
						<a><li>By Size</li></a>
						<a href="https://dirtyangels.co.uk/by-size/4-2/"><li>4</li></a>
						<a href="https://dirtyangels.co.uk/by-size/6-2/"><li>6</li></a>
						<a href="https://dirtyangels.co.uk/by-size/7-2/"><li>7</li></a>
						<a href="https://dirtyangels.co.uk/by-size/8-2/"><li>8</li></a>
						<a href="https://dirtyangels.co.uk/by-size/9-2/"><li>9</li></a>
						<a href="https://dirtyangels.co.uk/by-size/10-2/"><li>10</li></a>
						<a href="https://dirtyangels.co.uk/by-size/12-2/"><li>12</li></a>
					</ul>

			</div>

	  </div>


		<div class="x">

			<div class="boxdrop8">
				<div class="mtext"><p>By Nationality</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
			</div>

			<div class="mybox8">

					<ul>
						<a><li>By Nationality</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/arabic/"><li>Arabic</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/austrian/"><li>Austrian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/brazilian/"><li>Brazilian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/czech/"><li>Czech</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/eastern-european/"><li>Eastern European</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/european/"><li>European</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/french/"><li>French</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/greek/"><li>Greek</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/hungarian/"><li>Hungarian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/italian/"><li>Italian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/moldavian/"><li>Moldavian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/polish/"><li>Polish</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/romanian/"><li>Romanian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/russian/"><li>Russian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/slovakian/"><li>Slovakian</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/spanish/"><li>Spanish</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/turkish/"><li>Alexis</li></a>
						<a href="https://dirtyangels.co.uk/by-nationality/ukrainian/"><li>Ukrainian</li></a>
						
					</ul>

			</div>

	    </div>
	    




</div>
		

	

	

	

        
	


	<?php 

		return ob_get_clean();
	}


	add_action('vc_before_init','vc_for_search');

    function vc_for_search(){

    	vc_map([
		'name' 				=> 'Dropdown Search',
		'base'				=> 'ddsearch',
		'category'			=> 'Escort-dropdown-search',
		'icon'				=> get_template_directory_uri().'/images/food.png',
		
	]);

    }

	







?>



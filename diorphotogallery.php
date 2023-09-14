

<?php  

  add_shortcode('diorgalleryp','diorgalleryp');
  function diorgalleryp($one, $two){ 

    $dior_gallery = shortcode_atts([
     
      'photo'               => '',
      'g-all'               => '',
      'newest-bigtosmall-smalltobig-talltoshort-shorttotall-youngest-mature-lowtohigh-hightolow-ByNameA-Z'              => '',
      'linkk'               => '',
      'linkkk'               => '',
      'strn'               => '',
      'location'            => '',
      'name'                => '',
      'price'               => '',
      'pricetxt'           => ''
       

      

      
      

    ], $one);

      ob_start();
    ?>









<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  font-family: Arial;
}

.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  width:103%;
  margin: 10px 0px;
}

.column {
    float: left;
    width: 205px !important;
    height: 361px !important;
    display: none;
    margin-bottom: 30px;
    margin-left: 24px;
}

.ps .photo {
  float: left;
  width: 190px !important;
  height: 278px !important;
  margin-bottom: 5px;
  background-color: #1e1616 !important;
  border-radius: 5px !important;
}

.ps .photo img{
  width: 100% !important;
  height: 278px !important;
  background-position: center center;
  position: relative;
  overflow: hidden;
  border-radius: 5px !important;
}

.ps .content {
  background-color: #ffffff00 !important;
  float: left;
  width: 190px !important;
  height: 366px !important;
}

.show {
  display: block;
}


#myBtnContainer{
    text-align: left;
    margin: auto;
    display: block;
    width: 819px !important;
    margin-bottom: 60px;
  }


.column .content h4 {
  font-weight: 900;
  text-align: center;
  font-size: 15px;
  letter-spacing: 1px;
}

.column .content h4.h3nd {
    margin-top: -16px;
}

.column .content h5 {
  margin-top: -16px;
  font-weight: 900;
  text-align: center;
  font-size: 15px;
  letter-spacing: 1px;
}


</style>




<style>
    
        
        .sort{
          width: 22.8%;
          float: left;
          padding-left: -67px !important;
          margin-left: -57px;
          margin-top: -16px;
          height: 30px;
          margin-bottom: 17px;
        }
        
        
        .sort .boxdrop2 .fai{
          float: left !important;
          width: 2%;
          text-align: right;
          margin-left: 156px;
          margin-bottom: 0;
          margin-top: -22px;
        }

        .sort .boxdrop2 .mtext{
          float: left;
          width: 40%;
          text-align: right;
          margin-top: -3px;
          margin-left: 10px;
        }

        .sort .mybox2 {

            z-index: 1 !important;
            position: absolute;
            border: none;
            font: 14px sans-serif;
            width: 20%;
            height: 280px;
            overflow-y: hidden;
            overflow-x: hidden;
            display: none;
            border-top: 2px solid #7a7ef7;
            border-left: 2px solid #7a7ef7;
            border-bottom: 2px solid #7a7ef7;
            border-right: 2px solid #7a7ef7;
            border-radius: 5px;
            border-color: #ad4d0a;
            margin-top: 2px;
          }

          .butt{
                line-height: 30px;
             }

        .sort .boxdrop2{

          width: 100%;
          height: 31px;
          background-color: #141414;
          text-align: center;
          margin-bottom: 0 !important;
        }

        .sort .boxdrop2 p{
          color: #fff;
          padding-top: 10px;
          font-size: 12px !important;
          margin-bottom: 0;
        }

        .chel{
          width: 190px;
        }

        #list {
          margin-left: -80px;
          margin-top: 22px;
        }

        .m-border .ps {
            float: left !important;
            width: 190px !important;
            height: 383px !important;
            margin-top: -20px !important;
            margin-bottom: 26px !important;
            text-align: center !important;
            margin-right: 8px !important;
        }

        .m-border .ps .column {
            width: 190px !important;
            margin-left: 0 !important; 
        }

        .m-border .ps a h4{
            margin-bottom: 0 !important;
            width: 100% !important;
            font-size: 16px !important;
            color: #C35E1C !important;
        }


        .boxs .row {
            width: 110% !important;
            float: left;
            margin-top: 60px;
            margin-left: -44px !important;
        }

        #myBtnContainer button {
            background-color: #005aff00 !important;
            color: #fff !important;
            border-color: none !important;
            border: none;
        }   

        .ps .content a h4{
            margin-top: -26px !important;
            color: #ffffff !important;
            margin-left: 2px !important;
        }

        .ps .content h4{
            color: #ababab !important;
            margin-top: -2px !important;
        }



        @media all and (max-width: 480px){

              .m-border {
                width: 71.5% !important;
                margin-left: 177px !important;
                margin-right: 7px !important;
              }
              
              .sort {
                margin-left: 70px !important;
                margin-top: -30px !important;
                margin-bottom: -10px !important;
              } 

              .boxs .ps .column {
                width: 130% !important;
                margin-left: -4px !important;
                   }
              .ps .content {
                width: 100% !important;
                   }

              .ps .photo {
                width: 100% !important;
                   }

              .sort .boxdrop2 {
                width: 158% !important;
                height: 29px !important;
                margin-bottom: 0 !important;
              }

              .sort .boxdrop2 .mtext {
                margin-top: -6px !important;
                margin-left: 10px !important;
              }

              .sort .boxdrop2 .fai {
                width: 33% !important;
                margin-left: 128px !important;
                margin-top: -20px !important;
              }

              .m-border .ps a h4 {
                  width: 125% !important;
              }

              .m-border .ps .content a h4 {
                  margin-left: 6px !important;
                  width: 94% !important;
                }

              .boxs .row {
                width: 83% !important;
                margin-top: 40px !important;
                margin-left: 50px !important;
                padding-left: 19px !important;
              }

              .sort .mybox2 {
                  width: 31% !important;
                  background-color: #000000 !important;
                }

                .sort .boxdrop2 p {
                    color: #e76000 !important;
                }

              .boxs .ps {
                  float: left !important;
                  width: 155px !important;
                  margin-left: 10px !important;
                  margin-right: 51px !important;
                  margin-top: 15px !important;
                  height: 342px !important;
              }

              .boxs .ps:nth-child(1) {
                  margin-top: -20px !important;
              }

              .boxs .ps:nth-child(2) {
                  margin-top: -20px !important;
              }



          }


            @media all and (max-width: 414px){

                  .boxs .row {
                        width: 84% !important;
                        margin-left: 35px !important;
                  }

                  .boxs .row .ps {
                        margin-right: 35px !important;
                        height: 342px !important;
                    }

                  .boxs .ps .column {
                        width: 118% !important;
                    }

                  .m-border .ps .content a h4 {
                        margin-left: 3px !important;
                        width: 97% !important;
                    }

                  .m-border .ps a h4 {
                      width: 113% !important;
                  }

            }

            @media all and (max-width: 413px){

                  .ps a h4 {
                      width: 114% !important;
                  }
            }
        



        @media all and (max-width: 384px){

              .m-border {
                width: 71.5% !important;
                margin-left: 177px !important;
                margin-right: 7px !important;
              }
              
              .sort {
                width: 20.8% !important;
                float: left !important;
                margin-left: 39px !important;
                margin-top: 11px !important;
                height: 25px !important;
                margin-bottom: 1px !important;
              }

              .sort .boxdrop2 {
                width: 158% !important;
                height: 29px !important;
                margin-bottom: 0 !important;
              }

              .sort .boxdrop2 .mtext {
                margin-top: -6px !important;
                margin-left: 10px !important;
              }

              .sort .boxdrop2 .fai {
                width: 33% !important;
                margin-left: 128px !important;
                margin-top: -20px !important;
              }

              .m-border .ps a h4 {
                  width: 108% !important;
                  margin-left: 0 !important;
              }

              .boxs .row {
                width: 89% !important;
                margin-top: 40px !important;
                margin-left: 33px !important;
              }

              .boxs .ps:nth-child(1) {
                float: left !important;
                width: 155px !important;
                margin-left: 9px !important;
                margin-right: 16px !important;
                height: auto !important;
              }

              .boxs .ps:nth-child(2) {
                height: auto !important;
                float: left !important;
                width: 155px !important;
              }

              .ps .show{
                height: 312px !important;
                margin-bottom: 0 !important;
              }

              .ps .content {
                height: 310px !important;
              }

              .sort .mybox2 {
                  width: 31% !important;
                  background-color: #000000 !important;
                }

                .sort .boxdrop2 p {
                    color: #e76000 !important;
                }

              .boxs .ps .column {
                  width: 175px !important;
                  margin-left: -4px !important;
              }

              .ps .content {
                  width: 175px !important;
              }

              .ps .photo {
                  width: 175px !important;
              }

              .boxs .row .ps {
                  float: left !important;
                  width: 155px !important;
                  margin-left: 9px !important;
                  margin-right: 16px !important;
                  height: auto !important;
                  margin-top: 21px !important;
              }

          

              .boxs .row .ps {
                    margin-top: 0px !important;
                }

              .boxs .row .ps:nth-child(1) {
                  margin-top: -34px !important;
              }

              .boxs .row .ps:nth-child(2) {
                  margin-top: -34px !important;
              }

              .ps a h4 {
                  width: 108% !important;
              }


          }


           @media all and (max-width: 375px){

              .boxs .row .ps {
                  width: 168px !important;
                  margin-right: 0px !important;
                  margin-left: 2.3% !important;
              }

              .boxs .ps .column {
                  width: 168px !important;
              }

              .ps .content {
                  width: 168px !important;
              }

              .ps .photo {
                  width: 168px !important;
              }

              .m-border .ps a h4 {
                  width: 97% !important;
              }
              
          }



           @media all and (max-width: 360px){

              .boxs .ps .column {
                width: 164px !important;
                }

              .boxs .row .ps {
                    width: 160px !important;
                    margin-right: 0px !important;
                    margin-left: 2.1% !important;
                }

              .ps .photo {
                width: 165px !important;
                }

              .m-border .ps a h4 {
                  width: 99% !important;
              }

           }


          @media all and (max-width: 320px){


              .admi-esc {
                  width: 91% !important;
              }

              .now {
              padding-top: 155px !important;
              width: 294px !important;
              margin: auto !important;
              margin-left: 41px !important;
              }


              .now h4 {
                    margin-left: 6px !important;
                }

                .boxdrop2 .fai p i {
                    margin-left: -14px;
                }

                .boxs .row {
                    width: 100% !important;
                }

                .boxs .ps {
                  
                }

                .boxs .row .ps {
                    width: 138px !important;
                    margin-right: 0px !important;
                    margin-left: 2.5% !important;
                    float: left !important;
                }

                .boxs .ps .column {
                    width: 145px !important;
                }

                .ps .content {
                    width: 142px !important;
                }

                .ps .photo {
                    width: 142px !important;
                }

                .m-border .deluxe-dw .subsc-up {
                    width: 69.8% !important;
                    padding-left: 7px;
                    padding-right: 7px;
                }

                .m-border .member.vc_btn3-center {
                    width: 55.5% !important;
                }

                .b-links a:nth-child(12) {
                    left: 120px !important;
                }

                .b-links a:nth-child(13) {
                    left: 120px !important;
                }

                .b-links a:nth-child(14) {
                    left: 120px !important;
                }

                .b-links a:nth-child(15) {
                    left: 120px !important;
                }

                .b-links a:nth-child(16) {
                    left: 120px !important;
                }

                .v1 {
                    margin-left: 89px !important;
                }

                .dm1 {
                    margin-left: 70px !important;
                }

                .m-border .cherry-v {
                    margin-left: 41px !important;
                }

                .m-border .ps a h4 {
                    width: 100% !important;
                }



            }







      </style>




   


    <div class="sort">

      <div class="boxdrop2">
        <div class="mtext"><p>SORT Girls</p></div><div class="fai"><p><i class="fa fa-caret-down" aria-hidden="true"></i></p></div>
      </div>

      <div class="mybox2">

          <div id="myBtnContainer">
            <span class="butt active" onclick="filterSelection('all')"> SORT Girls</span><br>
            <span class="butt" onclick="filterSelection('newest')"> Newest First</span><br>
            <span class="butt" onclick="filterSelection('bigtosmall')"> Bust (Big to Small)</span><br>
            <span class="butt" onclick="filterSelection('smalltobig')"> Bust (Small to Big)</span><br>
            <span class="butt" onclick="filterSelection('talltoshort')"> Height (Tall to Short)</span><br>
            <span class="butt" onclick="filterSelection('shorttotall')"> Height (Short to Tall)</span><br>
            <span class="butt" onclick="filterSelection('youngest-first')"> Youngest First</span><br>
            <span class="butt" onclick="filterSelection('mature-first')"> Mature First</span><br>
            <button class="butt" onclick="sortPrice()"> Price (Low to High) </button>
            
            
            
          </div>
      </div>

    </div>







<!-- Portfolio Gallery Grid -->
<div class="row" id="list">


          <?php 

            $mygall=vc_param_group_parse_atts($dior_gallery['g-all']);



            foreach($mygall as $mga) :

          ?>


<div class="ps">
  <a href="<?php echo $mga['linkk']; ?>"> <h4><?php echo $mga['name']; ?></h4> </a>
  <div class="column <?php echo $mga['newest-bigtosmall-smalltobig-talltoshort-shorttotall-youngest-mature-lowtohigh']; ?> listing-item show" data-price="<?php echo $mga['price']; ?>">
    <div class="content">
        <div class="photo">
          <a href="<?php echo $mga['linkk']; ?>" />
            <img src="<?php echo wp_get_attachment_image_url($mga['photo'], 'full'); ?>" alt="Car" style="width:100%">
          </a>
        </div>
      
     
      <h4 class="h2nd"><?php echo $mga['strn']; ?></h4>
      <a href="<?php echo $mga['linkkk']; ?>"> <h4><?php echo $mga['location']; ?></h4> </a>
      <h4 class="h3nd"><?php echo $mga['price']; ?></h4>


    </div>
  </div>
</div>



            <?php   

                endforeach;

            ?>
  

<!-- END MAIN -->
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

var divList = $(".listing-item");

function sortPrice(){
divList.sort(function(a, b){ return $(a).data("price")-$(b).data("price")});    
$("#list").html(divList);}



</script>






<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>





<?php 

    return ob_get_clean();
  }


  add_action('vc_before_init','vc_for_diorgalleryp');

    function vc_for_diorgalleryp(){

      vc_map([
    'name'        => 'Dior Photo Gallery',
    'base'        => 'diorgalleryp',
    'category'      => 'Dior-Gallery',
    'icon'        => get_template_directory_uri().'/images/food.png',

    'params'      => [



      [     
      
      'param_name'  => 'g-all',
      'type'      => 'param_group',
      'heading'   => 'Add gallery portfolio items',
      'params'    => [




                        
            [   

              'param_name'    => 'linkk',
              'type'      => 'textfield',
              'heading'   => 'Put profile link'

            ],

            [   

              'param_name'    => 'linkkk',
              'type'      => 'textfield',
              'heading'   => 'Put gallery link'

            ],


            [

              'param_name'    => 'photo',
              'type'      => 'attach_image',
              'heading'   => 'Add Image'

            ],

            [

              'param_name'    => 'newest-bigtosmall-smalltobig-talltoshort-shorttotall-youngest-mature-lowtohigh',
              'type'      => 'textfield',
              'heading'   => 'Put text newest | bigtosmall | smalltobig | talltoshort | shorttotall | youngest-first | mature-first | lowtohigh'

            ],

            [

              'param_name'    => 'price',
              'type'      => 'textfield',
              'heading'   => 'Put price'

            ],

            [

              'param_name'    => 'name',
              'type'      => 'textfield',
              'heading'   => 'Put name'

            ],

            [

              'param_name'    => 'location',
              'type'      => 'textfield',
              'heading'   => 'Put location'

            ],

            [

              'param_name'    => 'pricetxt',
              'type'      => 'textfield',
              'heading'   => 'Put price with text'

            ],

            [

              'param_name'    => 'strn',
              'type'      => 'textfield',
              'heading'   => 'Put street'

            ]


          ] 

        ]
            

      ]

      

  ]);

    }

  







?>  

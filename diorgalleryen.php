

<?php  

  add_shortcode('diorgallerypen','diorgallerypen');
  function diorgallerypen($one, $two){ 

    $dior_galleryen = shortcode_atts([

      // 'title'            => '',    
      // 'category1'          => '',    
      // 'category2'          => '',    
      // 'category3'          => '',    
      // 'prtitle'          => '',      
      // 'pritem'         => '',
      // 'show'           => '',      
      // 'less'           => '',      
      // 'g-all-cat'          => '',      
      'photo'               => '',
      'g-all'               => '',
      'salf-avai'           => '',
      // 'prtitle1'         => '',      
      // 'pritem1'          => '',
      // 'g-all-cat1'       => '',      
      // 'photo1'         => '',
      // 'g-all-less'       => '',
      'linkk'               => '',
      'location'            => '',
      'name'                => '',
      'available'           => '',
      'age'                 => '',
      'age-n'               => ''
            // 'linkkl'         => ''
      

      
      

    ], $one);

      ob_start();
    ?>









<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  width:100%;
  margin: 10px 0px;
}


/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 217px;
  height:457px;
  display: none;
  margin-bottom: 30px; /* Hide all elements by default */
  margin-left: 24px;
}


.photo {
    float: left;
  width: 217px;
  height:325px;
  margin-bottom: 5px;
}

.photo img{
  width: 217px;
  height:325px;
  background-position: center center;
  position: relative;
  overflow: hidden;
}

/* Content */
.content {
  background-color: white;
  float: left;
  width: 217px;
  height:440px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}


#myBtnContainer{
    text-align: center;
    margin: auto;
    display: block;
    width: 577px;
    margin-bottom: 60px;
  }


.column .content h4 {
  font-weight: 900;
  text-align: center;
  font-size: 15px;
  letter-spacing: 1px;
}

.column .content h4.h2nd {
    margin-top: -16px;
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




<div id="myBtnContainer" class="enb">
  <button class="btn active" onclick="filterSelection('all')"> ALL</button>
  <button class="btn" onclick="filterSelection('salfies')"> BY SALFIES</button>
  <button class="btn" onclick="filterSelection('available')"> BY AVAILABLE</button>
  <button class="btn" onclick="sortPrice()">BY AGE</button>
</div>




<!-- Portfolio Gallery Grid -->
<div class="row enrow" id="list">


          <?php 

            $mygall=vc_param_group_parse_atts($dior_galleryen['g-all']);



            foreach($mygall as $mga) :

          ?>


  <div class="column <?php echo $mga['salf-avai']; ?> listing-item en" data-price="<?php echo $mga['age-n']; ?>">
    <div class="content">
        <div class="photo">
          <a href="<?php echo $mga['linkk']; ?>" />
            <img src="<?php echo wp_get_attachment_image_url($mga['photo'], 'full'); ?>" alt="Car" style="width:100%">
          </a>
        </div>
      
     <a href="<?php echo $mga['linkk']; ?>"> <h4><?php echo $mga['name']; ?></h4> </a>
      <h4 class="h2nd"><?php echo $mga['location']; ?></h4>
      <h4 class="h3nd"><?php echo $mga['age-n']; ?>&nbsp;<?php echo $mga['age']; ?></h4>
      <h5><?php echo $mga['available']; ?></h5>

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


  add_action('vc_before_init','vc_for_diorgallerypen');

    function vc_for_diorgallerypen(){

      vc_map([
    'name'        => 'Dior Entire Photo Gallery',
    'base'        => 'diorgallerypen',
    'category'      => 'Dior-Entire-Gallery',
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
              'heading'   => 'Put project link'

            ],


            [

              'param_name'    => 'photo',
              'type'      => 'attach_image',
              'heading'   => 'Add Image'

            ],

            [

              'param_name'    => 'salf-avai',
              'type'      => 'textfield',
              'heading'   => 'Put text "salfies" or "available"'

            ],

            [

              'param_name'    => 'name',
              'type'      => 'textfield',
              'heading'   => 'Put name'

            ],

            [

              'param_name'    => 'age-n',
              'type'      => 'textfield',
              'heading'   => 'Put just age'

            ],

            [

              'param_name'    => 'age',
              'type'      => 'textfield',
              'heading'   => 'Put age as text'

            ],

            [

              'param_name'    => 'location',
              'type'      => 'textfield',
              'heading'   => 'Put location'

            ],

            [

              'param_name'    => 'available',
              'type'      => 'textfield',
              'heading'   => 'Put text "available" or "not available"'

            ]


          ] 

        ]
            

      ]

      

  ]);

    }

  



?> 
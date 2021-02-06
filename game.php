<?php
if(isset($_GET['words'])){
    $words = $_GET['words'];
    }
else {
    $words = 15;
}

if(isset($_GET['time'])){
    $time = $_GET['time'];
}
else {
     $time = 15;
}

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>College Game</title>

<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@0;1&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel='stylesheet' id='_s-style-css'  href='main/style.css?ver=5.6' type='text/css' media='all' />
</head>
<body >
<div id="page" class="hfeed site row">
    <div class="col-md-3 col-sm-12" data-aos="fade-right"  data-aos-delay="100" style="margin-top:5%">
        
        <form class="form">
            <h3><span class="text-success">Mode</span>:<span id="id_mode" class="text-danger">Random</span></h3>
            <div class="inputGroup">
                <input id="id_option1" name="radio" checked  type="radio"/>
                <label for="id_option1">Option 1 </label>
            </div>
            <div class="inputGroup">
                <input id="id_option2" name="radio"  type="radio"/>
                <label for="id_option2">Option 2 </label>
            </div>
        </form>
    
        
        <form class="form">
         <h3><span class="text-success">Language</span>:<span id="id_language" class="text-danger">English</span></h3>
            <div class="inputGroup">
                <input id="id_english" name="radio" checked  type="radio"/>
                <label for="id_english">English</label>
            </div>
            <div class="inputGroup">
                <input id="id_deutsche" name="radio"  type="radio"/>
                <label for="id_deutsche">Deutsche</label>
            </div>
        </form>
    </div>
	<div id="content" class="site-content col-md-6 col-sm-12">
            <?php 
                $h = fopen("assets/words.csv", "r");
                $data = fgetcsv($h, 97, ",");
                while (($data = fgetcsv($h, 97, ",")) !== FALSE) 
                {
                    $the_big_array[] = $data[0];
                    $the_big_array1[] = $data[1];
                    $the_big_array2[] = $data[2];
                    $the_big_array3[] = $data[3];
                    $the_big_array4[] = $data[4];
                    $the_big_array5[] = $data[5];
                    $the_big_array6[] = $data[6];
                }
                fclose($h);
                $arrgm="";
                for ($x = 0; $x < 15; $x++) {
                    $randomNumber = rand(0,48);
                    $arrgm .= "'".$the_big_array[$randomNumber]."', ";
                    $randomNumber1 = rand(0,48);
                    $arrgm .= "'".$the_big_array1[$randomNumber1]."', ";
                    $randomNumber2 = rand(0,48);
                    $arrgm .= "'".$the_big_array2[$randomNumber2]."', ";
                    $randomNumber3 = rand(0,48);
                    $arrgm .= "'".$the_big_array3[$randomNumber3]."', ";
                    $randomNumber4 = rand(0,48);
                    $arrgm .= "'".$the_big_array4[$randomNumber4]."', ";
                    $randomNumber5 = rand(0,48);
                    $arrgm .= "'".$the_big_array5[$randomNumber5]."', ";
                    $randomNumber6 = rand(0,48);
                    $arrgm .= "'".$the_big_array6[$randomNumber6]."', ";
                }
            ?>
        <div id="content1bg">
            <div class="post wrap">
              
                <div class="selc_wrd">
                    <div class="slidecontainer">
                    <input type="range" style="display:none;" min="15" max="80" value="20" class="slider" id="myRange"></div>
                    <p id="selectednum"></p>
                </div>
                <div id="cardPile" class="open" style="border:none">
                <div id="userActions">
                    <p>Drag &amp; Drop Image</p>
                    <input type="file" id="fileUpload" />
                </div>
                <img id="uploadImage" src="" style="width:400px; display:none;" alt="uploaded image placeholder" class="ui-draggable ui-draggable-handle ui-selectee" />
                </div>
                <div class="clear"></div>
            </div><!-- #primary -->
        </div>

	</div><!-- #content -->
    <div class="col-md-3 col-sm-12 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200" style="margin-top: 5%; text-align:center; ">
        <div class="btn-group-vertical" id="verticalbutton">
            <div id="ten-countdown">
                <span id="min"></span>
                <span id="sec"></span>
            </div>
            <div class="col">
                <a href="#" id="pauseButton" class="myButton">Pause</a>
            </div>
            <div class="col">
                <a href="#"  class="myButton" id="restart">Restart</a>
            </div>
            <div class="col">
                <a href="#" class="myButton" id="print">Complete</a>
            </div>
            <div class="col">
                <a href="#" class="myButton" id="finish">Quit</a>
            </div>
        </div>
    </div>
</div><!-- #page -->
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="main/js/multidraggable.js"></script>
<script type="text/javascript">
    var words = <?= $words ?>;
  jQuery(document).ready(function($) {
    
        function start()
        {
            jQuery(init);    
            jQuery('#stbtn').hide(500);
            jQuery('#cardPile').show(500);
            jQuery('.selc_wrd').hide(500);
            jQuery('.content_outer').hide(500);
            setTimeout(
            function() {
                reheight();
            }, 800);
        }

        start();

        jQuery('#restart').click(function(){
            location.reload();
        });
        
        jQuery('#print').click(function(e) {
            window.print();
            return false;
        });

        jQuery('#finish').click(function(){
            window.open("index.php");
        });

        
        $('[for=id_option1]').click(function(){
            $('#id_mode').html('Random');
        });
        $('[for=id_option2]').click(function(){
            $('#id_mode').html('User Sentences');
        });
        $('[for=id_english]').click(function(){
            $('#id_language').html('English');
        });
        $('[for=id_deutsche]').click(function(){
            $('#id_language').html('Deustche');
        });
     
    });

    function reheight() {
        var leftheight = jQuery('#cardPile').height();
        }
        function init() {
    jQuery('#cardPile').multidraggable({
        onStopDrag:(event, ui, elements)=>{
            elements.map((el)=>{
                jQuery(el).addClass("isindr");
            });
        }
    });
  
    var selnumb = words;
    var numbers = [<?=$arrgm?>];
    numbers.sort( function() { return Math.random() - .5 } );
    for ( var i=0; i<selnumb; i++ ) {
        jQuery('<div class="clasin'+Math.floor(Math.random() * 12)+' isindr">' + numbers[i] + '</div>').data( 'number', numbers[i] ).attr( 'id', 'card'+numbers[i]+'s'+i ).appendTo( '#cardPile' ).draggable(
        {
            stop: function() {
                },
                containment: '#content',
                stack: '#cardPile div',
                cursor: 'move',
                revert: "invalid",
        } 
        );
    }
    document.querySelectorAll('.isindr').forEach(item => {
        item.addEventListener("touchstart", touchHandler, true);
        item.addEventListener("touchmove", touchHandler, true);
        item.addEventListener("touchend", touchHandler, true);
        item.addEventListener("touchcancel", touchHandler, true); 
        })

    jQuery('#cardPile').droppable({
        drop: function( event, ui ) {
            jQuery(ui.draggable).addClass("isindr");
        }
    });
}
function touchHandler(event)
{
    var touches = event.changedTouches,
        first = touches[0],
        type = "";
         switch(event.type)
    {
        case "touchstart": type = "mousedown"; break;
        case "touchmove":  type="mousemove"; break;        
        case "touchend":   type="mouseup"; break;
        default: return;
    }
    var simulatedEvent = document.createEvent("MouseEvent");
    simulatedEvent.initMouseEvent(type, true, true, window, 1, 
        first.screenX, first.screenY, 
        first.clientX, first.clientY, false, 
        false, false, false, 0/*left*/, null);
    first.target.dispatchEvent(simulatedEvent);
    
    if(type == 'mouseup')
    {
        jQuery('#'+first.target.id).removeClass("isindr");
    }
    event.preventDefault();
}
var Clock = {
  totalSeconds: 0,
  isRunning:0,

  start: function () {
    var self = this;

    this.interval = setInterval(function () {
      self.totalSeconds -= 1;

      jQuery("#min").text(Math.floor(self.totalSeconds / 60 % 60)+':');
      jQuery("#sec").text(parseInt(self.totalSeconds % 60) < 10 ? ("0" + parseInt(self.totalSeconds % 60)) : parseInt(self.totalSeconds % 60));
    }, 1000);
  },

  pause: function () {
    clearInterval(this.interval);
    delete this.interval;
  },

  resume: function () {
    if (!this.interval) this.start();
  }
};
Clock.totalSeconds = <?= $time; ?> * 60;
Clock.start();

jQuery('#pauseButton').click(function () { 
    Clock.isRunning = 1 - Clock.isRunning; 
    if(Clock.isRunning == 1) {
        Clock.pause();
        jQuery(this).html("Resume");
         } 
    else {
        Clock.resume();
        jQuery(this).html("Pause");
    } });
    

(function(){
	var $ = function( elem ){
		if (!(this instanceof $)){
      return new $(elem);
		}
		this.el = document.getElementById( elem );
	};
	window.$ = $;
	$.prototype = {
		onChange : function( callback ){
			this.el.addEventListener('change', callback );
			return this;
		}
	};
})();

var dragdrop = {
	init : function( elem ){
		elem.setAttribute('ondrop', 'dragdrop.drop(event)');
		elem.setAttribute('ondragover', 'dragdrop.drag(event)' );
	},
	drop : function(e){
		e.preventDefault();
		var file = e.dataTransfer.files[0];
		
	},
	drag : function(e){
		e.preventDefault();
	}
};

function runUpload( file ) {
	if( file.type === 'image/png'  || 
			file.type === 'image/jpg'  || 
		  file.type === 'image/jpeg' ||
			file.type === 'image/gif'  ||
			file.type === 'image/bmp'  ){
		var reader = new FileReader(),
				image = new Image();
		reader.readAsDataURL( file );
		reader.onload = function( _file ){
			$('uploadImage').el.src = _file.target.result;
			$('uploadImage').el.style.display = 'block';
            jQuery('#uploadImage').draggable(
        {
            stop: function() {
                },
                containment: '#content',
                stack: '#cardPile div',
                cursor: 'move',
                revert: "invalid",
        } 
        );
            $('userActions').el.style.display='none';
		} 
	} 
}

window.onload = function(){
	if( window.FileReader ){
		dragdrop.init( $('userActions').el );
		$('fileUpload').onChange(function(){ runUpload( this.files[0] ); });
	}else{
		var p   = document.createElement( 'p' ),
        msg = document.createTextNode( 'Sorry, your browser does not support FileReader.' );
		p.className = 'error';
		p.appendChild( msg );
		$('userActions').el.innerHTML = '';
		$('userActions').el.appendChild( p );
	}
};

</script>


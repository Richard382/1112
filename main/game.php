<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>College Game</title>
<link rel='stylesheet' id='_s-style-css'  href='style.css?ver=5.6' type='text/css' media='all' />
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
</head>
<body >
<div id="page" class="hfeed site row">
    <div class="col-md-3" data-aos="fade-right"  data-aos-delay="100" style="margin-top:5%">
        <h3><span class="text-success">Level</span>:<span class="text-danger">Easy</span></h3>
        <h3><span class="text-success">Mode</span>:<span class="text-danger">Random</span></h3>
        <h3><span class="text-success">Language</span>:<span class="text-danger">English</span></h3>
    </div>
	<div id="content" class="site-content col-md-6">
            <?php 
                $h = fopen("http://localhost/words.csv", "r");
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
                <div id="cardPile" class="open" style="border:none"></div>
                <div class="clear"></div>
                <div id="print" style="display:none;">Print</div>		
            </div><!-- #primary -->
        </div>

	</div><!-- #content -->
    <div class="col-md-3 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200" style="margin: auto; text-align:center; ">
        <div class="btn-group-vertical" id="verticalbutton">
            <div id="ten-countdown">
                <span id="min"></span>
                <span id="sec"></span>
            </div>
            <div class="col">
                <a href="#" id="pauseButton" class="myButton">Pause</a>
            </div>
            <div class="col">
                <a href="#"  class="myButton">Restart</a>
            </div>
            <div class="col">
                <a href="#" class="myButton">Complete</a>
            </div>
            <div class="col">
                <a href="#" class="myButton">Quit</a>
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
<script src="js/multidraggable.js"></script>
<script type="text/javascript">
    var words = 30;
  jQuery(document).ready(function($) {
  
            $(init);    
            $('#stbtn').hide(500);
            $('#cardPile').show(500);
            $('.selc_wrd').hide(500);
            $('.content_outer').hide(500);
            setTimeout(
            function() {
                reheight();
            }, 800);
        $('#print').click(function(e) {
            window.print();
            return false;
        });
    });

    function reheight() {
        var leftheight = $('#cardPile').height();
        }
        function init() {
    $('#cardPile').multidraggable({
        onStopDrag:(event, ui, elements)=>{
            elements.map((el)=>{
                $(el).addClass("isindr");
            });
        }
    });
  
    var selnumb = words;
    var numbers = [<?=$arrgm?>];
    numbers.sort( function() { return Math.random() - .5 } );
    for ( var i=0; i<selnumb; i++ ) {
        $('<div class="clasin'+Math.floor(Math.random() * 12)+' isindr">' + numbers[i] + '</div>').data( 'number', numbers[i] ).attr( 'id', 'card'+numbers[i]+'s'+i ).appendTo( '#cardPile' ).draggable(
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

    $('#cardPile').droppable({
        drop: function( event, ui ) {
            $(ui.draggable).addClass("isindr");
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
        $('#'+first.target.id).removeClass("isindr");
    }
    event.preventDefault();
}
var Clock = {
  totalSeconds: 0,

  start: function () {
    var self = this;

    this.interval = setInterval(function () {
      self.totalSeconds -= 1;
        if(self.totalSeconds < 0) 
        {
            clearInterval(this.interval);
            console.log(self.totalSeconds);
            return;
        }
      $("#min").text(Math.floor(self.totalSeconds / 60 % 60)+':');
      $("#sec").text(parseInt(self.totalSeconds % 60) < 10 ? ("0" + parseInt(self.totalSeconds % 60)) : parseInt(self.totalSeconds % 60));
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
Clock.totalSeconds = 1000;
Clock.start();

$('#pauseButton').click(function () { Clock.pause(); });
$('#resumeButton').click(function () { Clock.resume(); });

</script>


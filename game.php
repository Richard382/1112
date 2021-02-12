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

$s = fopen("assets/sentences.csv", "r");
$array_title = array();
$array_sentence = array();
$sentences = fgetcsv($s, 97, ",");
while (($sentences = fgetcsv($s, 97, ",")) !== FALSE) 
{
    array_push($array_title, $sentences[0]);
    array_push($array_sentence, $sentences[1]);
}
fclose($s);

$h = fopen("assets/english.csv", "r");
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
$arrgmEng="";
for ($x = 0; $x < 15; $x++) {
    $randomNumber = rand(0,48);
    $arrgmEng .= "'".$the_big_array[$randomNumber]."', ";
    $randomNumber1 = rand(0,48);
    $arrgmEng .= "'".$the_big_array1[$randomNumber1]."', ";
    $randomNumber2 = rand(0,48);
    $arrgmEng .= "'".$the_big_array2[$randomNumber2]."', ";
    $randomNumber3 = rand(0,48);
    $arrgmEng .= "'".$the_big_array3[$randomNumber3]."', ";
    $randomNumber4 = rand(0,48);
    $arrgmEng .= "'".$the_big_array4[$randomNumber4]."', ";
    $randomNumber5 = rand(0,48);
    $arrgmEng .= "'".$the_big_array5[$randomNumber5]."', ";
    $randomNumber6 = rand(0,48);
    $arrgmEng .= "'".$the_big_array6[$randomNumber6]."', ";
}

$h = fopen("assets/deutsch.csv", "r");
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
$arrgmDeu="";
for ($x = 0; $x < 15; $x++) {
    $randomNumber = rand(0,48);
    $arrgmDeu .= "'".$the_big_array[$randomNumber]."', ";
    $randomNumber1 = rand(0,48);
    $arrgmDeu .= "'".$the_big_array1[$randomNumber1]."', ";
    $randomNumber2 = rand(0,48);
    $arrgmDeu .= "'".$the_big_array2[$randomNumber2]."', ";
    $randomNumber3 = rand(0,48);
    $arrgmDeu .= "'".$the_big_array3[$randomNumber3]."', ";
    $randomNumber4 = rand(0,48);
    $arrgmDeu .= "'".$the_big_array4[$randomNumber4]."', ";
    $randomNumber5 = rand(0,48);
    $arrgmDeu .= "'".$the_big_array5[$randomNumber5]."', ";
    $randomNumber6 = rand(0,48);
    $arrgmDeu .= "'".$the_big_array6[$randomNumber6]."', ";
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
<div id="page" class="hfeed site row" style="z-index:2;">
    <div class="col-md-3 col-sm-12" data-aos="fade-right"  data-aos-delay="100" style="margin-top:5%">
        
        <form class="form">
         <h5><span class="text-success">Language: </span><span id="id_language" class="text-danger">English</span></h5>
            <div class="inputGroup">
                <input id="id_english" name="radio_language" value="eng" checked  type="radio"/>
                <label for="id_english" class="label_option">English</label>
            </div>
            <div class="inputGroup">
                <input id="id_deutsch" name="radio_language" value="deu" type="radio"/>
                <label for="id_deutsch" class="label_option">Deutsch</label>
            </div>
        </form>

        <form class="form">
            <h5><span class="text-success">Mode: </span><span id="id_mode" class="text-danger">Random</span></h5>
            <div class="inputGroup">
                <input id="id_option1" name="radio_mode" checked value="random_mode"  type="radio"/>
                <label for="id_option1" class="label_option">Option 1 </label>
            </div>
            <div class="inputGroup">
                <input id="id_option2" name="radio_mode" value="custom_mode" type="radio"/>
                <label for="id_option2" class="label_option">Option 2 </label>
            </div>
        </form>
        <div id="sentence_form" hidden>
            <select id="select_sentence"  name="sentences">
            </select>
            <div style="margin-top:0px; text-align:right;">
            <a id="edit_sentence" style="color:red; cursor:pointer" data-toggle="modal" data-target="#editModal">Edit</a>
            </div>
        </div>
    </div>
	<div id="content" class="site-content col-md-6 col-sm-12">
            <?php 
               
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
<div id="output"></div> 

    <div class="modal" id="editModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3 class="modal-title">Edit Text</h3>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <div class="modal-body">
            <div class="header">
                <label for="id_modal_edit_text">Edit Sentence</label>
                <input type="radio" name="mode" id="id_modal_edit_text" value="edit" checked>
                <label for="id_modal_add_text">Add Text</label>
                <input type="radio" name="mode" id="id_modal_add_text" value="add">
            </div>

            <div class="modal_edit_text" style="display:flex; justify-content: space-evenly; padding: 20px 0px;">
                <select name="sentences" id="id_modal_select" style="width:30%; height:30px;">
                </select>
                <textarea name="modal_edit_textarea" id="id_modal_edit_textarea" cols="30" rows="2"></textarea>
            </div>
            <div class="modal_add_text" style="justify-content: space-evenly; padding: 20px 0px;" hidden>
                <div class="row">
                    <div class="col-4">
                        <div >New Title</div>
                        <div style="margin-top:10px;">Text</div>
                    </div>
                    <div class="col-8" >
                        <input type="text" name="newTitle" id="new_title" >
                        <textarea name="modal_new_textarea" id="id_modal_new_textarea" cols="30" rows="3" style="margin-top:10px;"></textarea>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="removeBtn" style="position:absolute; left:10px;" data-dismiss="modal">Delete</button>
          <button type="button" class="btn btn-primary" id="saveBtn" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-primary" id="insertBtn" hidden data-dismiss="modal">Add</button>
          <button type="button" class="btn btn-secondary" id="cancelBtn" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

 

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="main/js/multidraggable.js"></script>
<script src= "https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"> </script> 
<script type="text/javascript">
    var countOfWord = <?= $words ?>;
    var words = [<?=$arrgmEng?>];
    var wordsDeu = [<?=$arrgmDeu?>];
    var titles = "";
    <?php
        $arrWord = "";
        $arrSentence = "";

        for($k = 0; $k < count($array_title); $k++)
        {
            $arrSentence .= "'".$array_sentence[$k]."', ";
            $arrWord .= "'".$array_title[$k]."', ";
        }
    ?>
  
  var array_sentence = [<?= $arrSentence?>];
  var array_title = [<?= $arrWord?>];
  function makeWords(numbers, selnumb)
        {
            numbers.sort( function() { return Math.random() - .5 } );
            for ( var i=0; i<selnumb; i++ ) {
                jQuery('<div class="clasin'+Math.floor(Math.random() * 12)+' isindr snippet">'+ numbers[i]+'</div>').data( 'number', numbers[i] ).attr( 'id', 'card'+numbers[i]+'s'+i ).appendTo( '#cardPile' ).draggable(

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

        function removeWords()
        {
            jQuery('.snippet').remove();
        }
        function resetTimer()
        {
            Clock.totalSeconds = <?= $time; ?> * 60;
            Clock.remove();
            Clock.start();
        }
       
  jQuery(document).ready(function($) {
        function start(){
            jQuery(init);    
            jQuery('#stbtn').hide(500);
            jQuery('#cardPile').show(500);
            jQuery('.selc_wrd').hide(500);
            jQuery('.content_outer').hide(500);
            setTimeout(
            function() {
                reheight();
            }, 800);
            
            makeWords(words, countOfWord);
            resetTimer();
        }
        start();
        jQuery('#id_modal_edit_textarea').val(array_sentence[0]);
        mainSelect = document.getElementById('select_sentence');
        modalSelect = document.getElementById('id_modal_select');
        for(var i = 0; i < array_title.length; i++ )
        {
            mainSelect.options[i] = new Option(array_title[i], array_sentence[i]);
            modalSelect.options[i] = new Option(array_title[i], array_sentence[i]);
        }
        


        jQuery('#restart').click(function(){
            removeWords();
            start();
        });
        
        jQuery('#print').click(function(e) {
            jQuery('#output').empty();
            takeshot();
            
            // printElem();
            return false;
        });
        jQuery('#finish').click(function(){
            location.replace("index.php");
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
        $('[for=id_deutsch]').click(function(){
            $('#id_language').html('Deutsch');
        });
      
     
        $('#select_sentence').change(function() {
            words = $(this).val().split(' ');
            countOfWord = words.length;
            removeWords();
            makeWords(words, countOfWord);
            resetTimer();
            });
         });
     
         $('#id_modal_select').change(function() {
            jQuery('#id_modal_edit_textarea').val(jQuery(this).val());
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
                    if(self.totalSeconds < 0)
                    {
                        clearInterval(this.interval);
                        
                        return;        
                    }
                    jQuery("#min").text(Math.floor(self.totalSeconds / 60 % 60) < 10 ? ('0' + Math.floor(self.totalSeconds / 60 % 60) +':') : Math.floor(self.totalSeconds / 60 % 60)+':');
                    jQuery("#sec").text(parseInt(self.totalSeconds % 60) < 10 ? ("0" + parseInt(self.totalSeconds % 60)) : parseInt(self.totalSeconds % 60));
                }, 1000);
            },
            pause: function () {
                clearInterval(this.interval);
                delete this.interval;
            },

            resume: function () {
                if (!this.interval) this.start();
            },

            remove: function() 
            {
                clearInterval(this.interval);
            }
        };

        jQuery("input[name=mode]").change(function () {
            if(jQuery('input[name=mode]:checked').val() == 'edit')
            {
                jQuery('#saveBtn').removeAttr('hidden');
                jQuery('#removeBtn').removeAttr('hidden');
                jQuery('#insertBtn').attr('hidden', true);
                jQuery('.modal_add_text').attr('hidden', true);
                jQuery('.modal_edit_text').removeAttr('hidden');
            }
            else 
            {
                jQuery('#saveBtn').attr('hidden', true);
                jQuery('#removeBtn').attr('hidden', true);
                jQuery('#insertBtn').removeAttr('hidden');
                jQuery('.modal_add_text').removeAttr('hidden');
                jQuery('.modal_edit_text').attr('hidden', true);
            }
        });

        jQuery("input[name=radio_language]").change(function () {
            countOfWord = <?= $words?>;
            var $radios = jQuery('input:radio[name=radio_mode]');
                $radios.filter('[value=random_mode]').prop('checked', true);
                jQuery('#sentence_form').attr('hidden', true);
            if(jQuery('input[name=radio_language]:checked').val() == 'eng')
            {
               words = [<?= $arrgmEng?>];
               removeWords();
               makeWords(words, countOfWord);
               resetTimer();
            }
            else 
            {
               words = [<?= $arrgmDeu?>];
               removeWords();
               makeWords(words, countOfWord);
               resetTimer();
            }
        });

        jQuery("input[name=radio_mode]").change(function () {
            if(jQuery('input[name=radio_mode]:checked').val() == 'custom_mode')
            {
                    words = jQuery('#select_sentence').val().split(' ');
                    countOfWord = words.length;
                    removeWords();
                    makeWords(words, countOfWord);
                    resetTimer();
                    jQuery('#sentence_form').removeAttr('hidden');
            }
            else 
            {
                countOfWord = <?= $words?>;
                jQuery('#sentence_form').attr('hidden', true);
                if(jQuery('input[name=radio_language]:checked').val() == 'eng')
                {
                    words = [<?= $arrgmEng?>];
                    removeWords();
                    makeWords(words, countOfWord);
                    resetTimer();
                }
                else 
                {
                    words = [<?= $arrgmDeu?>];
                    removeWords();
                    makeWords(words, countOfWord);
                    resetTimer();
                }
            }
        });

        jQuery('#id_modal_edit_textarea').change(function() {
            array_sentence[jQuery("#id_modal_select")[0].selectedIndex] = jQuery(this).val().replace(/\n/g, " ");
        });

        jQuery('#saveBtn').click(function() {
            let csvContent = "title,content\r\n";
            for(var i = 0; i < array_sentence.length; i++)
            {
                csvContent += array_title[i]+ ",";
                csvContent += array_sentence[i]+ "\r\n";
            }
            var url ="save.php";
            jQuery.post(url, {myText:csvContent}, function(data){
            }).fail(function(jqXHR){
                alert(jqXHR.status +' '+jqXHR.statusText+ ' $.post failed!');
            });  
            location.reload();
        });

        jQuery('#removeBtn').click(function() {
            array_title.splice(jQuery("#id_modal_select")[0].selectedIndex,1);
            array_sentence.splice(jQuery("#id_modal_select")[0].selectedIndex,1);
            let csvContent = "title,content\r\n";
            for(var i = 0; i < array_sentence.length; i++)
            {
                csvContent += array_title[i]+ ",";
                csvContent += array_sentence[i]+ "\r\n";
            }
            var url ="save.php";
            jQuery.post(url, {myText:csvContent}, function(data){
            }).fail(function(jqXHR){
                alert(jqXHR.status +' '+jqXHR.statusText+ ' $.post failed!');
            }); 
            location.reload();
        });

        jQuery('#insertBtn').click(function() {
            if(jQuery('#new_title').val() == '' || jQuery('#id_modal_new_textarea').val() == '') return;
            var textContent = jQuery('#id_modal_new_textarea').val();
            textContent = textContent.replace(/\n/g, " ");
            let csvContent = "title,content\r\n";
            for(var i = 0; i < array_sentence.length; i++)
            {
                csvContent += array_title[i]+ ",";
                csvContent += array_sentence[i]+ "\r\n";
            }
            csvContent += jQuery('#new_title').val() + ",";
            csvContent += textContent+ "\r\n";
            var url ="save.php";
            jQuery.post(url, {myText:csvContent}, function(data){
            }).fail(function(jqXHR){
                alert(jqXHR.status +' '+jqXHR.statusText+ ' $.post failed!');
            });
            location.reload();
        });

        jQuery('#pauseButton').click(function () { 
            Clock.isRunning = 1 - Clock.isRunning; 
            if(Clock.isRunning == 1) {
                Clock.pause();
                jQuery(this).html("Resume");
                } 
            else {
                Clock.resume();
                jQuery(this).html("Pause");
            } 
        });
    

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

    function takeshot() { 
            let div = 
                document.getElementById('cardPile'); 
  
            html2canvas(div).then( 
                function (canvas) { 
                    document 
                    .getElementById('output') 
                    .appendChild(canvas); 
                    window.print(); 
                });
             
        } 

        function printElem()
        {
            var divToPrint=document.getElementById("output");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }

</script>


<?php
// load Database from controller
if (isset($random_word_en)) {

    $random_data_en = $random_word_en[0];

    for ($i = 0; $i < count($random_data_en); $i++) {
        $the_big_array[] = $random_data_en[$i]->word1;
        $the_big_array1[] = $random_data_en[$i]->word2;
        $the_big_array2[] = $random_data_en[$i]->word3;
        $the_big_array3[] = $random_data_en[$i]->word4;
        $the_big_array4[] = $random_data_en[$i]->word5;
        $the_big_array5[] = $random_data_en[$i]->word6;
        $the_big_array6[] = $random_data_en[$i]->word7;
    }

    $arrgmEng = "";

    for ($x = 0; $x < 15; $x++) {
        $randomNumber = rand(0, 48);
        $arrgmEng .= "'" . $the_big_array[$randomNumber] . "', ";
        $randomNumber1 = rand(0, 48);
        $arrgmEng .= "'" . $the_big_array1[$randomNumber1] . "', ";
        $randomNumber2 = rand(0, 48);
        $arrgmEng .= "'" . $the_big_array2[$randomNumber2] . "', ";
        $randomNumber3 = rand(0, 48);
        $arrgmEng .= "'" . $the_big_array3[$randomNumber3] . "', ";
        $randomNumber4 = rand(0, 48);
        $arrgmEng .= "'" . $the_big_array4[$randomNumber4] . "', ";
        $randomNumber5 = rand(0, 48);
        $arrgmEng .= "'" . $the_big_array5[$randomNumber5] . "', ";
        $randomNumber6 = rand(0, 48);
        $arrgmEng .= "'" . $the_big_array6[$randomNumber6] . "', ";
    }
}

if(isset($random_word_de))
{
    $random_data_de = $random_word_de[0];

    for ($i = 0; $i < count($random_data_de); $i++) {
        $the_big_array[] = $random_data_de[$i]->word1;
        $the_big_array1[] = $random_data_de[$i]->word2;
        $the_big_array2[] = $random_data_de[$i]->word3;
        $the_big_array3[] = $random_data_de[$i]->word4;
        $the_big_array4[] = $random_data_de[$i]->word5;
        $the_big_array5[] = $random_data_de[$i]->word6;
        $the_big_array6[] = $random_data_de[$i]->word7;
    }
    $arrgmDeu = "";
    for ($x = 0; $x < 15; $x++) {
        $randomNumber = rand(0, 48);
        $arrgmDeu .= "'" . $the_big_array[$randomNumber] . "', ";
        $randomNumber1 = rand(0, 48);
        $arrgmDeu .= "'" . $the_big_array1[$randomNumber1] . "', ";
        $randomNumber2 = rand(0, 48);
        $arrgmDeu .= "'" . $the_big_array2[$randomNumber2] . "', ";
        $randomNumber3 = rand(0, 48);
        $arrgmDeu .= "'" . $the_big_array3[$randomNumber3] . "', ";
        $randomNumber4 = rand(0, 48);
        $arrgmDeu .= "'" . $the_big_array4[$randomNumber4] . "', ";
        $randomNumber5 = rand(0, 48);
        $arrgmDeu .= "'" . $the_big_array5[$randomNumber5] . "', ";
        $randomNumber6 = rand(0, 48);
        $arrgmDeu .= "'" . $the_big_array6[$randomNumber6] . "', ";
    }
}

$array_title_byword = array();
$array_sentence_byword = array();
$array_id_byword = array();
$array_title_bysentence = array();
$array_sentence_bysentence = array();
$array_id_bysentence = array();
$arrtitle_byword = "";
$arrtext_byword = "";
$arrtitle_bysentence = "";
$arrtext_bysentence = "";
$arrID_byword = "";
$arrID_bysentence = "";

if(isset($sentence_by_word)){
    $sentenceByWord = $sentence_by_word[0];
    for($i = 0; $i < count($sentenceByWord); $i++)
    {
        array_push($array_title_byword, $sentenceByWord[$i]->title);
        array_push($array_sentence_byword, $sentenceByWord[$i]->text);
        array_push($array_id_byword, $sentenceByWord[$i]->id);
    }
}
if(isset($sentence_by_sentence)){
    $sentenceBysentence = $sentence_by_sentence[0];
    for($i = 0; $i < count($sentenceBysentence); $i++)
    {
        array_push($array_title_bysentence, $sentenceBysentence[$i]->title);
        array_push($array_sentence_bysentence, $sentenceBysentence[$i]->text);
        array_push($array_id_bysentence, $sentenceBysentence[$i]->id);
    }
}

for ($k = 0; $k < count($array_title_byword); $k++) {
    $arrtext_byword .= "'" . $array_sentence_byword[$k] . "', ";
    $arrtitle_byword .= "'" . $array_title_byword[$k] . "', ";
    $arrID_byword .= "'" . $array_id_byword[$k] . "', ";
}

for($k = 0; $k < count($array_title_bysentence); $k++)
{
    $arrtext_bysentence .= "'" . $array_sentence_bysentence[$k] . "', ";
    $arrtitle_bysentence .= "'" . $array_title_bysentence[$k] . "', ";
    $arrID_bysentence .= "'" . $array_id_bysentence[$k] . "', ";
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' id='_s-style-css' href='<?php echo base_url(); ?>assets/style.css?ver=5.6' type='text/css' media='all' />
</head>

<body style="z-index:2;">
 
    <div id="page" class="hfeed site row" style="z-index:2;">
        <div class="col-xl-2 col-lg-3" data-aos="fade-right" data-aos-delay="100" style="margin-top:5%;padding:0;">

            <form class="form">
                <h5><span class="text-success">Language: </span><span id="id_language" class="text-danger">English</span></h5>
                <div class="inputGroup">
                    <input id="id_english" name="radio_language" value="eng" checked type="radio" />
                    <label for="id_english" class="label_option">English</label>
                </div>
                <div class="inputGroup">
                    <input id="id_deutsch" name="radio_language" value="deu" type="radio" />
                    <label for="id_deutsch" class="label_option">Deutsch</label>
                </div>
            </form>

            <form class="form">
                <h5><span class="text-success">Mode: </span><span id="id_mode" class="text-danger">Random</span></h5>
                <div class="inputGroup">
                    <input id="id_option1" name="radio_mode" checked value="random_mode" type="radio" />
                    <label for="id_option1" class="label_option">Option 1 </label>
                </div>
                <div id="random_form">
                    <label>Time:</label>
                    <span style="width:20px" id='time'>15</span>
                    <input type="number" hidden value="15" id="edit_time" min="1" max="60" style="width:40px" />
                    <span>min</span>
                    <label>Words:</label><span id='word' style="width:20px">15</span>
                    <input type="number" hidden value="15" id="edit_word" min="1" max="75" style="width:40px" />
                    <div style="text-align:right;flex-grow: 1;">
                        <a id="edit_random_form" style="cursor:pointer" onclick="edit_random_form()">Edit</a>
                        <a id="save_random_form" style="cursor:pointer" hidden onclick="save_random_form()">Save</a>
                    </div>
                </div>

                <div class="inputGroup">
                    <input id="id_option2" name="radio_mode" value="custom_mode" type="radio" />
                    <label for="id_option2" class="label_option">Option 2 </label>
                </div>
                <div id="sentence_form" hidden>
                    <select id="select_sentence" name="sentences">
                    </select>
                    <div style="text-align:right;padding-bottom: 1em;display:flex;">
                        <a id="edit_sentence" style=" cursor:pointer;width:auto" data-toggle="modal" data-target="#editModal">Edit</a>
                    </div>
                </div>

                <div class="inputGroup">
                    <input id="id_option3" name="radio_mode" value="option3_mode" type="radio" />
                    <label for="id_option3" class="label_option">Option 3 </label>
                </div>
                <div id="option3_form" hidden>
                    <select id="select_option3" name="sentences">
                    </select>
                    <div style="text-align:right;padding-bottom: 1em;display:flex;">
                        <a id="edit_sentence_option3" style="margin-top:0; cursor:pointer;width:auto">Edit</a> <!-- M-deleted "style=color:red" -->
                    </div>
                </div>
            </form>

        </div>
        <div id="content" class="site-content col-xl-8 col-9">
            <div id="content1bg">
                <div class="post wrap">
                    <div class="selc_wrd">
                        <div class="slidecontainer">
                            <input type="range" style="display:none;" min="15" max="80" value="20" class="slider" id="myRange">
                        </div>
                        <p id="selectednum"></p>
                    </div>
                    
                    <div id="cardPile" class="open" style="border:none">
                        <div id="userActions">
                            <p>Drag &amp; Drop Image</p>
                            <input type="file" id="fileUpload" />
                        </div>
                        <img id="uploadImage" src="" style="width:200px; display:none;" alt="uploaded image placeholder" class="ui-draggable ui-draggable-handle ui-selectee" />    
                    </div>
                    <div id="trash">Drag and Drop To Remove Words</div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-2  pt-4 pt-lg-0 vertical-buttons-container" data-aos="fade-left" data-aos-delay="200" style="margin-top: 5%; text-align:center; ">
            <div class="btn-group-vertical" id="verticalbutton">
                <div id="ten-countdown">
                    <span id="min"></span>
                    <span id="sec"></span>
                </div>
                <div class="M-button col">
                    <a href="#" class="Start-Button" id="startButton">
                        <p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Start</span>
                        </p>
                    </a>
                </div>
                <div class="M-button  col">
                    <a href="#" class="white" id="pauseButton">
                        <p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Pause</span>
                        </p>
                    </a>
                </div>
                <div class="M-button col">
                    <a href="#" id="print">
                        <span class=""></span>
                        <p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Complete</span>
                        </p>
                    </a>
                </div>
                <div class="M-button col">
                    <a href="#" id="finish">
                        <p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Quit</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div id="output"></div>
    

    <div class="modal" id="editModal">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Text</h3>
                    <button type="button" id="exit_modal" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="header">
                        <ul>
                            <li>
                                <input type="radio" name="mode" id="id_modal_edit_text" value="edit" checked>
                                <label for="id_modal_edit_text">Edit Sentence</label>

                                <div class="check"></div>
                            </li>
                            <li>
                                <input type="radio" name="mode" id="id_modal_add_text" value="add">
                                <label for="id_modal_add_text">Add Text</label>

                                <div class="check">
                                    <div class="inside"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="modal_edit_text" style=" padding: 20px 0px;">
                        <select name="sentences" id="id_modal_select" style="width:30%; height:30px;">
                        </select>
                        <textarea name="modal_edit_textarea" id="id_modal_edit_textarea" cols="30" rows="4"></textarea>
                    </div>
                    <div class="modal_add_text" style="justify-content: space-evenly; padding: 20px 0px;" hidden>
                        <div>
                            <label for="new_title">New Title</label>
                            <input type="text" name="newTitle" id="new_title">
                        </div>
                        <div>
                            <label for="id_modal_new_textarea">Text</label>
                            <textarea name="modal_new_textarea" id="id_modal_new_textarea" cols="30" rows="4" style="margin-top:10px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="removeBtn2" style="position:absolute; left:10px;" data-dismiss="modal">Delete</button>
                    <button type="button" class="btn btn-primary" id="saveBtn2" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-primary" id="addBtn2" hidden>Add</button>
                    <button type="button" class="btn btn-secondary" id="cancelBtn" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>

    <div class="option3-modal">
        <div class="main">
            <div class="list">
                <!-- TAbs Menu -->
                <div class="btn-group tabs" role="group" aria-label="group">
                    <button type="button" class="btn" value="edit-tab">Edit</button>
                    <button type="button" class="btn" value="new-tab">New</button>
                </div>

                <!-- Start edit tab -->
                <div class="edit-tab tab">
                    <span class='close-modal3' onclick="closeModal3()"><i class="fas fa-plus"></i></span>
                    <div class="upper">
                        <input type="text" id="add-sentence-text">
                        <button class="add-sentece">
                            <span class='add-sentence'><i class="fas fa-plus"></i></span>
                            <p>Add</p>
                        </button>
                    </div>
                    <div class="sentences-container">

                    </div>
                    <div class="lower-part">

                        <button class="deleteAll" onclick="deleteOption3()">
                            Delete
                        </button>
                        <div class="right">
                            <button class="save" id="saveBtn3">
                                <span><i class="far fa-check-circle"></i></span>
                                <p>Save</p>
                            </button>
                            <button class="cancel btn btn-danger" onclick="closeModal3()">Cancel</button>
                        </div>

                    </div>
                    <div class="modal3-edit-tab">
                        <button type="button" class="close" data-dismiss="modal">×</button>

                        <div class="modal_edit_text" style=" padding: 20px 0px;">
                            <p name="modal3-edit-title" id="modal3-edit-title"></p>
                            <textarea name="modal3_edit_textarea" id="id_modal3_edit_textarea" cols="30" rows="4"></textarea>
                        </div>
                        <button class="save" id="saveElemChange">
                            <span><i class="far fa-check-circle"></i></span>Edit
                        </button>

                    </div>
                </div>

                <!-- END edit tab -->
                <!-- START "add new" tab -->
                
                <div class="new-tab tab" hidden>
                    <div class="upper">
                        <div>
                            <label for="new-tab-title">Title:</label>
                            <input type="text" id="new-tab-title">
                        </div>

                        <div>
                            <button class="new-tab-add-sentece">
                                <span class='add-sentence'><i class="fas fa-plus"></i></span>
                                <p>Add</p>
                            </button>
                            <input type="text" id="new-tab-add-sentence-text">
                        </div>
                        <span class='close-modal3'onclick="closeModal3()"><i class="fas fa-plus"></i></span>            
                    </div>
                    <div class="sentences-container">

                    </div>
                    <div class="lower-part">
                        <div class="right">
                            <button class="add-new">
                                <span><i class="far fa-check-circle"></i></span>
                                <p>Add new</p>
                            </button>
                            <button class="cancel btn btn-danger">Cancel</button>
                        </div>

                    </div>
                </div>
                <!-- END "add new" tab -->

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
<script src="<?php echo base_url(); ?>/assets/multidraggable/multidraggable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"> </script>
<script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
<script type="text/javascript">
    var countOfWord = 15;
    var words = [<?= $arrgmEng ?>];
    var wordsDeu = [<?= $arrgmDeu ?>];
    var init_timer = 15;
    var titles = "";
    var game_state = "waiting";
    var array_text_byword = [<?= $arrtext_byword ?>];
    var array_title_byword = [<?= $arrtitle_byword ?>];
    var array_id_byword = [<?= $arrID_byword ?>];
    var array_text_bysentence = [<?= $arrtext_bysentence ?>];
    var array_title_bysentence = [<?= $arrtitle_bysentence ?>];
    var array_id_bysentence = [<?= $arrID_bysentence ?>];

    function edit_random_form() {
        jQuery('#edit_time').removeAttr('hidden');
        jQuery('#edit_word').removeAttr('hidden');
        jQuery('#time').attr('hidden', true);
        jQuery('#word').attr('hidden', true);
        jQuery('#edit_random_form').attr('hidden', true);
        jQuery('#save_random_form').removeAttr('hidden');
    }

    function save_random_form() {
        var time = jQuery('#edit_time').val();
        var word = jQuery('#edit_word').val();
        jQuery('#edit_time').attr('hidden', true);
        jQuery('#edit_word').attr('hidden', true);
        jQuery('#time').removeAttr('hidden');
        jQuery('#word').removeAttr('hidden');
        jQuery('#save_random_form').attr('hidden', true);
        jQuery('#edit_random_form').removeAttr('hidden');
        jQuery('#edit_time').val(time);
        jQuery('#edit_word').val(word);
        jQuery('#time').text(time);
        jQuery('#word').text(word);
        init_timer = time;
        if (jQuery('input[name=radio_language]:checked').val() == 'eng') {
            words = [<?= $arrgmEng ?>];
            countOfWord = word;
            resetTimer(init_timer);
        } else {
            words = [<?= $arrgmDeu ?>];
            countOfWord = word;
            resetTimer(init_timer);
        }

    }

    function makeWords(numbers, selnumb) {
        numbers.sort(function() {
            return Math.random() - .5
        });
        for (var i = 0; i < selnumb; i++) {
            if (numbers[i].replace(/\s/g, '').length) {
                jQuery('<div class="clasin' + Math.floor(Math.random() * 12) + ' isindr snippet">' + numbers[i] + '</div>').data('number', numbers[i]).attr('id', 'card' + numbers[i] + 's' + i).appendTo('#cardPile').draggable(

                    {
                        stop: function() {},
                        containment: '#content',
                        stack: '#cardPile div',
                        cursor: 'move',
                        revert: "invalid",
                    }
                );
            }
        }
        document.querySelectorAll('.isindr').forEach(item => {
            item.addEventListener("touchstart", touchHandler, true);
            item.addEventListener("touchmove", touchHandler, true);
            item.addEventListener("touchend", touchHandler, true);
            item.addEventListener("touchcancel", touchHandler, true);
        })

        jQuery('#cardPile').droppable({
            drop: function(event, ui) {
                jQuery(ui.draggable).addClass("isindr");
            }
        });
    }

    function removeWords() {
        jQuery('.snippet').remove();
    }


    function resetTimer(time) {
        Clock.totalSeconds = time * 60;
        Clock.remove();
        game_state = "waiting";
        jQuery("#min").text(time + ":");
        jQuery("#sec").text("00");
        jQuery('#startButton').html(`<p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Start</span>
                        </p>`);
    }

    function initSelects() {
        mainSelect = document.getElementById('select_sentence');
        modalSelect = document.getElementById('id_modal_select');
        document.getElementById('select_option3').innerHTML="";
        mainSelect.innerHTML = "";
        modalSelect.innerHTML = "";
        for (var i = 0; i < array_title_byword.length; i++) {
            mainSelect.options[i] = new Option(array_title_byword[i], i);
            modalSelect.options[i] = new Option(array_title_byword[i], i);
        }

        for (let index = 0; index < array_title_bysentence.length; index++) {
            const element = array_title_bysentence[index];
            jQuery('#select_option3').append(`<option value=${index}>${element}</option>`)
        }
    }

    


    jQuery(document).ready(function($) {

        makeWords(words, countOfWord);
        resetTimer(init_timer);
        jQuery('#id_modal_edit_textarea').val(array_text_byword[0]);
        initSelects();

        function start() {
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
            resetTimer(init_timer);
            Clock.start();
        }

      

        jQuery('#print').click(function(e) {
            jQuery('#output').empty();
            takeshot();
            return false;
        });


        jQuery('#startButton').click(function() {
            if(game_state == "waiting")
            {
                removeWords();
                start();
                game_state = "playing";
                jQuery(this).html(`<p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Stop</span>
                        </p>`);
            }
            else if(game_state == "playing")
            {
                resetTimer(init_timer);
                game_state = "waiting";
                jQuery(this).html(`<p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Start</span>
                        </p>`);
            }

        });
        jQuery('#finish').click(function() {
            window.location.href = '<?= site_url('HomeController');?>';
        });
        $('[for=id_option1]').click(function() {
            $('#id_mode').html('Random words');
        });
        $('[for=id_option2]').click(function() {
            $('#id_mode').html('Using your own text');
        });
        $('[for=id_option3]').click(function() {
            $('#id_mode').html('Enter whole sentences');
        });
        $('[for=id_english]').click(function() {
            $('#id_language').html('English');
        });
        $('[for=id_deutsch]').click(function() {
            $('#id_language').html('Deutsch');
        });


        $('#select_sentence').change(function() {
            words = array_text_byword[jQuery(this).val()].split(' ');
            countOfWord = words.length;
            resetTimer(init_timer);
        });
    });

    $('#select_option3').change(function() {
            words = array_text_bysentence[jQuery(this).val()].split('&&');
            countOfWord = words.length;
            resetTimer(init_timer);
        });

    $('#id_modal_select').change(function() {
        jQuery('#id_modal_edit_textarea').val(array_text_byword[jQuery(this).val()]);
    });

    function reheight() {
        var leftheight = jQuery('#cardPile').height();
    }

    function init() {
        jQuery('#cardPile').multidraggable({
            onStopDrag: (event, ui, elements) => {
                elements.map((el) => {
                    jQuery(el).addClass("isindr");
                });
            }
        });
    }

    function touchHandler(event) {
        var touches = event.changedTouches,
            first = touches[0],
            type = "";

        switch (event.type) {
            case "touchstart":
                type = "mousedown";
                break;
            case "touchmove":
                type = "mousemove";
                break;
            case "touchend":
                type = "mouseup";
                break;
            default:
                return;
        }

        var simulatedEvent = document.createEvent("MouseEvent");
        simulatedEvent.initMouseEvent(type, true, true, window, 1,
            first.screenX, first.screenY,
            first.clientX, first.clientY, false,
            false, false, false, 0 /*left*/ , null);
        first.target.dispatchEvent(simulatedEvent);

        if (type == 'mouseup') {
            jQuery('#' + first.target.id).removeClass("isindr");
        }
        event.preventDefault();
    }
    var Clock = {
        totalSeconds: 0,
        isRunning: 0,

        start: function() {
            var self = this;
            this.interval = setInterval(function() {

                if (self.totalSeconds < 0) {
                    clearInterval(this.interval);
                    return;
                }
                jQuery("#min").text(Math.floor(self.totalSeconds / 60 % 60) < 10 ? ('0' + Math.floor(self.totalSeconds / 60 % 60) + ':') : Math.floor(self.totalSeconds / 60 % 60) + ':');
                jQuery("#sec").text(parseInt(self.totalSeconds % 60) < 10 ? ("0" + parseInt(self.totalSeconds % 60)) : parseInt(self.totalSeconds % 60));
                self.totalSeconds -= 1;
            }, 1000);
        },
        pause: function() {
            clearInterval(this.interval);
            delete this.interval;
        },

        resume: function() {
            if (!this.interval) this.start();
        },

        remove: function() {
            clearInterval(this.interval);
        }
    };

    jQuery("input[name=mode]").change(function() {
        if (jQuery('input[name=mode]:checked').val() == 'edit') {
            jQuery('#saveBtn2').removeAttr('hidden');
            jQuery('#removeBtn2').removeAttr('hidden');
            jQuery('#addBtn2').attr('hidden', true);
            jQuery('.modal_add_text').attr('hidden', true);
            jQuery('.modal_edit_text').removeAttr('hidden');
        } else {
            jQuery('#saveBtn2').attr('hidden', true);
            jQuery('#removeBtn2').attr('hidden', true);
            jQuery('#addBtn2').removeAttr('hidden');
            jQuery('.modal_add_text').removeAttr('hidden');
            jQuery('.modal_edit_text').attr('hidden', true);
        }
    });

    jQuery("input[name=radio_language]").change(function() {
        countOfWord = 15;
        var $radios = jQuery('input:radio[name=radio_mode]');
        $radios.filter('[value=random_mode]').prop('checked', true);
        jQuery('#sentence_form').attr('hidden', true);
        if (jQuery('input[name=radio_language]:checked').val() == 'eng') {
            words = [<?= $arrgmEng ?>];
            resetTimer(init_timer);
        } else {
            words = [<?= $arrgmDeu ?>];
            resetTimer(init_timer);
        }
    });

    jQuery("input[name=radio_mode]").change(function() {
        if (jQuery('input[name=radio_mode]:checked').val() == 'custom_mode') {
            
            if(array_text_byword != null && array_text_byword.length > 0){
                words = array_text_byword[jQuery('#select_sentence').val()].split(' ');
                countOfWord = words.length;
            }
            jQuery('#sentence_form').removeAttr('hidden');
            jQuery('#random_form').attr('hidden', true);
            jQuery('#option3_form').attr('hidden', true);
            resetTimer(init_timer);
        } else if (jQuery('input[name=radio_mode]:checked').val() == 'option3_mode') // M- added option3 
        {
            if(array_text_bysentence != null && array_text_bysentence.length > 0)
            {
                words = array_text_bysentence[jQuery('#select_option3').val()].split('&&');
                countOfWord = words.length;
            }
            jQuery('#option3_form').removeAttr("hidden");
            jQuery('#sentence_form').attr('hidden', true);
            jQuery('#random_form').attr('hidden', true);
            resetTimer(init_timer);
        } else {
            countOfWord = jQuery('#word').text();
            jQuery('#sentence_form').attr('hidden', true);
            jQuery('#random_form').removeAttr('hidden');
            jQuery('#option3_form').attr('hidden', true);
            if (jQuery('input[name=radio_language]:checked').val() == 'eng') {
                words = [<?= $arrgmEng ?>];
                resetTimer(init_timer);
            } else {
                words = [<?= $arrgmDeu ?>];
                resetTimer(init_timer);
            }
        }
    });

  
    jQuery('#saveBtn2').click(function() {
        let csvContent = "title,content\r\n";
        let postData= [];
        
        var text = jQuery('#id_modal_edit_textarea').val().replaceAll(/\n/g, " ").replaceAll(/["']/g, "");
        text = text.replaceAll(',', ' ');
        array_text_byword[jQuery("#id_modal_select")[0].selectedIndex] = text;

        postData.push(array_id_byword[jQuery("#id_modal_select")[0].selectedIndex]);
        postData.push(text);
        var url = "<?= site_url('HomeController/saveOption2');?>";
        jQuery.post(url, {
            option2: postData
        }, function(data) {}).fail(function(jqXHR) {
            alert(jqXHR.status + ' ' + jqXHR.statusText + ' $.post failed!');
        });
        initSelects();
    });
// Option 3 Save function
    jQuery('#saveBtn3').click(function() {
        var texts = jQuery('.edit-tab .sentence-text');
        var arrData = "";
        for(var i = 0; i < texts.length; i++)
        {
            arrData += texts[i].innerText.replaceAll(/["']/g, "") + "&&";       
        }
        arrData = arrData.substring(0, arrData.length-2);
        let postData= [];
        postData.push(array_id_bysentence[jQuery('#select_option3').val()]);
        postData.push(arrData);
        var url = "<?= site_url('HomeController/saveOption3');?>";
        jQuery.post(url, {
            postdata: postData
        }, function(data) {
            array_text_bysentence[jQuery('#select_option3').val()] = arrData;
            initSelects();
        }).fail(function(jqXHR) {
            alert(jqXHR.status + ' ' + jqXHR.statusText + ' $.post failed!');
        });
        closeModal3();
    });

    // Add new function
    jQuery('.add-new').click(function() {
        if(jQuery('#new-tab-title').val() == '') return;
        console.log(jQuery('#new-tab-title').val());
        console.log(jQuery('#new-tab-title').val().replaceAll(/["']/g, ""));
        var texts = jQuery('.new-tab .sentence-text');
        var arrData = "";
        for(var i = 0; i < texts.length; i++)
        {
            arrData += texts[i].innerText.replaceAll(/["']/g, "") + "&&";       
        }
        if(arrData.length > 2)
        {
            arrData = arrData.substring(0, arrData.length-2);
        }
        var postdata = [];
        postdata.push(jQuery('#new-tab-title').val().replaceAll(/["']/g, ""));
        postdata.push(arrData);
        var url = "<?= site_url('HomeController/addoption3');?>";
        jQuery.post(url, {
            postdata: postdata
        }, function(data) {
            array_text_bysentence.push(arrData);
            array_title_bysentence.push(jQuery('#new-tab-title').val());
            array_id_bysentence.push(data);
            initSelects();
            if(array_text_bysentence != null && array_text_bysentence.length > 0){
                words = array_text_bysentence[jQuery('#select_option3').val()].split('&&');
                countOfWord = words.length;
            }
            closeModal3();
        }).fail(function(jqXHR) {
            alert(jqXHR.status + ' ' + jqXHR.statusText + ' $.post failed!');
        });
    });
    
    jQuery('#removeBtn2').click(function() {
        
        var url = "<?= site_url('HomeController/removeOption2');?>";
        jQuery.post(url, {
            postdata: array_id_byword[jQuery("#id_modal_select")[0].selectedIndex],
        }, function(data) {
            
            array_title_byword.splice(jQuery("#id_modal_select")[0].selectedIndex, 1);
            array_text_byword.splice(jQuery("#id_modal_select")[0].selectedIndex, 1);
            array_id_byword.splice(jQuery("#id_modal_select")[0].selectedIndex, 1);
            initSelects();
            if(array_text_byword != null && array_text_byword.length > 0){
                words = array_text_byword[jQuery('#select_sentence').val()].split(' ');
                countOfWord = words.length;
            }
            else
            {
                words = [];
                countOfWord = 0;
            }

        }).fail(function(jqXHR) {
            alert(jqXHR.status + ' ' + jqXHR.statusText + ' $.post failed!');
        });

    });

    jQuery('#addBtn2').click(function() {
        if (jQuery('#new_title').val() == '' || jQuery('#id_modal_new_textarea').val() == '') return;
        var textContent = jQuery('#id_modal_new_textarea').val();
        textContent = textContent.replaceAll(/\n/g, " ").replaceAll(/["']/g, "");
        textContent = textContent.replaceAll(',', " ");
        var url = "<?= site_url('HomeController/addOption2');?>";
        var postdata = [];
        postdata.push(jQuery('#new_title').val().replaceAll(/["']/g, ""));
        postdata.push(jQuery('#id_modal_new_textarea').val().replaceAll(/["']/g, ""));
        jQuery.post(url, {
            postdata: postdata
        }, function(data) {
            console.log(data);
            array_id_byword.push(data);
            array_title_byword.push(jQuery('#new_title').val().replaceAll(/["']/g, ""));
            array_text_byword.push(textContent.replaceAll(/["']/g, ""));
            jQuery('#exit_modal').click();
            initSelects();
            if(array_text_byword != null && array_text_byword.length > 0){
                words = array_text_byword[jQuery('#select_sentence').val()].split(' ');
                countOfWord = words.length;
            }
        }).fail(function(jqXHR) {
            alert(jqXHR.status + ' ' + jqXHR.statusText + ' $.post failed!');
        });

    });


    jQuery('#pauseButton').click(function() {
        Clock.isRunning = 1 - Clock.isRunning;
        if (Clock.isRunning == 1) {
            Clock.pause();
            jQuery(this).html(`
                        <p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Resume</span>
                        </p>`);
        } else {
            Clock.resume();
            jQuery(this).html(`
                        <p><span class="bg"></span>
                            <span class="base"></span>
                            <span class="text">Pause</span>
                        </p>
                    `);
        }
    });

    (function() {
        var $ = function(elem) {
            if (!(this instanceof $)) {
                return new $(elem);
            }
            this.el = document.getElementById(elem);
        };
        window.$ = $;
        $.prototype = {
            onChange: function(callback) {
                this.el.addEventListener('change', callback);
                return this;
            }
        };
    })();

    var dragdrop = {
        init: function(elem) {
            elem.setAttribute('ondrop', 'dragdrop.drop(event)');
            elem.setAttribute('ondragover', 'dragdrop.drag(event)');
        },
        drop: function(e) {
            e.preventDefault();
            var file = e.dataTransfer.files[0];

        },
        drag: function(e) {
            e.preventDefault();
        }
    };

    function runUpload(file) {
        if (file.type === 'image/png' ||
            file.type === 'image/jpg' ||
            file.type === 'image/jpeg' ||
            file.type === 'image/gif' ||
            file.type === 'image/bmp') {
            var reader = new FileReader(),
                image = new Image();
            reader.readAsDataURL(file);
            reader.onload = function(_file) {
                $('uploadImage').el.src = _file.target.result;
                $('uploadImage').el.style.display = 'block';
                jQuery('#uploadImage').draggable({
                    stop: function() {},
                    containment: '#content',
                    stack: '#cardPile div',
                    cursor: 'move',
                    revert: "invalid",
                });
                $('userActions').el.style.display = 'none';
            }
        }
    }

    window.onload = function() {
        if (window.FileReader) {
            dragdrop.init($('userActions').el);
            $('fileUpload').onChange(function() {
                runUpload(this.files[0]);
            });
        } else {
            var p = document.createElement('p'),
                msg = document.createTextNode('Sorry, your browser does not support FileReader.');
            p.className = 'error';
            p.appendChild(msg);
            $('userActions').el.innerHTML = '';
            $('userActions').el.appendChild(p);
        }
        
    };

    function takeshot() {
        let div =
            document.getElementById('cardPile');

        html2canvas(div).then(
            function(canvas) {
                document
                    .getElementById('output')
                    .appendChild(canvas);
                window.print();
            });

    }

    jQuery("#edit_sentence_option3").click(

        () => {
            jQuery('.list').addClass("show-modal-3")
            let sentence = array_text_bysentence[jQuery("#select_option3").val()],
                words = sentence.split("&&");
                countOfWord = words.length;
                
            document.querySelector('#modal3-edit-title').textContent = array_title_bysentence[jQuery("#select_option3").val()]
            words.forEach(part => {
                addSentence(part)
            });

        })


    function addSentence(sentenceText){/* Add sentence */
        let sentencesContainer = jQuery(".edit-tab .sentences-container")
       
        jQuery('#add-sentence-text').val('')
        if(!sentenceText.replace(/\s/g, '').length){
            //hello
        }else{
            sentencesContainer.append(
            `<div class="sentence">
                <p class="sentence-text" > ${sentenceText} </p>
                <span class="progress-icon"><i class="fas fa-minus-circle"></i></span>
            </div>`
            )
            if(array_text_bysentence != null && array_text_bysentence.length > 0) 
            {
                let sentence = array_text_bysentence[jQuery("#select_option3").val()];
                if(!sentence.includes(sentenceText)){
                    sentence += "  " +sentenceText
                }
            }
            
        }
        jQuery(".edit-tab .sentence").click(editSentenceModal3)
        jQuery(".progress-icon").click(removeSentence)
        
    }

    jQuery(".edit-tab .upper button").click(()=>{addSentence(jQuery("#add-sentence-text").val())})

    function removeSentence() {
        jQuery(this).parent().remove()

    }
    jQuery(".progress-icon").click(removeSentence)

    function closeModal3() {
        jQuery('.list').removeClass("show-modal-3")
        jQuery(".modal3-edit-tab").removeClass("show")
        jQuery('.list .sentences-container').empty()
    }

    function editSentenceModal3() {
        let text = jQuery(this).children("p.sentence-text").text();
        jQuery(this).attr('id','selectedElem');
        jQuery(".modal3-edit-tab .modal_edit_text").removeAttr("hidden")
        jQuery(".option3-modal .modal3-edit-tab").addClass("show")
        jQuery("#id_modal3_edit_textarea").val(text)
    }

    jQuery('#saveElemChange').click(function (){

        jQuery('#selectedElem').children("p.sentence-text").text(jQuery("#id_modal3_edit_textarea").val());
        jQuery('#selectedElem').removeAttr('id');
        jQuery(".option3-modal .modal3-edit-tab").removeClass("show");
    });
    jQuery(".modal3-edit-tab .close").click(function() {
        jQuery(this).parent().removeClass("show")
    })

    jQuery(document).mouseup(function(e) {
        var container = jQuery(".list");

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            closeModal3();
        }
    });

    function deleteOption3()
    {
        var postdata = [];
        postdata.push(jQuery('#new-tab-title').val());
        
        var url = "<?= site_url('HomeController/removeOption3');?>";
        let postData = array_id_bysentence[jQuery("#select_option3").val()];
        jQuery.post(url, {
            postdata: postData
        }, function(data) {
            array_title_bysentence.splice(jQuery("#select_option3")[0].selectedIndex, 1);
            array_text_bysentence.splice(jQuery("#select_option3")[0].selectedIndex, 1);
            array_id_bysentence.splice(jQuery("#select_option3")[0].selectedIndex, 1);
            initSelects();
            if(array_text_bysentence != null && array_text_bysentence.length > 0){
                words = array_text_bysentence[jQuery('#select_option3').val()].split(' ');
                countOfWord = words.length;
            }
            else
            {
                words = [];
                countOfWord = 0;
            }

            closeModal3();
        }).fail(function(jqXHR) {
            alert(jqXHR.status + ' ' + jqXHR.statusText + ' $.post failed!');
        });
    }

    jQuery(".list .tabs button").click(function() /* SWitch between tabs in modal 3 */
    {
        var tabs = document.querySelectorAll(".tab"),
            target = this.value;

        for (let i = 0; i < tabs.length; i++) {

            const element = tabs[i];
            if (element.classList.contains(target)){
                jQuery(element).removeAttr("hidden")
            }
            else{
                jQuery(element).attr("hidden",true)
            }
        }

    });

    function addSubsentence(sentenceText){/*-------- Add Title -------------*/
        let sentencesContainer = jQuery(".new-tab .sentences-container")
        jQuery('#new-tab-add-sentence-text').val('')
        if(!sentenceText.replace(/\s/g, '').length){
            //hello
        }else{
            sentencesContainer.append(
            `<div class="sentence">
                <p class="sentence-text" > ${sentenceText} </p>
                <span class="progress-icon"><i class="fas fa-minus-circle"></i></span>
            </div>`
            )
        }
        jQuery(".sentence").click(editSentenceModal3)
        jQuery(".progress-icon").click(removeSentence)
    }
    jQuery(".new-tab .upper button").click(()=>{addSubsentence(jQuery("#new-tab-add-sentence-text").val())})
    

    jQuery('#userActions').droppable({
            over: function() {
                //alert('working!');
                jQuery('.ui-draggable-dragging').remove();
            }
        });
    jQuery('#trash').droppable({
                    over: function() {
                        jQuery('.ui-draggable-dragging').remove();
                        jQuery('.ui-selected').remove();
                    }
        });

    window.onafterprint = function(){
    jQuery('#output').empty();
}
</script>
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 
    
    if(! function_exists('CreateDB'))
    {
        function CreateDB($data1, $data2, $data3, $data4, $data5, $data6, $data7)
        {
            $CI =& get_instance();
            $CI->load->database();
            $values = '';
            for($i = 0; $i < count($data1); $i++)
            {
                $values .= "('$data1[$i]', '$data2[$i]', '$data3[$i]', '$data4[$i]', '$data5[$i]', '$data6[$i]','$data7[$i]'),";
            }

            $CI->db->query("INSERT INTO randomwordtable_en (word1, word2, word3, word4, word5, word6, word7) 
            values ".substr($values, 0, -1)."");
            
        }

        
    }
    ?>
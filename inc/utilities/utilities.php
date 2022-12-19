<?php 
    function isShortText($text) {
        if (strlen($text) <= 10 || strlen($text) == 12) {
            return true;
        } 
        
        return false;
    }

    function get_spacing_title($title_text, $instruction_text) {
        if (strlen($title_text) >= 36 && strlen($instruction_text) <= 120) {
            return 'is-long-text';
        } 

        if (strlen($title_text) >= 36 && strlen($instruction_text) <= 140) {
            return 'is-longer-text';
        } 

        if (strlen($title_text) < 36 && strlen($instruction_text) >= 138) {
            return 'is-medium-text';
        } 

        return 'no';
    }

    function get_spacing_form_instruction($title_text, $instruction_text) {
        if (strlen($title_text) >= 36 && strlen($instruction_text) <= 120) {
            return 'is-long-text';
        } 
    }

    function get_spacing_form_instruction_tf($title_text, $instruction_text) {
        if (strlen($title_text) >= 71 && strlen($instruction_text) <= 120) {
            return 'is-longer-text';
        } 

        if (strlen($title_text) >= 36 && strlen($instruction_text) <= 120) {
            return 'is-long-text';
        } 
    }
?>
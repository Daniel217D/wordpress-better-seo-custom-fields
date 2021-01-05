<?php

class scfClassGeneral {
    static public function print_adding_fields() {
        include('views/adding_fields.php');
    }


    static public function print_editing_fields($term) {
        //use $term
        include('views/editing_fields.php');
    }


    static public function save_data($term_id) {
        if (isset($_POST['scf_extra'])) {
            $scf_extra = array_map('sanitize_text_field', $_POST['scf_extra']);

            foreach ($scf_extra as $key => $value) {
                if (empty($value)) {
                    delete_term_meta($term_id, $key);
                } else {
                    update_term_meta($term_id, $key, $value);
                }
            }
        }
    }

}

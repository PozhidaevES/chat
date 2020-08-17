<?php

class File{

    function __construct($file_name){
        $this->file_name = $file_name;
        $data = file_get_contents($file_name);
        if($data == null){
            $arr = [];
        }else{
            $arr = json_decode($data,true);
        };
        $this->data = $arr;
    }

    function dataAdd(){
        $arr = $this->data;
        $form_data = $_POST;
        $form_data['publ_time'] = time();
        $arr[] = $form_data;
        file_put_contents($this->file_name,json_encode($arr));
    }

    function dataRead(){

        return $this->data;

    }

}
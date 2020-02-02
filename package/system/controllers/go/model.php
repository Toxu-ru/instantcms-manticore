<?php

class modelGo extends cmsModel{

     public function insert($table_name, $data, $array_as_json = false){
        return $this->db->insert($table_name, $data, false, $array_as_json);
    }

}

<?php
namespace App\Components;
class Recusive{
    private $data;
    private $htmlOption = '';

    public function __construct($data){
        $this->data = $data;
    }

    public function categoryRecusive($id = 0, $text = ''){
        foreach($this->data as $value){
            if($value->parent_id == $id){
                $this->htmlOption.= "<option value='" . $value["id"] . "'>" . $text . $value['name']. "</option>";
                $this->categoryRecusive($value['id'], $text . '-');
            }
        }

        return $this->htmlOption;
    }

}

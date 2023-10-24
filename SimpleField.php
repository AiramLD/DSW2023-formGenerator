<?php
final class SimpleField extends Field{
    public function render(){
        if($this->type == "checkbox"){
            if($this->default == "true"){
                $value = "checked";
            }else{
                $value = "";
            }
        }else{
            $value = "value=\"$this->default\"";
            
        }
        //echo $this->name;
        echo "<p><label for=\"id_$this->name\">$this->text: </label>\n";
        echo "<input id=\"$this->name\" type=\"$this->type\" name=\"this->name\" $value></input></p>\n";
}}
?>
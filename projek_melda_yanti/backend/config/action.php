<?php
    switch($submit){
        case("simpan"):
            $key = $array_key;
            $field = [];
            $param = [];
            foreach($key as $key){
                if($_POST[$key] != ""){
                    array_push($field,$key); 
                    array_push($param,":$key"); 
                }
            }
            $field = implode(",",$field);
            $param = implode(",",$param);
            $sql = "INSERT INTO $table($field) VALUES($param)";
            $db->query($sql);
            foreach($array_key as $a){
                if($_POST[$a] != ""){
                    echo $db->bind(":$a", $_POST["$a"]);
                }
            }
            $db->execute();
            if($db->rowCount() > 0){
                Message::flash("Data berhasil di ".$_POST['submit'],"success");
                header("Location:".BASEURL."../?p=$page");
            }
        break;
            
        case("update"):
            $key = $array_key;
            $field = [];
            foreach($key as $key){
                if($_POST[$key] != "" && $key != "id"){
                    array_push($field,"$key=:$key"); 
                }
            }
            $field = implode(",",$field);
            $sql = "UPDATE $table SET $field WHERE id=:id";
            $db->query($sql);
            foreach($array_key as $a){
                if($_POST[$a] != ""){
                    if($a == "password"){
                        $db->bind(":$a", md5($_POST["$a"]));

                    }else{
                        $db->bind(":$a", $_POST["$a"]);
                    }
                }
            }
            $db->execute();
            if($db->rowCount() > 0){
                Message::flash("Data berhasil di ".$_POST['submit'],"success");
                header("Location:".BASEURL."../?p=$page");
            }
        break;

        case("delete"):
            $id = $_GET['id'];
            $sql = "DELETE FROM $table WHERE id='$id'";
            $db->query($sql);
            $db->execute();
            if($db->rowCount() > 0){
                Message::flash("Data berhasil di HAPUS","success");
                header("Location:".BASEURL."../?p=$page");
            }
        break;

        default:
    }
?>
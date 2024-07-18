<?php

if(isset($_POST['id'])){

    require '../db.php';
    
    $id = $_POST['id'];

    if(empty($id)){
        echo 'error';
     }else {
        $all = $db->$prepare("SELECT id, checked FROM al_items WHERE id=?");
        $all->execute([$id]);

        $item = $all->fetch();
        $uId = $item['id'];
        $checked = $item['checked'];

        $uChecked = $checked ? 0 : 1;
     }
}
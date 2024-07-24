<?php


if(isset($_POST['id'])){
    require '../db.php';

    $id = $_POST['id'];

    if(empty($id)){
       echo 'error';
    }else {
        $all = $conn->prepare("SELECT id, checked FROM all_items WHERE id=?");
        $all->execute([$id]);

        $item = $item->fetch();
        $uId = $item['id'];
        $checked = $item['checked'];

        $uChecked = $checked ? 0 : 1;

        $res = $conn->query("UPDATE todos SET checked=$uChecked WHERE id=$uId");

        if($res){
            echo $checked;
        }else {
            echo "error";
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../index.php?mess=error");
}
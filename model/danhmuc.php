<?php
function insert_danhmuc($tenloai){
    $sql = "INSERT INTO danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc(){
    $sql = "DELETE FROM danhmuc where id=".$_GET['id'];
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdanhmuc =  pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql = "SELECT * from danhmuc where id=".$_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id,$tenloai){
    $sql = "update danhmuc set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>
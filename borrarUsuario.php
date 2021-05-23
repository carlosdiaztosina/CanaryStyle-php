<?php
    include_once 'presentation.class.php';
    
    $res = new stdClass();
    $res->deleted = false;
    $res->message="";
    
    $datos = file_get_contents("php://input");
    $json = json_decode($datos);
    $id = $json->id;
    
    try{
        DB::execute_sql("DELETE FROM usuarios WHERE id = ?", array($id));
        $res->deleted = true;
    } catch (Exception $ex){
        $res->deleted = false;
        $res->message = $ex->getMessage();
        
    }
    
    header('Content-type: aplication/json');
    echo json_encode($res);
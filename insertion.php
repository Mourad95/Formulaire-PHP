<?php

function listCategory(){
    $db = db_connect();

    $req = $db->query("SELECT * FROM category");

    echo '<select name="category">';
    while($data = $req->fetch()){
        echo '<option value="' . $data['idCategory'] . '">' . $data['name'] . '</option>'; 
    }
    echo "</select>";
}

function ListOperations(){
    $db = db_connect();

    $req1 = $db->query("SELECT * FROM sub_category");
    $req1 = $db->query("SELECT "name" FROM sub_category");
    echo '<select name="subCategory">';
    while($data = $req1->fetch()){
        echo '<option value="' . $data['id_sub_category'] . '">' . $data['name'] . '</option>'; 
    }
    echo "</select>";
}


function insertionOperation(){
    $db = db_connect();

    if(isset($_POST["Category"])){
        if(strlen($_POST["name"] > 20)){
            echo "erreur";
        }
        else {
            //preparation de la requête d'insertion sql

            $rq = $db-> prepare("INSERT INTO sub_category (idCategory, name) VALUES (:idCategory, :name);");
            //execution de la requête préparé
            $rq->execute(array(
                "idCategory" => $_POST['category'],
                "name"=> $_POST['name']));
        		}
		}
}





function suppressionOperation(){
    $db = db_connect();

    if(isset($_POST["subCategory"])){
        if(strlen($_POST["name"] > 20)){
            echo "erreur";
        }
        else {
            //preparation de la requête d'insertion sql
            $rq = $db-> prepare("INSERT INTO sub_category (idCategory, name) VALUES (:idCategory, :name);");
            //execution de la requête préparé
            $rq->execute(array(
                "idCategory" => $_POST['category'],
                "name"=> $_POST['name']));
        		}
		}
}


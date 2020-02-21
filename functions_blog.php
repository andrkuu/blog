<?php
require ("config.php");


function get_posts(){
    $postHTML = null;

    $conn = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
    $stmt = $conn->prepare("SELECT id,title,postDate,content FROM posts ORDER BY postDate DESC ");
    echo $conn->error;
    $stmt->bind_result($idFromDb,$titlefromdb,$postDateFromDb,$contentFromDb);
    $stmt->execute();





    while($stmt->fetch()){
        $postHTML .= "<ul class=\"post-list\">";

        $postHTML .= "<li><a href=\"post.php?post=".$idFromDb."/\">".$titlefromdb."</a></li>";
        $postHTML .= "<li>".$postDateFromDb."</li><br>";
        $postHTML .= "<li>".$contentFromDb."</li>";
        $postHTML .= "</ul>";
        $postHTML .= "<br>";

    }



    $stmt->close();
    $conn->close();
    return $postHTML;
}


function get_post($post_id){
    $notice = null;
    $conn = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
    $stmt = $conn->prepare("SELECT id,title,postDate,content FROM posts WHERE id=?");
    echo $conn->error;
    $stmt->bind_param("i", $post_id);
    $stmt->bind_result($idFromDb,$titlefromdb,$postDateFromDb,$contentFromDb);
    $stmt->execute();
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    $postHTML = null;
    $postHTML .= "<ul class=\"post-list\">";

    $postHTML .= "<li><h3><a>".$titlefromdb."</a></h3></li>";
    $postHTML .= "<li>".$postDateFromDb."</li><br>";
    $postHTML .= "<li><p>".$contentFromDb."</p></li>";
    $postHTML .= "</ul>";

    return $postHTML;
}
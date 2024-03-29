<?php

    
    define('DBINFO','mysql:host=localhost;dbname=notalone');
    define('DBUSER','root');
    define('DBPASS','');

    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
function youAreHere($page)
{
    return '<section id="blogArchive">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-breadcrumbs-area">
                    <div class="container">
                        <div class="blog-breadcrumbs-left">
                            <h2>' . $page . '</h2>
                        </div>
                        <div class="blog-breadcrumbs-right">
                            <ol class="breadcrumb">
                                <li>You are here</li>
                                <li><a href="#">Home</a></li>
                                <li class="active">' . $page . '</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
}

?>
    <?php

    include 'inc/header.html';

    include 'inc/content.html';

    $tree = false; 
    if (isset($_GET['aralia'])) {
        if ($_GET['aralia'] == 'yes') {  
            $tree = true;          
        }   else {
            if ($_GET['aralia'] == 'no'){
                $tree = false;
            }
        }
    }

    if (!isset($_GET['aralia'])) {
        $tree = true;
    }

    if ($tree == true) {
        include 'inc/aralia.html';
    } //end if

    if (isset($_GET['arborvitae'])) {
        if ($_GET['arborvitae'] == 'yes') {  
            $tree = true;          
        }   else {
            if ($_GET['arborvitae'] == 'no'){
                $tree = false;
            }
        }
    }

    if (!isset($_GET['arborvitae'])) {
        $tree = true;
    }

    if ($tree == true) {
        include 'inc/arborvitae.html';
    } //end if

    if (isset($_GET['ash'])) {
        if ($_GET['ash'] == 'yes') {  
            $tree = true;          
        }   else {
            if ($_GET['ash'] == 'no'){
                $tree = false;
            }
        }
    }

    if (!isset($_GET['ash'])) {
        $tree = true;
    }

    if ($tree == true) {
        include 'inc/ash.html';
    } //end if

    ?>
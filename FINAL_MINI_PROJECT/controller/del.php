
<?php 
    require_once('../model/userModel.php');
    session_start();
    

        $id=$_SESSION['edit_id'];
    
        deleteProduct($id);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/display.php');
        }else{
            
        }
?>
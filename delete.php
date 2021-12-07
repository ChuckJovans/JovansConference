<?php
include 'server.php';?>
<?php
//  echo "<script type='text/javascript'>alert('Clicked');window. location. href='adminreg.php'; </script>";

//soft delete books
 if(isset($_GET['deletebtn']))
 {
        $deleteId=$_GET['deletebtn'];

        $mysq = "select is_deleted from participants where id = $deleteId";
        $myquery = $conn->query($mysq);

        echo "<script type='text/javascript'>alert('Clicked');window. location. href='adminreg.php'; </script>";

        while($row = $myquery->fetch_assoc()){
    
        if($row["is_deleted"] == 0){
            $sql = "UPDATE participants SET is_deleted = 1 WHERE id=$deleteId";
        
            if($conn->query($sql)){
        
                echo "<script type='text/javascript'>alert('participants Soft deleted successfully Please check main site for changes');window. location. href='adminreg.php'; </script>";

            }
            else{
        
                echo "<script type='text/javascript'>alert('There was an error ')</script>";
            }
        }
        else{
    
            $sql = "UPDATE participants SET is_deleted = 0 WHERE id=$deleteId";

            if($conn->query($sql)){
            
                echo "<script type='text/javascript'>alert('participants restored back in the main site');window. location. href='adminreg.php'; </script>";
            
            }
            else{
        
                echo "<script type='text/javascript'>alert('There was an error ')</script>";
            }
        
        }
    }
   
}

// Contact

if(isset($_GET['deleteId']))
{
       $deleteId=$_GET['deleteId'];

       $mysq = "select is_deleted from contacts where Id = $deleteId";
       $myquery = $conn->query($mysq);

       while($row = $myquery->fetch_assoc()){
   
       if($row["is_deleted"] == 0){
           $sql = "UPDATE contacts SET is_deleted = 1 WHERE Id=$deleteId";
       
           if($conn->query($sql)){
       
               echo "<script type='text/javascript'>alert('contacts Soft deleted successfully Please check main site for changes');window. location. href='contactAdmin.php'; </script>";

           }
           else{
       
               echo "<script type='text/javascript'>alert('There was an error ')</script>";
           }
       }
       else{
   
           $sql = "UPDATE contacts SET is_deleted = 0 WHERE Id=$deleteId";

           if($conn->query($sql)){
           
               echo "<script type='text/javascript'>alert('contacts restored back in the main site');window. location. href='contactAdmin.php'; </script>";
           
           }
           else{
       
               echo "<script type='text/javascript'>alert('There was an error ')</script>";
           }
       
       }
   }
  
}
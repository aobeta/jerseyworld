<?php
        $Spcodeh = $_GET['pcode'];
        $Array[]= 0;
        $Array[]= 1;
        
        $total = $_GET['total'];
        
        
        if($Spcodeh == 0)
        {
           header("Location: transaction.php?promo=0");
           
        }
        else{
           
            $_SESSION['total'] = $_SESSION['total'] * 0.10;
            header("Location: transaction.php?promo=1");
           
            
        }
   ?>
            

<?php
        session_start();
        $Spcodeh = $_GET['pcode'];
        $total = $_SESSION['total'];
        //$Array[]= 0;
        //$Array[]= 1;
        
        $total = $_SESSION['total'];
        
        
        if($Spcodeh == 0)
        {
           header("Location: transaction.php?promo=0");
           
        }
        else{
           
            $_SESSION['total'] = round(($total * 0.10),2);
            header("Location: transaction.php?promo=1");
           
            
        }
   ?>
            

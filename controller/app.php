<?php

    function find_mail_success()
    {
        
        return 'ваши данные сохранены';
    }
 
   function find_mail()
   {
       if ($_POST)
        {
        return header('http://localhost/satner/index.php?success=true');
        
        }

   }
   find_mail();
?>
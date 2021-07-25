<?php

    function find_mail_success()
    {
        
        return 'ваши данные сохранены';
    }
 
   function find_mail()
   {
       if ($_POST)
        {
            if($_POST['email_form'])
            {
            //находясь в рабочем пространстве (location) перенаправляем пользователя на index.php 
            //с get параметром 
            return header('Location:index.php?success=true');
            }
        
        }

   }
   find_mail();


   class SendContact
   {
       function find_name($input_name)
       {
        if ($_POST)
        {
           if ($_POST[$input_name])
           {
               $find_name=$_POST[$input_name];
               echo $find_name.'<br>'  ;
           }
           else 
           {
              if($input_name=='name') 
              {
              echo '* забыли ввести имя <br>';
              return false;
              }
              
              if($input_name=='email') 
              {
              echo '* забыли ввести email <br>';
              return false;
              }
              if($input_name=='subject') 
              {
              echo '* забыли ввести subject <br>';
              return false;
              }
              if($input_name=='message') 
              {
              echo '* забыли ввести message <br>';
              return false;
              }

           }
           
        }
        }
        

       function main()
       {

       }

   }
   $app_contect=new SendContact();
   $app_contect->find_name('name');
   $app_contect->find_name('email');
   $app_contect->find_name('subject');
   $app_contect->find_name('message');
?>
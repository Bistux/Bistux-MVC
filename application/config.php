<?php  
 class Config{
     //defualt controller,which loads first.
     static $defualt_controller="site";
     //directories
     static $dir_controllers='controllers';
     static $dir_views='views';
     static $dir_models='models';
     static $dir_helper='helper';
     //base url eg: http://www.example.com
     static $base_url='http://localhost/framework';
     static $url_tail='.php';
     //database credentials
     static $db_host="localhost";
     static $db_name="framework";
     static $db_user="spali";
     static $db_password="pass";
     
     
    //mailing configuration
    static $usesmtp       =true;              //enable SMTP server
    static $SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    static $SMTPAuth   = true;                  // enable SMTP authentication
    static $Host       = "smtp.bistux.com"; // sets the SMTP server
    static $Port       = 587;                    // set the SMTP port for the GMAIL server
    static $SMTPSecure='tls';					//type
    static $smtpUsername   = "spali@bistux.com"; // SMTP account username
    static $smtpPassword   = "uC1IsdfsdfHFFPF9ev3g";        // SMTP account password
     
     
     
     
     
     
 }







?>

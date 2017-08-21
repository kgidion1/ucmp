<?php

if (isset($_POST['submit']) && ((isset($_POST['news_title']) && !empty($_POST['news_body'])) || isset($_POST['news_title']) && !empty($_POST['news_url']))) {
    $title = $_POST['news_title'];
    $body = $_POST['news_body'];
    $cleaned_body = $database->escape_value($body);
    $url = $_POST['news_url'];
//            if(!empty($url)){
//                if(!preg_match("/\bhttp/i", $url)){
//                    $url_err = "Invalid URL: You must begin with either http or https";
//                }
//                else {
//                    $sql = "INSERT INTO news (title, body, url) VALUES ('$title', ' $cleaned_body', '$url')";
//                    $result = $database->query($sql);
//                    if ($result) {
//                        echo "Added";
//
//                        echo '<script  type="text/javascript">
//
//                         function   myfunc()
//                            {
//                            window.location="news.php";
//                            }
//                            setTimeout(myfunc(),2000);
//
//                              </script>';
//                    } else {
//                        echo "Failed";
//                    }
//                }
//            }

    $sql = "INSERT INTO news (title, body, url) VALUES ('$title', ' $cleaned_body', '$url')";
    $result = $database->query($sql);
    if ($result) {
        echo "Added";

        echo '<script  type="text/javascript">          
         
                         function   myfunc()
                            {
                            window.location="news.php";
                            }
                            setTimeout(myfunc(),2000);
                         
                 </script>';
    } else {
        echo "Failed";
    }
}


//        function check_url($url_str){
//            if(!empty($url_str)){
//                if(!preg_match("/\b(?:(?:https?):\/\/ |www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i" ,$url_str)){
//                    return "Invalid URL: You must begin with either http or https";
//                }
//            }
//        }


?>
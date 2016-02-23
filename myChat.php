<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Chat - Customer Module</title>
<link type="text/css" rel="stylesheet" href="css/styleChat.css" />

<!-- http://code.tutsplus.com/tutorials/how-to-create-a-simple-web-based-chat-application--net-5931 -->


</head>
<body> 
<?php
    session_start();

    function loginForm() {
        echo'
    <div id="loginform">
        <form action="myChat.php" method="post">
            <p>Please enter your name to continue:</p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" />
            <input type="submit" name="enter" id="enter" value="Enter" />
        </form>
    </div>
     ';
    }

    if (isset($_POST['enter'])) {
        if ($_POST['name'] != "") {
            $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
        } else {
            echo '<span class="error">Please type in a name</span>';
        }
    }
    
    if (isset($_SESSION['name'])) {
        if (isset($_GET['logout'])) {

            //Simple exit message
            $fp = fopen("log.html", 'a');
            fwrite($fp, "<div class='msgln'><i>User " . $_SESSION['name'] . " has left the chat session.</i><br></div>");
            fclose($fp);

            session_destroy();
            header("Location: myChat.php"); //Redirect the user
        }
    }








//    if (isset($_SESSION['name'])) {
//        $text = $_POST['text'];

//        $fp = fopen("log.html", 'a');
//        fwrite($fp, "<div class='msgln'>(" . date("g:i A") . ") <b>" . $_SESSION['name'] . "</b>: " . stripslashes(htmlspecialchars($text)) . "<br></div>");
//        fclose($fp);
//    }




//    session_start(); working in the post.php file
//    if(isset($_SESSION['name'])) {
//      if(isset($_POST['text'])) {
//        $text = $_POST['text'];
//      // console_log($test);
       
//        $fp = fopen("log.html", 'a');
//        fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>" .$_SESSION['name']. "</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
//        fclose($fp);
//      }
//    }
    
    
?>
      
    
    
    
    
    
    
  
    
<?php
    if (!isset($_SESSION['name'])) {
        loginForm();  
    } else {
?>    
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b> <?php echo $_SESSION['name']; ?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox"><?php
            if (file_exists("log.html") && filesize("log.html") > 0) {
                $handle = fopen("log.html", "r");
                $contents = fread($handle, filesize("log.html"));
                fclose($handle);
              
                echo $contents;
            }
             
    ?></div>
     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
</div>
    
   
    
    
    
    
    
    
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<!-- <script src ="js/jquery-1.7.2.min.js"</script> -->
<!--<script src="js/jQuery-1.12.1.js"</script> -->

<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
    
    
    
    
    
    
    
    
    
    
 //If user wants to end session
 
    $("#exit").click(function(){
       // console.log("we are here");
    	var exit = confirm("Are you sure you want to end the session?");
    	if(exit==true){window.location = 'myChat.php?logout==true'};		
    });    

    $("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
              
                //set data to post.php 
		$.post("post.php", {text: clientmsg});
                // set message to zero again
		$("#usermsg").attr("value", "");
		return false;
    });


      
   
    
   

 
        
        
 //Load the file containing the chat log
 //   	function loadLog(){		
 //             setInterval (loadLog, 2500);	//Reload file every 2500 ms o
 //   		$.ajax({
 //   			url: "log.html",
 //   			cache: false,
 //   			success: function(html){		
 //   				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
 //   		  	}       
 //       
 //               }
 //       )};
        
        //Load the file containing the chat log
    	function loadLog(){
    		setInterval (loadLog, 2500);	//Reload file every 2500 ms or x	
    		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
    		$.ajax({
    			url: "log.html",
    			cache: false,
    			success: function(html){		
    				$("#chatbox").html(html); //Insert chat log into the #chatbox div	
    				
    				//Auto-scroll			
    				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
    				if(newscrollHeight > oldscrollHeight){
    					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
    				}				
    		  	},
    		});
    	}
   
});
    
 
//});
</script>
<?php
}
?>
</body>
</html>
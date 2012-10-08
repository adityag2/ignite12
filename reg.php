<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ignite'12</title>
        <style type="text/css">
            .g{
                text-decoration: blink;
}
.r{
    color: pink,red,blue;
}
div.transbox
 {
 width:1088px;

 margin:0px 20px;
 background-color: black;
 border:1px solid black;
 /* for IE */
 filter:alpha(opacity=50);
 /* CSS3 standard */
 opacity:0.9;

 }
div.transbox p
{
 margin:0px 20px;
 font-weight:bold;
 color:white ;
}



        </style>
    </head>
    <body text="white">
        <?php include("header.php"); ?>
        <center>    <div class="transbox">
        
     <?php   $myvar = $_POST['n1']; ?>
        <h1>Register Your self for the event</h1>
    
         <form id="form1" name="form1" method="post" action="data.php">
             
             <h2>
                 Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="t1" id="t1"><br><br>
             College Name &nbsp; &nbsp; &nbsp; <input type="text" name="t2" id="t2"><br><br>
             Branch &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
             
             <select name="t3" id="t3" >
        <option value="CSE">Computer Science</option>
        <option value="ME">Mechanical</option>
        <option value="CE">Civil</option>
        <option value="IT">IT</option>
        <option value="ECE">ECE</option>
        <option value="EE">Electrical</option>
        <option value="PE">Production</option>
      </select><br><br>
      Year &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
             <select name="t4" id="t4">
             <option value="1">1st year</option>
        <option value="2">2nd year</option>
        <option value="3">3rd year</option>
        <option value="4">4th year</option>
             </select>
        <br><br>
             Email-id &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
             <input type="text" name="t5" id="t5"><br><br>
             Contact no &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
             <input type="text" name="t6" id="t6"><br><br>
             <input type="hidden" name="t7" value="<?=$myvar ?>" />
			 <input type="submit" name="btnRegister" id="btnRegister" value="Register" />
             <input type="submit" value="Submit"><br><br>
             </h2>
         </form>
         
         <br /><br />
         <br />
        
         </div>
        </center>
 
    </body>
</html>

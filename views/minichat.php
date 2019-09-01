
<?php
require_once("verification.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <link rel="stylesheet" type="text/css" href="header_style.css">
    <link rel="stylesheet" type="text/css" href="chat_style.css">
    <link rel="stylesheet" type="text/css" href="footer_style.css">
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    <?php require_once("header.php")?>
    <br><br><br><br>
<section>
    <center><h1>CHAT</h1></center><br/><br/>
    <form action="minichat_post.php" method="post">
        <center><table>
            <tr><td>Pseudo</td><td><input type="text" name="pseudo" id="pseudo" value="<?php echo $_SESSION['user'];?>" disabled /></td></tr>
             <tr style="width: 100%"><td>Message</td><td><input type="text" name="message" id="message" style="width: 100%" required /></td></tr>
       

       
    </table></center>
     <center><input type="submit" value="Envoyer" /></center>
    </form>
    </section>
   <br/><br/><br/> <center><div id="messagePost">
       <table style="width: 100%;padding: 4px">
   
<?php

	require_once("../tools/connection.php");

$link=connection();
            $req="SELECT  * FROM message ORDER BY ID DESC LIMIT 0, 10;";
             $execution = mysqli_query($link, $req) or die(mysqli_error($link));

             while($data = mysqli_fetch_array($execution)){

	echo '<tr style="text-align:justify; background-color: silver; padding: 4%;width="100%" "><td style="width="100%""><strong>' . htmlspecialchars($data[1]) . '</strong>  <br/>' . htmlspecialchars($data[2]) . '<br/><br/><i>'.htmlspecialchars($data[3]).'</i></td></tr>';
}

//$reponse->closeCursor();

?>

</table> 
 </div></center>
 <br><br><br>
<?php require_once("footer.php")?>
    </body>
</html>
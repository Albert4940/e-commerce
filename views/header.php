
      <div class="log" >
            
                <div id="img"><a href="panier.php"><img src="../img/acha.png" width="40"></a></div>

                <?php 
                    ///$nb = nbCom($_SESSION['idVend']);
                    //echo'<li id"nb" style="margin-right:7%;size:7px;margin-top:15px;"></li>';
                echo '<div id="logbtn">';
                    if(isset($_SESSION['user']))
                        echo'<div id="login"> USER : '.$_SESSION['user'].' </div id="logout"><a href="logout.php"><input type="button" id="home" value="LOGOUT" style="background-color:  red;"/></a>';
                    else
                        echo'<div id="login"><a href="login.php"><input type="button" id="home" value="LOGIN" style="background-color:  #2ed573;"/></a></div>';
                     echo "</div>";
                ?>
            
                </div>


        <div class="wrapper">
            <label for="show-menu" class="show-menu">Show Menu</label>
            <input type="checkbox" id="show-menu">
            <ul class="navigation" id="m">
              <li><a href="index.php">HOME</a></li>
                <li><a href="collections.php">COLLECTIONS</a></li>                
                <li><a href="loisir.php">LOISIR</a></li>
                <li><a href="minichat.php">CHAT</a></li>
            </ul>
            

        </div>

for($i=0;$i<count($userExplode)-1;$i++){
            $user = mysql_query("select userid,username from users where userid = ".$userExplode[$i]." ");
            $user = mysql_fetch_array($user);
            $userLoc = mysql_query("select userLocation from userinfo where userid = ".$userExplode[$i]." ");
            $location = mysql_fetch_array($userLoc);
            $locationExplode = explode("~",$location['userLocation']);

//the displayed output is working correctly so I know it's setting $user['userid'] properly 
            echo '<form method="post"><table><tr><td><a href="profile.php?userid=' . $user['userid'] . '">' . $user['username'] . '</a></td>
                <td>' . $locationExplode[0] . ', ' . $locationExplode[1] . '</td>
                <td><input type="hidden" name="userReq" value='.$user['userid'].'></td>
                <td><input type="submit" name="accept" value="Accept Request" ></td>
                <td><input type="submit" name="decline" value="Decline Request" ></td></tr>';   
            }
                echo '</table></form>';
        }
            if(isset($_POST['accept'])){
                echo $_POST['userReq']; //displays user 2 even if I click user 1
                    }
            if(isset($_POST['decline'])){
                echo $_POST['userReq']; //also displays user 2 even if i click user 1 
            }   
     }
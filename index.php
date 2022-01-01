<?php
session_start();
if(isset($_POST['checker'])&&$_POST['checker']==12)
{
  $_POST['checker']=0;
  header('Location:https://playbollywood.herokuapp.com/?mark=0&Start=Start');

}
?>
<!DOCTYPE HTML>
<html>
   <link rel='stylesheet' type='text/css' href='styles1.css'>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Spectral:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Libre+Franklin:wght@100;300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
<head>
  <style>

  .content
  {
    background:rgba(255,255,255,0.7);
    width:70%;
    border-radius: 50px;
  }
  body
  {
    /* margin:0px; */
     /* color: white; */
    font-size:1vw;
      background:url('8728.jpg');
      background-repeat:round;  /* Background Image Will not repeat */
      background-attachment: fixed;  /* Background Image will stay fixed */
      background-size: cover;
       /* background-size: 100%; */
       image-rendering: -webkit-optimize-contrast;
  }
  .ol
  {
      font-family: 'Spectral', serif;
  }
  .guess
  {
    font-family: 'Spectral', serif;
    font-size: 50px;
  }
  .bolly

  {
    font-size: 70px;
    font-family: "Libre Franklin";
     font-weight: 400;
     color:#d9001b;
       width: 80%;
  }
  h1{
    font-family: arial;
  }

    body,h1
    {
        margin:0;
        /* padding:0; */
        height: 100%;

    }
    .guesstext
    {
      color:#d9001b;
      font-weight: bold;
      display: inline;
    }
    .btn1{
      border: none;
      font-family: "Roboto",sans-serif;
      font-size: 18px;
      font-weight: bold;
      background:#d9001b;
      width: 80px;
      padding:20px;
      text-align: center;
      text-decoration: none;
      text-transform: uppercase;
      color:#fff;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      -webkit-transform-duration:0.3s;
      transition-duration: 0.3s;
      -webkit-transition-property:box-shadow,transform;
    }
    .btn1:hover, .btn1:focus ,.btn1:active
    {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      -webkit-transform:scale(1.1);
      transform: scale(1.1);
    }
    .btn2{
      border:none;
      /* font-family: "Roboto",sans-serif; */
      /* font-size: 18px; */
      font-weight: bold;
      background:#d9001b;
      width: 120px;
      padding:20px;
      text-align: center;
      text-decoration: none;
      text-transform: uppercase;
      color:white;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      -webkit-transform-duration:0.3s;
      transition-duration: 0.3s;
      -webkit-transition-property:box-shadow,transform;

    }
    .btn2:hover, .btn2:focus ,.btn2:active
    {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      -webkit-transform:scale(1.1);
      transform: scale(1.1);
    }

    .text-container h1{
      font-size: 120px;
      color:rgba(225,225, 225,0.1);
      background-image: url('bg2.jpg');
      background-size:contain;
      background-repeat: repeat-x;
      -webkit-background-clip:text;
      animation: animate 15s linear infinite;

    }
    @keyframes animate{
      0%
      {
        background-position: left 0px top 10px;
      }
      40%
      {
        background-position: left 800px top 10px;
      }
    }
    .text-container
    {
      text-align: center;
    }
    .btn,.btn1
    {
      font-family: 'Scope One',serif;
      font-size: 20px;

    }

    .btn2
 {
   font-family: 'Scope One',serif;
   font-size: 20px;
 }

  </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
  <title>BollyWood</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script language="javascript">
  function disable()
  {
    $(document).ready(function(){
    $("#letters :submit").prop("disabled", true);
    });
  }
  </script>
</head>

    <!-- <a class="btn" onclick="pop()">Show Box</a> -->

  <!-- <div id='box'>
      <span class="ion-checkmark-round">
          <h1>Good Job</h1>
          </span>
          <a class="close" onclick="pop()">close</a>
  </div> -->
  <script type="text/javascript">

    var c=0;
    function pop(x)
    {
      if(c==0)
      {
        document.getElementById("box").style.display="block";
        c=1;
      }
      else {
        document.getElementById("box").style.display="none";
        c=0;
        window.location.href="https://playbollywood.herokuapp.com/?mark=0&Start=Start&";
          }
    }
  </script>
<Center>
  <body>
    <div class="full">
    <div class='container'></div>
  <div class='text-container'>
    <h1>PLAY BOLLYWOOD</h1>
  </div>
<input type="hidden" name="OldLetters" value="">
<form action="index.php" method="POST" id="bw" name="bollywood" >
<input type="hidden" name="mark" value=0>

<div class="content">

  <?php

    if(isset($_POST['change']))
    {
                $_SESSION['count']=0;
                session_destroy();
                session_unset();
    }
  if(!isset($_POST['streak']))
  {
    $_POST['streak']=0;
  }
    if(isset($_POST['end']))
  {
    if($_POST['end']==0)
    {
        //header('Location:http://localhost/files/git/uniquerandom.php?mark=0&Start=Start');
		
    }
  }
  if(!isset($_SESSION['oldLetters']))
  $_SESSION['oldLetters']="";
  if(!isset($_SESSION['count']))
  {
    $_SESSION['count']=9;
  }
  function GETmovie()
  {
            if(!isset($_SESSION['movie']))
            {
                          $connect=mysqli_connect("us-cdbr-east-05.cleardb.net","b1a142f1bac86d","7f2c1843","heroku_711e99c5734cbf2");
                          //$db=mysqli_select_db($connect,"bollywood");
                          $query="SELECT * from bollywood";
                          $query_run=mysqli_query($connect,$query);
                          $num_rows=mysqli_num_rows($query_run);
                          $n=rand(0,$num_rows);

                          $query="SELECT Mname from bollywood where Mid=$n";
                          $query_run=mysqli_query($connect,$query);
                          $data=mysqli_fetch_assoc($query_run);
                          if(is_null($data['Mname']))
                          GETmovie();

                          $data=preg_replace('/[^ \w]+/', '', $data['Mname']);
                          return $data;
          }
  }

  function oldletter()
  {
    $ol="";
    if(isset($_POST['LetterGuessed']))
    {

        if(isset($_SESSION['oldLetters'])&&!str_contains($_SESSION['oldLetters'],$_POST['LetterGuessed']))
        {
          $_SESSION['movie']=strtoupper($_SESSION['movie']);
          $_SESSION['oldLetters']=$_SESSION['oldLetters']." ".$_POST['LetterGuessed'];
          $ol=$_SESSION['oldLetters'];
        }
        else if(isset($_SESSION['oldLetters']))
        {
          $ol=$_SESSION['oldLetters'];
        }
    }
    echo "<div class='ol'><font size=18>Your Old Letters are";
    if(isset($_SESSION['oldLetters']))
    {
      echo $ol."<br></font></div>";
    }
  }
  function setmovie()
  {
    if(!isset($_SESSION['movie']))
      {
        $_SESSION['movie']=GETmovie();
      }
  }
  function guessmovie()
  {
    $guess="";
    if(isset($_SESSION['movie']))
    {
        $movie=strtoupper($_SESSION['movie']);
            for($i=0;$i<strlen($movie);$i++)
              {
                        if($movie[$i]==' ')
                        {
                          $guess[$i]='/';
                        }
                        else if($movie[$i]=='A'||$movie[$i]=='E'||$movie[$i]=='I'||$movie[$i]=='O'||$movie[$i]=='U')
                        {
                          $guess[$i]=strtoupper($movie[$i]);
                        }
                        else
                        {
                        $guess[$i]='_';
                        }
              }
        if(!isset($_SESSION['guess1']))
          {
          $_SESSION['guess1']=$guess;
         }
    }
  }
  function checkwinlose()
  {
    echo "<div class=result><font size=18>";
    if(isset($_SESSION['guess1'])&&!str_contains($_SESSION['guess1'],'_'))
    {

      unset($_POST['$LetterGuessed']);
      echo "You Win";
      $_SESSION['count']=9;
        echo"
                <div id='box'>
               <span class='ion-checkmark-round'>
                  <h1>You Win</h1>
                  <h5>Movie : ".$_SESSION['movie']."</h5>
                  </span>
                  <a class='close' onclick='pop()'>close</a>
          </div>
  ";
        echo "<SCRIPT LANGUAGE='javascript'>pop();</SCRIPT>";
        session_unset();
        session_destroy();
        echo "<form name='check' method=POST><input type='hidden' name='end' value='0'></form>";
          $_POST['streak']++;
      }
      if(isset($_SESSION['count'])&&$_SESSION['count']==0)
      {
        echo "You Lose"."<br>";
        unset($_POST['$LetterGuessed']);
        $_SESSION['count']=9;
        echo"
                <div id='box'>
               <span class='ion-checkmark-round'>
                  <h1>You Lose</h1>
                  <h5>Movie:".$_SESSION['movie']."</h5>
                  </span>
                  <a class='close' onclick='pop()'>close</a>
          </div>
  ";      echo "<SCRIPT LANGUAGE='javascript'>pop();</SCRIPT>";

        echo $_SESSION['movie'];
        if(isset($_SESSION))
        {
          session_unset();
          session_destroy();
        }
        echo "<form name='check' method=POST><input type='hidden' name='end' value='0'></form>";
        $_POST['streak']=0;

      }
        $_POST['LetterGuessed'] = array();
        echo "</div></font>";
  }
  function checkguessmovie($x)
  {
    if(isset($_POST['LetterGuessed']))
    {
        oldLetter();
    }
              $mark=1;
              if(isset($_SESSION['guess1']))
              {
                echo "<div class='guess'><font size=15>";
                    for($i=0;$i<strlen($_SESSION['guess1']);$i++)
                  {
                      if(isset($_POST['LetterGuessed']))
                        {
                        $LetterGuessed=$_POST['LetterGuessed'];
                            if($_SESSION['movie'][$i]==$LetterGuessed)
                              {
                                  $_SESSION['guess1'][$i]=$LetterGuessed;
                                  $mark=0;
                              }
                        }
                    echo $_SESSION['guess1'][$i]." ";
                }
                 echo "</div></font>";
              }
              if($x==0)
              {
                  if($mark==1&&isset($_SESSION['count']))
                  {
                  $_SESSION['count']--;
                  }
              }
  }
  function bolly()
  {

    $text="BOLLYWOOD";
    echo "<br>";
    echo "<div class='bolly'><font size=20>";
    if(isset($_SESSION['count']))
    for($i=0;$i<9-$_SESSION['count'];$i++)
    {
      echo $text[$i];
    }
    echo "</div></font>";
  echo "<br>";
  }
  function letters()
  {
    echo "<div id=letters>";
    for($x=0;$x<26;$x++)
    {
          if($x%6==0)
          {
            echo"<br><br>";
          }
          $letter=chr($x+65);
          echo '<input type="submit" id="LetterGuessed"  class="btn1" name="LetterGuessed" value="'.$letter.'">';
          echo "&nbsp &nbsp &nbsp";

    }
  echo "<br><br>";
    for($x=0;$x<10;$x++)
    {
        echo "<input type='submit' name='LetterGuessed'  class='btn1'  value='".$x."'>"." &nbsp &nbsp	";
    }
  echo "</div>";
  }

  if(isset($_SESSION['movie']))
  GETmovie();
  setmovie();
  guessmovie();
  echo "<br><Br>";
  if(!isset($_SESSION['lastletter']))
  {
    $_SESSION['lastletter']="";
  }
  if(isset($_POST['LetterGuessed'])&&isset($_SESSION['lastletter']))

  {
    if($_SESSION['lastletter']==$_POST['LetterGuessed'])
    {

      $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');
      if($pageRefreshed == 1)
      {
        // header('Location:http://localhost/files/git/uniquerandom.php?mark=0&Start=Start');
        $pageRefreshed=0;
      }

      if(isset($_SESSION['guess1']))
      {
        if(isset($_POST['LetterGuessed']))
        {
            oldLetter();
         }
        echo "<div class='guess'><font size=15>";
        for($i=0;$i<strlen($_SESSION['guess1']);$i++)
        {
          echo $_SESSION['guess1'][$i]." ";
        }
        echo " </div></font>";
      }
    }
    else
    {
      checkguessmovie(0);
    }
  }
  else
  {
    if(isset($_SESSION['guess1']))
    {
      if(isset($_POST['LetterGuessed']))
      {
          oldLetter();
      }
      echo "<div class='guess'><font size=15>";
      for($i=0;$i<strlen($_SESSION['guess1']);$i++)
      {
        echo $_SESSION['guess1'][$i]." ";
      }
      echo " </div></font>";

    }
  }
  checkwinlose();
bolly();
  letters();

  if(isset($_POST['streak']))
  {
  }
  if(isset($_POST['LetterGuessed']))
  {
  $_SESSION['lastletter']=$_POST['LetterGuessed'];
  }
  echo "<br>
   <input type='submit' name='change' class='btn2' value='Change'>
  </center>";

   ?>
</div>
</body>
</html>

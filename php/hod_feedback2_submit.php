<?php

$name=$_POST["fac_name"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techdb";
$score=$_POST["hod_score"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql="UPDATE facultyinfo SET SCORE3 = '$score' WHERE NAME='$name' ";


if ($conn->query($sql) === TRUE) {
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <script type="text/javascript">
        document.body.innerHTML = '';
    </script>
    <div class="container">
      <h2>SUCCESSFULLY SUBMITTED</h2>
      <p><b>to go back</b></p>
      <button type="button" id="link-btn"><a href="../faculty_login.html">click here</a></button>
    </div>


    <style media="screen">


            *{
           padding : 0px;
           margin : 0px;
           text-decoration: none;
            }


       .container {
        background-color :  rgba(102, 255, 102,0.7);
         height : 140px;
         width : 500px;
        position : relative;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        top : 200px;
        left : 400px;
       }


  h2 {
        position : absolute;
        font-family:'Jaapokki subtract';
        letter-spacing: 2px;
        top : 30px;
        left : 70px;
       color : #0099ff;

  }

     p {
       position: absolute;
       top : 83px;
       left : 160px;
      font-size: 18px;
      color : #3333ff;
     }


       button {
         position : absolute;
         top : 81px;
         left : 250px;
         background-color : white;
         color : black;
         font-size: 15px;
         border-radius : 2px;
         border : 2px solid green;
         padding : 2px;
       }


         button:hover {
           background-color: green;
           color: white;
           box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);


         }



    </style>
  </body>
</html>


<?php

} else {
    echo "Error updating record: " . $conn->error;
}


?>

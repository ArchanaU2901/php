<?php
    session_start();
    error_reporting(0);
    include('connection.php');
?>

<div class="form">
 
<form action="" method="POST"> 
  <h1>Login</h1>
  <p id="alert"></p>
    <input type="text" name="sid" Placeholder="Please Enter Student I'd" ><br><br>
    <input type="password" name="password" Placeholder="Please Enter Password" > <br><br>
    
    <button type="submit" name="submit" value="LOGIN">LOGIN</button>
</form>
</div>
<?php
   

   if (isset($_POST['submit'])){
    $s_id=$_POST['sid'];
    $psd=$_POST['password'];
   
    
    $query="SELECT studentid , pass FROM login1 WHERE studentid='$s_id' And pass='$psd' ";

    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
  
    
    if ($total==1){
            $_SESSION['id']= $s_id;
          
          
      header ('location:col.php');

    }
     else{
    echo'<script type ="text/javascript">';
       echo 'document.getElementById("alert").innerHTML="# Student id or Password is wrong please check else contact to adminstrator"';
       echo '</script>';

    } 
     }
?>
<style>
  body{
    text-align:center;
    justify-content:center;
    margin:5em 0em;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: top;
    background-image: url(pic.jpg);
    width: 100%;
    height: auto;
    font-family: Arial, Helvetica;
    letter-spacing: 0.02em;
      font-weight: 400;
    -webkit-font-smoothing: antialiased;
     
  }

   
  
  #alert{
    color:red;
  }
  form>input{
    height: 3em;
    width: 30em;
    text-align: center;
    border:2px solid black;
    background:transparent;
    border-radius:36px;
    transition: 0.3s;

 }
input:focus{
  
    outline: none;
    color:rgb(0, 80, 253);
    border: 2px solid cyan;
    border-bottom-color: #2196f3;
    border-left-color: #2196f3;
    border-right-color: cyan;
    border-top-color: cyan;
    border-top-left-radius: 21em;
    border-bottom-right-radius: 21em;
    box-shadow:0 0 10px  #2196f3;
}
 

button{
  height:3em;
  width:12em;
  border-radius:36px;
  background:transparent;
  border-top-color:blueviolet;
  border-bottom-color:aquamarine;
  font-weight:bold;
 
}
button:focus{
  outline:none;
  border:2px solid cyan;
  background-color:cyan;
  box-shadow:0 0 20px cyan;
}
button:hover{
  border:2px solid green;
  background-color:rgb(149, 241, 241);
  box-shadow:0 0 20px rgb(29, 236, 236);
  border-top-color:blueviolet;
  border-left-color: blueviolet;
  border-bottom-color:rgb(50, 69, 238);
  border-right-color: rgb(50, 69, 238);

}
.form {
    background: linear-gradient( #858282, transparent);
    width: 46%;
    margin: 14em 29em;
    padding: 12px;
    color: white;
    box-shadow: 0 0 59px #80e3cc;
    border-top-left-radius: 79px;
    border-bottom-right-radius: 79px;
    border-bottom-color: #ba32d1;
    border-top-color:blue;
}
</style>
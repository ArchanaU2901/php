<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css  ">
    <title>html</title>
</head>
<body>
<nav class="top">
    <ul>
        
        <a href="#" class="current">home</a>
        <a href="#">home</a>
        <a href="#">home</a>
        <a href="index.php"> Library  </a>
        <a href="lout.php" class="log">LOGOUT</a>
     </ul>
     
</nav>
<br>

 
 
<?php
 
  
  session_start();
  error_reporting(0);
  include('connection.php');
  $profile=$_SESSION['id'];
  

  
  
    if ($profile==true) {

    }
    else{
        header('location:login.php');
    }
    
 echo "<p> Wellcome You are login as " .$profile.   "</p>"; 
 
  $query="SELECT * FROM login1 WHERE studentid='$profile'";
  $data = mysqli_query($conn,$query);
  $result = mysqli_fetch_assoc($data);
  

?>
 
<br><br><img  src="<?php echo $result ['picsource']; ?>" class="img" width= "300" height= "200" ><br><br>
<div class="content">
  <img src="clg.jpg" alt="">

<div class="text">
  <h3>ABOUT COLLEGE</h3><br>
  <p class="para">To enlarge the technical education base, Government of Uttarakhand established Kotabagh Polytechnic, <br> in October 2003 exclusively for women.
    <br>
    Currently Government Polytechnic Kotabagh is offering diploma courses in two streams <br>i.e. Diploma in Computer Science & Engineering and Diploma in Electronics Engineering.
    <br><br>
    <h2>The institute is affiliated to Uttarakhand Board of Technical Education, Roorkee and approved by AICTE.</h2> </p>
</div> 
 
  <div class="box">
     
     <span>FEE RECIPT</span>
  </div>
  <div class="flex">
    <span>STUDY MATERIAL</span>
  </div>
  <div class="boxes">
    <span>EXAM NOTIFICATION</span>
  </div>
  <div class="flexes">
    <span>HOSTEL</span>
  </div>
 </div> 
  <div class="footer">
    
  </div>
 
</body>
</html>

<style>
  p{
    text-align:center;
  }

 .content{
  background-color: #e5e4e4;
    width: 98em;
    height: auto;
    margin: 0em 1em;
 } 
 img{
  margin: 1em 2em;
    width: 94em;
    height: 33em;
 }

.text{
  background-color: #b9dbdb;
  width: 80em;
  height: 30em;
  margin: 2em 9em;
  padding-top: 1em;
  border-radius: 18px;
  border-style: dotted;
  border-color: #4caf50;
  box-shadow: aliceblue;
  display: block;
  box-shadow: 2px solid blue;
  box-shadow: 0 0 20px #e16c48;
} 
h3{
  text-align: center;
    padding: 1em 0em;
    color: #e13872;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 25px;
    
}
h2{
  font-size: 24px;
  color: black;
  text-align: center;
  text-transform: none;
  font-family: 'Merriweather', serif;
}
.para{
  color: rgb(8 100 100);
    text-align: center;
    text-transform: none;
    font-size: 23px;
    font-family: 'Gideon Roman';
}
.box{
  display: flex;
    position: absolute;
    margin: 0em 31em;
    height: 12em;
    width: 18em;
    top: 79em;
    border-radius: 8px;
    box-shadow: 0 0 12px darkred;
    background-color: rgb(229, 231, 192);   
}
.box:hover{
    cursor: pointer;
  transform: scale(1.05 );
   
}
.box span::before{
    transition: 0.5s all ease;
    position: absolute;
    top: 156px;
    /* width: 14em; */
    left: 25%;
    right: 16%;
    /* margin-bottom: 4em; */
    /* margin: 1em 0em; */
    bottom: 80px;
    height: 0em;
    padding: 1em 0em;
    opacity: 0;
    content: '';
    background-color: #e36f96;
}
  .box span:nth-child(2){
    transform: rotate(180deg);
    height: 12em;  
  }
  
  .box:hover span::before{
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
  }
  
.flex{
  display: flex;
    position: absolute;
    height: 12em;
    width: 18em;
    margin: 0em 50em;
    top: 79em;
    box-shadow: 0 0 12px darkred;
    border-radius: 8px;
    background-color: rgb(177, 231, 189);
}
.flex:hover{
    cursor: pointer;
  transform: scale(1.05 );
   
}
.flex span::before{
    transition: 0.5s all ease;
    position: absolute;
    top: 156px;
    /* width: 14em; */
    left: 25%;
    right: 16%;
    /* margin-bottom: 4em; */
    /* margin: 1em 0em; */
    bottom: 80px;
    height: 0em;
    padding: 1em 0em;
    opacity: 0;
    content: '';
    background-color: #e36f96;
}
  .flex span:nth-child(2){
    transform: rotate(180deg);
    height: 12em; 
   
  }
  
  .flex:hover span::before{
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1; 
  }
  
.boxes{
  position: absolute;
    display: flex;
    height: 12em;
    margin: 0em 69em;
    width: 18em;
    top: 79em;
    box-shadow: 0 0 12px darkred;
    border-radius: 8px;
    background-color: rgb(235 197 194);
}
.boxes:hover{
  cursor: pointer;
  transform: scale(1.05 );
   
}
.boxes span::before{
  transition: 0.5s all ease;
  position: absolute;
  top: 156px;
  /* width: 14em; */
  left: 25%;
  right: 16%;
    /* margin-bottom: 4em; */
    /* margin: 1em 0em; */
  bottom: 80px;
  height: 0em;
  padding: 1em 0em;
  opacity: 0;
  content: '';
  background-color: #e36f96;
}
.boxes span:nth-child(2){
  transform: rotate(180deg);
  height: 12em; 
   
  }
  
.boxes:hover span::before{
  transition: 0.5s all ease;
  left: 0;
  right: 0;
  opacity: 1;
    
   
  }
.flexes{
    display: flex;
    position: absolute;
    height: 12em;
    width: 18em;
    top: 79em;
    margin: 0em 12em;
    box-shadow: 0 0 12px darkred;
    background-color: rgb(187, 225, 243);
    border-radius: 8px;
}
.flexes:hover{
  cursor: pointer;
  transform: scale(1.05 );
 
}
.flexes span::before{
  transition: 0.5s all ease;
  position: absolute;
  top: 156px;
  /* width: 14em; */
  left: 25%;
  right: 16%;
  /* margin-bottom: 4em; */
  /* margin: 1em 0em; */
  bottom: 80px;
  height: 0em;
  padding: 1em 0em;
  opacity: 0;
  content: '';
  background-color: #e36f96;
}
.flexes span:nth-child(2){
  transform: rotate(180deg);
  height: 12em; 
 
}

.flexes:hover span::before{
  transition: 0.5s all ease;
  left: 0;
  right: 0;
  opacity: 1; 
}

span{
  color: #302f2f;
    font-family: ui-monospace;
    margin: 5em 6em;
    font-size: 16px;
}
.footer{
  display: flex;
    height: 5em;
    width: 99em;
    padding: 3em 0em;
    margin: 24em 0em;
    background-color: #302f2f;
    position: absolute;
   
   
}
</style>



 
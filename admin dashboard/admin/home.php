<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    

</head>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
#madmin{
    height: 40px;
    color: white
}

body {
    font-family: 'Poppins', sans-serif;
}

.data {
    background: white;
    height: 100vh;
    padding-left: 300px;
    padding-top:85px;
    background-size: fixed;
    background-repeat: no-repeat;
    transition: 0.5s;
}

nav {
    background:rgb(104,5,5);
    line-height: 80px;
    position: fixed;
    width: 100%;
}


label {
    line-height: 80px;
    font-size: 30px;
    color: white;
    font-weight: 200;
    margin-left: 50px;
    cursor: pointer;
}

nav ul {
    float: right;
    margin-right: 20px;
}

nav ul li {
    line-height: 80px;
    margin: 0 10px;
}

nav ul li a {
    color: white;
    font-size: 20px;
    padding: 6px 15px;
    font-weight: 600;
    background-color: rgb(104,5,5);
    border-radius: 3px;
}

nav ul li a:hover {
    background-color: rgba(229, 229, 229, 0.205);
    color: white;
    transition: 0.5s;
}

.side-menu {
    position: fixed;
    background: rgb(104,5,5);
    width: 300px;
    height: 100%;
    margin-top: 80px;
    transition: 0.5s;
}

.side-menu center img {
    height: 120px;
    width: 120px;
    border-radius: 50%;
    margin-top: 30px;
    border: 3px solid white;
}
p{
    padding:10px;
    color : rgba(255,255,255,0.6);
}

.side-menu center  {
    color: white;
}

.side-menu a {
    display: block;
    line-height: 60px;
  
}

.side-menu a:hover {
    background: rgba(217, 211, 211, 0.119);
    padding-left: 20px;
    transition: 0.8s;
}

.side-menu span {
    font-size: 20px;
    margin-left: 10px;
    color: white;
}

.side-menu i,i {
    font-size: 20px;
    margin-left: 20px;
    color: white;
}

nav .menu-bar {
    float: right;
    margin-top: 20px;
    display: none;
    margin-right: 20px;
}

#menu {
    display: none;
}

.side-menu .Logout {
    display: none;
}

@media (max-width:750px) {
    .side-menu a span,span {
        display: none;
    }

    .side-menu center {
        display: none;
    }

    .side-menu {
        width: 100px;
        transition: 0.5s;
    }

    .side-menu a i {
        display: block;
        line-height: 80px;
        text-align: center;
        margin-left: 0;
        font-size: 35px;
    }

    .data {
        padding-left: 100px;
        transition: 0.5s;
    }
}

</style>
<body>
<input type="checkbox" id="menu">
      <nav>
      
          <ul>
              <li>
                <a href="logout.php" >
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
            </a>
               
            </li>
            
          </ul> 
          <label for="menu" class="menu-bar">
             <i class="fa fa-bars"></i> 
            </label>
      </nav>
      <div class="side-menu">
          <center> 
            <img src="" alt="logo"> 
          <br>
          <br>
          <a href="manageadmin.php" id="madmin">ADMIN</a>
              <p><?php echo $_SESSION['name'];?></p>
          </center> <br>
          </a>
             <a href="mail.php">
             <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <span>Mail box</span>
            </a> 
            </a>
             <a href="edithome.php">
             <i class="fa fa-pencil" aria-hidden="true"></i>
                <span>Edit home page</span>
            </a> 
          <a href="add.php" >
            <i class="fa fa-plus-square"></i>
            <span>Add post</span>
        </a>
           <a href="delete.php">
           <i class="fa fa-edit"></i>
            <span>Edit post</span>
        </a>
             <a href="select.php">
             <i class="fa fa-picture-o" aria-hidden="true"></i>
                <span>Create album</span>
            </a> 
            <a href="addphoto.php">
            <i class="fa fa-plus" aria-hidden="true"></i>
                <span>Add photo</span>
            </a> 
            </a>
             <a href="deleteimage.php">
             <i class='fa fa-remove'></i>
                <span>Delete album</span>
            </a>
             <a href="add_admin.php">
             <i class="fa fa-user-plus"></i>
                <span>Add user</span>
            </a> 
      </div>
        
    
        
    
 
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
<?php include 'home.php';?>
<?php
include 'db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete ="delete from users where id='$id'";
    $que= mysqli_query($conn,$delete);
}

$select= "select * from users where user_type = 'admin'";
$query =mysqli_query($conn,$select);

$selectu= "select * from users where user_type = 'user'";
$queryu =mysqli_query($conn,$selectu);

?>

<style>




table{
    width:100%;
    border-collapse:collapse;
    font-size:1.1rem;

}
#delete{
    color:rgb(104,5,5);
   font-weight:bold;
    padding:0.2rem;

}
#delete:hover{
    border-bottom:3px solid rgb(104,5,5);
    font-weight:bold;
    transition: 0.5s;
}
#update{
    color:green;
   font-weight:bold;
    padding:0.2rem;

}
#update:hover{
    border-bottom:3px solid green;
    font-weight:bold;
    transition: 0.5s;
}
th,td{
    padding:30px;
    text-align:center;
    border-bottom :5px solid rgba(0,0,0,0.4);
    
}
tr:nth-child(even){
    background-color:rgba(104,5,5,0.3)
}
tr:nth-child(odd){
    background-color:rgba(255,255,255,0.3);
}
.topic{
 text-align:center;
 font-size:40px;
 border-bottom:5px solid rgb(105,4,4);

}

</style>
<div class="data">
<div class="topic">USERS</div>
<table>
    <thead>
        <th>User name</th>
        <th>User type</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th></tH>
        

    </thead>
    <tr>
        <?php
        $numu = mysqli_num_rows($queryu);
        if($numu>0){
            while($result = mysqli_fetch_assoc($queryu)){
                echo"
                <tr>
                <td>".$result['user_name']."</td>
                <td>".$result['user_type']."</td>
                <td>".$result['name']."</td>
                <td>".$result['email']."</td>
                <td>
                <a href='manageadmin.php?id=".$result['id']."' id='delete'>Delete</a>
                <a href='adminupdate.php?id=".$result['id']."' id='update'>Update</a>
                </td>
                </tr> 
                
                
                ";
            }
        }
        ?>
    </tr>
</table>
<br><br><br>
<div class="topic">ADMINS</div>
<table>
    <thead>
        <th>User name</th>
        <th>User type</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th></tH>
        

    </thead>
    <tr>
        <?php
        $num = mysqli_num_rows($query);
        if($num>0){
            while($result = mysqli_fetch_assoc($query)){
                echo"
                <tr>
                <td>".$result['user_name']."</td>
                <td>".$result['user_type']."</td>
                <td>".$result['name']."</td>
                <td>".$result['email']."</td>
                <td>
                <a href='manageadmin.php?id=".$result['id']."' id='delete'>Delete</a>
                <a href='adminupdate.php?id=".$result['id']."' id='update'>Update</a>
                </td>
                </tr> 
                
                
                ";
            }
        }
        ?>
    </tr>
</table>
</div>
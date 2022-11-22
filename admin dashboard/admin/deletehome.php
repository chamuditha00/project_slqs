<?php include 'home.php';?>
<?php
include 'db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete ="delete from home where img_id='$id'";
    $que= mysqli_query($conn,$delete);

}

$select= "select * from home";
$query =mysqli_query($conn,$select);



?>

<style>
    .data {
    background: white;
    height: 100vh;
    padding-left: 300px;
    padding-top:85px;
    background-size: fixed;
    background-repeat: no-repeat;
    transition: 0.5s;
}
table{
    width:100%;
    border-collapse:collapse;
    font-size:1.1rem;

}
thead{
    background-color: white;
}
#delete{
    color:rgb(104,5,5);
    font-weight:bold;
    padding:0.2rem;

}
#delete:hover{
    border-top: none;
    border-bottom:3px solid rgb(104,5,5);
    font-weight:bold;
    transition: 0.5s;
}
th,td{
    padding:30px;
    text-align:center;
    border-bottom :5px solid rgba(0,0,0,0.4);
    
}
tr:nth-child(even){
    background-color:rgba(104,5,5,0.3);
}

@media (max-width:750px) {

    .data {
        padding-left: 100px;
        transition: 0.5s;
    }
}
</style>
<div class="data">
<table>
    <thead>
        <th>Image number</th>
        <th>Topic</th>
        <th>About</th>
    
        <th>Action</th>
    </thead>
    <tr>
        <?php
        $num = mysqli_num_rows($query);
        if($num>0){
            while($result = mysqli_fetch_assoc($query)){
                echo"
                <tr>
                <td>".$result['img_id']."</td>
                <td>".$result['topic']."</td>
                <td>".$result['about']."</td>
                <td>
                <a href='deletehome.php?id=".$result['img_id']."' id='delete'>delete</a>
                </td>
                </tr> 
                
                
                ";
            }
            
        }
        ?>
    </tr>
</table>
</div>
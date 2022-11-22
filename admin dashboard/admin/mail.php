<?php include 'home.php';?>

<style>

::-webkit-scrollbar{
    display: none;
}

     .data {
    background: gray;
    height: 100vh;
    padding-left: 350px;
    padding-top:85px;
    transition: 0.5s;
    background:fixed;
}

  h1{
    border-bottom:3px solid rgb(104,5,5);
    margin-top: 40px;
    font-size:40px;
  }
  
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }
  
  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }
  
  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }
  
  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }
  
  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }
  

   

 

  
.mail{
    background-color: rgba(230,213,213,0.5);
    border-radius: 20px;
}
 

  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 750px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
    .data {
        padding-left: 100px;
        transition: 0.5s;
        padding-left: 150px;
        padding-top:85px;
    }
}

@media (max-width:550px){
  .date{
    padding-left: 10px;
    transition:0.5s;
  }
}
</style>

                    <div class="data hold">
                    <br>  <br>  <br>
                    <?php
include 'db_conn.php';
$select = "SELECT * FROM mail  order by mail_id desc";
$query =mysqli_query($conn,$select);
$num = mysqli_num_rows($query);
        if($num>0){
            foreach($query as $result){
              ?>
               <div class="mail">
              <div class="row">
               
                  <div class="col-50">
                    <h1><?php echo $result['name'];?></h1>  <br>
                    <div class="col-50">
                    <h3><?php echo $result['subject'];?></h3><br>
                    </div>
                    <div class="col-50">
                    <h5><?php echo $result['email'];?></h5><br>
                    </div>
                    <div class="col-50">
                    <?php echo $result['message'];?><br><br>
                    </div>
                    <div class="col-50">
                    <h4><?php echo $result['date'];?></h4><br>
                    </div>
                    </div>
                    </div>
              </div>
              <br>  <br>  <br> 
                    <?php
                    
            }
          }
          ?>
</div>
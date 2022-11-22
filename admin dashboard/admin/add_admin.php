



<?php include 'home.php' ?>


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
  input,select{
    width: 48%;
  
    font-size: 16px;
    font-size: Max(16px, 1em);
    font-family: inherit;
    padding: 0.25em 0.5em;
    background-color: #fff;
    border: 2px solid rgba(104,5,5);
    border-radius: 4px;
    transition: 180ms box-shadow ease-in-out;
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
  
  
  input[type=text]{
   
   
    border-radius: 3px;
  }
  textarea{
    width: 74%;
    padding:10px;
  }
  
  label {
    margin-top: 20px;
    display: block;
    font-size:20px;
  }
  
  .inputs,.cat{
    color: black;
    margin-left: 0px;
    font-weight:bold;
  }
 
  
  hr {
    border: 1px solid lightgrey;
  }
  

 
 button{
 width: 100px;
 height: 30px;
 padding: 10px,10px,10px,10px;
 margin-top:100px;
 left:50%;
 transform translate(-50,-50);
position: absolute;
 background: rgba(104,5,5);
 color: rgb(241, 237, 237);
 border-radius: 5px;
 border: none;
 }
 button:hover{
    font-size :14px;
   opacity: 0.9;
   transition:0.5s;
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
  
      <h1>ADD USER</h1>
      
    <form id="add" action="admin.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      
        <div class="col-50">
          <label class="cat">User-Name</label>
          <input type="text" id="title" name="user_name" placeholder="user name"/>
        </div>
        <div class="col-50">
        <label class="inputs">Full name</label>
            <input type="text" placeholder="Full Name" id="name" name="name" />
        
        </div>
      </div>
      <div class="row">
        <div class="col-50">
        <label class="inputs">Password</label>
          <input type="password" id="password" name="password" placeholder="password"/>
         
        </div>
        <div class="col-50">
        <label class="inputs">user type</label></label>
        <select id="user_type" name="user_type">
            <option value="" disabled selected>Select type</option>
            <option value="admin">admin</option>
            <option value="user">user</option>
            
          </select>
        </div>
      </div>
      <div class="row">
      <div class="col-50">
        <label class="inputs">Email</label></label>
          <input type="email" id="email" name="email" placeholder="email"/>
        </div>
      </div>
      <div class="row">
            <button id="save" type="submit"  name="add">ADD</button>
        </div>
</form>
    </div>
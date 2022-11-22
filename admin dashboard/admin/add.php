<?php include 'home.php' ?>

<style>
  .data {
    background: gray;
    height: 100vh;
    padding-left: 350px;
    padding-top:85px;
    transition: 0.5s;
    background:repeat scroll;
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
    font-weight:bold
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
 
  button{
  width: 60px;
  height: 30px;
  padding: 5px;
  background: rgba(104,5,5);
  color: rgb(241, 237, 237);
  border-radius: 5px;
  border: none;
  }
  button:hover{
    opacity: 0.8;
  }

@media (max-width:550px){
  .date{
    padding-left: 10px;
    transition:0.5s;
  }
}
</style>
<div class="data hold"> 
      <h1>ADD POST</h1>
    <form id="add" action="event.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      
        <div class="col-50">
          <label class="cat">category</label>
          <select id="category" name="category">
            <option value="" disabled selected>Select Category</option>
            <option value="artical">artical</option>
            <option value="job in kuwait">job in kuwait</option>
            <option value="CPD">CPD</option>
            <option value="APC">APC</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="col-50">
          <label class="inputs">Title</label>
          <input type="text" id="title" name="title" placeholder="Title"/>
        </div>
      </div>
      <div class="row">
        <div class="col-50">
          <label class="inputs">Image</label>
          <input type="file" accept="image/*" id="image" name="image" />
        </div>
        <div class="col-50">
            <label class="inputs">Date</label>
            <input type="date" placeholder="date" id="date" name="date" />
        </div>
      </div>
      <div class="row">
        <div class="col-50">
          <label class="inputs">Reference doucment</label>
          <input type="file" id="pdf" name="pdf" />
        </div>
    </div>
      <div class="row">
        
        <div class="col-75">
            <label class="inputs">Description</label>
            <textarea type="text" placeholder="" id="description" name="description" rows="20" >     
            </textarea>
        </div>
      </div>
     
      <div class="">
            <button id="save" type="submit"  name="add">post</button>
        </div>
</form>
    </div>
    


        
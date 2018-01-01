 <!--  <div class="parallax-container">
      <div class="parallax"><img src="<?php echo base_url(); ?>html/images/login.jpg"></div>
     
    </div>
 -->
 <div class="container-fullwidth login-container">
<div class="row login-row">
  <div class="admin-log-title">
    <ul>student register</ul>
  </div>
  <div class="login-card">

     <div class="row log-form-row">
    <form class="col s12 login-col" name="regformm" id="regformm" enctype="multipart/form-data" onsubmit="return validateForm()">
      <div class="row">

         <!-- <div class="input-field col s12">
          <input id="user_reg_id" name="user_reg_id" type="text" class="validate">
          <label for="user_reg_id">User Register Id</label>
        </div> -->
         <div class="input-field col s12">
          <input id="user_reg_id" name="user_reg_id" type="text" class="validate">
          <label for="user_reg_id">User Reg Id</label>
        </div>

        <div class="input-field col s12">
          <input id="fname" name="fname" type="text" class="validate">
          <label for="fname">First Name</label>
        </div>

         <div class="input-field col s12">
          <input id="lname" name="lname" type="text" class="validate">
          <label for="lname">Last Name</label>
        </div>

         <div class="input-field col s12">
          <input id="rollno" name="rollno" type="text" class="validate">
          <label for="rollno">Roll No.</label>
        </div>


        <div class="input-field col s12">
          <select name="class" id="class">
            <option value="" disabled selected>Choose your option</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="3">4</option>
            <option value="3">5</option>
            <option value="3">6</option>
            <option value="3">7</option>
            <option value="3">8</option>
            <option value="3">9</option>
            <option value="3">10</option>
            <option value="3">11</option>
            <option value="3">12</option>
            <option value="3">13</option>
            <option value="3">14</option>
            <option value="3">15</option>

          </select>
          <label>class</label>
        </div>

         <div class="input-field col s12">
          <select name="div">
            <option value="" disabled selected>Choose your option</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
             <option value="3">D</option>
              <option value="3">E</option>
          </select>
          <label>Div</label>
        </div>


           <div class="input-field col s12">
          <input id="mobile" name="mobile" maxlength="10" type="text" class="validate">
          <label for="mobile">mobile</label>
          </div>

         <div class="input-field col s12">
          <input id="user_id" name="user_id" type="text" class="validate">
          <label for="user_id">User Id</label>
        </div>


       <div class="wrapper">
          <button class="form-control" id="keygen" type="button">Generate API Key</button>
          <input class="form-control" id="apikey" name="password" type="text" name="password" value="" placeholder="Click on the button to generate a new API key ..."  />
        </div> 
      

         <div class="input-field col s12">
          <input id="images" name="images" type="file" class="validate">
         
        </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="address" name="address" class="materialize-textarea"></textarea>
          <label for="address">Address</label>
          </div>
        </div>


      </div>
     
    </form>
  </div>
        

  </div>
</div>
</div>



<?php include('header2.php'); ?>


<title>Add New Users</title>




<div class="banner1 bkRed">
	<i class="material-icons menuBtn1">menu</i>
	<span>User Management</span>
</div>




<div class="content1">
	
	<div class="boxHead1">
		<div class="boxHeader1 bDSkyBlue">New User</div>
	</div>
              
     <div class="boxBody1">
                
          <div class="profile">

            <div class="label" style="width: 100%;">
                <span class="hint">Create a brand new user and add to the LMS</span>
            </div>


                        <div class="prob">
                          <div class="label">First Name:</div>
                          <div class="input"><input type="text"></div>
                        </div>

                        <div class="prob">
                          <div class="label">Last Name:</div>
                          <div class="input"><input type="text"></div>
                        </div>


                        <div class="prob">
                          <div class="label">Gender:</div>
                          <div class="input">
                              <select name="" id="">
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                              </select>
                          </div>
                        </div>



                        <div class="prob">
                          <div class="label">Email Address:</div>
                          <div class="input"><input type="email"></div>
                        </div>


                        <div class="prob">
                          <div class="label">Password:</div>
                          <div class="input"><input type="password"></div>
                        </div>

                        <div class="prob">
                          <div class="label">Comfirm Password:</div>
                          <div class="input"><input type="password"></div>
                        </div>


                        <div class="prob">
                          <div class="label">Send User notification:</div>
                          <div class="input">

                                <label class="containers">&emsp;Send the new user an email about their account.
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>

                          </div>
                        </div>



                        <div class="prob">
                          <div class="label">Select Roles:</div>
                          <div class="input">
                              <select name="" id="">
                                <option value=""></option>
                                 <option value="male">Admin</option>
                                 <option value="female">Employee</option>
                              </select>
                          </div>
                        </div>


                        <div class="prob">
                            <div class="label">
                               <button class="btn1 btnMedium bkSkyBlue">Add</button>
                            </div>
                        </div>

                        


                  </div>


      </div>
    
                



</div>




<?php include('footer.php'); ?>
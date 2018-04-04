<?php include('header.php'); ?>
<script src="js/w3.js"></script>

<title>Course Management | Assign Courses</title>

<style>
	.menuTab1 a:nth-child(1) .pageTab1 {
	   background: #AB192D;
	}
</style>



<div class="banner1" style="background: #6f6caa;">
	<i class="material-icons menuBtn1">menu</i>
	<span>Assign Courses</span>
</div>


<div class="content1">




	<div class="boxHead1">
		<div class="boxHeader1 bDPurple">Course Assignment</div>
	</div>

	<div class="boxBody1">

			<span style="color: blue; width: 100%;font-size: 12px;">Select course(s) to assign below:</span>


			<div class="tanHead">
				<input type="text" class="searchT" placeholder="search courses...">

				<div class="pinA">
					 <span>Sort by learning area:</span> 
					 <select name="" id="" oninput="w3.filterHTML('.tanBodyS', '.leftOff', this.value)">
					 	<option value="communication">Communication</option>
					 	<option value="Finance">Finance</option>
					 </select>
				</div>
			</div>


			<div class="tanBody tanBodyS">
				<div class="leftOff">
					<sup>communication</sup>
					<label class="containers">Financial Accounting_NG
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>


				<div class="leftOff">
					<sup>finance</sup>
					<label class="containers">Business Writing Skills
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>



				<div class="leftOff">
					<sup>communication</sup>
					<label class="containers">ChatPay
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>



				<div class="leftOff">
					<sup>communication</sup>
					<label class="containers">Customer Satisfaction_NG
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>



				<div class="leftOff">
					<sup>finance</sup>
					<label class="containers">Retail Products SB_plc
					  <input type="checkbox">
					  <span class="checkmark"></span>
					</label>
				</div>
				

			</div>



			<span style="color:blue; width: 100%;font-size: 12px;margin-top: 20px;">Specify learner group from the dropdown below:</span>

			<div class="tanBody" style="height: auto;overflow-y: auto;margin-top: 15px;">
				<select name="" id="" class="toggleSelect select11">
					<option value="">Selection Type</option>
					<option value="group">Group</option>
					<option value="gender">Gender</option>
					<option value="grade">Grade</option>
					<option value="role">Role</option>
					<option value="individuals">Individuals</option>
					<option value="region">Region</option>
				</select>

				<select name="" id="" class="toggleSelect select12" disabled="true">
					<option value="">Select a group</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
				</select>


				<select name="" id="" class="toggleSelect select13" disabled="true">
					<option value="">Select a department</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
				</select>



				<button class="btn1 btnMedium btnWhite pullRight">Save learner group</button>
			</div>



			<span style="color:blue; width: 100%;font-size: 12px;margin-top: 20px;">Choose course priority</span>
			
				<div class="tanBody" style="height: auto;overflow-y: auto;margin-top: 15px;">
					<form action="">
					
						<input type="radio" name="prior"><span class="radio">Assigned</span>
						<input type="radio" name="prior"><span class="radio">Recommended</span>

					</form>
				</div>
				
			


			<div class="underlineBtn">
				<button class="nextBtn btn1 btnMedium btnBlue"> &emsp; Assign &emsp; </button>
			</div>

	</div>






</div>


<?php include('footer.php'); ?>
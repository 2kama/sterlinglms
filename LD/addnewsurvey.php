<?php include('header.php'); ?>


<title>New Surveys </title>




<div class="banner1 bkSkyBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Survey/Course Feedback</span>
</div>




<div class="content1" style="min-height: 90vh;">
	
	<div class="boxHead1">
		<div class="boxHeader1 bDGreen">
			Create New Survey
		</div>
	</div>

	<div class="boxBody1">

			
		<div class="formArea">

			<div class="formBox1 fullForm">
				<label for="">Survey title:</label>
				<input type="text" placeholder="" />
			</div>

			<div class="formBox1 fullForm">
				<label for="">Survey Description:</label>
				<input type="text" />
			</div>

			<div class="formBox1 halfForm">
				
					<label for="">Select survey type</label>
					<select name="" id="">
						<option value="implant"></option>
					</select>
			

			</div>

			<div class="formBox1 halfForm">

				<div class="formBox1 halfForm">
					<label for="">Survey Expiry</label>
					<input type="date" />
				</div>

			</div>


			
		</div>
		


	</div>



	<div class="boxHead1">
		<div class="boxHeader1">
			Set Questions
		</div>
	</div>

	<div class="boxBody1">

			<div class="formArea">
				<div class="formBox1 fullForm">
					<label for="">Answer type:</label>
					<input type="radio" name="upload" checked /><span class="radio">Option box</span>
					<input type="radio" name="upload" /><span class="radio">Radio button</span>
					<input type="radio" name="upload" /><span class="radio">Text area</span>
				</div>


				<div class="formBox1 fullForm">
					<label for="">Question 1:</label>
					<input type="text" placeholder="" />
				</div>

				<div class="formBox1 fullForm">
					<label for="">Option 1:</label>
					<input type="text" placeholder="" />
				</div>

				<div class="formBox1 fullForm">
					<label for="">Option 2:</label>
					<input type="text" placeholder="" />
				</div>

				<div class="formBox1 fullForm">
					<label for="">Option 3:</label>
					<input type="text" placeholder="" />
				</div>

				<div class="formBox1 fullForm">
					<label for="">Option 4:</label>
					<input type="text" placeholder="" />
				</div>

			
				

			</div>


			<div class="underlineBtn">
				<button class="btnMedium bkBlack btn1 nextBtn" style="margin-right: 20px;"> + Question</button>
				<button class="nextBtn btn1 btnMedium bkSkyBlue">Add Survey</button>
			</div>

	</div>


</div>






<?php include('footer.php'); ?>
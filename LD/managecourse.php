<?php include('header.php'); ?>


<title>Manage Courses</title>


<style>
	.menuTab1 a:nth-child(1) .pageTab1 {
	   background: #AB192D;
	}
</style>




<div class="banner1 bkSkyBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Manage Courses</span>
</div>





<div class="content1">
	

	<div class="boxHead1">
		<div class="boxHeader1 bDGreenishBlue">Create</div>
	</div>

	<div class="boxBody1">

		<a href="addcourse">
			<div class="bigMenu1">
				<div class="smallMenu1">
					<i class="material-icons">library_add</i>
					<span>New Course</span>
				</div>
			</div>
		</a>


		<a href="learningarea">
			<div class="bigMenu1">
				<div class="smallMenu1">
					<i class="material-icons">folder_open</i>
					<span>New Learning Area</span>
				</div>
			</div>
		</a>



		<a href="javascript:;">
			<div class="bigMenu1">
				<div class="smallMenu1">
					<i class="material-icons">folder</i>
					<span>New Learner Group</span>
				</div>
			</div>
		</a>



	</div>





	<div class="boxHead1">
		<div class="boxHeader1 bDGreenishBlue">Assign</div>
	</div>

	<div class="boxBody1">

		<a href="assigncourses">
			<div class="bigMenu1">
				<div class="smallMenu1">
					<i class="material-icons">swap_horiz</i>
					<span>Assign Course</span>
				</div>
			</div>
		</a>


	</div>







	<div class="boxHead1">
		<div class="boxHeader1 bDGreenishBlue">Manage course contents</div>
	</div>

	<div class="boxBody1">

		<a href="#">
			<div class="bigMenu1">
				<div class="smallMenu1">
					<i class="material-icons">info</i>
					<span>Course Reviews</span>
				</div>
			</div>
		</a>


		<a href="reviewcourses">
			<div class="bigMenu1">
				<div class="smallMenu1">
					<i class="material-icons">delete</i>
					<span>View/Review Courses</span>
				</div>
			</div>
		</a>



		<a href="#">
			<div class="bigMenu1">
				<div class="smallMenu1">
					<i class="material-icons">assignment_returned</i>
					<span>Third Party Integration</span>
				</div>
			</div>
		</a>



	</div>


</div>




<?php include('footer.php'); ?>
<?php include('header.php'); ?>


<title>Review Courses</title>


<style>
	.menuTab1 a:nth-child(1) .pageTab1 {
	   background: #AB192D;
	}
</style>




<div class="banner1 bkSkyBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Manage Courses</span>
</div>




<div class="content1" style="background: #f0f3f5;min-height: 90vh;">
	
	<div class="boxHead1">
		<div class="boxHeader1 bDOrange">Course List</div>
	</div>

	<div class="boxBody1">

			
			<div class="tanHead tanHP" style="background: #fff;border-bottom:0px solid transparent;">
				<input type="text" class="searchT" placeholder="Course Search ...">

				<div class="pinA">
					 <span>Filter by:</span> 
					 <select name="" id="">
					 	<option value="">Choose a filter</option>
					 	<option value="communication">Communication</option>
					 	<option value="Finance">Finance</option>
					 </select>
				</div>
			</div>
			
			<div class="tableRanch">
				<table class="courselist">
				<thead>
					<tr>
						<td>Name</td>
						<td>Learning Area</td>
						<td>Module Count</td>
						<td>Due Date</td>
						<td>Pass Grade</td>
						<td>Exam Retake Count</td>
						<td>Action</td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Course Name 1</td>
						<td>Learning Area 1</td>
						<td>3</td>
						<td>16-02-18</td>
						<td>65%</td>
						<td>3</td>
						<td>
							<span><i class="material-icons">edit</i> Edit</span>
							<span>&emsp;</span>
							<span><i class="material-icons">delete</i> Delete</span>
						</td>
						
						
					</tr>



					
				</tbody>
			</table>
			</div>



			<div class="counter">
				<span>View </span>

				<select name="" id="">
					<option value="10">10</option>
					<option value="10">20</option>
					<option value="10">50</option>
				</select>

				<span>10 of 20</span>

				<i class="material-icons">keyboard_arrow_left</i>

				<i class="material-icons">keyboard_arrow_right</i>

			</div>

	</div>


</div>

<style>

</style>



<?php include('footer.php'); ?>
<?php include('header.php'); ?>

<title>All reports</title>

<link rel="stylesheet" href="css/bootstrap.css">


<div class="banner1 bkPurple">
	<i class="material-icons menuBtn1">menu</i>
	<span>All Reports</span>
</div>



<div class="content1">
	<div class="boxed1">

		<div class="boxHead1">
			<div class="boxHeader1 bDOrange">All Reports</div>
		</div>


		<div class="boxBody1">


			<div class="row">
				
				<div class="col-md-8">
					<form action="">
						<input type="text" class="form-control" placeholder="Search field">
					</form>
				</div>


				<div class="col-md-4">
					<button class="btn col-md-6 offset-md-6 btn-info">Add New Report</button>
				</div>
			</div>

			


				<div class="row" style="padding: 30px;">
					
					<table class="table table-bordered" style="font-size: 14px;">
						<tbody>

							<tr class="bg-primary" style="color: #fff;font-weight: bold;">
								<td>Report title</td>
								<td>Fields</td>
							</tr>
							<tr>
								
								<td>Activity Report</td>
								<td>Staff ID, Staff Name, Department, Group, Grade, Courses (report 
on each courses), No of courses, Status of Courses, No of Views, 
No of attempts</td>
</tr>

<tr>
								<td>Course Overview Report</td>
								<td>Courses (report on each courses), No of Participants</td>
							</tr>

							<tr>
								<td>Grades Report</td>
								<td>Staff ID, Staff Name, Department, Group, Grade</td>
							</tr>
							<tr>
								<td>Logs Report</td>
								<td>Staff ID, Staff Name, Department, Group, Grade, Courses (report on 
each courses), No of courses, Status of Courses, No of Views, 
No of attempts, Date Accessed (day), Time Accessed, Duration, 
Line Manager, Location</td>
</tr>
							  <tr>
								<td>Participation Report</td>
								<td>Staff ID, Staff Name, Department, Group, Grade, Courses (report on 
each courses), No of courses, Status of Courses, No of Views, 
No of attempts, Date Accessed (day), Time Accessed, Duration, 
Line Manager, Location</td>
							  <tr>
								<td>User-wise Course Completion Report</td>
								<td>Staff ID, Staff Name, Department, Group, Grade, Courses (report on 
each courses), No of courses, Status of Courses, No of Views, 
No of attempts, Date Accessed (day), Time Accessed, Score per 
course, Average Score (for multiple courses), Line Manager, Location</td>
							   </tr>
							   <tr>
								<td>User Outline Report</td>
								<td>Staff ID, Staff Name, Department, Group, Grade, Courses (report on 
each courses), No of courses, Status of Courses, No of Views, 
No of attempts, Date Accessed (day), Time Accessed, Score per 
course, Average Score (for multiple courses)</td>
							   </tr>
							   <tr>
								<td>Course access time log report</td>
								<td>Staff ID, Staff Name, Department, Group, Grade, Courses (report on 
each courses), Status of Courses, No of Views, 
No of attempts, Date Accessed (day), Time Accessed, Duration, 
Line Manager, Location</td>
							</tr>
							<tr>
								<td>Course Evaluation Report</td>
								<td>Courses (report on each courses), No of attempts, Date Accessed (day), Time Accessed, No of Participants, Course evaluation score</td>


							</tr>
						</tbody>
					</table>




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




	</div>

</div>


<style>

 tr td:nth-child(first) {
 	 color: #354c98;
 }


</style>
<script src="js/bootstrap.min.js"></script>

<?php include('footer.php'); ?>
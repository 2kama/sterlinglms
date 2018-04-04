<?php include('header.php'); ?>

<title>Generate Reports</title>

<link rel="stylesheet" href="css/bootstrap.css">


<div class="banner1 bkPurple">
	<i class="material-icons menuBtn1">menu</i>
	<span>Generate Reports</span>
</div>



<div class="content1">
	<div class="boxed1">

		<div class="boxHead1">
			<div class="boxHeader1 bDOrange">Generate Report</div>
		</div>


		<div class="boxBody1">

			 		
			
					
					<form action="" class="row">
			 				
							<div class="col-md-6">
								<label for="">Select report type</label>
								<select name="" id="" class="form-control">
									<option value="">Activity Report</option>
									<option value="">Course Overview Report</option>
									<option value="">Grades Report</option>
									<option value="">Log Report</option>
								</select>
							</div>

							<div class="col-md-3">
								<label for="">Start Date</label>
								<input type="date" class="form-control">
							</div>

							<div class="col-md-3">
								<label for="">End Date</label>
								<input type="date" class="form-control">
							</div>


							<div class="col-md-3">
								<label for="">Staff ID</label>
								<input type="text" class="form-control">
							</div>

							<div class="col-md-3">
								<label for="">Department</label>
								<select name="" id="" class="form-control">
									<option value=""></option>
									<option value="">Course Overview Report</option>
									<option value="">Grades Report</option>
									<option value="">Log Report</option>
								</select>
							</div>


							<div class="col-md-3">
								<label for="">Group</label>
								<select name="" id="" class="form-control">
									<option value=""></option>
									<option value="">Course Overview Report</option>
									<option value="">Grades Report</option>
									<option value="">Log Report</option>
								</select>
							</div>


							<div class="col-md-3">
								<label for="">Grade</label>
								<select name="" id="" class="form-control">
									<option value=""></option>
									<option value="">Course Overview Report</option>
									<option value="">Grades Report</option>
									<option value="">Log Report</option>
								</select>
							</div>

							<div class="col-md-4 offset-md-4">
								<button type="submit" class="btn btn-block btn-info" style="margin-top: 30px;">Generate</button>
							</div>

			 			</form>



			 			<div class="row" style="margin-top: 70px;">
			 				
							<div class="col-md-10">
								<p>Showing Activity report for Staff 000003 between 01 /01 / 18 and 01 /02 / 18</p>
							</div>

							<div class="col-md-2">
								<select name="" id="" class="form-control">
									<option value="">Export as</option>
									<option value="">CSV</option>
									<option value="">txt</option>
									<option value="">xlxs</option>
								</select>
							</div>



							<table class="table table-bordered" style="margin-top: 20px;font-size: 14px;">
								<thead class="bg-primary">
									<tr>
										<th>Staff Id</th>
										<th>Staff Name</th>
										<th>Department</th>
										<th>Group</th>
										<th>Grade</th>
										<th>Courses</th>
										<th>No of Courses</th>
										<th>Status of Courses</th>
										<th>No of views</th>
										<th>No of attempts</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>00003</td>
										<td>Yemi Adeola</td>
										<td>Office of the MD/CE</td>
										<td>Office of the MD/CE</td>
										<td>Group HD</td>
										<td>
											ERM - Information..<br>Marketing-Retail...<br>Operations - Offsi...<br>Operations - Fun...<br>Customer Exp..
										</td>
										<td>4</td>
										<td>
											Completed<br>Completed<br>In-progress<br>Completed<br>In-progress
										</td>
										<td>
											10<br>28<br>37<br>5<br>110
										</td>
										<td>
											1<br>3<br>1<br>2<br>1
										</td>
									</tr>
								</tbody>
							</table>
			 			</div>

			 		
			 			
						


		</div>




	</div>

</div>


<style>




</style>
<script src="js/bootstrap.min.js"></script>

<?php include('footer.php'); ?>
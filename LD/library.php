<?php include('header2.php'); ?>

<title>Multi Tenant User</title>




<div class="banner1 bkSkyBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Multi-Tenant User</span>
</div>



<div class="content1">
	<div class="boxed1">


		<div class="boxHead1">
			<div class="boxHeader1 bDSkyBlue">All Courses</div>
		</div>


		<div class="boxBody1">
			
			<a href="" class="toggle active">View all</a>
			<a href="" class="toggle">Active Courses</a>
			<a href="" class="toggle">Inactive Courses</a>


			<div class="tableRanch">
				<table class="orga">
					<thead>
						<tr>
							<td>Course title</td>
							<td>Learning Area</td>
							<td>Date created</td>
							<td>Status</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Course 1</td>
							<td>communication</td>
							<td>21-04-18 02:49</td>
							<td><span>active</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>

						<tr>
							<td>Course 2</td>
							<td>Management</td>
							<td>21-04-18 02:49</td>
							<td><span class="ina">inactive</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>


						<tr>
							<td>Course 1</td>
							<td>communication</td>
							<td>21-04-18 02:49</td>
							<td><span>active</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>

						<tr>
							<td>Course 2</td>
							<td>Management</td>
							<td>21-04-18 02:49</td>
							<td><span class="ina">inactive</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>

						<tr>
							<td>Course 1</td>
							<td>communication</td>
							<td>21-04-18 02:49</td>
							<td><span>active</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>

						<tr>
							<td>Course 2</td>
							<td>Management</td>
							<td>21-04-18 02:49</td>
							<td><span class="ina">inactive</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>


						<tr>
							<td>Course 1</td>
							<td>communication</td>
							<td>21-04-18 02:49</td>
							<td><span>active</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>

						<tr>
							<td>Course 2</td>
							<td>Management</td>
							<td>21-04-18 02:49</td>
							<td><span class="ina">inactive</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>


						<tr>
							<td>Course 1</td>
							<td>communication</td>
							<td>21-04-18 02:49</td>
							<td><span>active</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>

						<tr>
							<td>Course 2</td>
							<td>Management</td>
							<td>21-04-18 02:49</td>
							<td><span class="ina">inactive</span></td>
							<td><a href=""><i class="material-icons">visibility</i> view</a></td>
						</tr>


					</tbody>
				</table>
			</div>

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

<div class="counter"></div>
</div>


<style>


/** this css already exists in the vieworganisation.php **/


a.toggle {
  float: left;
  padding: 10px;
  font-size: 13px;
  color: #444;
  background: #ddd;
  margin-right: 20px;
  border-radius: 15px;
  webkit-border-radius: 15px;
  font-weight: bold;
  margin-bottom: 40px;
}
a.toggle:hover, a.toggle.active {
  background: #0cdae8;
  color: #fff;
}




table.orga {
  width: 100%;
  font-size: 13px;
  float: left;
}
.orga thead {
  width: 100%;
  color: #0094dc;
  font-weight: bold;
  font-size: 13px;
  padding-bottom: 3px;
  padding-top: 3px;
  margin-bottom: 5px;
  background: #fbfbfb;
  border-top: 0px solid transparent;
  float: left;
}
.orga tbody {
  width: 100%;
  float: left;
}
.orga tr {
  width: 100%;
  float: left;
}
.orga tr td {
  padding: 10px;
  float: left;
}
.orga tr td:nth-child(3), .orga tr td:nth-child(2), .orga tr td:nth-child(4), .orga tr td:nth-child(5) {
  width: 17.5%;
}
.orga tr td a {
  color: #00d7ff;
}
.orga tr td:nth-child(1) {
  width: 30%;
}

.orga tbody tr:nth-child(even) {
  background: #fbfbfb;
}
.orga tbody tr:nth-child(odd) {
  background: #fff;
}
.orga tbody tr {
   margin-top: 0px;
}
.orga tbody tr td a button {
  margin-top: -5px;
  float: left;
}
.orga span.ina {
  color: #bbb;
  float: left;
}


</style>

<?php include('footer.php'); ?>
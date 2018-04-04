<?php include('header.php'); ?>


<title>Add New Learning Area</title>


<style>
	.menuTab1 a:ntd-child(1) .pageTab1 {
	   background: #AB192D;
	}
</style>




<div class="banner1 bkSkyBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Add New Learning Area</span>
</div>


<div class="backdrop"></div>



<div class="content1">

	<div class="learningArea backdropBox">
		<input type="text" placeholder="New Learning Area">
		<button class="btn1 btnMedium btnGreen" type="submit">Add</button>
	</div>


	<div class="editLearningArea backdropBox">
		<input type="text" placeholder="New Learning Area">
		<button class="btn1 btnMedium bkSkyBlue" type="submit">Update</button>
	</div>


	<div class="deleteLearningArea backdropBox">
		<h2>Are you sure you want to delete this?</h2>
		<button class="btn1 btnMedium btnRed" type="submit">Yes</button>
	</div>


	<div class="boxHead1">
		<div class="boxHeader1 bDGreenishBlue">Learning Areas</div>
	</div>




	<div class="boxBody1">

			<table class="org1">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Name</th>
						<th>Course Count</th>
						<th>Action</th>
						<th><button class="btn1 bkSkyBlue addNewLearningArea">Add New</button></th>
						
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td>Random Learning Area</td>
						<td> 5 </td>
						<td>
							<a href="javascript:;"><i class="material-icons">edit</i><span class="editLA">Edit &emsp;</span></a>
							<a href="javascript:;"><i class="material-icons">visibility</i><span>View Courses &emsp;</span></a>
							<a href="javascript:;"><i class="material-icons" style="color: red">close</i><span class="deleteLA">delete</span></a>
						</td>
						<td></td>
						
					</tr>

				
				</tbody>
			</table>

		</div>




	




</div>







<?php include('footer.php'); ?>
<?php include('header.php'); ?>


<title>Add Course</title>

<style>
	.menuTab1 a:nth-child(1) .pageTab1 {
	   background: #AB192D;
	}
</style>



<div class="backdrop"></div>


<div class="banner1 bkPurpleBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Advert Management</span>
</div>


<div class="content1">

	<div class="boxHead1">
		<div class="boxHeader1 bDGreen">Add New</div>
	</div>


	<div class="boxBody1">
		
		



			<div class="formBox1 halfForm">
				
					<label for="">Add New Banner:</label>
					<input type="text" placeholder="Enter title here" />
			
				
			</div>

			<div class="formBox1 halfForm">

			
					<label for="location">Banner Location</label>
					<select name="" id="">
						<option value="header">Header</option>
						<option value="sidebar">Sidebar</option>
					</select>
			
				
			</div>



			<div class="formBox1 halfForm">

				<label for="">Upload Course Image <i>.png, .jpg, .bmp</i></label>
				
					<div class="ImgPreview">
						 <i class="material-icons">image</i>
						 <span>No Preview</span>
					</div>


					
					<input type="file" placeholder="" />

					<button style="background: #DA6086;">Upload</button>


			
			</div>

			

			<div class="formBox1 halfForm">
					<label for="">Select page(s) to display banner</label>

					
						<div class="leftOff">
							<label class="containers">All
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>



					<div class="tanBody tanBodyS">
						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>

						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>


						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>


						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>


						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>

						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>

						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>

						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>


						<div class="leftOff">
							<label class="containers">Employee dashboard
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>


						
						

					</div>
				
				
			</div>



			<div class="formBox1 halfForm">
				<label for="">Publish on:</label>

				<div class="halfForm">
					<label for="">From</label>
					<input type="date">
				</div>

				<div class="halfForm">
					<label for="">Time</label>
					<input type="time">
				</div>

				<div class="halfForm">
					<label for=""><br>To</label>
					<input type="date">
				</div>

				<div class="halfForm">
					<label for=""><br>Time</label>
					<input type="time">
				</div>
			</div>


			

			<div class="underlineBtn">
				<button class="nextBtn btn1 btnMedium bkSkyBlue">Add</button>
			</div>

			




			

	</div>



</div>


<style>
.ImgPreview {
  width: 80%;
  float: left;
  margin-bottom: 10px;
  margin-left: 10%;
  border: 2px dashed #ddd;
  text-align: center;
}
.ImgPreview img {
	 max-width: 100%;
	 float: left;
}
.ImgPreview i {
	width: 100%;
	text-align: center;
	font-size: 25px;
	padding-top: 30px;
	color: #eee;
}
.ImgPreview span {
	width: 100%;
	text-align: center;
	font-size: 20px;
	color: #ddd;
	margin-top: 10px;
	margin-bottom: 50px;
	float: left;
}

</style>

<?php include('footer.php'); ?>
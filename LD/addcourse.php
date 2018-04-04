<?php include('header.php'); ?>


<title>Add Course</title>

<style>
	.menuTab1 a:nth-child(1) .pageTab1 {
	   background: #AB192D;
	}
</style>



<div class="backdrop"></div>


<div class="banner1 bkPurple">
	<i class="material-icons menuBtn1">menu</i>
	<span>Add a Course</span>
</div>


<div class="content1">


	<div class="changeModule backdropBox">
		<input type="text">
		<button class="btn1 btnMedium btnGreen" type="submit">Change</button>
	</div>

	<div class="deleteSome backdropBox">
		<h2>Are you sure you want to delete this?</h2>
		<button class="btn1 btnMedium btnRed">Yes</button>
	</div>
	

	<div class="boxBody1">
		
		<div class="progress1">

			<div class="tabloid active">
				<div class="podb">1</div>
				<span>Course details</span>
			</div>

			<div class="tabloid">
				<div class="podb">2</div>
				<span>Upload Course Material</span>
			</div>

			<div class="tabloid">
				<div class="podb">3</div>
				<span>Finish</span>
			</div>

			
			<div class="progressLine1">
				<div class="progressIndicator1"></div>
			</div>

		</div>



		<div class="formArea formArea1">

			<div class="formBox1 fullForm">
				<label for="">Course Title:</label>
				<input type="text" placeholder="" />
			</div>

			<div class="formBox1 halfForm">
				<label for="">Course Description:</label>
				<textarea name="" id="" placeholder="750 characters max..."></textarea>
			</div>

			<div class="formBox1 halfForm">
				<label for="">Available Till:</label>
				<input type="date" placeholder="" />
			</div>

			<div class="formBox1 halfForm">
				<label for="">Select Learning Area</label>
				<select name="" id="">
					<option value="">Communication</option>
					<option value="">Statistics</option>
					<option value="">Finances</option>
				</select>
			</div>


			<div class="formBox1 halfForm">
				<label for="">Upload Course Image <i>.png, .jpg, .bmp</i></label>
				<input type="file" placeholder="" />

				<button>Upload Image</button>
			</div>

			<div class="formBox1 fullForm">
				<label for="">Enter course overview below</label>
				<textarea name="" id="" cols="30" rows="10"></textarea>
			</div>


			<div class="formBox1 fullForm">
				<label for="">Enter Instructional Objectives</label>
				<textarea name="" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="underlineBtn">
				<button class="nextBtn btn1 btnMedium btnDarkPink">Save and Continue</button>
			</div>

			

		</div>


		
		<div class="formArea formArea2">
			
			<div class="formBox1 fullForm">
				<label for="">Course Title:</label>
				<input type="text" placeholder="" value="The title given before" disabled />
			</div>


			<div class="formBox1 fullForm">
				<label for="">Select Module: <i>Select Module:	(Select module name from the dropdown below OR create a new module by typing in the field next to the dropdown)</i></label>
				
				<div class="formBox1 halfForm">
					<select name="" id="">
						<option value="INtorduction">Introduction</option>
					</select>
				</div>


				<div class="formBox1 halfForm">
					<input type="text" placeholder="Enter new module name here..." />
					<button>Create Module</button>
				</div>
			</div>


			<div class="formBox1 fullForm">
				<label for="">Enter topic name<i>(Enter topic name for this course below)</i></label>
				<input type="text" placeholder="">
			</div>


			<div class="formBox1 halfForm">
				<label for="">Content Type<i>(Select content type for this course )</i></label>
				<select name="" id="" class="typeUpload">
					<option value="Text" class="textPart">Text Material</option>
					<option value="Video" class="vidPart">Video Material</option>
					<option value="Quiz" class="quizPart">quiz</option>
				</select>
			</div>


			<div class="formBox1 halfForm relay4">
				<label for="">Add Content<i>(Choose how you want to add content to this topic)</i></label>
				<form action="">
					
					<input type="radio" name="upload" class="fab3" checked><span class="radio">Upload a file</span>
					<input type="radio" name="upload" class="fab4"><span class="radio">Use a Text Editor</span>

				</form>
			</div>


			<div class="formBox1 halfForm">
				
				<div class="relay relay1">
					<label for="">Formats allowed are: <i>xls, .pdf, .docx, .pptx, .csv</i></label>
					<input type="file" name="" id="">
					<button>Upload</button>
				</div>


				<div class="relay relay2">
					<label for="">Format allowed are:<i>mp4, webm, avi, flv</i></label>
					<input type="file" name="" id="">
					<button>Upload</button>
				</div>

				<div class="relay relay3">
					<label for="">Input your text</label>
					<textarea name="" id="" cols="30" rows="10"></textarea>
				</div>

			</div>


			<div class="formBox1 fullForm">
				<button class="endBtn">Add Topic</button>
			</div>


			<div class="boxHead1">
				<div class="boxHeader1 bDPurple">Uploaded Content</div>
			</div>


			<div class="boxBody1">
				

				<div class="nabi">
					<div class="nabiHd">

						<div class="courseSlate">
							<div class="topicNm"><i class="material-icons">keyboard_arrow_down</i> &emsp; Module 1</div>

							<div class="topicAction">
								<i class="material-icons editMe">edit</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>

					</div>

					<div class="nabiBd">
						
						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">slideshow</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">slideshow</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">description</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">description</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">slideshow</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>

					</div>
				</div>





				<div class="nabi">
					<div class="nabiHd">

						<div class="courseSlate">
							<div class="topicNm"><i class="material-icons">keyboard_arrow_down</i> &emsp; Module 2</div>

							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>

					</div>

					<div class="nabiBd">
						
						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">slideshow</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">description</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>

					</div>
				</div>




				<div class="nabi">
					<div class="nabiHd">

						<div class="courseSlate">
							<div class="topicNm"><i class="material-icons">keyboard_arrow_down</i> &emsp; Module 3</div>

							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>

					</div>

					<div class="nabiBd">



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">slideshow</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">slideshow</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">slideshow</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>



						<div class="courseSlate">
					
							<div class="topicNm"><i class="material-icons typei">description</i>Topic 1</div>
							
							<div class="topicAction">
								<i class="material-icons">edit</i>
								<i class="material-icons">visibility</i>
								<i class="material-icons deleteMe" style="color: red;">close</i>
							</div>
						</div>

					</div>
				</div>
				

				

				

			</div>



			<div class="underlineBtn">
				<button class="backBtn btn1 btnMedium btnGrey" style="margin-right: 20px;">Back</button>
				<button class="nextBtn btn1 btnMedium btnDarkPink">Save and Continue</button>
			</div>
			
			

		</div>





		<div class="formArea formArea3">

					<div class="notyClass">You have successfully added a newcourse</div>

					<a href="addcourse"><button class="endNote">Create new Course</button></a>
		</div>
		

			

	</div>



</div>


<?php include('footer.php'); ?>
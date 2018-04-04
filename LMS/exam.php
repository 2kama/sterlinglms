<?php include("header.php"); ?>





<title>LMS | Exam | Exam title goes heres</title>

<div class="wrapper">


	<div class="examBridge">
		<div class="bridgeA">EXAM</div>
		<div class="bridgeB">Exam title goes here</div>
	</div>



	<div class="startExam">
		<h2>Exam Title goes here</h2>

		<div class="col33">
			<div class="nid" style="color:#0091d9;">
				<i class="material-icons">alarm</i> Duration
			</div>
			<div class="nid">
				<span>00:45 mins</span>
			</div>
			
		</div>


		<div class="col33">
			<div class="nid" style="color: #00d200;">
				<i class="material-icons">check</i> Pass Grade
			</div>
			<div class="nid">
				<span>30%</span>
			</div>
		</div>


		<div class="col33">
			<div class="nid" style="color: #ab192d;">
				<i class="material-icons">warning</i> Due date
			</div>
			<div class="nid">
				<span>April 4, 2018</span>
			</div>
		</div>


		<p>
			<b>INTRODUCTIONS:</b> <BR><BR>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
		</p>


		<button class="btn btnLarge btnBlue">Start</button>


	</div>


<style>
   footer {
   	  position: fixed;
   	  bottom: 0;
   }
	.startExam button {
		margin-top: 30px;
	}
	.nid {
		width: 100%;
		text-align: center;
	}
	.nid i {
		 width: 100%;
		 text-align: center;
	}
	.nid span {
		width: 100%;
		text-align: center;
		margin-top: 10px;
	}
	.startExam p {
		margin-top: 27px;
		float: left;

	}
	.startExam {
		position: fixed;
		z-index: 100;
		background: #f7f7f7;
		width: 80%;
		margin-left: 10%;
		max-height: 70vh;
		margin-top: 10vh;
		box-sizing: border-box;
		padding: 4%;
		font-size: 14px;
	}
	.startExam h2{
		width: 100%;
		text-align: center;
		color: #0091d9;
		margin-bottom: 30px;
	}
</style>

<script>
	$(document).ready(function() {
		
		$('.startExam button').click(function() {
			
			$('.startExam').fadeOut();
			$('.examArea').fadeIn();

		});

	});
</script>

	 <div class="examArea" style="display: none;">
  	 
		<div class="indit">
			<span><strong>0</strong> of 10 answered</span>

			<div class="inditBack">
				<div class="inditRun" style="width: 0%;"></div>
			</div>
		</div>


		<div class="questionArea">

			<div class="ques">
				<ol>

					<li id="scroll_1">
						<span>How easy or difficult was it to get in contact with your instructor outside of class? </span>
						<label for=""><input type="radio" name="ques1" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques1" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques1" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques1" id=""> Option 4</label>
					</li>

					<li id="scroll_2">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques2" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques2" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques2" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques2" id=""> Option 4</label>
					</li>

					<li id="scroll_3">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques3" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques3" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques3" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques3" id=""> Option 4</label>
					</li>

					<li id="scroll_4">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques4" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques4" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques4" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques4" id=""> Option 4</label>
					</li>


					<li id="scroll_5">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques5" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques5" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques5" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques5" id=""> Option 4</label>
					</li>

					<li id="scroll_6">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques6" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques6" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques6" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques6" id=""> Option 4</label>
					</li>

					<li id="scroll_7">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques7" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques7" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques7" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques7" id=""> Option 4</label>
					</li>

					<li id="scroll_8">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques8" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques8" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques8" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques8" id=""> Option 4</label>
					</li>

					<li id="scroll_9">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques9" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques9" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques9" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques9" id=""> Option 4</label>
					</li>

					<li id="scroll_10">
						<span>How easy or difficult was it to get in contact with your instructor outside of class?</span>
						<label for=""><input type="radio" name="ques10" id=""> Option 1</label>
						<label for=""><input type="radio" name="ques10" id=""> Option 2</label>
						<label for=""><input type="radio" name="ques10" id=""> Option 3</label>
						<label for=""><input type="radio" name="ques10" id=""> Option 4</label>
					</li>

					<li>
						
					</li>


				</ol>
			</div>

		</div>



		<button class="btnLarge btnBlue btnCurve">Submit</button>


		<div class="indit">
			<span><strong>0</strong> of 10 answered</span>

			<div class="inditBack">
				<div class="inditRun" style="width: 0%;"></div>
			</div>
		</div>



		

  </div>


<div class="content">


 

<script>
	$(document).ready(function() {      
  var window_height = $(window).height();
  $(window).scroll(function() {
    var scrollMiddle = $(window).scrollTop() + (window_height/2);
    $('li[id^="scroll_"]').each(function() {
      elTop = $(this).offset().top;
      elBtm = elTop + $(this).height();
      if (elTop < scrollMiddle && elBtm > scrollMiddle) {
        $(this).css('opacity',"1");
      } else {
        $(this).css('opacity',"0.3");
      }
    });
  });
});
</script>



<style>

.questionArea {
	float: left;
	width: 100%;
	margin-top: 15px;
}
.ques {
	float: left;
	width: 100%;
	margin-bottom: 15px;
	font-size: 16px;
	
}
.ques ol {
	width: 100%;
	float: left;
}
.ques ol li {
	width: 100%;
	float: left;
	margin-bottom: 15px;
	min-height: 150px;
	opacity: 0.3;
}
.ques ol li:nth-child(1) {
	opacity: 1;
}
.ques ol li span {
	color: #0091d9;
	width: 100%;
	float: left;
	margin-bottom: 17px;
	margin-top: -18px;
}
.ques ol li label {
	width: 100%;
	float: left;
	color: #555;
	padding-left: 20px;
	margin-bottom: 7px;
	font-size: 14px;
	font-weight: normal;
	box-sizing: border-box;

}
.ques ol li label input {
	width: 20px;
	float: left;
}
 .examArea {
 	float: left;
 	width: 100%;
 	padding-left: 15%;
 	padding-right: 15%;
 	padding-top: 50px;
 }
 .indit {
 	float: left;
 	width: 100%;
 	font-size: 15px;
 }
 .indit span {
 	float: left;
 	margin-right: 10px;
 }
 .inditBack {
 	float: right;
 	width: 60%;
 	height: 7px;
 	border-radius: 5px;
 	-webkit-border-radius: 5px;
 	background: #ddd;
 }
 .inditRun {
 	float: left;
 	background: #0091d9;
 	height: 100%;
 }
	.menuTab {
    display: none;
  }
  .col2 {
    display: none;
  }
  .examBridge {
  	float: left;
  	width: 100%;
  	margin-bottom: 20px;
  	background: #0091d9;
  }
  .bridgeA {
  	 float: left;
  	 min-width: 150px;
  	 padding: 15px;
  	 font-size: 17px;
  	 font-weight: bold;
  	 background: #333;
  	 color: #fff;
  	 text-align: center;
  	 border-top-right-radius: 30px;
  	 border-bottom-right-radius: 30px;
  	 -webkit-border-top-right-radius: 30px;
  	 -webkit-border-bottom-right-radius: 30px;
  }
  .bridgeB {
  	 color: #fff;
  	 font-size: 15px;
  	 padding: 15px;
  	 float: left;
  }
</style>

<?php include("footer.php"); ?>
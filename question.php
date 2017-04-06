<?php
define("TITLE" , "question | C-star");
include("includes/headerTemplate.php");
include("includes/arrays.php");

function strip_bad_chars( $input) {
	$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
	return $output;
}

if (isset($_GET['item'])){
	$ques = strip_bad_chars($_GET['item']);
	$question = $questions[$ques];
}

?>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

				<div class="panel-group" id="accordion">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> <h3><b><u><?php echo $question[title]; ?></u> </b></h3> </a> </h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">

						<!---  Panel body -->
							<div class="panel-body">
								
								
								<h3><?php echo $question[question]; ?> </h3></br>									
							

									
							
							


							</div>
						</div>
					</div>
					
				</div>

				
			</div>
		</div>
	</div>
	</div>

<?php include("includes/footerTemplate.php")?>

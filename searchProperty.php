<?php include("includes/headerTemplate.php")?>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

				<div class="panel-group" id="accordion">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Search Available Properties </a> </h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">

						<!---  Panel body -->
							<div class="panel-body">
								<form class="form-inline">
									<div class="form-group">
										<div class="col-sm-10">
											<input type="text" width ="150px" class="form-control" id="text" placeholder="< property type >"required = "true">
										</div>
									</div>
									<div class="form-group"> 
										<button type="submit" class="btn btn-info">
											<span class="glyphicon glyphicon-search"></span> Search
										</button>
									</div>
									
								</form>
							</div>
						</div>
					</div>
					
				</div>

				
			</div>
		</div>
	</div>



	<?php include("includes/footerTemplate.php")?>
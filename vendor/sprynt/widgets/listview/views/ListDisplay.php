<?php 
	$this->title = 'ListView Widget';
?>

<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="filter-section" data-toggle="collapse" href="#collapse-filter">
				<h4><a class="collapsed" role="button" data-toggle="collapse" href="#collapse-filter"> Filter Section</a></h4>	
			</div>
			<div id="collapse-filter" class="panel-collapse collapse" role="tabpanel">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group ">
								<div class=""> 
									<input class="form-control" type="search" name="search" placeholder="Search">
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="btn-group "  role="group">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Add filter</button>
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Filter 1</a></li>
									<li><a href="#">Filter 2</a></li>
									<li><a href="#">Filter 3</a></li>
									<li><a href="#">Filter 4</a></li>
									<li><a href="#">Filter 5</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xs-6 col-sm-1 col-md-1">
							<div class="pull-right"><button class="btn">Apply</button>	</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h5>Filters:</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
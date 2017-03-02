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
						<div class="col-xs-6 col-sm-4 col-md-4">
							<div class="form-group ">
								<div class="">
									<input class="form-control" type="search" name="search" placeholder="Search...">
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-3">
							<!-- Alternative dropdown -->
							<!-- <div class="btn-group "  role="group">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Add filter</button>
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#"><input type="checkbox"> Filter 1</a></li>
									<li><a href="#"><input type="checkbox"> Filter 2</a></li>
									<li><a href="#"><input type="checkbox"> Filter 3</a></li>
									<li><a href="#"><input type="checkbox"> Filter 4</a></li>
									<li><a href="#"><input type="checkbox"> Filter 5</a></li>
								</ul>
							</div> -->
								<select class="form-control" data-bind = "options: subfilters, optionsCaption:'Choose filter ...', value: selectedfilter"></select>
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1">
							<div class=""><button class="btn">Apply</button>	</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12" id="sub-filters">
							<span><h5>Filters:</h5></span>
							<div class="row" data-bind= "visible: OnFilterList().length > 0,foreach: OnFilterList">
								<div class="col-xs-4 col-sm-3 col-md-3">
									<div class="pull-left">
										<select class="form-control">
													<option>Sub Filter 1</option>
													<option>Sub Filter 2</option>
													<option>Sub Filter 3</option>
										</select>
									</div>
									<div class="pull-left">
										<a><i class="glyphicon glyphicon-remove-sign glyphicon-white "  data-bind = "click:$root.RemoveSubFilter" ></i></a>

										<!-- alternative  close button-->
										<!-- <button type="button" class="close" aria-label="Close" data-bind = "click:$root.RemoveSubFilter">
  											<span aria- hidden="true">&times;</span>
										</button> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	$this->registerJs(<<< EOT_JS
		//$("#sub-filters").append("<span>Child </span>" + "<span> Child2</span>");

		var viewModel= function(){
			var self = this;

			//This populates Filter select dropdown
			self.subfilters = ko.observableArray(['Filter 1','Filter 2', 'Filter 3','Filter 4',"Filter 5"]);

			//Initialize an observable on the selected filter
			self.selectedfilter = ko.observable();

			//The initializes an empty observable array
			self.OnFilterList = ko.observableArray();

			ko.computed(function(){
				self.OnFilterList.push(self.selectedfilter());

			});

			self.RemoveSubFilter = function(filter){self.OnFilterList.remove(filter)};

		}
		ko.applyBindings(new viewModel());

EOT_JS
	);
?>
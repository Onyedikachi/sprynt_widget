<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForms;
?>
<div class="container">
<table class="col-md-12 table table-bordered">
	<thead>
		<tr>
			<th class="col-md-1"></th>
			<th class="col-md-2">First Name</th>
			<th class="col-md-2">Last Name</th>
			<th class="col-md-2">Department</th>
			<th class="col-md-1">Actions</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><input type="checkbox" value=""></td>
			<td>Olayinka</td>
			<td>Odetola</td>
			<td>Computer Science</td>
			<td><div class="dropdown">
    				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Record Action
    					<span class="caret"></span></button>
    						<ul class="dropdown-menu">
      							<li><a href="#">Delete selected</a></li>
      							<li><a href="#">Copy selected</a></li>
      							<li><a href="#">Archive selected</a></li>
    						</ul>
  				</div>
  			</td>
		</tr>
		<tr>
			<td><input type="checkbox" value=""></td>
			<td>Adekunle</td>
			<td>Ogundele</td>
			<td>Industrial Chemistry</td>
			<td>
				<div class="dropdown">
    				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Record Action
    					<span class="caret"></span></button>
    						<ul class="dropdown-menu">
      							<li><a href="#">Delete selected</a></li>
      							<li><a href="#">Copy selected</a></li>
      							<li><a href="#">Archive selected</a></li>
    						</ul>
  				</div>
			</td>
		</tr>
		<tr>
			<td><input type="checkbox" value=""></td>
			<td>Hassan</td>
			<td>Aremuola</td>
			<td>Accounting</td>
			<td>
				<div class="dropdown">
    				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Record Action
    					<span class="caret"></span></button>
    						<ul class="dropdown-menu">
      							<li><a href="#">Delete selected</a></li>
      							<li><a href="#">Copy selected</a></li>
      							<li><a href="#">Archive selected</a></li>
    						</ul>
  				</div>
			</td>
		</tr>
		<tr>
			<td><input type="checkbox" value=""></td>
			<td>Adewunmi</td>
			<td>Bajulaiye</td>
			<td>Computer Science</td>
			<td>
				<div class="dropdown">
    				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Record Action
    					<span class="caret"></span></button>
    						<ul class="dropdown-menu">
      							<li><a href="#">Delete selected</a></li>
      							<li><a href="#">Copy selected</a></li>
      							<li><a href="#">Archive selected</a></li>
    						</ul>
  				</div>
			</td>
		</tr>
		<tr>
			<td><input type="checkbox" value=""></td>
			<td>Hameed</td>
			<td>Ogunmola</td>
			<td>Computer Science</td>
			<td>
				<div class="dropdown">
    				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Record Action
    					<span class="caret"></span></button>
    						<ul class="dropdown-menu">
      							<li><a href="#">Delete selected</a></li>
      							<li><a href="#">Copy selected</a></li>
      							<li><a href="#">Archive selected</a></li>
    						</ul>
  				</div>
			</td>
		</tr>
		<tr>
			<td><input type="checkbox" value=""></td>
			<td>Onyedikachi</td>
			<td>Chidozie</td>
			<td>Computer Science</td>
			<td>
				<div class="dropdown">
    				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Record Action
    					<span class="caret"></span></button>
    						<ul class="dropdown-menu">
      							<li><a href="#">Delete selected</a></li>
      							<li><a href="#">Copy selected</a></li>
      							<li><a href="#">Archive selected</a></li>
    						</ul>
  				</div>
			</td>
		</tr>
	</tbody>
</table>
<div class="col-md-12">
	<div class="col-md-5 dropdown">
    	<button class="col-md-3 btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Bulk Action
			<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Delete selected</a></li>
					<li><a href="#">Copy selected</a></li>
					<li><a href="#">Archive selected</a></li>
				</ul>
		<button class="col-md-2 btn btn-primary">Apply</button>
	</div>
	<div class="col-md-5">
		<p>showing 1-6 of 20 records</p>
	</div>
	<div>
		<ul class="col-md-2 pagination pagination-sm">
    		<li class="active"><a href="#">1</a></li>
    		<li><a href="#">2</a></li>
    		<li><a href="#">3</a></li>
    		<li><a href="#">4</a></li>
    		<li><a href="#">5</a></li>
		</ul>
	</div>
</div>
</div>
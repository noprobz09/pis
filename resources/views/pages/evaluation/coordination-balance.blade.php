@extends('layouts.app-logged')

@section('content')
<div class="clearfix">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="x_panel">
	    <div class="x_title">
	      <h2><i class="fa fa-bars"></i> New Patient</h2>
	      <div class="clearfix"></div>
	    </div>
	    <div class="x_content">

			<div class="" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
				  <li role="presentation" class="active"><a href="#initial-evaluation-1" id="initial-evaluation-1-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal Information & Initial Evaluation 1</a>
				  </li>
				  <li role="presentation" class=""><a href="#initial-evaluation-2" role="tab" id="initial-evaluation-2-tab" data-toggle="tab" aria-expanded="false">Initial Evaluation 2</a>
				  </li>
				 
				</ul>
				<div id="myTabContent" class="tab-content">
				  	<div role="tabpanel" class="tab-pane fade active in" id="initial-evaluation-1" aria-labelledby="initial-evaluation-1-tab">
				    	@include('pages.evaluation.form.coordination-balance.index')
				  	</div>
				</div>

				<div class="action text-right">
					<button class="btn btn-success"><i class="fa fa-save"></i> Save</button>
					<button class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
				</div>

			</div>

	    </div>
	  </div>
	</div>
</div>
@endsection
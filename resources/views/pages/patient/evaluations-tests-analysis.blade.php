 <div class="clearfix">

  <div class="col-xs-3">
    <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-left">
      <li class="active"><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Initial Evaluation</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Coordination & Balance Exam</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Balance Tests</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Manual Muscle Tests</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">ROM Eval</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Special Tests</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Postural Analysis</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Gait Analysis</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Assessment Plan</a></li>
      <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Re-evaluation</a></li>
    </ul>
  </div>

  <div class="col-xs-9">
    <!-- Tab panes -->
    <div class="tab-content">

      	<div role="tabpanel" class="tab-pane fade active in" id="initial-evaluations" aria-labelledby="initial-evaluations">
    		<div class="clearfix">
    			<div class="" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
					  <li role="presentation" class="active"><a href="#initial-evaluation-1" id="initial-evaluation-1-tab" role="tab" data-toggle="tab" aria-expanded="true">Initial Evaluation 1</a>
					  </li>
					  <li role="presentation" class=""><a href="#initial-evaluation-2" role="tab" id="initial-evaluation-2-tab" data-toggle="tab" aria-expanded="false">Initial Evaluation 2</a>
					  </li>
					 
					</ul>
					<div id="myTabContent" class="tab-content">
					  	<div role="tabpanel" class="tab-pane fade active in" id="initial-evaluation-1" aria-labelledby="initial-evaluation-1-tab">
					    	@include('pages.evaluation.form.initial.evaluation-1')
					  	</div>
					  	<div role="tabpanel" class="tab-pane fade" id="initial-evaluation-2" aria-labelledby="initial-evaluation-2-tab">
					    	@include('pages.evaluation.form.initial.evaluation-2')
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

  <div class="clearfix"></div>

</div>
 <div class="clearfix">
	<div class="col-xs-3">
    
        <ul class="nav nav-tabs tabs-left">
          	<li role="presentation" class="active">
				<a href="#home-situation" role="tab" id="home-situation-tab" data-toggle="tab" aria-expanded="false">Home Situation/Living Environment</a>
			</li>
			<li role="presentation" class="">
				<a href="#general-status" role="tab" id="general-status-tab2" data-toggle="tab" aria-expanded="false">General Status</a>
			</li>
			<li role="presentation" class="">
				<a href="#social-health" role="tab" id="social-health-tab2" data-toggle="tab" aria-expanded="false">Social/Health Habits</a>
			</li>
			<li role="presentation" class="">
				<a href="#hpi" role="tab" id="hpi-tab2" data-toggle="tab" aria-expanded="false">HPI: Medications</a>
			</li>
			<li role="presentation" class="">
				<a href="#ancillary-service" role="tab" id="ancillary-service-tab2" data-toggle="tab" aria-expanded="false">Ancillary Service</a>
			</li>
			<li role="presentation" class="">
				<a href="#laboratory-results" role="tab" id="laboratory-results-tab2" data-toggle="tab" aria-expanded="false">Laboratory Results</a>
			</li>
			<li role="presentation" class="">
				<a href="#activities" role="tab" id="activities-tab2" data-toggle="tab" aria-expanded="false">Activities</a>
			</li>
			<li role="presentation" class="">
				<a href="#family-history" role="tab" id="family-history-tab2" data-toggle="tab" aria-expanded="false">Family History</a>
			</li>
			<li role="presentation" class="">
				<a href="#medical-surgical-history" role="tab" id="medical-surgical-history-tab2" data-toggle="tab" aria-expanded="false">Medical Surgical History</a>
			</li>
			<li role="presentation" class="">
				<a href="#inspections" role="tab" id="inspections-tab2" data-toggle="tab" aria-expanded="false">Inspection</a>
			</li>
			<li role="presentation" class="">
				<a href="#vital-signs" role="tab" id="vital-signs-tab2" data-toggle="tab" aria-expanded="false">Vital Signs</a>
			</li>
			<li role="presentation" class="">
				<a href="#grading-pulse" role="tab" id="grading-pulse-tab2" data-toggle="tab" aria-expanded="false">Numerical Scale for Grading Pulse Quality</a>
			</li>
			<li role="presentation" class="">
				<a href="#findings1" role="tab" id="findings1-tab2" data-toggle="tab" aria-expanded="false">Findings</a>
			</li>
		</ul>
  	</div>

	<div class="col-xs-9">
		
		<div class="tab-content">
		  <div class="tab-pane" id="home-situation">
		  	@include('pages.evaluation.form.initial.evaluation-1.home-situation')
		  </div>
		  <div class="tab-pane" id="general-status">
		  	@include('pages.evaluation.form.initial.evaluation-1.general-status')
		  </div>
		  <div class="tab-pane" id="social-health">
		  	@include('pages.evaluation.form.initial.evaluation-1.social-health')
		  </div>
		  <div class="tab-pane" id="hpi">
		  	@include('pages.evaluation.form.initial.evaluation-1.hpi')
		  </div>
		  <div class="tab-pane" id="ancillary-service">
		  	@include('pages.evaluation.form.initial.evaluation-1.ancillary-service')
		  </div>
		  <div class="tab-pane" id="laboratory-results">
		  	@include('pages.evaluation.form.initial.evaluation-1.laboratory-results')
		  </div>
		  <div class="tab-pane" id="activities">
		  	@include('pages.evaluation.form.initial.evaluation-1.activities')
		  </div>
		  <div class="tab-pane" id="family-history">
		  	@include('pages.evaluation.form.initial.evaluation-1.family-history')
		  </div>
		  <div class="tab-pane" id="medical-surgical-history">
		  	@include('pages.evaluation.form.initial.evaluation-1.medical-surgical-history')
		  </div>
		  <div class="tab-pane" id="inspections">
		  	@include('pages.evaluation.form.initial.evaluation-1.inspections')
		  </div>
		  <div class="tab-pane" id="vital-signs">
		  	@include('pages.evaluation.form.initial.evaluation-1.vital-signs')
		  </div>
		  <div class="tab-pane" id="grading-pulse">
		  	@include('pages.evaluation.form.initial.evaluation-1.grading-pulse')
		  </div>
		  <div class="tab-pane" id="findings1">
		  	@include('pages.evaluation.form.initial.evaluation-1.findings1')
		  </div>
		</div>
	</div>
</div>
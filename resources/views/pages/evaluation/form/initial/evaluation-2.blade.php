 <div class="clearfix">
	<div class="col-xs-3">
    
        <ul class="nav nav-tabs tabs-left">
          	<li role="presentation" class="active">
				<a href="#mental-communication-status" id="mental-communication-status-tab" role="tab" data-toggle="tab" aria-expanded="true">Mental & Communication Status</a>
			</li>
			<li role="presentation" class="">
				<a href="#cranial-nerve-testing" role="tab" id="cranial-nerve-testing-tab2" data-toggle="tab" aria-expanded="false">Cranial Nerve Testing</a>
			</li>
			<li role="presentation" class="">
				<a href="#superficial-sensations" role="tab" id="superficial-sensations-tab2" data-toggle="tab" aria-expanded="false">Superficial Sensations</a>
			</li>
			<li role="presentation" class="">
				<a href="#deep-sensations" role="tab" id="deep-sensations-tab2" data-toggle="tab" aria-expanded="false">Deep Sensations</a>
			</li>
			<li role="presentation" class="">
				<a href="#cortical-sensations" role="tab" id="cortical-sensations-tab2" data-toggle="tab" aria-expanded="false">Cortical Sensations</a>
			</li>
			<li role="presentation" class="">
				<a href="#findings2" role="tab" id="findings2-tab2" data-toggle="tab" aria-expanded="false">Findings</a>
			</li>
			<li role="presentation" class="">
				<a href="#significance" role="tab" id="significance-tab2" data-toggle="tab" aria-expanded="false">Significance</a>
			</li>
			<li role="presentation" class="">
				<a href="#intern-name" role="tab" id="intern-name-tab2" data-toggle="tab" aria-expanded="false">Intern Name</a>
			</li>
			<li role="presentation" class="">
				<a href="#clinical-instructor" role="tab" id="clinical-instructor-tab2" data-toggle="tab" aria-expanded="false">Clinical Instructor</a>
			</li>
			
		</ul>
  	</div>

	<div class="col-xs-9">
		
		<div class="tab-content">
		  <div class="tab-pane active" id="mental-communication-status">		    
		  	@include('pages.evaluation.form.initial.evaluation-2.mental-communication-status')
		  </div>
		  <div class="tab-pane" id="cranial-nerve-testing">
		  	@include('pages.evaluation.form.initial.evaluation-2.cranial-nerve-testing')
		  </div>
		  <div class="tab-pane" id="superficial-sensations">
		  	@include('pages.evaluation.form.initial.evaluation-2.superficial-sensation')
		  </div>
		  <div class="tab-pane" id="deep-sensations">
		  	@include('pages.evaluation.form.initial.evaluation-2.deep-sensation')
		  </div>
		  <div class="tab-pane" id="cortical-sensations">
		  	@include('pages.evaluation.form.initial.evaluation-2.cortical-sensation')
		  </div>
		  <div class="tab-pane" id="findings2">
		  	@include('pages.evaluation.form.initial.evaluation-2.findings')
		  </div>
		  <div class="tab-pane" id="significance">
		  	@include('pages.evaluation.form.initial.evaluation-2.significance')
		  </div>
		  <div class="tab-pane" id="intern-name">
		  	@include('pages.evaluation.form.initial.evaluation-2.intern-name')
		  </div>
		  <div class="tab-pane" id="clinical-instructor">
		  	@include('pages.evaluation.form.initial.evaluation-2.clinical-instructor')
		  </div>
		  
		</div>
	</div>
</div>
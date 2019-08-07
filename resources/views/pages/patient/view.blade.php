@extends('layouts.app-logged')

@section('css')
  <link href="{{ asset('js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('js/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('js/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('js/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('js/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="clearfix">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="x_panel">
	    <div class="x_title">
	      <h2><i class="fa fa-bars"></i>Juan Dela Cruz</h2>
	      <div class="clearfix"></div>
	    </div>
	    <div class="x_content">


          	<div class="" role="tabpanel" data-example-id="togglable-tabs">
	            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
	              <li role="presentation" class="active"><a href="#profile-tab" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile</a>
	              </li>
	              <li role="presentation" class=""><a href="#images-tab" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Images</a>
	              </li>
	              <li role="presentation" class=""><a href="#evaluation-tests-analysis" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Evaluation, Tests & Analysis</a>
	              </li>
	              <li role="presentation" class=""><a href="#payment-tab=" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Payment</a>
	              </li>
	            </ul>
	            <div id="myTabContent" class="tab-content">

	              <div role="tabpanel" class="tab-pane fade active in" id="profile-tab" aria-labelledby="home-tab">	                
	                <form name="patient-add">
						@include('pages.patient.form.edit')
						<div class="action text-right">
							<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update</button>
							<button class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
						</div>
					</form>
	              </div>

	              <div role="tabpanel" class="tab-pane fade" id="images-tab" aria-labelledby="profile-tab">
	                @include('pages.patient.media.lists')
	              </div>

	              <div role="tabpanel" class="tab-pane fade" id="evaluation-tests-analysis" aria-labelledby="profile-tab">
	                @include('pages.patient.evaluations-tests-analysis')
	              </div>
	              <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
	                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
	                  booth letterpress, commodo enim craft beer mlkshk </p>
	              </div>
	            </div>
          	</div>

        </div>
	  </div>
	</div>
</div>
@endsection

@section('javascript')

@endsection

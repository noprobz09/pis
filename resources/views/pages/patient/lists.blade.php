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
	      <h2><i class="fa fa-bars"></i> Lists of Patients</h2>
	      <div class="clearfix"></div>
	    </div>
	    <div class="x_content">

	    	<div class="notification" style="display: none;">
	    		<div class="alert"></div>
	    	</div>

	    	<table id="datatable" class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th>First Name</th>
				    <th>Last Name</th>
				    <th>Middle Name</th>
				    <th>Date of Birth</th>
				    <th>Age</th>
				    <th>Sex</th>
				    <th>Civil Status</th>
				    <th style="width: 250px;">Action</th>
				  </tr>
				</thead>
				<tbody>
					<tr>
						<td>Juan</td>
						<td>Dela Cruz</td>
						<td>Eso</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Married</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="{{ route('patient.view',['id' => 1]) }}">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Maria</td>
						<td>Calma</td>
						<td>Cabato</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Pedro</td>
						<td>Eman</td>
						<td>Calo</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Ryan</td>
						<td>Peter</td>
						<td>James</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Conrad</td>
						<td>Elis</td>
						<td>Sebastian</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Married</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>John</td>
						<td>Cruz</td>
						<td>Sampang</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>James</td>
						<td>Ede</td>
						<td>Santisima</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Christian</td>
						<td>Sinas</td>
						<td>Santolin</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Tiger</td>
						<td>Nixon</td>
						<td>Edinburgh</td>
						<td>1990/04/25</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Susana</td>
						<td>Aras</td>
						<td>Ebid</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>
					<tr>
						<td>Teofilo</td>
						<td>Cagad</td>
						<td>Sendoy</td>
						<td>02/12/1990</td>
						<td>29</td>
						<td>M</td>
						<td>Single</td>
						<td>
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-credit-card"></i> Payment
							</a>
							
							<a class="btn btn-sm btn-primary" href="#">
								<i class="fa fa-eye"></i> View
							</a>

							<a class="btn btn-sm btn-danger" href="#">
								<i class="fa fa-exclamation-circle"></i> Delete
							</a>
						</td>
					</tr>

                </tbody>				
			</table>

	    </div>
	  </div>
	</div>
</div>
@endsection

@section('javascript')
	
	<!-- Datatables-->
    <script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.scroller.min.js') }}"></script>

    <!-- custom scripts -->
	<script type="text/javascript" src="{{ asset('js/common/notification.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/patient/index.js') }}"></script>
	<script type="text/javascript">
		//Patient.Lists();
		$(document).ready(function() {
        	$('#datatable').dataTable();
      	});
	</script>


@endsection

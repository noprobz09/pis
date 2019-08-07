 @extends('layouts.app-logged')

@section('css')

@endsection


@section('content')
	

	<div class="clearfix">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="x_panel">
	    <div class="x_title">
	      <h2><i class="fa fa-bars"></i> Patient's Location</h2>
	      <div class="clearfix"></div>
	    </div>
	    <div class="x_content">

	    	<!-- <div class="clearfix form-horizontal form-label-left">
	    		<div class="col-md-4" style="margin:0 auto;float: none;">
		    		
		    		<div class="form-group">
				      <label class="control-label col-md-3 col-sm-3 col-xs-12"><label>Starting Year:</label></label>
				      <div class="col-md-9 col-sm-9 col-xs-12">
				        <select class="form-control">
			    			<option>Please select starting year</option>
			    			<option value="2019">2019</option>
			    			<option value="2018">2018</option>
			    		</select>
				      </div>
				    </div>


				    <div class="form-group">
				      <label class="control-label col-md-3 col-sm-3 col-xs-12"><label>End Year:</label></label>
				      <div class="col-md-9 col-sm-9 col-xs-12">
				        <select class="form-control">
			    			<option>Please select end year</option>
			    			<option value="2019">2019</option>
			    			<option value="2018">2018</option>
			    		</select>
				      </div>
				    </div>

				</div>
		    	
	    	</div> -->


          	<!-- <canvas id="mybarChart"></canvas> -->
          	<div>
          		<img src="{{asset('images/sample-map.png')}}" style="display: block; max-width: 100%;" />
          	</div>

        </div>
	  </div>
	</div>
</div>
	
	

@endsection


@section('javascript')

<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/moment/moment.min.js')}}"></script>
<script src="{{ asset('js/chartjs/chart.min.js')}}"></script>
<script src="{{ asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{ asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('js/icheck/icheck.min.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src="{{ asset('js/pace/pace.min.js')}}"></script>

<script>

	// Chart.defaults.global.legend = {
 //      enabled: false
 //    };

	// Bar chart
    // var ctx = document.getElementById("mybarChart");
    // var mybarChart = new Chart(ctx, {
    //   type: 'bar',
    //   data: {
    //     labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    //     datasets: [{
    //       label: '2018 to 2019 Data',
    //       backgroundColor: "#26B99A",
    //       data: [51, 30, 40, 28, 92, 50, 45]
    //     }]
    //   },

    //   options: {
    //     scales: {
    //       yAxes: [{
    //         ticks: {
    //           beginAtZero: true
    //         }
    //       }]
    //     }
    //   }
    // });


    //Pie chart
 //    new Chart(document.getElementById("mybarChart"), {
	//     type: 'doughnut',
	//     data: {
	//       labels: ["below 20 yrs old.", " 21-30  yrs old.", "31-40  yrs old.", "41-50  yrs old.", "51-60  yrs old.", "61 and up  yrs old."],
	//       datasets: [{
	//         label: "Patient`s age admitted",
	//         backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#ff0000"],
	//         data: [100,200,134,87,42,99]
	//       }]
	//     },
	//     options: {
	//       title: {
	//         display: true,
	//         text: '2018 to 2019 Data'
	//       }
	//     }
	// });


	// new Chart(document.getElementById("mybarChart"), {
	//   type: 'line',
	//   data: {
	//     labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct', 'Nov', 'Dec'],
	//     datasets: [{ 
	//         data: [86,114,106,106,107,111,133,221,200,100,59,254],
	//         label: "2018 to 2019 Data",
	//         borderColor: "#3e95cd",
	//         fill: false
	//       }
	//     ]
	//   },
	//   options: {
	//     title: {
	//       display: true,
	//       text: 'Graph of Referrals'
	//     }
	//   }
	// });

</script>

@endsection

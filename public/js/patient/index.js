const Patient = {

	Add: function(data) {
		$.ajax({
			url: url.patient.add,
			data: data,
			method: 'POST',
			success: function(res) {
				if (res.result === true) {
					Notification.Set('Successfully adding new patient.', 1);					
				} else {
					Notification.Set(res.message, 2);					
				}

				window.location = url.patient.lists;
			}
		});
	},

	Lists: function() {
		
		//$('#datatable').dataTable();
		/*$('#table-patient-lists').DataTable( {
			"ajax": url.patient.lists,
			"autoWidth": false,
			"columns": [
				{ "data": "id" },
				{ "data": "fname" },
				{ "data": "lname" },
				{ "data": "mname" },
				{ "data": "sex" },
				{ "data": "age" },
				{ "data": "civil_status" },
			],
			//"order": [[4, 'desc']],
			responsive:true
		});*/
	},

	Delete: function(id) {
		$.ajax({
			url: url.patient.delete,
			data: {id: id},
			method: 'DELETE',
			success: function(res) {
				if (res.result === true) {
					Notification.Set('Deleting patient successfully.', 1);
					Redirect.url(url.patient.lists);
				}
			}
		});
	}

};
/*
* Types: 
* 1 - Success
* 2 - Danger
*/

//initiate Notification.Get on first load of the page

const Notification = {
	Set: function(msg, type) {
		localStorage.setItem('notificationMsg', msg);
		localStorage.setItem('notificationType', type);
	},

	Get: function() {


		this.removeHtmlClass();
		let notificationType = localStorage.getItem('notificationType');
		let notificationMsg = localStorage.getItem('notificationMsg');

		if (typeof notificationType != 'undefined' && notificationType != '' && notificationType != null) {
			
			console.log('Get data');
			let notifclass = this.GetType(notificationType);
		
			$(document).find('.notification .alert').addClass(notifclass).html(notificationMsg);
			$(document).find('.notification').show();
		}

		
	},

	Check: function() {
		notificationMsg = localStorage.getItem('notificationMsg');
		notificationType = localStorage.getItem('notificationType');
		if (typeof notificationType != 'undefined' && notificationType != '' && notificationType != null && typeof notificationMsg != 'undefined' && notificationMsg != '' && notificationMsg != null) {
			return true;
		} else {
			return false;
		}

	},

	Remove: function() {
		localStorage.setItem('notificationMsg', '');
		localStorage.setItem('notificationType', '');
	},

	GetType: function(type) {
		if (typeof type != 'undefined' && type !='') {
			
			let _class = '';
			switch(type) {
				case 1: _class = 'alert-success';break;
				case 2: _class = 'alert-danger';break;
				default:{_class ='';break;}
			}

			return _class;

		} else {
			return '';
		}
	},

	removeHtmlClass: function() {
		$(document).find('.notification .alert').removeClass('alert-success');
		$(document).find('.notification .alert').removeClass('alert-danger');
	},
};

Notification.Get();

if (Notification.Check() === true) {
	Notification.Remove();
}
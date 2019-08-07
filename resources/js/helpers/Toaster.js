export const Toaster = {
    
    notification(data) {
        
        if(data.result == true){
            toastr.success(data.message, 'Success!', {timeOut: 5000});
            
        }else{
            toastr.error(data.message, 'Error!', {timeOut: 5000});
        }

    },

    
};
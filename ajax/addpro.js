
$(document).ready(function(){
    let pform = $('#pform');
    $('#pform').on('submit', function(e){
        e.preventDefault();
        
        var formData = new FormData(this);
        // Fetch form data
        function insert(){
        
        $.ajax({
            url: 'addprodata.php', // Replace with your PHP processing file
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                alert(response)
                display();
                // Handle the success response here
                // You can display a success message or perform other actions
            },
            
        });
        pform.trigger("reset")
    }
    insert();
    });

    function display() {
        $.ajax({
            url: 'pfetch.php', // Update the URL to the PHP script that fetches user data
            method: 'POST',
            success: function (data) {
                console.log(data)
                $('#ptab').html(data); // Set the HTML content of utab
            },
        });
    }

    display();


    // delete record


$('tbody').on('click','.delete',function(){
    let pid= $(this).attr('data-id');

    $.ajax({
     url : 'pdelete.php',
     method : 'POST',
     data : {
         pid : pid
 
     },
     success: function(data){
        
        
         
         
   display();
         
     }
    })
    
    
})


});


$(document).ready(function(){
    let uform = $('#uform');
    let fname = $('#ufname');
    let id = $('#uid');
    let lname = $('#ulname');
    let email = $('#uemail');
    let pass = $('#upass');
    let rpass = $('#urpass');
    let register = $('#uregister');


    register.on('click',function(e){
        e.preventDefault();
function insert(){
        $.ajax({
            url : 'adduserdata.php',
            method : 'POST',
            data : {
                id : id.val(),
                fname : fname.val(),
                lname : lname.val(),
                email : email.val(),
                pass : pass.val(),
                rpass : rpass.val(),


            },
            success : function(data){
             
               alert(data)
                display();
                uform.trigger('reset')
                
            }
        })
    }
    insert()

    })

    function display() {
        $.ajax({
            url: 'ufetch.php', // Update the URL to the PHP script that fetches user data
            method: 'POST',
            success: function(data) {
                // console.log(data)

                 $('#utab').html(data);
                // $('#utab').html(data); // Set the HTML content of utab
                

            },
        });
    }

    display();


// delete record


$('tbody').on('click','.delete',function(e){
    e.preventDefault();
    let userid= $(this).attr('data-id');

    $.ajax({
     url : 'udelete.php',
     method : 'POST',
     data : {
         userid : userid
 
     },
     success: function(data){
        alert(data);
     
        
        
        display()
        
        
    }
})
    
    
})

// update work

$('tbody').on('click','.edit',function(){
    let userid= $(this).attr('data-id');
    console.log(userid);
    $.ajax({
        url : 'update.php',
        method : 'POST',
        data : {
            user_id : userid
        },
        success : function(data){
            let user_Data = JSON.parse(data);
            // window.location.href = "adduser.php"       
            console.log(user_Data);
            
            id.val(user_Data.id);
            fname.val(user_Data.fname);
            lname.val(user_Data.lname);
            email.val(user_Data.email);    

        }
    })
    })















})

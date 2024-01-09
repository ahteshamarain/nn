$(document).ready(function(){
    let form = $('#eform');
    let fname = $('#efname');
    let id = $('#eid');

    let lname = $('#elname');
    let email = $('#eemail');
    let pass = $('#epass');
    let rpass = $('#erpass');
    let register = $('#eregister');


    register.on('click',function(e){
        e.preventDefault()
function insert(){
        $.ajax({
            url : 'addempdata.php',
            method : 'POST',
            data : {
                fname : fname.val(),
                lname : lname.val(),
                email : email.val(),
                pass : pass.val(),
                rpass : rpass.val(),


            },
            success : function(data){
             
               alert(data)
                display();
                form.trigger('reset')
                
            }
        })
    }
    insert()

    })

    function display() {
        $.ajax({
            url: 'efetch.php', // Update the URL to the PHP script that fetches user data
            method: 'POST',
            success: function (data) {
             
                $('#etab').html(data); // Set the HTML content of utab
            },
        });
    }

    display();


// delete record


$('tbody').on('click','.delete',function(){
    let userid= $(this).attr('data-id');

    $.ajax({
     url : 'edelete.php',
     method : 'POST',
     data : {
         userid : userid
 
     },
     success: function(data){
   
      
         
         
         
         display();
        //  alert(data);
     }
    })
    
    
})


// update work

$('tbody').on('click','.edit',function(){
    let userid= $(this).attr('data-id');
    console.log(userid);
    $.ajax({
        url : 'eupdatedata.php',
        method : 'POST',
        data : {
            user_id : userid
        },
        success : function(data){
            let user_Data = JSON.parse(data);
            // window.location.href = "adduser.php"       
            console.log(user_Data);
            
            id.val(user_Data.eid);
            fname.val(user_Data.efname);
            lname.val(user_Data.elname);
            email.val(user_Data.eemail);    

        }
    })
    })




})

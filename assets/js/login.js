let userArray = [];

(()=>{

    let userInfo = localStorage.getItem('userData')
    console.log(userInfo)

    if(userInfo){
       userArray = JSON.parse(userInfo)
    }

    let userLogged = localStorage.getItem('loggedUser')
    console.log(userLogged)

    if(userLogged){
    window.location.href = 'index.html'
    }
})()

// ()();


// let validation 

let signUp = (e) => {
    e.preventDefault();

    let firstName = document.getElementById('fname').value;
   
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
 



    for(let i =0; i < userArray.length; i++){

        if(email === userArray[i].email){
        document.getElementById('emailError').textContent = `Your email is already exist`;
        setTimeout(() => {
            document.getElementById('emailError').textContent = ``;
        }, 3000)
        return;
        }
    }

    if (password !== cPassword) {
        document.getElementById('passError').textContent = `Kindly enter same password`;

        setTimeout(() => {
            document.getElementById('passError').textContent = ``;
        }, 3000)
        return;
    }

    const userObj = {
        firstName,
        lastName,
        email,
        password,
        cPassword,
        inputCity,
        gender
    }



    userArray.push(userObj)

    let stringified = JSON.stringify(userArray);

    localStorage.setItem('userData', stringified)


    console.log(userArray);


    e.target.reset();

}








let login = (e) => {
    e.preventDefault();


    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;


    let isEmailValid = false;

    for (let i = 0; i < userArray.length; i++) {

        // ******************for reference*********************

        if(email === userArray[i].email && password === userArray[i].password){
            alert('valid email and password');
        }else{

            document.getElementById('emailError').textContent = `Invalid Username or Password`;
            setTimeout(() => {
                document.getElementById('emailError').textContent = ``;
            }, 3000)
            return;
        }

        if (email === userArray[i].email) {

            isEmailValid = true;

            if (password === userArray[i].password) {
                window.location.href = 'index.html'
                localStorage.setItem('loggedUser', JSON.stringify(userArray[i]));
            }
            else {
             alert("invalid password");
                setTimeout(() => {
                    document.getElementById('passError').textContent = ``;
                }, 3000)
            }
        }
    }


    if (!isEmailValid) {


        document.getElementById('emailError').textContent = `Invalid Email`;
        setTimeout(() => {
            document.getElementById('emailError').textContent = ``;
        }, 3000)

    }




}
function signin() {
    const form = document.getElementById('login');
    const error_user = document.getElementById('error_user');
    const error_pass = document.getElementById('error_pass');
    const error_uname = document.getElementById('error_uname');
    const error_check = document.getElementById('error_check');

    form.addEventListener('submit', (e) => {

  
        error_user.innerHTML = "";
        error_pass.innerHTML = "";
        error_uname.innerHTML = "";
        error_check.innerHTML = "";


        let username = document.getElementById('username').value;
        let usertype = document.getElementById("usertype").value;
        let password = document.getElementById("password").value;

        if (username === '' || username == null) {
            e.preventDefault();
            error_uname.innerHTML = "Username should not be null";
        }

        if (password.length < 8) {
            e.preventDefault();
            error_pass.innerHTML = "Password must contain at least 8 characters";
        }

        if (usertype === "") {
            e.preventDefault();
            error_user.innerHTML = "Please select a user type";
        }

        // let info = {
        //     'username' : username,
        //     'password' : password,
        //     'usertype' : usertype
        // }

        // let data = JSON.stringify(info);

        // let xhttp = new XMLHttpRequest();
        // xhttp.open('POST', '../controller/signinCheck.php', true);
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // xhttp.send('info='+data);

        // xhttp.onreadystatechange = function(){
        //     if(this.readyState == 4 && this.status == 200){
        //         if (this.responseText === "invalid") {
        //             e.preventDefault();
        //             error_check.innerHTML = "Invalid username password";
        //         }
        //     }
        // }

    });
}

// function signin() {
//     const form = document.getElementById('login');
//     const error_user = document.getElementById('error_user');
//     const error_pass = document.getElementById('error_pass');
//     const error_uname = document.getElementById('error_uname');
//     const error_check = document.getElementById('error_check');

//     form.addEventListener('submit', (e) => {
//         e.preventDefault(); // Prevent default form submission
        
//         error_user.innerHTML = "";
//         error_pass.innerHTML = "";
//         error_uname.innerHTML = "";
//         error_check.innerHTML = "";

//         let username = document.getElementById('username').value;
//         let usertype = document.getElementById("usertype").value;
//         let password = document.getElementById("password").value;

//         if (username === '' || username == null) {
//             error_uname.innerHTML = "Username should not be null";
//             return;
//         }

//         if (password.length < 8) {
//             error_pass.innerHTML = "Password must contain at least 8 characters";
//             return;
//         }

//         if (usertype === "") {
//             error_user.innerHTML = "Please select a user type";
//             return;
//         }

//         let info = {
//             'username': username,
//             'password': password,
//             'usertype': usertype
//         };

//         // let data = JSON.stringify(info);

//         // let xhttp = new XMLHttpRequest();
//         // xhttp.open('POST', '../controller/signinCheck.php', true);
//         // xhttp.setRequestHeader("Content-type", "application/json"); // Set correct content type
//         // xhttp.onreadystatechange = function() {
//         //     if (this.readyState == 4 && this.status == 200) {
//         //         if (this.responseText === "invalid") {
//         //             error_check.innerHTML = "Invalid username or password";
//         //         } else if (this.responseText.startsWith("valid")) {
//         //             // Redirect or handle success response based on user type
//         //             let userType = this.responseText.split("_")[1];
//         //             if (userType === "admin") {
//         //                 window.location.href = "../view/admindash.php";
//         //             } else if (userType === "Host") {
//         //                 window.location.href = "../view/hostdash.php";
//         //             } else if (userType === "Customer") {
//         //                 window.location.href = "../view/customerdash.php";
//         //             }
//         //         }
//         //     }
//         // };
//         // xhttp.send(data);
//     });
// }



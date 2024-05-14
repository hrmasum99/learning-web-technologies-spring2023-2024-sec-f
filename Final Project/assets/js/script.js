function signup() {
    const form = document.getElementById('form');
    const error_name = document.getElementById('error_name');
    const error_email = document.getElementById('error_email');
    const error_gender = document.getElementById('error_gender');
    const error_user = document.getElementById('error_user');
    const error_pass = document.getElementById('error_pass');
    const error_conpass = document.getElementById('error_conpass');
    const error_dob = document.getElementById('error_dob');
    const error_phone = document.getElementById('error_phone');
    const error_uname = document.getElementById('error_uname');
    const error_check = document.getElementById('error_check');

    form.addEventListener('submit', (e) => {

        error_name.innerHTML = "";
        error_email.innerHTML = "";
        error_gender.innerHTML = "";
        error_user.innerHTML = "";
        error_pass.innerHTML = "";
        error_conpass.innerHTML = "";
        error_dob.innerHTML = "";
        error_phone.innerHTML = "";
        error_uname.innerHTML = "";
        error_check.innerHTML = "";

        let name = document.getElementById('name').value;
        let username = document.getElementById('username').value;
        let nameLength = name.split(' ');
        let email = document.getElementById('email').value;
        let atPos = email.indexOf('@');
        let dotPos = email.lastIndexOf('.');
        let selectedgender = document.getElementById("gender").value;
        let selecteduser = document.getElementById("usertype").value;
        let dob = document.getElementById("dob").value;
        let phone = document.getElementById("phone").value;
        let countryCodePos = phone.indexOf('+880');
        let password = document.getElementById("password").value;
        let confirmPass = document.getElementById("confirm_password").value;
        let confirmCheck = document.getElementById("check");
        //let checkbox = document.getElementById('check');

        if (name === '' || name == null) {
            e.preventDefault();
            error_name.innerHTML = "Name should not be null";
        } else if (!checkFirstChar(name[0])) {
            e.preventDefault();
            error_name.innerHTML = "Name must start with a letter";
        } else if (nameLength.length < 2) {
            e.preventDefault();
            error_name.innerHTML = "Name should have 2 words";
        } else {
            for (let i = 0; i < name.length; i++) {
                if (!checkChar(name[i])) {
                    e.preventDefault();
                    error_name.innerHTML = "Name can only contain letters, dots, or dashes";
                    break;
                }
            }
        }

        if (!email) {
            e.preventDefault();
            error_email.innerHTML = "Email can not be empty";
        } else if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === email.length - 1) {
            e.preventDefault();
            error_email.innerHTML = "Invalid email address";
        }

        if (username === '' || username == null) {
            e.preventDefault();
            error_uname.innerHTML = "Username should not be null";
        }

        if (phone === "") {
            e.preventDefault();
            error_phone.innerHTML = "Please select a phone number";
        } else if (countryCodePos !== 0) { 
            e.preventDefault();
            error_phone.innerHTML = "Invalid phone number, phone must start with +880";
        } else if (!onlyDigits(phone)) {
            e.preventDefault();
            error_phone.innerHTML = "Phone must contain only digits";
        } else if (phone.length != 14) {
            e.preventDefault();
            error_phone.innerHTML = "Invalid phone number";
        }

        if (password.length < 8) {
            e.preventDefault();
            error_pass.innerHTML = "Password must contain at least 8 characters";
        } else if (password.length > 24) {
            e.preventDefault();
            error_pass.innerHTML = "Password can contain at most 24 characters";
        } else if (!hasDigit(password)) {
            e.preventDefault();
            error_pass.innerHTML = "Password must contain at least one digit";
        } else if (!hasSpecialChar(password)) {
            e.preventDefault();
            error_pass.innerHTML = "Password must contain at least one special character";
        }

        if (password !== confirmPass) {
            e.preventDefault();
            error_conpass.innerHTML = "Confirm password not matched!";
        }

        if (selectedgender === "") {
            e.preventDefault();
            error_gender.innerHTML = "Please select a gender";
        }

        if (dob === "") {
            e.preventDefault();
            error_dob.innerHTML = "Please select date of birth";
        }

        if (selecteduser === "") {
            e.preventDefault();
            error_user.innerHTML = "Please select a user type";
        }

        if (confirmCheck.checked != true) {
            e.preventDefault();
            error_check.innerHTML = "Please agree to the terms and conditions.";
        }

        let info = {
            'username' : username,
            'email'    : email
        }

        let data = JSON.stringify(info);

        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/userinfoCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('info='+data);

        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if (this.responseText === "end") {
                    e.preventDefault();
                    alert("Both email and username are already taken");

                } else if (this.responseText === "terminate") {
                    e.preventDefault();
                    error_email.innerHTML = "Email is already taken";
                } else if (this.responseText === "abort") {
                    e.preventDefault();
                    error_uname.innerHTML = "Username is already taken";
                } 
                 
            }
        }
    });
}


function checkChar(ch){
    if(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z' || ch == '.' || ch == '_' || ch == ' ') return true;
}
  
function checkFirstChar(ch){
    if(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z') return true;
}

function hasDigit(str) {
    for (let i = 0; i < str.length; i++) {
        if (!isNaN(parseInt(str[i]))) {
            return true;
        }
    }
    return false;
}

function onlyDigits(str) {
    for (let i = 1; i < str.length; i++) {
        if (isNaN(parseInt(str[i]))) {
            return false; 
        }
    }
    return true; 
}


function hasSpecialChar(str) {
    const specialChars = "!@#$%^&*()_+{}|:<>?~-=[];',./";
    for (let i = 0; i < str.length; i++) {
        if (specialChars.includes(str[i])) {
            return true;
        }
    }
    return false;
}


function purchaseTicket() {
    const form = document.getElementById('purchaseTicket');
    const error_ename = document.getElementById('error_ename');
    const error_ttype = document.getElementById('error_ttype');
    const error_tquantity = document.getElementById('error_tquantity');
    const error_check = document.getElementById('error_check');

    form.addEventListener('submit', (e) => {

  
        error_ename.innerHTML = "";
        error_ttype.innerHTML = "";
        error_tquantity.innerHTML = "";
        error_check.innerHTML = "";


        let eventName = document.getElementById('event_name').value;
        let ticketType = document.getElementById("ticket_type").value;
        let ticketQuantity = document.getElementById("ticket_quantity").value;
        let confirmCheck = document.getElementById("tcheck");

        if (eventName === "") {
            e.preventDefault();
            error_ename.innerHTML = "Please select a event";
        }

        if (ticketType === "") {
            e.preventDefault();
            error_ttype.innerHTML = "Please select ticket type";
        }

        if (ticketQuantity === "" || ticketQuantity == null) {
            e.preventDefault();
            error_tquantity.innerHTML = "Please select tickect quantity";
        }

        if (confirmCheck.checked != true) {
            e.preventDefault();
            error_check.innerHTML = "Please agree to the terms and conditions.";
        }
    });
}


// function searchEvent(event) {
//     event.preventDefault(); // Prevent form submission
//     let skeyword = document.getElementById("keyword").value;
//     let sdate = document.getElementById("date").value;
//     let sevent_type = document.getElementById("type").value;

//     let searchElement = {
//         'keyword': skeyword,
//         'date': sdate,
//         'type': sevent_type
//     };

//     let data = JSON.stringify(searchElement);

//     let result = document.getElementById("display_event");

//     let xhttp = new XMLHttpRequest();
//     xhttp.open('POST', '../controller/searchController.php', true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send('searchElement=' + data);

//     xhttp.onreadystatechange = function () {
//         if (this.readyState == 4 && this.status == 200) {
//             let events = JSON.parse(this.responseText);

//             let out = `
//             <tr>
//             <th>EVENT NAME</th>
//             <th>EVENT DATE</th>
//             <th>EVENT TIME</th>
//             <th>EVENT PLACE</th>
//             <th>EVENT TYPE</th>
//             <th>AMOUNT</th>
//             <th>ACTION</th>
//               </tr>`;

//             for (let event of events) {
//                 out += `
//                 <tr>
//                     <td>${event.event_name}</td>
//                     <td>${event.event_date}</td>
//                     <td>${event.event_time}</td>
//                     <td>${event.event_place}</td>
//                     <td>${event.event_type}</td>
//                     <td>${event.amount}</td>
//                     <td>
//                         <a href="purchaseTicket.php?id=${event.id}"> Buy Tickets </a>
//                     </td>
//                 </tr>
//                 `;
//             }

//             result.innerHTML = out;
//         }
//     };
// }

// function paymentTicket() {
//     const form = document.getElementById('paymentTicket');
//     const error_phone = document.getElementById('error_phone');

//     form.addEventListener('submit', (e) => {

//         error_phone.innerHTML = "";


//         let bkashAcc = document.getElementById('bkash_number').value;

//         // if (bkashAcc === "" || bkashAcc == null) {
//         //     e.preventDefault();
//         //     error_phone.innerHTML = "";
//         // }

//         if (bkashAcc != 11) {
//             e.preventDefault();
//             error_tquantity.innerHTML = "Please provide your valid Bkash Account";
//         }
//     });
// }

function cngPass() {
    const form = document.getElementById('cngPass');
    const error_newPass = document.getElementById('error_newPass');
    const error_conPass = document.getElementById('error_conPass');

    form.addEventListener('submit', (e) => {

        error_newPass.innerHTML = "";
        error_conPass.innerHTML = "";

        let newPass = document.getElementById('new_password').value;
        let conPass = document.getElementById('confirm_password').value;

        if (newPass.length < 8) {
            e.preventDefault();
            error_newPass.innerHTML = "Password must contain at least 8 characters";
        } else if (newPass.length > 24) {
            e.preventDefault();
            error_newPass.innerHTML = "Password can contain at most 24 characters";
        } else if (!hasDigit(newPass)) {
            e.preventDefault();
            error_newPass.innerHTML = "Password must contain at least one digit";
        } else if (!hasSpecialChar(newPass)) {
            e.preventDefault();
            error_newPass.innerHTML = "Password must contain at least one special character";
        }
        if (conPass !== newPass ) {
            e.preventDefault();
            error_conPass.innerHTML = "Confirm password not matched";
        } 
    });
}

function deleteData(id) {
    let text = "Are you sure you want to delete this data?";
    if (confirm(text)) {
        window.location.href = `../controller/venueDeleteController.php?id=${id}`;
    }
}
function deleteDataSP(id) {
    let text = "Are you sure you want to delete this data?";
    if (confirm(text)) {
        window.location.href = `../controller/spDeleteController.php?id=${id}`;
    }
}



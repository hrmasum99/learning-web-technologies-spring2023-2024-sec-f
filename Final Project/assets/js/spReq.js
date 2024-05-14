// document.addEventListener('DOMContentLoaded', (event) => {
//     function sp() {
//         const form = document.getElementById('newsp');
//         const error_role = document.getElementById('error_role');
//         const error_name = document.getElementById('error_name');
//         const error_bio = document.getElementById('error_bio');

//         form.addEventListener('submit', (e) => {
//             e.preventDefault(); // Prevent form submission

//             error_role.innerHTML = "";
//             error_name.innerHTML = "";
//             error_bio.innerHTML = "";

//             let role = document.querySelector('select[name="role"]').value;
//             let name = document.getElementById('name').value;
//             let bio = document.getElementById('bio').value;

//             let hasError = false;

//             if (role === '' || role == null) {
//                 error_role.innerHTML = "SP role should not be null";
//                 hasError = true;
//             } 
//             if (name === '' || name == null) {
//                 error_name.innerHTML = "SP name should not be null";
//                 hasError = true;
//             } 
//             if (bio === '' || bio == null) {
//                 error_bio.innerHTML = "SP bio should not be null";
//                 hasError = true;
//             } 

//             if (!hasError) {
//                 // AJAX request
//                 let xhr = new XMLHttpRequest();
//                 xhr.open("POST", "../controller/spController.php", true);
//                 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//                 xhr.onload = function() {
//                     if (xhr.status === 200) {
//                         let response = JSON.parse(xhr.responseText);
//                         if (response.status === "success") {
//                             alert("Submission successful!\nRole: " + response.data.role + "\nName: " + response.data.name);
//                             form.reset();
//                         } else {
//                             alert(response.message);
//                         }
//                     } else {
//                         alert("An error occurred while processing the request.");
//                     }
//                 };

//                 let data = "role=" + encodeURIComponent(role) +
//                            "&name=" + encodeURIComponent(name) +
//                            "&bio=" + encodeURIComponent(bio);

//                 xhr.send(data);
//             }
//         });
//     }

//     sp(); // Initialize the function
// });


document.addEventListener('DOMContentLoaded', (event) => {
    function sp() {
        const form = document.getElementById('newsp');
        const error_role = document.getElementById('error_role');
        const error_name = document.getElementById('error_name');
        const error_bio = document.getElementById('error_bio');

        const modal = document.getElementById("myModal");
        const modalMessage = document.getElementById("modalMessage");
        const confirmSubmit = document.getElementById("confirmSubmit");
        const span = document.getElementsByClassName("close")[0];

        form.addEventListener('submit', (e) => {
            e.preventDefault(); // Prevent form submission

            error_role.innerHTML = "";
            error_name.innerHTML = "";
            error_bio.innerHTML = "";

            let role = document.querySelector('select[name="role"]').value;
            let name = document.getElementById('name').value;
            let bio = document.getElementById('bio').value;

            let hasError = false;

            if (role === '' || role == null) {
                error_role.innerHTML = "SP role should not be null";
                hasError = true;
            } 
            if (name === '' || name == null) {
                error_name.innerHTML = "SP name should not be null";
                hasError = true;
            } 
            if (bio === '' || bio == null) {
                error_bio.innerHTML = "SP bio should not be null";
                hasError = true;
            } 

            if (!hasError) {
                // Show modal with user-provided details
                modalMessage.textContent = `Role: ${role}\nName: ${name}\nBio: ${bio}`;
                modal.style.display = "block";

                confirmSubmit.onclick = function() {
                    // AJAX request
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "../controller/spController.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            let response = JSON.parse(xhr.responseText);
                            if (response.status === "success") {
                                alert("Submission successful!\nRole: " + response.data.role + "\nName: " + response.data.name);
                                form.reset();
                            } else {
                                alert(response.message);
                            }
                        } else {
                            alert("An error occurred while processing the request.");
                        }
                    };

                    let data = "role=" + encodeURIComponent(role) +
                               "&name=" + encodeURIComponent(name) +
                               "&bio=" + encodeURIComponent(bio);

                    xhr.send(data);
                    modal.style.display = "none"; // Close the modal
                };
            }
        });

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }

    sp(); // Initialize the function
});

<?php 
    if(!isset($_COOKIE['flag'])){
        header('location: signin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New SP</title>
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        .button {
            width: auto;
            padding: 10px 20px;
            background-color: #224bd2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px; 
            transition-duration: 0.4s;
            box-shadow: 0 9px #999;
        }

        .button:hover {
            background-color: #0415ce;
        }

        .button:active {
            background-color: #0415ce; 
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="auth">
    <table width="37%" border="0" align="center">
        <tr>
            <td>
                <form id="newsp" method="post">
                    <fieldset>
                        <legend><b>Speaker & Performer</b></legend>
                        Role:  
                        <select name="role" id="role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="Speaker">Speaker</option>
                            <option value="Performer">Performer</option>
                        </select>
                        <div id="error_role" class="error"></div><hr><br>

                        Name:       
                        <input type="text" id="name" name="name" value="" /><br>
                        <div id="error_name" class="error"></div><hr>

                        Bio:        
                        <input type="text" id="bio" name="bio" value="" /><br>
                        <div id="error_bio" class="error"></div><hr>

                        <input type="reset" name="reset" value="Reset" />
                        <button type="submit" name="submit" class="button">Submit</button>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</div>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    function sp() {
        const form = document.getElementById('newsp');
        const error_role = document.getElementById('error_role');
        const error_name = document.getElementById('error_name');
        const error_bio = document.getElementById('error_bio');

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
                // Show alert with user-provided details
                let confirmation = confirm(`Please confirm your details:\nRole: ${role}\nName: ${name}\nBio: ${bio}`);
                if (confirmation) {
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
                }
            }
        });
    }

    sp(); // Initialize the function
});
</script>

</body>
</html>

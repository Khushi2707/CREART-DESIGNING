<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation Registration form</title>
   <link rel="stylesheet" href="form.css" />
</head>
<style>
    .error{
        color: red;
        margin: 7px;
        text-align: right;
    }
    </style>
<body>

    <div class="container">
        <h1 class="form-title">Invitation Registration Form </h1>
        <form action="#" onsubmit="return validateFrom()">
        
        <select class="form-select" aria-label="Default select example">
            <option class="select" selected>Select</option>
            <option value="1">Business Invitation</option>
            <option value="2">Birthday</option>
            <option value="3">Baby shower</option>
            <option value="4">Shradhdhanjali</option>

        </select>
            <div class="main-user-info">
                <div class="user-input-box">
                    <lable for="Name" class="fullname">Full Name:- *</lable>
                    <input type="text"
                           id="name"
                           name="name"
                           placeholder="Enter your Name">
                           <p id="nameError" class="error"></p>
                           <br>
                           <br>
                           <br>
                           <br>

                           <div class="user-input-box">
                    <lable for="phonenumber" class="phonenumber">Phone no:- *</lable>
                    <input type="phonenumber"
                           id="phonenumber"
                           name="phonenumber"
                           placeholder="Enter your phone no">
                           <p id="phonenumberError" class="error"></p>
                        </div>
       
                        <div class="user-input-box">
                    <lable for="email">Email:- * </lable>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="Enter Email">
                           <p id="emailError" class="error"></p>
                        </div>



                        <div class="user-input-box">
                    <lable for="Program1" class="Program1">Program1:- *</lable>
                    <input type="text"
                           id="Program1"
                           name="Program1"
                           placeholder="Enter Program1 Date & Time">
                           <p id="Program1Error" class="error"></p>
                        </div>
       
                        <div class="user-input-box">
                    <lable for="Program2" class="Program2">Program2:- </lable>
                    <input type="text"
                           id="Program2"
                           name="Program2"
                           placeholder="Enter Program2 Date & Time">
                           <p id="Program2Error" class="error"></p>
                        </div>

                        <div class="user-input-box">
                    <lable for="Venue">Venue:- *</lable> <input type="text"
                           id="Venue"
                           name="Venue"
                           placeholder="Enter Venue">
                           <p id="VenueError" class="error"></p>
                   <BR>
                   <br>
                   <Br>
                   <Br>

                       <form class="form">
        <div class="file-upload-wrapper" data-text="select your file!">
            <input name="file-upload-field" type="file" class="file-upload-field" value="">
        </div>          
              <br>
              <br>
        <div class="form-submit-btn">
                <input type="submit" value="Submit">
                </div>
                
               
     </form>          
    </div>
    

        <script>
            let name = document.getElementById("name");
            let phonenumber = document.getElementById("phonenumber");
            let email = document.getElementById("email");
            let Program1 = document.getElementById("Program1");
            let Program2 = document.getElementById("Program2");
            let Venue = document.getElementById("Venue");


            function validateFrom(){
                if( name.value ==""){
                   document.getElementById("nameError").innerHTML = "Name is rempty";
                }
                else{
                    document.getElementById("nameError").innerHTML = "";
                }

                if( phonenumber.value ==""){
                    document.getElementById("phonenumberError").innerHTML = "Phone number is empty";  
                }
               else if( phonenumber.value.length < 10){
                    document.getElementById("phonenumberError").innerHTML = "Phone number is invalid";
               }
               else if( phonenumber.value.length > 10){
                    document.getElementById("phonenumberError").innerHTML = "Phone number is invalid";
               }
                else{
                    document.getElementById("phonenumberError").innerHTML = "";  
                }

                if( email.value ==""){
                    document.getElementById("emailError").innerHTML = "Email is empty";
                }
                else{
                    document.getElementById("emailError").innerHTML = "";  
                } 

                if( Program1.value ==""){
                    document.getElementById("Program1Error").innerHTML = "program1 is empty";  
                }
                else{
                    document.getElementById("Program1Error").innerHTML = "";  
                }

                if( Venue.value ==""){
                    document.getElementById("VenueError").innerHTML = "Venue is empty";
                }
                else{
                    document.getElementById("VenueError").innerHTML = "";  
                }
                

                {return false;}
                {return true;}
            }
            </script>
           
</body>
</html>
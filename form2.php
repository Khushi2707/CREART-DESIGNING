<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Registration form</title>
   <link rel="stylesheet" href="form2.css" />
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
        <h1 class="form-title"> Wedding Registration Form </h1>
        <form action="#" onsubmit="return validateFrom()">
        
        <select class="form-select" aria-label="Default select example">
            <option class="select" selected>Select</option>
            <option value="1">Box type</option>
            <option value="2">Window type</option>
            <option value="3">Farman type</option>
            <option value="4">Engagement</option>

        </select>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Bride</label>
            
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">Groom</label>
            </div>
            <div class="main-user-info">
                <div class="user-input-box">
                    <lable for="Name" class="fullname">Name:- *</lable>
                    <input type="text"
                           id="Bride"
                           name="BrideName"
                           placeholder="Bride Name">
                           <p id="BrideNameError" class="error"></p>
                           <br>
                           <br>
                           <br>
                      <input type="text"
                           id="Groom"
                           name="GroomName"
                           placeholder="GroomName">
                           <p id="GroomNameError" class="error"></p>
                        </div>

                        <div class="user-input-box">
                    <lable for="Details" class="BrideDetails">BrideDetails:- *</lable>
                    <input type="text"
                           id="BrideDetails"
                           name="BrideDetails"
                           placeholder="Bride Mother-Father Name">
                           <p id="BrideDetailsError" class="error"></p>
                           <br>
                           <br>
                           <br>
                      <input type="text"
                           id="GroomDetails"
                           name="GroomDetails"
                           placeholder="Groom Mother-Father Name">
                           <p id="GroomDetailsError" class="error"></p>
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
                    <lable for="Program2" class="Program2">Program2:- * </lable>
                    <input type="text"
                           id="Program2"
                           name="Program2"
                           placeholder="Enter Program2 Date & Time">
                           <p id="Program2Error" class="error"></p>
                        </div>

                        <div class="user-input-box">
                    <lable for="Program3" class="Program3">Program3:-  </lable>
                    <input type="text"
                           id="Program3"
                           name="Program3"
                           placeholder="Enter Program3 Date & Time">
                           <p id="Program3Error" class="error"></p>
                        </div>

                        <div class="user-input-box">
                    <lable for="Program4" class="Program4">Program4:-  </lable>
                    <input type="text"
                           id="Program4"
                           name="Program4"
                           placeholder="Enter Program4 Date & Time">
                           <p id="Program4Error" class="error"></p>
                        </div>


                        <div class="user-input-box">
                    <lable for="GODName">GODName:- </lable>
                    <input type="text"
                           id="GODName"
                           name="GODName"
                           placeholder="Enter the GODName">
                           <p id="GODNameError" class="error"></p>
                        </div>

                        <div class="user-input-box">
                    <lable for="Tahuko">Tahuko:- </lable>
                    <input type="text"
                           id="Tahuko"
                           name="Tahuko"
                           placeholder="Enter a Tahuko & Name">
                           <p id="TahukoError" class="error"></p>
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
                   

                        <div class="user-input-box">
                    <lable  id="Snehadhin" for="Snehadhin">Snehadhin:-</lable>
                    <input type="text"
                           id="Snehadhin"
                           name="Snehadhin"
                           placeholder="Enter your family members name...">
                           <p id="SnehadhinError" class="error"></p>
                        </div>

                        <div class="user-input-box">
                    <lable for="Darshna Bhilashi">Darshna Bhilashi:-</lable>
                    <input type="text"
                           id="DarshnaBhilashi"
                           name="Darshna Bhilashi"
                           placeholder="Enter your family members name...">
                           <p id="DarshnaBhilashiError" class="error"></p>
                       </div>
                       <br>
                       <br>
                       <BR>
                       <BR>
                       <BR>
                       <br>

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
            let Bride = document.getElementById("Bride");
            let Groom = document.getElementById("Groom");
            let BrideDetails = document.getElementById("BrideDetails");
            let GroomDetails = document.getElementById("GroomDetails");
            let Program1 = document.getElementById("Program1");
            let Program2 = document.getElementById("Program2");
            let Program3 = document.getElementById("Program3");
            let Program4 = document.getElementById("Program4");
            let GODName = document.getElementById("GODName");
            let Tahuko = document.getElementById("Tahuko");
            let Venue = document.getElementById("Venue");
            let Snehadhin = document.getElementById("Snehadhin");
            let DarshnaBhilashi = document.getElementById("DarshnaBhilashi");
            

            function validateFrom(){
                if( Bride.value ==""){
                   document.getElementById("BrideNameError").innerHTML = "Bride Name is empty";
                }
                else{
                    document.getElementById("BrideNameameError").innerHTML = "";
                }

                if( Groom.value ==""){
                   document.getElementById("GroomNameError").innerHTML = "Groom Name is empty";
                }
                else{
                    document.getElementById("GroomNameError").innerHTML = "";
                }

                if( BrideDetails.value ==""){
                   document.getElementById("BrideDetailsError").innerHTML = "BrideDetails is empty";
                }
                else{
                    document.getElementById("BrideDetailsError").innerHTML = "";
                }
                if( GroomDetails.value ==""){
                   document.getElementById("GroomDetailsError").innerHTML = "GroomDetails is empty";
                }
                else{
                    document.getElementById("GroomDetailsError").innerHTML = "";
                }

                if( Program1.value ==""){
                    document.getElementById("Program1Error").innerHTML = "program1 is empty";  
                }
                else{
                    document.getElementById("Program1Error").innerHTML = "";  
                }
                if( Program2.value ==""){
                    document.getElementById("Program2Error").innerHTML = "program2 is empty";  
                }
                else{
                    document.getElementById("Program1Error").innerHTML = "";  
                }
                if( Program3.value ==""){
                    document.getElementById("Program3Error").innerHTML = "program3 is empty";  
                }
                else{
                    document.getElementById("Program3Error").innerHTML = "";  
                }
                if( Program4.value ==""){
                    document.getElementById("Program4Error").innerHTML = "program4 is empty";  
                }
                else{
                    document.getElementById("Program4Error").innerHTML = "";  
                }

                if( GODName.value ==""){
                    document.getElementById("GODNameError").innerHTML = "GODName is empty";
                }
                else{
                    document.getElementById("GODNameError").innerHTML = "";  
                } 
                
                if( Tahuko.value ==""){
                    document.getElementById("TahukoError").innerHTML = "Tahuko is empty"; 
                }
                else{
                    document.getElementById("TahukoError").innerHTML = "";  
                }  

                if( Venue.value ==""){
                    document.getElementById("VenueError").innerHTML = "Venue is empty";
                }
                else{
                    document.getElementById("VenueError").innerHTML = "";  
                }
                
                if( Snehadhin.value ==""){
                    document.getElementById("SnehadhinError").innerHTML = "Snehadhin is empty";
                }
                else{
                    document.getElementById("SnehadhinError").innerHTML = "";  
                }

                if( DarshnaBhilashi.value ==""){
                    document.getElementById("DarshnaBhilashiError").innerHTML = "DarshnaBhilashi is empty";
                }
                else{
                    document.getElementById("DarshnaBhilashiError").innerHTML = "";  
                }

                {return false;}
                {return true;}
            }
            </script>
           
</body>
</html>
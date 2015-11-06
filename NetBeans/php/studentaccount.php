<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CLY Student Account</title>
        <link rel="Stylesheet" href="../css/fernandostyles.css">
        <script src="../js/fernandoscripts.js"></script>
    </head>
    <body>
        <?php
        include '../header.html';
        
        ?>
        <main>
            <h2>Welcome to the Colorado Young Leaders registration page! 
                Please complete the following fields and press "Submit".</h2>
            <h2>    REGISTRATION FORM</h2>
            <form method="post" action="php/ProcessCreateAccount.php">
                First Name:&nbsp<input type="text" name="firstName" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Last Name:&nbsp<input type="text" name="lastName"> <br/>
                Address:&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="address" size = 59> <br/>
                City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="city"> State:&nbsp<input type="text" name="state"> Zip Code:&nbsp<input type="text" name="zip"><br/>
                County:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="county">
                    <option value="Select County ">Select County</option>
                    <option value="Denver County ">Denver County</option>
                    <option value="Arapahoe County">Arapahoe County</option>
                    <option value="Douglas County">Douglas County</option>
                    <option value="Douglas County">Douglas County</option>
                </select> Country:&nbsp  United States  <br/>
                High School:&nbsp <input type="text" name="highSchool"> High School Year: <input type="text" name="HighYear"><br/>
                Phone Number:&nbsp <input type="text" name="phone"> Email Address: <input type="text" name="email"><br/>
                Birthday:&nbsp Month &nbsp<input type="text" name="bMonth"> Day &nbsp<input type="text" name="bDay"> Year &nbsp <input type="text" name="bYear"> 
                Ethnicity <select name="ethnicity">
                    <option value="Select Ethnicity ">Select Ethnicity</option>
                    <option value="Hispanic or Latino ">Hispanic or Latino</option>
                    <option value="American Indian or Alaska Native ">American Indian or Alaska Native</option>
                    <option value="Asian">Asian</option>
                    <option value="Black or African American">Black or African American</option>
                    <option value="Native Hawaiian or Pacific Islander">Native Hawaiian or Pacific Islander</option>
                    <option value="White ">White</option>
                </select><br/>
                How did you hear about Colorado Young Leaders?:
                <select name="hearedCYL">
                    <option value="Select One ">Select one</option>
                    <option value="From a Friend "> From a Friend</option>
                    <option value="A parent ">A parent</option>
                    <option value="School Advisor">School Advisor</option>
                    <option value="WebSite">Website</option>
                    <option value="Advertisement">Advertisements</option>
                </select> <br/>
                Have you participated on a CYL Service Adventure? <input type="radio" name="Yes" value="Yes" >Yes <input type="radio" name="Yes" value="No">No<br/>
                If so, when?: <input type="text" name="yesParticipated"><br/>
                Parent/Guardian 1<br/>
                First Name:<input type="text" name="p1First"> Last Name:<input type="text" name="p1Last"> <br/>
                Phone Number: <input type="text" name="p1Phone"> Email Address: <input type="text" name="p1Email"><br/>
                Parent/Guardian 2<br/>
                First Name:<input type="text" name="p2First"> Last Name:<input type="text" name="p2Last"> <br/>
                Phone Number: <input type="text" name="p2Phone"> Email Address: <input type="text" name="p2Email"><br/>
                Parents/Guardian's combines salary range?: <select name="salary">
                    <option value="Select One">Select One</option>
                    <option value="$0 to $25000">$0 to $25000</option>
                    <option value="$25000 to $50000">$25000 to $50000</option>
                    <option value="$50000 to $75000">$50000 to $75000</option>
                    <option value="$75000 to $100000">$75000 to $100000</option>
                    <option value="$100000 and Above">$100000 and Above</option>
                </select><br/>
                <fieldset>
                    <legend>Code of Conduct</legend>
                    I agree to CYL's Code of Conduct:&nbsp <input type="radio" name="Yes" value="Yes" >Yes <input type="radio" name="No" value="no">No View here: <a href=""> Click here </a><br/>
                </fieldset>
                <br/>
                <fieldset>
                    <legend>Photo Release</legend>
                    I agree to CYL's Photo Release:&nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" name="Yes" value="Yes" >Yes <input type="radio" name="No" value="No">No  View here: <a href=""> Click here </a><br/>
                </fieldset>
                <br/>
                All information is confidential and will not be given to any 3rd party.<br/>
                <input type="submit" value="Submit">

            </form>
        </main>
        <?php
        include '../createAccountAside.html';
        include '../footer.html';
        ?>
    </body>
</html>

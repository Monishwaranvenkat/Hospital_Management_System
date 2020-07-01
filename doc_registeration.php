<?php include("doc_register.php")?>
<html>
    <head>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Registration form</h1>
            </div>
            <form action="doc_registeration.php" method="post" novalidate="novalidate">
                <div class="form-group">
                    <label for="fname">First name<sup class="text-dager">*</sup></label>
                    <input type="text" class="form-control" name="fname" id="fname">
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("fname",$err))
                    {
                        echo $err["fname"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="lname">Last name<sup class="text-dager">*</sup></label>
                    <input type="text" class="form-control" name="lname" id="lname">
                     <div class="text-danger">
                    <?php 
                     if (array_key_exists("lname",$err))
                    {
                        echo $err["lname"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="dob">date of birth<sup class="text-dager">*</sup></label>
                    <input type="date" class="form-control date" name="dob" id="dob">
                     <div class="text-danger">
                    <?php 
                     if (array_key_exists("dob",$err))
                    {
                        echo $err["dob"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="gender">Gender<sup class="text-dager">*</sup></label>
                    <label class="checkbox-inline "><input type="radio" value="male" name="gender" id="gender">Male</label>
                    <label class="checkbox-inline"><input type="radio" value="female" name="gender" id="gender">Female</label>
                    <label class="checkbox-inline"><input type="radio" value="others" name="gender" id="gender">other</label>
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("gender",$err))
                    {
                        echo $err["gender"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="email">Email<sup class="text-dager">*</sup></label>
                    <input type="email" class="form-control"  name="email" id="email">
                     <div class="text-danger">
                    <?php 
                     if (array_key_exists("email",$err))
                    {
                        echo $err["email"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="phone">phone<sup class="text-dager">*</sup></label>
                    <input type="text"  class="form-control"  name="phone" id="phone">
                     <div class="text-danger">
                    <?php 
                     if (array_key_exists("phone",$err))
                    {
                        echo $err["phone"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="alt-phone">Alternative phone No</label>
                    <input type="text"  class="form-control"  name="alt-phone" id="alt-phone">
                     <div class="text-danger">
                    <?php 
                     if (array_key_exists("alt-phone",$err))
                    {
                        echo $err["alt-phone"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="country">Country<sup class="text-dager">*</sup></label>
                    <select name="country" class="countries form-control" id="countryId">
                        <option value="">Select Country</option>
                    </select>
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("country",$err))
                    {
                        echo $err["country"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="state">state<sup class="text-dager">*</sup></label>
                    <select name="state" class="states form-control" id="stateId">
                        <option value="">Select State</option>
                    </select>
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("state",$err))
                    {
                        echo $err["state"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="city">City<sup class="text-dager">*</sup></label>
                    <select name="city" class="cities form-control" id="cityId">
                        <option value="">Select City</option>
                    </select>

                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("city",$err))
                    {
                        echo $err["city"];
                    }?></div>
                </div>
                 <div class="form-group">
                    <label for="street">village/street<sup class="text-dager">*</sup></label>
                    <input type="text" class="form-control" name="street" id="street">
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("street",$err))
                    {
                        echo $err["street"];
                    }?></div>
                </div>
                 <div class="form-group">
                    <label for="door">Door No<sup class="text-dager">*</sup></label>
                    <input type="text" class="form-control" name="door" id="door">
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("door",$err))
                    {
                        echo $err["door"];
                    }?></div>
                </div>
                

                <div class="form-group">
                    <label for="specialization">specialization<sup class="text-dager">*</sup></label>
                    <input type="text" class="form-control" name="specialization" id="specialization">
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("specialization",$err))
                    {
                        echo $err["specialization"];
                    }?></div>
                </div>

                <div class="form-group">
                    <label for="degree">Degrees<sup class="text-dager">*</sup><br>
                        <p class="text-info">Enter the degrees seperated by Commas</p>    
                    </label>
                    <input type="text" class="form-control" name="degree" id="degree">
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("degree",$err))
                    {
                        echo $err["degree"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="dis">Area of practice<sup class="text-dager">*</sup><br>
                        
                    </label>
                    <textarea type="textarea" class="form-control" name="dis" id="dis"></textarea>
                    <div class="text-danger">
                    <?php 
                    if (array_key_exists("dis",$err))
                    {
                        echo $err["dis"];
                    }?></div>
                </div>
                    <div class="form-group">
                    <label for="pss">Password<sup class="text-dager">*</sup></label>
                    <input type="password" class="form-control" name="pss" id="pss"/>
                     <div class="text-danger">
                    <?php 
                     if (array_key_exists("pss",$err))
                    {
                        echo $err["pss"];
                    }?></div>
                </div>
                <div class="form-group">
                    <label for="cnf-pss">Confirm Password<sup class="text-dager">*</sup></label>
                    <input type="password" class="form-control" name="cnf-pss" id="cnf-pss"/>
                     <div class="text-danger">
                    <?php 
                     if (array_key_exists("cnf-pss",$err))
                    {
                        echo $err["cnf-pss"];
                    }?></div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-lg" name="submit" value="submit"/>
                </div>

            </form>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script src="//geodata.solutions/includes/countrystatecity.js"></script>
    </body>
</html>
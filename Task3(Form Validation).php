<?php 
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $email="";
    $err_email="";
    $phoneCode="";
    $err_phoneCode="";
    $phoneNum="";
    $err_phoneNum="";
    $address="";
    $err_address="";
    $city="";
    $err_city="";
    $state="";
    $err_state="";
    $postalCode="";
    $err_postalCode="";
    $dobDay="";
    $err_dobDay="";
    $dobMonth="";
    $err_dobMonth="";
    $dobYear="";
    $err_dobYear="";
    $gender="";
    $err_gender="";
    $refer="";
    $err_refer="";
    $bio="";
    $err_bio="";
    $has_error=false;
    if(isset($_POST["register"])){
        if(!isset($_POST["name"])){
            $err_name="Please Enter Name!";
            $has_error=true;
        }
        else{
            if(ctype_space('   ')){
                $err_name="No spaces Allowed!";
                $has_error=true;
            }
            else{
                $name=htmlspecialchars($_POST["name"]);
            }
        }
        if(!isset($_POST["uname"])){
            $err_uname="Enter Your Username!";
            $has_error=true;
        }
        elseif((strlen($_POST["uname"])<6) || ctype_space(' ')){
            $err_uname="Username must be 6 characters long!";
            $has_error=true;
        }
    }
?>
<html>
    <head>
        <title>Club Registration</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <td>
                        <form action="" method="POST">
                            <fieldset>
                                <legend><h1>Club Member Registration Form</h1></legend>
                                <table>
                                    <tr>
                                        <td align="right">Name:</td>
                                        <td><input type="text" name="name"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Username:</td>
                                        <td><input type="text" name="uname"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Password:</td>
                                        <td><input type="password" name="pass"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Confirm Password:</td>
                                        <td><input type="password" name="cpass"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Email:</td>
                                        <td><input type="text" name="email"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Phone:</td>
                                        <td>
                                            <input type="text" placeholder="Code" size="3" name="phoneCode"> -
                                            <input type="text" placeholder="Number" size="8" name="phoneNum">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Address:</td>
                                        <td><input type="text" placeholder="Street Address" name="address"></td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td>
                                            <input type="text" placeholder="City" size="9" name="city"> -
                                            <input type="text" placeholder="State" size="15" name="state">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td><input type="text" placeholder="Postal/Zip Code" name="postalCode"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Birth Date:</td>
                                        <td>
                                            <select name="dobDay">
                                                <?php
                                                    echo "<option disabled >Day</option>";
                                                    for($i=1; $i<32; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobMonth">
                                                <?php
                                                    $months=array("January","February","March","April","May","Jun","July","August","September","October","November","December");
                                                    echo "<option disabled>Month</option>";
                                                    for($i=0; $i<12; $i++){
                                                        echo "<option>".$months[$i]."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobYear">
                                                <?php
                                                    echo "<option disabled >Year</option>";
                                                    for($i=1990; $i<2021; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Gender:</td>
                                        <td>
                                            <input type="radio" name="gender"> Male
                                            <input type="radio" name="gender"> Female
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Where did you hear about us?</td>
                                        <td>
                                            <input type="checkbox" name="refer[]" value="A Friend or Colleague"> <br>
							                <input type="checkbox" name="refer[]" value="Google"> <br>
							                <input type="checkbox" name="refer[]" value="Blog Post"> <br>
							                <input type="checkbox" name="refer[]" value="News Article">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Bio:</td>
                                        <td><textarea name="bio"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td>
                                            <input type="submit" name="register" value="Register">
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
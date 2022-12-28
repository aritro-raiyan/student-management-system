<?php
include ('../models/css.php');
?>
<?php 


    $error = "";

    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'error'){
            $error = "Password did not match!";
        }
    }

?>
<html>
    <head>
        <title> Registration </title>
    </head>
    <body>
        <?php require '../controllers/jsfunction.php'; ?>
        <form name="myform" method="POST" action=" ../controllers/regcheck.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <table >
                <tr bgcolor="White">
                    <td >
                        <h2> Student management system </h2>
                    </td>
                    <td align="right">
                        <a href="login.php"> Login </a>
                    </td>
                </tr>
                <tr >
                    <td colspan="3" align="center">
                        <form>
                            <fieldset>
                                <legend> REGISTRATION </legend>
                                <table>
                                    <tr>
                                        <td> User Name:</td>
                                        <td> <input type="text" name="username" value=""> </td>
                                    </tr>
                                    <tr>
                                        <td> Password: </td>
                                        <td> <input type="password" name="password" value="" required> </td>
                                    </tr>
                                    <tr>
                                        <td> Confirm Password: </td>
                                        <td> <input type="password" name="confirmpassword" value="" > <?=$error?> </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>
                                            <input type="submit" name="submit" value="Submit">
                                            <input type="reset" name="reset" value="Reset">
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
                    </td>
                </tr>
                <tr height="50px">
                    <td align="center" colspan="3">
                        <p>FFF:Student Management System copyright @2022</p>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
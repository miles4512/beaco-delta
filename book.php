               <?php 
    include("db_conect.php");
    if(isset($_POST['Register'])){
      $name = $_POST['name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $role = $_POST['role'];
      $ini = (3-1);

      $sql= "INSERT user(id,name,username,password,role,ini) VALUES('','$name','$username','$password','$role','$ini')";

      $result = mysqli_query($conn,$sql);
  if ($result) {
  echo "<script type='text/javascript'>alert('Registered Successfully!')</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Failed To Register!')</script>";
}

    }
  ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'decoration.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::beaco</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  .info1{
  margin-top: -100px;
  width: 61%;
  height: 35em;
  background-color: #D8CE74;
  margin: 0px auto;
  border-radius: 100px 100px 100px 100px;
  text-align: center;
}
.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}

.booking1{
  width: 100%;
  height: 80%;
  padding-left: 10em;
  margin: 0px  auto;
  background-color: #F0F8FF;


}
</style>
<body>
<table width="88%" border="0" align="center">
  <tr>
    <th height="120" scope="col">
          <?php include 'head.php'; ?>
   </th>
  </tr>
  <tr>
    <th height="51" scope="row">
    <?php include 'nav.php'; ?>
     

    </th>
  </tr>
  
  <tr>
    <th height="400" bgcolor="#FFCE53" scope="row" align="center" valign="top" >
     

<table height="100%" width="100%">
             <tr>
               <th>
                 <div class="info1">
                 <h2>Book Room Online</h2><hr>

                <form id="form1" name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit=" return(validate());"">
        <span class="reg"><h2><strong>Register User...!!</strong></h2></span>
          <table width="47%" border="0px" align="center">
            <tr>
              <td align="right"><span class="h">Full Name</span></td>
              <td><label for="name"></label>
              <input type="text" class="form-control" name="name" id="name" /></td>
            </tr>
            <tr>
              <td align="right"><span class="h">User Name</span></td>
              <td><label for="username"></label>
              <input type="text" class="form-control" name="username" id="username" /></td>
            </tr>
            <tr>
              <td align="right"><span class="h">Password</span></td>
              <td><input type="password" class="form-control" name="password" id="password" /></td>
            </tr>
            <tr>
              <td align="right"><span class="h">Choose role</span></td>
              <td><label for="role"></label>
                <select name="role" class="form-control" id="role">
                  <option value="forum">Add To The Forum</option>
                  <option value="cashier">Cashier</option>
                  <option value="headmaster">Head master</option>
                  <option value="student">Student</option>
                  <option value="libralian">Libralia</option>
                  <option value="doctor">School doctor</option>
                  <option value="matron">Matron</option>
                  <option value="record">Records Keeper</option>
                  <option value="academic">Academic Master</option>
                  <option value="f1a">Form One A</option>
                  <option value="f1b">Form One B</option>
                  <option value="f1c">Form One C</option>
                  <option value="f1d">Form One D</option>
                  <option value="f1e">Form One E</option>
                  <option value="f2a">Form Two A</option>
                  <option value="f2b">Form Two B</option>
                  <option value="f2c">Form Two C</option>
                  <option value="f2d">Form Two D</option>
                  <option value="f2e">Form Two E</option>
                  <option value="f3aa">Form Three Art A</option>
                  <option value="f3ab">Form Three Art B</option>
                  <option value="f3ac">Form Three Art C</option>
                  <option value="f3sca">Form Three Science A</option>
                  <option value="f3scb">Form Three Science B</option>
                  <option value="f3xxa">Form Three xx A</option>
                  <option value="f3xxb">Form Three xx B</option>
                  <option value="f4aa">Form Four Art A</option>
                  <option value="f4ab">Form Four Art B</option>
                  <option value="f4ac">Form Four Art C</option>
                  <option value="f4sca">Form Four science A</option>
                  <option value="f4scb">Form Four science B</option>
                  <option value="f4xxa">Form Four XX A</option>
                  <option value="f4xxb">Form Four XX B</option>
                  <option selected="selected">Choose user role</option>
              </select></td>
            </tr>
            <tr>
              <td height="25">&nbsp;</td>
              <td align="left"><input type="submit" class='btn btn-primary ' name="Register" id="Register" value="Register" /></td>
            </tr>
          </table>
        </form>

                 </div>
                    </th>
                  </tr>
                </table>
                </div>
               </th>

             </tr>

           </table>

         

    </th>
  </tr>

            
  <tr>
    <th scope="row" height="100" bgcolor="#E7CCAC">
    <div class="footer">
            <img src="imeges/footer.png" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
          </div>
          
    </th>
  </tr>
</table>
</body>
</html>

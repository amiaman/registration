<style>
body

{
    background-image: url(loading.gif);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}

</style>
<body>

<?php 
include 'config.php';
session_start();
if(isset($_POST['op']))
{
    $o=$_POST['email'];
    $ne=$_POST['np'];
     $op=$_POST['op'];
    $cp=$_POST['cp'];
    $qry=mysql_query("select * from products where emailAdd='$o'");
    $fe=mysql_fetch_array($qry);
    $da=$fe['password'];
    if($da==$op)
    {
        
        mysql_query("update products set password='$cp' where emailAdd='$o'");
        echo '<script>window.location="http://www.whizmarts.in/index.php";</script>';
        }
 
    else
    {
        echo '<script>alert("Fill correct password changed");</script>';
            
        
    }
}

if(isset($_POST['login']))
{
    $mno = $_POST['mno'];
    $pass = $_POST['pass'];
    $qry=mysql_query("SELECT * FROM signup WHERE Mobile = '$mno'");
    $result = mysql_fetch_array($qry);
    if (verify_password_hash($pass, $result['Password'])) {
        session_start();
        $userinfo['Name'] = $result['Name'];
        $$userinfo['C_name'] = $result['C_name'];
        $userinfo['Mobile'] = $result['Mobile'];
        $_SESSION['userinfo'] = $userinfo;
    ?>
    <meta http-equiv="refresh" content="2;URL='index.php?id=<?php echo $uname;?>" /> 
    <?php
    } else {
     echo "invalid user";

    }
}
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $cname = $_POST['cname'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pass = hash_password($_POST['pass']);
    // $pass=$_POST['code'];
    $qry=mysql_query("INSERT INTO signup (Name, C_name, Mobile, Email, PASSWORD, Address) VALUES ('$name', '$cname', '$mno', '$email', '$pass', '$address')");
    echo mysql_error();
    $to="$email";
    $from = "info@whizmarts.in";
    $subject="Whizmarts Registration ";
    $message="HEY MY $name!! I have $cname.My Password is $pass ";
    $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     mail($to, $subject, $message, $headers);

     if (!mail($to, $subject, $message, $headers)){
     echo "error";
     }
     else{
         echo "Form submitted successfully! Press back $emailtosend";
            echo '<script>alert("Thanks For Registration");window.location="http://www.whizmarts.in/index.php";</script>';

}

}
if (isset($_POST['freepost'])) {
    $pname=$_POST['pname'];
    $cname=$_POST['cname'];
    $mno=$_POST['mno'];
    $email=$_POST['email'];
    $pass=$_POST['loc'];
    $type=$_POST['type'];
    $address=$_POST['address'];
    $qry=mysql_query("insert into freepost values('$pname','$cname','$mno','$email','$pass','$type','$address')");
    echo mysql_error();
        echo '<script>alert("Thanks For Sending Product Posting");window.location="index.php";</script>';
}

if(isset($_POST['product']))
{
$id=$_POST['id'];
echo $id;
}

if(isset($_POST['listing']))
{
    $name=$_POST['name'];
    $cname=$_POST['cname'];
    $mno=$_POST['mno'];
    $email=$_POST['email'];
    $btype=$_POST['btype'];
    $bcategory=$_POST['bcategory'];
    $address=$_POST['address'];
    $date=date('Y-m-d');
    mysql_query("insert into lisrequest  values('$name','$mno','$address','$email','$btype','$bcategory','$cname','$date')");
    echo mysql_error();
     $to="$email";
    $from = "info@whizmarts.in";
    $subject="Web Page Request";
    $message="HEY MY Name is $name !! I AM $btype . I have $bcategory category so I improve My Business With Your Company S please contact me Soon ";
    $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     mail($to, $subject, $message, $headers);

     if (!mail($to, $subject, $message, $headers)){
     echo "error";
     }
     else{
         echo "Form submitted successfully! Press back $email";
}
    echo '<script>alert("Thanks For Sending Listing Request");window.location="index.php";</script>';
}
if(isset($_POST['web']))
{
    $s=1;
$name=$_POST['name'];
    $cname=$_POST['cname'];
    $mno=$_POST['mno'];
    $email=$_POST['email'];
    $btype=$_POST['btype'];
    $bcategory=$_POST['bcategory'];
    $address=$_POST['address'];
    $date=date('Y-m-d');
    mysql_query("insert into webrequest  values('$name','$mno','$email','$address','$btype','$bcategory','$cname','$date','$s','')");
    echo mysql_error();
     $to="$email";
    $from = "info@whizmarts.in";
    $subject="Web Page Request";
    $message="HEY MY Name is $name !! I AM $btype . I have $bcategory category so I improve My Business With Your Company S please contact me Soon ";
    $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     mail($to, $subject, $message, $headers);

     if (!mail($to, $subject, $message, $headers)){
     echo "error";
     }
     else{
         echo "Form submitted successfully! Press back $email";
}
    echo '<script>alert("Thanks For Sending Web Page Request");window.location="index.php";</script>';

    echo "Web Page";
    
}
if(isset($_POST['enq']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mno=$_POST['mno'];
    $email=$_POST['email'];
    mysql_query("insert into Enquiry values('$name','$mno','$email','$address')");
    echo mysql_error();
     $to="$email";
    $from = "info@whizmarts.in";
    $subject="Enquiry  By $name";
    $message="HEY MY Name is $name !! I Belongs to  $address . I have $address problem Will You Solve this Problem . please contact me Soon ";
    $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     mail($to, $subject, $message, $headers);

     if (!mail($to, $subject, $message, $headers)){
     echo "error";
     }
     else{
         echo "Form submitted successfully! Press back $email";
}
    echo '<script>alert("Thanks For Sending Enquiry ");window.location="index.php";</script>';

    
    
}
    /**
     * hash_password function.
     * 
     * @access private
     * @param mixed $password
     * @return string|bool could be a string on success, or bool false on failure
     */
    function hash_password($password) {
        
        return password_hash($password, PASSWORD_BCRYPT);
        
    }

    /**
     * verify_password_hash function.
     * 
     * @access private
     * @param mixed $password
     * @param mixed $hash
     * @return bool
     */
    function verify_password_hash($password, $hash) {
        
        return password_verify($password, $hash);
        
    }

?>
<body>

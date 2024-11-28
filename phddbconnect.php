<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "admissionenroll");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $coursname = $_POST['coursname'];
        $name = $_POST['name'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $caste = $_POST['caste'];
        $coursname = $_POST['handiorexser'];
        $sponsor = $_POST['sponsor'];
        $gatescore = $_POST['gatescore'];
        $mtechcetscore = $_POST['mtechcetscore'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $phno = $_POST['phno'];
        $mobno = $_POST['mobno'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $domfather = $_POST['domfather'];
        $govtser = $_POST['govtser'];
        $organi = $_POST['organi'];
        $mention = $_POST['mention'];
        $backclass = $_POST['backclass'];
        $income = $_POST['income'];
        $peradd = $_POST['peradd'];
        $perpin = $_POST['perpin'];
        $perphno = $_POST['perphno'];
        $permobno = $_POST['permobno'];
        $peremail = $_POST['peremail'];
        $nameunibtech = $_POST['nameunibtech'];
        $btechmonthyearpass = $_POST['btechmonthyearpass'];
        $marksbtech = $_POST['marksbtech'];
        $btechentranexamname = $_POST['btechentranexamname'];
        $btechentranmarks = $_POST['btechentranmarks'];
        $mtechuni = $_POST['mtechuni'];
        $mtechpassyear = $_POST['mtechpassyear'];
        $mtechmarks = $_POST['mtechmarks'];
        $mtechentrance = $_POST['mtechentrance'];
        $mtechentrancmark = $_POST['mtechentrancmark'];
        $scholarshipname = $_POST['scholarshipname'];
        $lastuniname = $_POST['lastuniname'];
    
        
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO phdenroll  VALUES ('$coursname','$name','$fathername','$mothername','$gender ','$dob','$caste','$coursname','$sponsor',
        '$gatescore','$mtechcetscore','$address','$pincode','$phno','$mobno','$email','$location','$domfather','$govtser','$organi','$mention',
        '$backclass','$income','$peradd','$perpin','$perphno','$permobno ','$peremail','$nameunibtech','$btechmonthyearpass','$marksbtech',
        '$btechentranexamname','$btechentranmarks','$mtechuni','$mtechpassyear','$mtechmarks','$mtechentrance','$mtechentrancmark','$scholarshipname','$lastuniname')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
          
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>




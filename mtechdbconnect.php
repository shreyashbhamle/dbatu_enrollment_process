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
        $cour_name = $_POST['cour_name'];
        $name = $_POST['name'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $caste = $_POST['caste'];
        $handiOrexser = $_POST['handiOrexser'];
        $sponsored = $_POST['sponsored'];
        $gatescore = $_POST['gatescore'];
        $mtechcetscore = $_POST['mtechcetscore'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $phonenostd = $_POST['phonenostd'];
        $mobno = $_POST['mobno'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $domfather = $_POST['domfather'];
        $govtServant = $_POST['govtServant'];
        $organ = $_POST['organ'];
        $occu = $_POST['occu'];
        $backclass = $_POST['backclass'];
        $income = $_POST['income'];
        $perAdd = $_POST['perAdd'];
        $perPin = $_POST['perPin'];
        $perPhone = $_POST['perPhone'];
        $perMob = $_POST['perMob'];
        $perEmail = $_POST['perEmail'];
        $nameUni = $_POST['nameUni'];
        $monthpass = $_POST['monthpass'];
        $scolarElig = $_POST['scolarElig'];
        $leavingClgname = $_POST['leavingClgname'];


        
        
        
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO mtechenroll  VALUES ('$cour_name','$name','$fathername','$mothername','$gender ','$dob','$caste','$handiOrexser','$sponsored',
        '$gatescore','$mtechcetscore','$address','$pincode','$phonenostd','$mobno','$email','$location','$domfather','$govtServant','$organ','$occu',
        '$backclass','$income','$perAdd','$perPin','$perPhone','$perMob ','$perEmail','$nameUni','$monthpass','$scolarElig','$leavingClgname')";
         
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




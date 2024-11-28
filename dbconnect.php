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
        $AdmissionType = $_POST['AdmissionType'];
        $ChoiceCode = $_POST['ChoiceCode'];
        $InstituteCode = $_POST['InstituteCode'];
        $Region = $_POST['Region'];
        $CourseCode = $_POST['CourseCode'];
        $CourseType = $_POST['CourseType'];
        $CourseYear = $_POST['CourseYear'];
        $AplicationStatus = $_POST['AplicationStatus'];
        $PaymentState = $_POST['PaymentState'];
        $CandidatesName = $_POST['CandidatesName'];
        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $gender = $_POST['gender'];
        $DOB = $_POST['DOB'];
        $Marrital = $_POST['Marrital'];
        $religion = $_POST['religion'];
        $caste = $_POST['caste'];
        $mobileno = $_POST['mobileno'];
        $parentno = $_POST['parentno'];
        $parentemail = $_POST['parentemail'];
        $permanentAdd = $_POST['permanentAdd'];
        $currentadd = $_POST['currentadd'];
        $dteid = $_POST['dteid'];
        $higheredu = $_POST['higheredu'];
        $entranceexam = $_POST['entranceexam'];
        $entrancemarks = $_POST['entrancemarks'];
        $hscboard = $_POST['hscboard'];
        $hscyear = $_POST['hscyear'];
        $hscmark = $_POST['hscmark'];
        $physicsmark = $_POST['physicsmark'];
        $chemmarks = $_POST['chemmarks'];
        $mathmarks = $_POST['mathmarks'];
        $biomark = $_POST['biomark'];
        $techsub1 = $_POST['techsub1'];
        $techsub2 = $_POST['techsub2'];
        $techsub3 = $_POST['techsub3'];
        $sscyear = $_POST['sscyear'];
        $sscmark = $_POST['sscmark'];
        $candtype = $_POST['candtype'];
        $income = $_POST['income'];
        $scholar = $_POST['scholar'];
        $typescholar = $_POST['typescholar'];
        $handicap = $_POST['handicap'];
        $linguistic = $_POST['linguistic'];
        $northedu = $_POST['northedu'];
        $jammukash = $_POST['jammukash'];
        $projectaffect = $_POST['projectaffect'];
        $exserviceman = $_POST['exserviceman'];
        $statelevelplayer = $_POST['statelevelplayer'];
        $nationalplayer = $_POST['nationalplayer'];
        $widoworphan = $_POST['widoworphan'];
        $passport = $_POST['passport'];
        $bankacno = $_POST['bankacno'];
        $bankholdername	= $_POST['bankholdername'];
        $bankname = $_POST['bankname'];
        $bankactype = $_POST['bankactype'];
        $ifsccode = $_POST['ifsccode'];
        
        
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO btechenroll  VALUES ('$AdmissionType','$ChoiceCode','$InstituteCode','$Region','$CourseCode','$CourseType','$CourseYear',
        '$AplicationStatus','$PaymentState','$CandidatesName','$fathername','$mothername','$gender','$DOB','$Marrital','$religion','$caste','$mobileno','$parentno','$parentemail','$permanentAdd',
        '$currentadd','$dteid','$higheredu','$entranceexam','$entrancemarks','$hscboard','$hscyear','$hscmark','$physicsmark','$chemmarks','$mathmarks','$biomark','$techsub1','$techsub2','$techsub3',
       '$sscyear','$sscmark','$candtype','$income','$scholar','$typescholar','$handicap','$linguistic','$northedu','$jammukash','$projectaffect','$exserviceman','$statelevelplayer',
        '$nationalplayer','$widoworphan','$passport','$bankacno','$bankholdername','$bankname','$bankactype','$ifsccode')";
         
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




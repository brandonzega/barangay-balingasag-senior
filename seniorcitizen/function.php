<?php
if(isset($_POST['btn_add'])){
    $seniorCitizenID = $_POST['seniorCitizenID'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $suffix = $_POST['suffix'];
    $gender = $_POST['gender'];
    $birthplace = $_POST['birthplace'];

    //$txt_age = $_POST['txt_age'];
    $birthdate =$_POST['birthdate'];
    $today = date("Y-m-d");
    $diff = date_diff(date_create($birthdate), date_create($today));
    $age = $diff->format('%y');

    $address = $_POST['address'];
    $purokId = $_POST['purokId'];
    $contactNumber = $_POST['contactNumber'];
    $pension = $_POST['pension'];
    $monthlyPension = $_POST['monthlyPension'];
    $status = $_POST['status'];
    $contactPerson = $_POST['contactPerson'];
    $contactPersonNumber= $_POST['contactPersonNumber'];
    $contactAddress = $_POST['contactAddress'];

    

    if(isset($_SESSION['role'])){
        $action = 'Added Senior Citizen named '.$lastName.', '.$firstName.' '.$middleName.' ' .$suffix;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $su = mysqli_query($con,"SELECT * from senior_citizen where firstName = '".$firstName."' and lastName = '".$lastName."' ");
    $ct = mysqli_num_rows($su);
    
    if($ct == 0){

     
             
        $query = mysqli_query($con,"INSERT INTO senior_citizen (
                                        seniorCitizenID,
                                        firstName,
                                        middleName,
                                        lastName,
                                        suffix,
                                        gender,
                                        birthdate,
                                        age,
                                        birthplace,
                                        address,
                                        purokId,
                                        contactNumber,
                                        pension,
                                        monthlyPension,
                                        status,
                                        contactPerson,
                                        contactPersonNumber,
                                        contactAddress
                                       
                                    ) 
                                    values (
                                        '$seniorCitizenID', 
                                        '$firstName', 
                                        '$middleName',  
                                        '$lastName',
                                        '$suffix', 
                                        '$gender',
                                        '$birthdate',
                                        '$age',
                                        '$birthplace',
                                        '$address',
                                        '$purokId',
                                        '$contactNumber',
                                        '$pension',
                                        '$monthlyPension',
                                        '$status',
                                        '$contactPerson',
                                        '$contactPersonNumber',
                                        '$contactAddress'
                                    )"
                            ) 
                            or die('Error: ' . mysqli_error($con));
             
        

        
            if($query == true)
            {
                $action = 'Update Information Of '.$lastName.', '.$firstName.' '.$middleName;
                $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('Administraitor', NOW(), '".$action."')");
                $_SESSION['added'] = 1;
               
                // Send SMS
                $message = [
                    "secret" => "d5a1f3d1f6799722a22030400651c2cf3eebaf9f", // your API secret from (Tools -> API Keys) page
                    "mode" => "devices",
                    "device" => "00000000-0000-0000-d87c-948812ad3bbd",
                    "sim" => 1,
                    "priority" => 1,
                    "phone" => $contactNumber,
                    "message" => "Hi  ".$firstName." ".$lastName.", you are now  successfully added to Barangay Balinagsag!"
                ];
              
                    $cURL = curl_init("https://www.cloud.smschef.com/api/send/sms");
                    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($cURL, CURLOPT_POSTFIELDS, $message);
                    $response = curl_exec($cURL);
                    curl_close($cURL);
                
                    $result = json_decode($response, true);
            }
            $_SESSION['edited'] = 1;
            header("location: ".$_SERVER['REQUEST_URI']);
        
            {
                $_SESSION['added'] = 1;
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
    }
    else{
        $_SESSION['duplicateuser'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }    

}


if(isset($_POST['btn_save']))
{    $id = $_POST['id'];
    $seniorCitizenID = $_POST['seniorCitizenID'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $suffix = $_POST['suffix'];
    $gender = $_POST['gender'];
    $birthplace = $_POST['birthplace'];

    //$txt_age = $_POST['txt_age'];
    $birthdate =$_POST['birthdate'];
    $today = date("Y-m-d");
    $diff = date_diff(date_create($birthdate), date_create($today));
    $age = $diff->format('%y');

    $address = $_POST['address'];
    $purokID = $_POST['purokId'];
    $contactNumber = $_POST['contactNumber'];
    $pension = $_POST['pension'];
    $monthlyPension = $_POST['monthlyPension'];
    $status = $_POST['status'];
    $contactPerson = $_POST['contactPerson'];
    $contactPersonNumber= $_POST['contactPersonNumber'];
    $contactAddress = $_POST['contactAddress'];



                $update_query = mysqli_query($con,"UPDATE senior_citizen set 
                                        seniorCitizenID = '".$seniorCitizenID."',
                                        firstName = '".$firstName."',
                                        middleName = '".$middleName."',
                                        lastName = '".$lastName."',
                                        suffix = '".$suffix."',
                                        gender = '".$gender."',
                                        birthdate = '".$birthdate."',
                                        age = '".$age."',
                                        birthplace = '".$birthplace."',
                                        address = '".$address."',
                                        purokId = '".$purokId."',
                                        contactNumber = '".$contactNumber."',
                                        pension = '".$pension."',
                                        monthlyPension = '".$monthlyPension."',
                                        status = '".$status."',
                                        contactPerson = '".$contactPerson."',
                                        contactPersonNumber = '".$contactPersonNumber."',
                                        contactAddress = '".$contactAddress."'
                            
                                        where id = '".$id."'
                                ") or die('Error: ' . mysqli_error($con));
                
        if($update_query == true){
            {
                $action = 'Update Information Of '.$lastName.', '.$firstName.' '.$middleName;
                $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('Administraitor ', NOW(), '".$action."')");
                $_SESSION['added'] = 1;
               
                // Send SMS
                $message = [
                    "secret" => "d5a1f3d1f6799722a22030400651c2cf3eebaf9f", // your API secret from (Tools -> API Keys) page
                    "mode" => "devices",
                    "device" => "00000000-0000-0000-d87c-948812ad3bbd",
                    "sim" => 1,
                    "priority" => 1,
                    "phone" => $contactNumber,
                    "message" => "Hi, ".$firstName." ".$lastName.", your account is successfully updated!"
                ];
              
                    $cURL = curl_init("https://www.cloud.smschef.com/api/send/sms");
                    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($cURL, CURLOPT_POSTFIELDS, $message);
                    $response = curl_exec($cURL);
                    curl_close($cURL);
                
                    $result = json_decode($response, true);
            }
            $_SESSION['edited'] = 1;
            header("location: ".$_SERVER['REQUEST_URI']);
        }
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_selected']))
    {
        foreach($_POST['chk_selected'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from senior_citizen where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>
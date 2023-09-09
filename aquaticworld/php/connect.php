<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aquaworld";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$mail = $_POST['email'];
$telno = $_POST['pno'];
$address = $_POST['address'];
$tellmessage = $_POST['message'];
$product = $_POST['product'];

// Insert data into table

if($product=="Ornamental Fish")
            {
                $sql = "INSERT INTO reg_of (name, mail, telno, address, tellmessage,product) VALUES ('$name' , '$mail' , '$telno' , '$address', '$tellmessage','$product')";

            }
else if ($product=="Aquatic Plants") 
            {
                $sql = "INSERT INTO reg_ap (name, mail, telno,address, tellmessage,product) VALUES ('$name' , '$mail' , '$telno' , '$address', '$tellmessage','$product')";

            }
else if ($product=="Fish Foods") 
            {
                $sql = "INSERT INTO reg_ff (name, mail, telno,address, tellmessage,product) VALUES ('$name' , '$mail' , '$telno' , '$address', '$tellmessage','$product')";

            }
else if ($product=="Fish Medicine") 
            {
                $sql = "INSERT INTO reg_fm (name, mail, telno,address, tellmessage,product) VALUES ('$name' , '$mail' , '$telno' , '$address', '$tellmessage','$product')";

            }
else if ($product=="Fish Tanks") 
            {
                $sql = "INSERT INTO reg_ft (name, mail, telno,address, tellmessage,product) VALUES ('$name' , '$mail' , '$telno' , '$address', '$tellmessage','$product')";

            }

else if ($product=="Other")
			{
				$sql = "INSERT INTO reg_other (name, mail, telno,address, tellmessage,product) VALUES ('$name' , '$mail' , '$telno' , '$address', '$tellmessage','$product')";

			}



if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



// Close database connection
mysqli_close($conn);
?>
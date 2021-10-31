<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$servername = "127.0.0.1";
$username="pdo_test1";
$password="nJMIKQeXMRorQ76H";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE address_format(id INT(250) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  addres VARCHAR(250) NOT NULL,
  house_no VARCHAR(250) NOT NULL ,
  landmark VARCHAR(250),
  street VARCHAR(250),
  area VARCHAR(250),
  village VARCHAR(250),
  district VARCHAR(250),
  sub_district VARCHAR(250),
  states VARCHAR(250)
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table MyGuests created successfully";
} catch(PDOException $e) {
  
}
try{
    $con=new PDO("mysql:host=$servername;dbname=$username",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO address_format(addres,  house_no , landmark , street, area ,village ,district ,
    sub_district, states)VALUES('".$_POST['address']."','".$_POST['h/b/a']."','".$_POST['landmark']."','".$_POST['s/r/l']."','".$_POST['a/l/s']."','".$_POST['v/t/c']."','".$_POST['district']."','".$_POST['sub_district']."','".$_POST['state']."')";
    $con->exec($sql);
    echo "Insert Successfully";
    
}catch(PDOException $s)
{
    echo $sql."<br>". $s->getMessage();
}

?>
<!Doctype html>
<td><a class='btn btn-success' href='h.py' >Next page</a></td>
</html>

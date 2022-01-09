<?php 

    error_reporting(E_ALL); 
    ini_set('display_errors',1); 

    include('dbcon.php');


    if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit']))
    {
        $phone=$_POST['phone'];
        $name =$_POST['name'];
        $address =$_POST['address'];
        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('INSERT INTO user(phone,name,address) VALUES(:phone,:name, :address)');
                $stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':name',$name);
                $stmt->bindParam(':address', $address);
            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
        }
    
    }
    echo "
	      <script>
    	      alert('회원가입이 완료 되었습니다.');
	          location.href = 'list.html';
	      </script>
	  ";
?>


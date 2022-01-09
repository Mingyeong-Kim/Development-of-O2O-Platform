<?php 

    error_reporting(E_ALL); 
    ini_set('display_errors',1); 

    include('dbcon.php');


    if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['submit']))
    {

        $title=$_POST['title'];
        $name =$_POST['name'];
        $content =$_POST['content'];
        $quantity=$_POST['quantity'];
        $price =$_POST['price'];
        $account =$_POST['account'];
        $contact=$_POST['contact'];
        $start_date =$_POST['start_date'];
        $end_date =$_POST['end_date'];
        $place=$_POST['place'];
        $left_quantity =$_POST['left_quantity'];
     

        if(!isset($errMSG))
        {
            try{
                $stmt = $con->prepare('INSERT INTO item(title,name,content,quantity,price,account,contact,start_date,end_date,place,left_quantity,success) VALUES(:title,:name,:content,:quantity,:price,:account,:contact,:start_date,:end_date,:place,:left_quantity,"x")');
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':quantity', $quantity);
	   	$stmt->bindParam(':price',$price);
                $stmt->bindParam(':account', $account);
                $stmt->bindParam(':contact', $contact);
	   	$stmt->bindParam(':start_date',$start_date);
                $stmt->bindParam(':end_date', $end_date);      
	   	$stmt->bindParam(':place',$place);
                $stmt->bindParam(':left_quantity', $left_quantity);        

                if($stmt->execute())
                {
                    $successMSG = "새로운 사용자를 추가했습니다.";
                }
                else
                {
                    $errMSG = "사용자 추가 에러";
                }

            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage()); 
            }
        }

    }

    echo "
	      <script>
    	      alert('게시글 작성이 완료 되었습니다.');
	          location.href = 'list.html';
	      </script>
	  ";
?>

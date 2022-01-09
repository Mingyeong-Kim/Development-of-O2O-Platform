<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <title>Hello, world!</title>
  </head>
   <body>
        <?php 
        if (isset($errMSG)) echo $errMSG;
        if (isset($successMSG)) echo $successMSG;
        ?>
        <div>
        <h1>Hello, world!</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src = "file.js"></script>
        <form action="join_ok.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputPhone" class="form-label">PHONE</label>
            <input type = "text"  class="form-control" name = "phone" />
          </div>
          <div class="mb-3"> #닉네임 추가
            <label for="exampleInputName" class="form-label">NAME</label>
            <input type = "text"  class="form-control" name = "name" />
          </div>
          <div class="mb-3">
            <label for="exampleInputAddress" class="form-label">ADDRESS</label>
            <input type = "text"  class="form-control" name = "address" />
          </div>
          <main class="main_full">
            <div class="container">
              <div class="panel">
                <div class="button_outer">
                  <div class="btn_upload">
	       <input type="file" id="upload_file" name=""> #사진 올리는 db 미구현
                    Upload Image
                </div>
                  <div class="processing_bar"></div>
                  <div class="success_box"></div>
              </div>
              </div>
              <div class="error_msg"></div>
              <div class="uploaded_file_view" id="uploaded_view">
                <span class="file_remove">X</span>
              </div>
            </div>
          </main>
            <input type = "submit" name = "submit" /> #button 안되가지고 일단 input으로 지정
        </form>
      </div>
   </body>
</html>

<!doctype html>
<html lang="kor">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body>
        <?php 
        if (isset($errMSG)) echo $errMSG;
        if (isset($successMSG)) echo $successMSG;
        ?>
    <div>
        <h1>게시글 내용작성</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <form action="write_ok.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="title" aria-describedby="emailHelp" text="제목">
            </div>
        <div class="container">
            <div class="panel">
                <div class="button_outer">
                    <div class="btn_upload">
                        <input type="file" id="upload_file" name="">
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
            <div class="mb-3">
                <input class="form-control"type="text" name="name" value="물품명 입력창">
            </div>
            <div class="mb-3">
                <input class="form-control"type="text" name="content" value="설명 입력창">
            </div>
            <div class="mb-3">
                <input class="form-control"type="int" name="quantity" value="제안수량">
            </div>
            <div class="mb-3">
                <input class="form-control"type="int" name="price" value="제안가격">
            </div>
            <div class="mb-3">
                <input class="form-control"type="text" name="account" value="계좌">
            </div>
            <div class="mb-3">
                <input class="form-control"type="text" name="contact" value="연락처">
            </div>
            <div class="mb-3">
                <input class="form-control"type="text" name="start_date" value="거래 시작 기간">
            </div>
            <div class="mb-3">
                <input class="form-control"type="text" name="end_date" value="거래 끝나는 기간">
            </div>
            <div class="mb-3">
                <input class="form-control"type="text" name="place" value="거래지역">
            </div> 
            <div class="mb-3">
                <input class="form-control"type="text" name="left_quantity" value="남은 수량">
            </div> 

         
    </div>
            <input type = "submit" name = "submit" />
        </form> 
        <nav class="navbar fixed-bottom navbar-light bg-light">
            <a href="javascript:window.histroy.back();">
                <button type="button" class="btn btn-primary">뒤로 가기</button>
            </a>
            <a href="mypage.html">
                <button type="button" class="btn btn-primary">마이페이지</button>
            </a>
            <a href="list.html">
                <button type="button" class="btn btn-primary">홈</button>
            </a>     
        </nav>
	</div>
</body>

</html>

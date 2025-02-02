<!DOCTYPE html>
          <html lang="en">
          <head>
            <meta http-equiv="content-type" content="text/html; charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SeoulWeb2 신규 회원 입력</title>
            <style>
              body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
              }
              .form-container {
                background-color: #fff000;
                padding: 20px 30px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
              }
              .form-container h1 {
                text-align: center;
                color: #007bff;
                margin-bottom: 20px;
                font-size: 24px;
              }
              .form-container label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
                color: #493337;
              }
              .form-container input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #cccccc;
                border-radius: 5px;
                font-size: 14px;
              }
              .form-container input[type="submit"] {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: #11f745;
                color: white;
                font-size: 16px;
                font-weight: bold;
                cursor: pointer;
              }
              .form-container input[type="submit"]:hover {
                background-color: #11f745;
              }
            </style>
          </head>
          <body>
            <div class="form-container">
              <h1>Seoul 리전 웹 서버2 - 신규 회원 입력</h1>
              <form method="post" action="insert_result.php">
                <label for="userID">아이디</label>
                <input type="text" name="userID" id="userID">                
                <label for="name">이름</label>
                <input type="text" name="name" id="name">                
                <label for="birthYear">출생년도</label>
                <input type="text" name="birthYear" id="birthYear">                
                <label for="addr">지역</label>
                <input type="text" name="addr" id="addr">                
                <label for="mobile1">휴대폰 국번</label>
                <input type="text" name="mobile1" id="mobile1">                
                <label for="mobile2">휴대폰 전화번호</label>
                <input type="text" name="mobile2" id="mobile2">                
                <label for="height">신장</label>
                <input type="text" name="height" id="height">                
                <input type="submit" value="회원 입력">
              </form>
            </div>
          </body>
          </html>
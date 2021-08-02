<?php
$conn = mysqli_connect(
  'localhost', // 주소
  'root',
  'password',
  'cafe_visitor_register'); // 데이터베이스 이름

$sql = "SELECT * FROM info";
$result = mysqli_query($conn, $sql);

?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>visitor_register_for_songam194</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script  src="http://code.jquery.com/jquery-latest.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    </script>
    <script language ="javascript">
    function alert_comfirm()
      {
        var textBox = document.getElementById("ex_input");
        var telephone = document.getElementById("telInput");
        var temperature = document.getElementById("temp");
        var now = new Date();
        var year = now.getFullYear();
        var month = now.getMonth();
        var monthone = month + 1;
        var date = now.getDate();
        var hour = now.getHours();
        var minute = now.getMinutes();
        var alltime = year+"년 "+monthone+"월 "+date+"일 "+hour+"시 "+minute+"분"
          //텍스트의 id값을 받는다
        if (textBox != null)
          {
            alert("거주지: " + textBox.value + "\n연락처: " + telephone.value + "\n체온: " + temperature.value + "\n일시: "+alltime+"\n\n성공적으로 제출했습니다!");     //텍스트박스의 value를 받아서 알람
          }
 
      }
  </script>
  <style type="text/css">
    .parent{
    width: 90%;
    margin: 10px auto;
    }

    .first {
    border: 1px solid burlywood;
    background-color: rgba(222, 184, 135, 0.466);
    float: left;
    width:30%;
    box-sizing: border-box;
    }

    .second{
    border: 1px solid skyblue;
    background-color: rgba(135, 207, 235, 0.452);
    float: left;
    margin-left: 5%;
    width:30%;
    box-sizing: border-box;
    }

    .third{
    border: 1px solid plum;
    background-color: rgba(221, 160, 221, 0.473);
    float: right;
    width:30%;
    box-sizing: border-box;
    }

    .submit {
    margin: auto;
    width: 50%;
    }

    #wrapper {
  
    margin-top: 150px;
  
    }

    #submit_button {
    position:absolute;
  
    top:80%; left:50%; margin-top:30px; margin-left:-50px;


  }
  </style>
  </head>
  <body>
    
    <div>
      <center>
      <h2> 📖 송암194 방문자 안심 등록 </h2>
      </center>
    </div>
    <form action = "main.php" method="POST">
      <div id="wrapper">
        <div class="parent">
          <div class="first" style="cursor: pointer" onclick="window.open">
            <center>
              <h1> 🏠  </h1>
              <h4> 거주지 </h4>
              <div class="textbox">
                <input type="text" name="visitor_regidence" placeholder="ex) 상당구 용암동" style="width:80px;height:20px;font-size:15px;" id="ex_input">
              </div>

            </center>

            </div>
          <div class="second" style="cursor: pointer" onclick="window.open">
            <center>
              <h1> 📱 </h1>
              <h4> 연락처 </h4>
              <input
              type="tel"
              style="width:80px;height:20px;font-size:15px;"
              class="form-control m-input"
              name="visitor_phone"
              id="telInput"
              required
              pattern="[0-9]{2,3}[0-9]{3,4}[0-9]{4}"
              maxlength="13"
              placeholder="예) 01012345678"
              />
            </center>
          </div>
          <div class="third" style="cursor: pointer" onclick="window.open">
            <center>
              <h1> 🌡 </h1>
              <h4> 체온 </h4>
              <select name="visitor_temp" style="width:80px;height:25px;" id="temp">
                <option value="정상">35.4 ~ 37.6</option>
                <option value="미열">37.7 ~ 39.4</option>
                <option value="고열">39.4 이상</option>
              </select>

            </center>
          </div>
        </div>
      </div>
      <div id = "submit_button">
        <!-- <input type="submit" id = "submit" style="height: 50px;width: 100px;"> -->
        <button onclick="alert_comfirm()" type="submit" style="height: 50px;width: 100px;">제출</button>
        <!-- <script>
          // function message()
          // {
            //   Swal.fire({ icon: 'success',
        //               title: '정상적으로 제출되었습니다!',
        //               text: '거주지: \n연락처: \n체온: \n',
        //   });
          // };
          </script> -->
        <!-- <script>
        function message(){
          var smartPhones = [
       
          'iphone', 'ipad', 'windows ce', 'android', 'blackberry', 'nokia',
          'webos', 'opera mini', 'sonyerricsson', 'opera mobi', 'iemobile'
          ];
          for(var i in smartPhones) {
            if(navigator.userAgent.toLowerCase().match(new RegExp(smartPhones[i]))) {
              alert('거주지: ' + text_home.value\n'연락처: ' +  \n'체온: ' \n + '성공적으로 제출되었습니다!');
            }
          }
        }
        </script> -->
      </div>
    </form>

  </body>
  
</html>

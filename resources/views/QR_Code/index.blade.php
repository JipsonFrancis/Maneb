<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .cookiesContent {
            width: 320px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            color: #000;
            text-align: center;
            border-radius: 20px;
            padding: 30px 30px 70px;
            background-color: #ed6755;
        }
        button.close {
          width: 30px;
          font-size: 20px;
          color: #c0c5cb;
          align-self: flex-end;
          background-color: transparent;
          border: none;
          margin-bottom: 10px;
        }
        img {
          width: 82px;
          margin-bottom: 15px;
        }
        p {
          margin-bottom: 40px;
          font-size: 18px;
        }
        button.accept {
          background-color: #ed6755;
          border: none;
          border-radius: 5px;
          width: 200px;
          padding: 14px;
          font-size: 16px;
          color: white;
          box-shadow: 0px 6px 18px -5px rgba(237, 103, 85, 1);
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
      integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
</head>
<body>
    <!-- <input id="text" type="text" value="http://127.0.0.1:8000/12/85" style="width:80%"/><br /> -->

    <div class="container">
        <div class="cookiesContent" id="cookiesPopup">
          <button class="close">✖</button>
          <div id="qrcode"></div>
          <p>We use cookies for improving user experience, analytics and marketing.</p>
          <button class="accept">That's fine!</button>
        </div>
    </div>
    
    <script src="{{asset('js/qrGen.js')}}"></script>
</body>
</html>


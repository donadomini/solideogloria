<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="/x-ico" href="1_icon.ico">

    <title>Soli Deo gloria !</title>

    <style>
       html,
       body{
         margin: 0;
         padding: 0;
         background-color: white;
       }

       .wrap{
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         text-align: center;

       }

       h1{
         font-size: 40px;
         color: blue;
       }

       #box {
         position: relative;
         background-color: white;
         color:white;
         width: 600px;
         height: 300px;
         margin: 0; /! hidden align center
         padding: 0; /! hidden align center
       }

       #hidden {
         display: none;
         background-color: white;
         color: white;
       }

       .btn {
         border: 0;
         outline: none;
         width: 60px;
         height: 60px;
         margin: 5px 0;
         font-size: 15px;
         border: 5px;
         padding: 10px 5px;
         background: cornflowerblue;
         color: white;
         border-radius: 50%;
         position: relative;
         cursor: pointer;
         box-shadow: 3px 3px 3px rgb(57, 47, 49), -3px -3px 3px rgb(237, 237, 237);
         transition: 0.3s;

       }

       .btn1:hover {
         box-shadow: -3px -3px 3px rgb(100, 149, 237), 3px 3px 3px rgb(237, 237, 237);
         transition: 0.3s;

         background-color: rosybrown;}
       .btn2:hover {
         box-shadow: -3px -3px 3px rgb(100, 149, 237), 3px 3px 3px rgb(237, 237, 237);
         transition: 0.3s;

         background-color: rosybrown;}

    </style>

  </head>
  <body>
     <section class="wrap">
        <h1>Soli Deo gloria !</h1>

        <div id="box">

            <div></div>

            <div id="hidden">
                <font color="darkyellow">Quid enim mihi est in caelo et a te quid volui super terram (Psa 72:25)</font><br>
                <font color="black"> 하늘에서는 주 외에 누가 내게 있으리요 땅에서는 주 밖에 나의 사모할 자 없나이다 (시 73:25)</font><br>
                <font color="blue"> Whom have I in heaven but thee? and there is none upon earth that I desire beside thee (Psa 73:25)</font><br><br>

                <font color="darkyellow"> defecit caro mea et cor meum Deus cordis mei et pars mea Deus in aeternum (Psa 72:26)</font><br>
                <font color="Black"> 내 육체와 마음은 쇠잔하나 하나님은 내 마음의 반석이시요 영원한 분깃이시라 (시 73:26)</font><br>
                <font color="blue"> My flesh and my heart faileth: but God is the strength of my heart, and my portion for ever (Psa 73:26)</font><br>
            </div>

            <div></div>

          </div>

          <script src="hidden.js"></script>

        <div>
            <button class="btn btn1" onclick="window.location.href='index_ko.php'">Korean</button>
            <button class="btn btn2" onclick="window.location.href='index_eng.php'">English</button>


        </div>
     </section>
  </body>
  </html>

#!python

print("Content-Type: text/html")
print()
import cgi, sys, io

sys.stdout=io.TextIOWrapper(sys.stdout.detach(), encoding='utf-8')
sys.stderr=io.TextIOWrapper(sys.stderr.detach(), encoding='utf-8')

print('''<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Soli Deo Gloria !</title>

  <style type="text/css">
    a { text-decoration:none }
  </style>

  <style>
  p {
    class="title";
    color:red;
    text-align: center;
    font-size:25px;
    font-family:Courier New!
  }

  /* .box {
      -ms-overflow-style: none; /* IE and Edge */
    }
  .box::-webkit-scrollbar {
      display: none; /* Chrome, Safari, Opera*/
     } */

 </style>

</head>

<body>

      <p class="title">[Information]<br></p>

      <div style="width: 100%; height: 100%; background: #d3d3d3; marginwidth: 100px; marginheight: 10px; scrolling="auto";">
           <br>
           <ol>

             <li><font size=2 color=black>The source of confession of Belgic and Scotland is Creeds of Christendom, Vol III, Philip Schaff, Baker Books.<br></font></li>

           </ol>
           <br>

      </div>


</body>
</html>
''')

#!python

print("Content-Type: text/html")
print()
import cgi, sys, io

sys.stdout=io.TextIOWrapper(sys.stdout.detach(), encoding='utf-8')
sys.stderr=io.TextIOWrapper(sys.stderr.detach(), encoding='utf-8')

print('''<!DOCTYPE html>
<html lang="ko">
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

</style>

<style type="text/css">

A:link  { text-decoration: none; }
A:visited  { color=purple; }
A:hover  { color: #ff0000; }
A:active  { text-decoration: none; }

</style>

</head>

<body>

      <p class="title">[기타 사이트]<br></p>

      <div style="width: 100%; height: 100%; background: #d3d3d3; marginwidth: 100px; marginheight: 10px; scrolling="auto";">
            <br>
            <ol>

              <li><font size=2><a href="https://archive-ouverte.unige.ch/unige:650" target="_blank">archive-ouverte.unige</a></font></li>

              <li><font size=2><a href="https://prdl.org" target="_blank">PRDL</a></font></li>

              <li><font size=2><a href="https://galileo.phys.virginia.edu/classes/252/" target="content_ko">Modern Physics</a></font></li>

              <li><font size=2><a href="https://phys.org/journals/physical-review-letters/" target="content_ko">Physical Review Letters</a></font></li>

            </ol>
            <br>

      </div>

</body>
</html>
''')

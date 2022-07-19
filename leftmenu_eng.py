#!python

print("Content-Type: text/html")
print()
import cgi, os, sys, io, view_term_en, view_issu_en,\
       view_exeg_en, view_conf_en, view_wlc_en, view_wsc_en,\
       view_cree_en, view_Calvinus_en, html_sanitizer
sanitizer = html_sanitizer.Sanitizer()

sys.stdout=io.TextIOWrapper(sys.stdout.detach(), encoding='utf-8')
sys.stderr=io.TextIOWrapper(sys.stderr.detach(), encoding='utf-8')

print('''<!doctype html>
<html lang="en">
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Soli Deo Gloria !</title>
</head>

<body bgcolor="wheat" leftmargin="" rightmargin="">

<!-- 드롭 다운 메뉴 루틴 시작 -->

<div id='cssmenu'>
	<ul>

       <!-- Home -->

      <li align="top"><a href="index_eng.py" title="index_eng" target="_top">Home</a></li>


      <!--Terms & Issues -->

      <li class='has-sub'><a href='#'><span>Terms & Issues</span></a>
         <ul>

             <li class='has-sub'><a href='#'><span>Terms</span></a>
               <ul>
                  {list_term_en}
               </ul>
             </li>

             <li class='has-sub'><a href='#'><span>Issues</span></a>
               <ul>
                  {list_issu_en}
               </ul>
             </li>

         </ul>
      </li>

      <!--Exeges Doctrinae -->

      <li class='has-sub'><a href='#'><span>Exeges Doctrinae</span></a>
               <ul>
                  {list_exeg_en}
               </ul>
      </li>

      <!--Confession -->

      <li class='has-sub'><a href='#'><span>Confession</span></a>
         <ul>
                  {list_conf_en}
         </ul>
      </li>

      <!--Catechism -->

      <li class='has-sub'><a href='#'><span>Catechism</span></a>
         <ul>

             <li class='has-sub'><a href='#'><span>WLC Explanation</span></a>
               <ul>
                  {list_wlc_en}
               </ul>
             </li>

             <li class='has-sub'><a href='#'><span>WSC Explanation</span></a>
               <ul>
                  {list_wsc_en}
               </ul>
             </li>

         </ul>
      </li>

      <!--Creed -->

      <li class='has-sub'><a href='#'><span>Creeds</span></a>
         <ul>
                  {list_cree_en}
         </ul>
      </li>

      <!--Theology -->

      <li class='has-sub'><a href='#'><span>Theology</span></a>
         <ul>
             <li class='has-sub'><a href='#'><span>Calvinus</span></a>
               <ul>
                  {list_Calvinus_en}
               </ul>
             </li>
         </ul>
      </li>

 </ul>

</div>

</body>
</html>
'''.format(list_term_en=view_term_en.getList(),
           list_issu_en=view_issu_en.getList(),
           list_exeg_en=view_exeg_en.getList(),
           list_conf_en=view_conf_en.getList(),
           list_wlc_en=view_wlc_en.getList(),
           list_wsc_en=view_wsc_en.getList(),
           list_cree_en=view_cree_en.getList(),
           list_Calvinus_en=view_Calvinus_en.getList()))

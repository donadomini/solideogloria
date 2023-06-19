#!python

print("Content-Type: text/html")
print()
import cgi, os, sys, io, view_term_ko, view_issu_ko,\
       view_exeg_ko, view_conf_ko, view_wlc_ko, view_wsc_ko,\
       view_cree_ko, view_Turretinus_ko, view_Calvinus_ko,\
       view_Leiden_ko, view_Anselmus_ko,\
       view_Samuel_Miller_ko, html_sanitizer
sanitizer = html_sanitizer.Sanitizer()

sys.stdout=io.TextIOWrapper(sys.stdout.detach(), encoding='utf-8')
sys.stderr=io.TextIOWrapper(sys.stderr.detach(), encoding='utf-8')

print('''<!doctype html>
<html lang="ko">
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

      <li align="top"><a href="index_ko.py" title="index_ko" target="_top">홈</a></li>


      <!--용어 & 이슈 -->

      <li class='has-sub'><a href='#'><span>용어 & 이슈</span></a>
         <ul>

             <li class='has-sub'><a href='#'><span>용어</span></a>
               <ul>
                  {list_term_ko}
               </ul>
             </li>

             <li class='has-sub'><a href='#'><span>이슈</span></a>
               <ul>
                  {list_issu_ko}
               </ul>
             </li>

         </ul>
      </li>

      <!--교리강해 -->

      <li class='has-sub'><a href='#'><span>교리강해</span></a>
               <ul>
                  {list_exeg_ko}
               </ul>
      </li>

      <!--신앙고백 -->

      <li class='has-sub'><a href='#'><span>신앙고백</span></a>
         <ul>
                  {list_conf_ko}
         </ul>
      </li>

      <!--요리문답 -->

      <li class='has-sub'><a href='#'><span>요리문답</span></a>
         <ul>

             <li class='has-sub'><a href='#'><span>대요리문답 해설</span></a>
               <ul>
                  {list_wlc_ko}
               </ul>
             </li>

             <li class='has-sub'><a href='#'><span>소요리문답 해설</span></a>
               <ul>
                  {list_wsc_ko}
               </ul>
             </li>

         </ul>
      </li>

      <!--신조 -->

      <li class='has-sub'><a href='#'><span>신조</span></a>
         <ul>
                  {list_cree_ko}
         </ul>
      </li>

      <!--신학 -->

      <li class='has-sub'><a href='#'><span>신학</span></a>
         <ul>

             <li class='has-sub'><a href='#'><span>투레티누스</span></a>
               <ul>
                  {list_Turretinus_ko}
               </ul>
             </li>

             <li class='has-sub'><a href='#'><span>칼빈</span></a>
               <ul>
                  {list_Calvinus_ko}
               </ul>
             </li>

             <li class='has-sub'><a href='#'><span>레이든</span></a>
               <ul>
                  {list_Leiden_ko}
               </ul>
             </li>

             <li class='has-sub'><a href='#'><span>안셀무스</span></a>
               <ul>
                  {list_Anselmus_ko}
               </ul>
             </li>


         </ul>
      </li>

      <!--장로회제도 -->

      <li class='has-sub'><a href='#'><span>장로회제도</span></a>
         <ul>

             <li class='has-sub'><a href='#'><span>사무엘 밀러</span></a>
               <ul>
                  {list_Samuel_Miller_ko}
               </ul>
             </li>

         </ul>
      </li>

 </ul>

</div>

</body>
</html>
'''.format(list_term_ko=view_term_ko.getList(),
           list_issu_ko=view_issu_ko.getList(),
           list_exeg_ko=view_exeg_ko.getList(),
           list_conf_ko=view_conf_ko.getList(),
           list_wlc_ko=view_wlc_ko.getList(),
           list_wsc_ko=view_wsc_ko.getList(),
           list_cree_ko=view_cree_ko.getList(),
           list_Turretinus_ko=view_Turretinus_ko.getList(),
           list_Calvinus_ko=view_Calvinus_ko.getList(),
           list_Leiden_ko=view_Leiden_ko.getList(),
           list_Anselmus_ko=view_Anselmus_ko.getList(),
           list_Samuel_Miller_ko=view_Samuel_Miller_ko.getList()))

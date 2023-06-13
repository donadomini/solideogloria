<!doctype html>
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

      <li align="top"><a href="index_ko.html" title="index_ko" target="_top">홈</a></li>



           <!--용어 & 이슈 -->

           <li class='has-sub'><a href='#'><span>용어 & 이슈</span></a>
              <ul>

                <li class='has-sub'><a href='#'><span>용어</span></a>

                  <ul>

                    <?php

                    function list_term_ko() {
                      $list = scandir("./d_term_ko");

                      $i = 0;

                        while ($i < count($list)) {
                          if($list[$i] != '.') {
                            if($list[$i] != '..') {
                              $path[$i] ="./d_term_ko/$list[$i]";
                              $list[$i] = basename($path[$i],".jpg");

                            echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                            }
                          }

                        $i = $i + 1;

                        }
                       }
                     ?>

                    <?php
                      list_term_ko();
                    ?>

                  </ul>

                </li>

                <li class='has-sub'><a href='#'><span>이슈</span></a>

                  <ul>

                    <?php

                    function list_issu_ko() {
                      $list = scandir("./d_issu_ko");

                      $i = 0;

                        while ($i < count($list)) {
                          if($list[$i] != '.') {
                            if($list[$i] != '..') {
                              $path[$i] ="./d_issu_ko/$list[$i]";
                              $list[$i] = basename($path[$i],".jpg");

                            echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                            }
                          }

                        $i = $i + 1;

                        }
                       }
                     ?>

                    <?php
                      list_issu_ko();
                    ?>

                  </ul>

                </li>

              </ul>
           </li>



		   <!-- Institutio Doctrinae -->

	    <li class='has-sub'><a href='#'><span>교리강해</span></a>

        <ul>

          <?php

          function list_exeg_ko() {
            $list = scandir("./d_exeg_ko");

            $i = 0;

              while ($i < count($list)) {
                if($list[$i] != '.') {
                  if($list[$i] != '..') {
                    $path[$i] ="./d_exeg_ko/$list[$i]";
                    $list[$i] = basename($path[$i],".jpg");

                  echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                  }
                }

              $i = $i + 1;

              }
             }
           ?>

          <?php
            list_exeg_ko();
          ?>

         </ul>

       </li>


		     <!-- Confession -->

       <li class='has-sub'><a href='#'><span>신앙고백</span></a>
            <ul>
               <li><a href="벨직 신앙고백서.jpg" target="content_ko">벨직</a></li>
               <li><a href="스코트랜드 신앙고백서.jpg" target="content_ko">스코트랜드</a></li>
               <li class='has-sub'><a href="#"><span>웨스트민스터</span></a>
                 <ul>

                   <?php

                   function list_conf_ko() {
                     $list = scandir("./d_conf_ko");

                     $i = 0;

                       while ($i < count($list)) {
                         if($list[$i] != '.') {
                           if($list[$i] != '..') {
                             $path[$i] ="./d_conf_ko/$list[$i]";
                             $list[$i] = basename($path[$i],".jpg");

                           echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                           }
                         }

                       $i = $i + 1;

                       }
                      }
                    ?>

                   <?php
                     list_conf_ko();
                   ?>

                 </ul>
               </li>
            </ul>
       </li>


         <!-- Catechismus -->

       <li class='has-sub'><a href='#'><span>요리문답</span></a>
            <ul>
               <li class='has-sub'><a href="#"><span>대요리문답해설</span></a>
                  <ul>

                    <?php

                    function list_wlc_ko() {
                      $list = scandir("./d_wlc_ko");

                      $i = 0;

                        while ($i < count($list)) {
                          if($list[$i] != '.') {
                            if($list[$i] != '..') {
                              $path[$i] ="./d_wlc_ko/$list[$i]";
                              $list[$i] = basename($path[$i],".jpg");

                            echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                            }
                          }

                        $i = $i + 1;

                        }
                       }
                     ?>

                    <?php
                      list_wlc_ko();
                    ?>

                  </ul>
               </li>

               <li class='has-sub'><a href="#"><span>소요리문답 해설</span></a>
                  <ul>

                    <?php

                    function list_wsc_ko() {
                      $list = scandir("./d_wsc_ko");

                      $i = 0;

                        while ($i < count($list)) {
                          if($list[$i] != '.') {
                            if($list[$i] != '..') {
                              $path[$i] ="./d_wsc_ko/$list[$i]";
                              $list[$i] = basename($path[$i],".jpg");

                            echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                            }
                          }

                        $i = $i + 1;

                        }
                       }
                     ?>

                    <?php
                      list_wsc_ko();
                    ?>

                  </ul>
                </li>
            </ul>
       </li>

         <!-- Creed -->

       <li class='has-sub'><a href='#'><span>신조</span></a>
            <ul>

               <li><a href="Athanasius_ko.jpg" target="content_ko">아타나시우스 신조</a></li>

               <li><a href="칼케돈.jpg" target="content_ko">칼케돈 신조</a></li>

               <li><a href="도르트.jpg" target="content_ko">도르트 신조</a></li>

               <li><a href="오렌지 공의회 529.jpg" target="content_ko">오렌지 공의회</a></li>

               <li class='has-sub'><a href="#"><span>니케아 신조</span></a>
                 <ul>
                    <li><a href="Symbolum Nicaenum 325(ko).jpg" target="content_ko">니케아 신조 325</a></li>
                    <li class='last'><a href="Symbolum Nicaenum 381(ko).jpg" target="content_ko">니케아 신조 381</a></li>
                 </ul>
               </li>

            </ul>
       </li>



		    <!-- Theology -->

       <li class='has-sub'><a href='#'><span>신학</span></a>
             <ul>

                <li class='has-sub'><a href='#'><span>투레티누스</span></a>

                  <ul>

                    <?php

                    function list_Turretinus_ko() {
                      $list = scandir("./d_Turretinus_ko");

                      $i = 0;

                        while ($i < count($list)) {
                          if($list[$i] != '.') {
                            if($list[$i] != '..') {
                              $path[$i] ="./d_Turretinus_ko/$list[$i]";
                              $list[$i] = basename($path[$i],".jpg");

                            echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                            }
                          }

                        $i = $i + 1;

                        }
                       }
                     ?>

                    <?php
                      list_Turretinus_ko();
                    ?>

                 </ul>

               </li>


               <li class='has-sub'><a href='#'><span>칼빈</span></a>

                 <ul>

                   <?php

                   function list_Calvinus_ko() {
                     $list = scandir("./d_Calvinus_ko");

                     $i = 0;

                       while ($i < count($list)) {
                         if($list[$i] != '.') {
                           if($list[$i] != '..') {
                             $path[$i] ="./d_Calvinus_ko/$list[$i]";
                             $list[$i] = basename($path[$i],".jpg");

                           echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                           }
                         }

                       $i = $i + 1;

                       }
                      }
                    ?>

                   <?php
                     list_Calvinus_ko();
                   ?>

                </ul>


                <li class='has-sub'><a href='#'><span>레이든</span></a>

                  <ul>

                    <?php

                    function list_Leiden_ko() {
                      $list = scandir("./d_Leiden_ko");

                      $i = 0;

                        while ($i < count($list)) {
                          if($list[$i] != '.') {
                            if($list[$i] != '..') {
                              $path[$i] ="./d_Leiden_ko/$list[$i]";
                              $list[$i] = basename($path[$i],".jpg");

                            echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                            }
                          }

                        $i = $i + 1;

                        }
                       }
                     ?>

                    <?php
                      list_Leiden_ko();
                    ?>

                 </ul>


              </li>


              <li class='has-sub'><a href='#'><span>안셀무스</span></a>

                <ul>

                  <?php

                  function list_Anselmus_ko() {
                    $list = scandir("./d_Anselmus_ko");

                    $i = 0;

                      while ($i < count($list)) {
                        if($list[$i] != '.') {
                          if($list[$i] != '..') {
                            $path[$i] ="./d_Anselmus_ko/$list[$i]";
                            $list[$i] = basename($path[$i],".jpg");

                          echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                          }
                        }

                      $i = $i + 1;

                      }
                     }
                   ?>

                  <?php
                    list_Anselmus_ko();
                  ?>

               </ul>


            </li>


             </ul>
      </li>


     <!-- Presbyterianism -->

     <li class='has-sub'><a href='#'><span>장로회제도</span></a>
           <ul>

              <li class='has-sub'><a href='#'><span>사무엘 밀러</span></a>

                <ul>

                  <script>

                  an=5;
                  var pk = [];

                  var i=pk.length+1;
                   while(i<an+1){
                     pk.push('장로회제도  '+i+'');

                   i=i+1;
                 }



                  var i=1
                  while(i<pk.length+1){

                  document.write('<li><a href="Presbyterianism '+i+'.jpg" target="content_ko">'+pk[i-1]+'</a></li>')

                 i=i+1;

                  }

                 </script>

               </ul>

               <ul>

                 <script>

                 an=6;
                 var ik = [];

                 var i=ik.length+1;
                  while(i<an+1){
                    ik.push('유아세례  '+i+'');

                  i=i+1;
                }



                 var i=1
                 while(i<ik.length+1){

                 document.write('<li><a href="Infant Baptism '+i+'.jpg" target="content_ko">'+ik[i-1]+'</a></li>')

                i=i+1;

                 }

                </script>

              </ul>



             </li>


           </ul>
    </li>

 </ul>

</div>

</body>
</html>

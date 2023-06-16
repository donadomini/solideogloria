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

      <li align="top"><a href="index_ko.php" title="index_ko" target="_top">홈</a></li>



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

              <?php

              function list_cree_ko() {
                $list = scandir("./d_cree_ko");

                $i = 0;

                  while ($i < count($list)) {
                    if($list[$i] != '.') {
                      if($list[$i] != '..') {
                        $path[$i] ="./d_cree_ko/$list[$i]";
                        $list[$i] = basename($path[$i],".jpg");

                      echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                      }
                    }

                  $i = $i + 1;

                  }
                 }
               ?>

              <?php
                list_cree_ko();
              ?>

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

                  <?php

                  function list_Samuel_Miller_ko() {
                    $list = scandir("./d_Samuel_Miller_ko");

                    $i = 0;

                      while ($i < count($list)) {
                        if($list[$i] != '.') {
                          if($list[$i] != '..') {
                            $path[$i] ="./d_Samuel_Miller_ko/$list[$i]";
                            $list[$i] = basename($path[$i],".jpg");

                          echo  "<li><a href=\"$path[$i]\" target='content_ko'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                          }
                        }

                      $i = $i + 1;

                      }
                     }
                   ?>

                  <?php
                    list_Samuel_Miller_ko();
                  ?>

               </ul>



             </li>


           </ul>
    </li>

 </ul>

</div>

</body>
</html>

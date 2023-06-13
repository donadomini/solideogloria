<!doctype html>
<html lang="eng">
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

      <li align="top"><a href="index_eng.html" title="index_eng" target="_top">Home</a></li>


               <!--Terms & Issues -->

               <li class='has-sub'><a href='#'><span>Terms & Issues</span></a>
                  <ul>

                    <li class='has-sub'><a href='#'><span>Terms</span></a>

                      <ul>

                        <?php

                        function list_term_en() {
                          $list = scandir("./d_term_en");

                          $i = 0;

                            while ($i < count($list)) {
                              if($list[$i] != '.') {
                                if($list[$i] != '..') {
                                  $path[$i] ="./d_term_en/$list[$i]";
                                  $list[$i] = basename($path[$i],".jpg");

                                echo  "<li><a href=\"$path[$i]\" target='content_eng'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                                }
                              }

                            $i = $i + 1;

                            }
                           }
                         ?>

                        <?php
                          list_term_en();
                        ?>

                      </ul>

                    </li>

                    <li class='has-sub'><a href='#'><span>Issues</span></a>

                      <ul>

                        <?php

                        function list_issu_en() {
                          $list = scandir("./d_issu_en");

                          $i = 0;

                            while ($i < count($list)) {
                              if($list[$i] != '.') {
                                if($list[$i] != '..') {
                                  $path[$i] ="./d_issu_en/$list[$i]";
                                  $list[$i] = basename($path[$i],".jpg");

                                echo  "<li><a href=\"$path[$i]\" target='content_eng'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                                }
                              }

                            $i = $i + 1;

                            }
                           }
                         ?>

                        <?php
                          list_issu_en();
                        ?>

                      </ul>

                    </li>

                  </ul>
               </li>


		    <!-- Institutio Doctrinae -->

	    <li class='has-sub'><a href='#'><span>Exeges Doctrinae</span></a>

        <ul>

          <?php

          function list_exeg_en() {
            $list = scandir("./d_exeg_en");

            $i = 0;

              while ($i < count($list)) {
                if($list[$i] != '.') {
                  if($list[$i] != '..') {
                    $path[$i] ="./d_exeg_en/$list[$i]";
                    $list[$i] = basename($path[$i],".jpg");

                  echo  "<li><a href=\"$path[$i]\" target='content_eng'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                  }
                }

              $i = $i + 1;

              }
             }
           ?>

          <?php
            list_exeg_en();
          ?>

         </ul>

       </li>


		     <!-- Confession -->

       <li class='has-sub'><a href='#'><span>Confession</span></a>
            <ul>
               <li><a href="Belgium.jpg" target="content_eng">Belgium</a></li>
               <li><a href="Scotland.jpg" target="content_eng">Scotland</a></li>
               <li class='has-sub'><a href="#"><span>Westminster</span></a>
               <ul>

                 <?php

                 function list_conf_en() {
                   $list = scandir("./d_conf_en");

                   $i = 0;

                     while ($i < count($list)) {
                       if($list[$i] != '.') {
                         if($list[$i] != '..') {
                           $path[$i] ="./d_conf_en/$list[$i]";
                           $list[$i] = basename($path[$i],".jpg");

                         echo  "<li><a href=\"$path[$i]\" target='content_eng'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                         }
                       }

                     $i = $i + 1;

                     }
                    }
                  ?>

                 <?php
                   list_conf_en();
                 ?>

               </ul>
               </li>


            </ul>
       </li>


         <!-- Catechismus -->

       <li class='has-sub'><a href='#'><span>Catechism</span></a>
            <ul>
               <li class='has-sub'><a href="#"><span>WLC Explanation</span></a>

                 <ul>

                   <?php

                   function list_wlc_en() {
                     $list = scandir("./d_wlc_en");

                     $i = 0;

                       while ($i < count($list)) {
                         if($list[$i] != '.') {
                           if($list[$i] != '..') {
                             $path[$i] ="./d_wlc_en/$list[$i]";
                             $list[$i] = basename($path[$i],".jpg");

                           echo  "<li><a href=\"$path[$i]\" target='content_eng'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                           }
                         }

                       $i = $i + 1;

                       }
                      }
                    ?>

                   <?php
                     list_wlc_en();
                   ?>

                 </ul>
               </li>

               <li class='has-sub'><a href="#"><span>WSC Explanation</span></a>

                 <ul>

                   <?php

                   function list_wsc_en() {
                     $list = scandir("./d_wsc_en");

                     $i = 0;

                       while ($i < count($list)) {
                         if($list[$i] != '.') {
                           if($list[$i] != '..') {
                             $path[$i] ="./d_wsc_en/$list[$i]";
                             $list[$i] = basename($path[$i],".jpg");

                           echo  "<li><a href=\"$path[$i]\" target='content_eng'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                           }
                         }

                       $i = $i + 1;

                       }
                      }
                    ?>

                   <?php
                     list_wsc_en();
                   ?>

                 </ul>
               </li>
            </ul>
       </li>

         <!-- Creed -->

       <li class='has-sub'><a href='#'><span>Creeds</span></a>
            <ul>

               <li><a href="Athanasius_eng.jpg" target="content_eng">Athanasius Creed</a></li>

               <li><a href="Chalcedon.jpg" target="content_eng">Chalcedon Creed</a></li>

               <li><a href="Dort.jpg" target="content_eng">Dort Creed</a></li>

               <li><a href="The Council of Orange 529.jpg" target="content_eng">The Council of Orange 529</a></li>

               <li class='has-sub'><a href="#"><span>Nicea Creed</span></a>
                 <ul>
                    <li><a href="Symbolum Nicaenum 325.jpg" target="content_eng">Symbolum Nicaenum 325</a></li>
                    <li class='last'><a href="Symbolum Nicaenum 381.jpg" target="content_eng">Symbolum Nicaenum 381</a></li>
                 </ul>
               </li>

            </ul>
       </li>




		    <!-- Theology -->

    <li class='has-sub'><a href='#'><span>Theology</span></a>
       <ul>

<!--
         <li class='has-sub'><a href='#'><span>Turretinus</span></a>

           <ul>

               <script>

               an=2;
               var te = [];

               var i=te.length+1;
                while(i<an+1){
                  te.push('Turretinus  '+i+'');

                i=i+1;
              }



                 var i=1
                 while(i<te.length+1){

                 document.write('<li><a href="Turretinus '+i+'(eng).jpg" target="content_eng">'+te[i-1]+'</a></li>')

                i=i+1;

                 }

                </script>

           </ul>

         </li>

-->
         <li class='has-sub'><a href='#'><span>Calvinus</span></a>

           <ul>

             <?php

             function list_Calvinus_en() {
               $list = scandir("./d_Calvinus_en");

               $i = 0;

                 while ($i < count($list)) {
                   if($list[$i] != '.') {
                     if($list[$i] != '..') {
                       $path[$i] ="./d_Calvinus_en/$list[$i]";
                       $list[$i] = basename($path[$i],".jpg");

                     echo  "<li><a href=\"$path[$i]\" target='content_eng'>$list[$i]</a></li>\n"; //Show filename, but cut off file extension for ".php" files
                     }
                   }

                 $i = $i + 1;

                 }
                }
              ?>

             <?php
               list_Calvinus_en();
             ?>

           </ul>

         </li>

       </ul>
    </li>


          <!-- 성경 -->

  </ul>

</div>

</body>
</html>

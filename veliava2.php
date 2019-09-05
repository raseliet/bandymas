<!--HTML sukurti velivos fragmenta is triju spalvu (taip kaip Lietuvos veliava.-->
<!--Trys spalvos.)-->
<!---->
<!--PHP apsirasyti tris spalvas RGB kurios keisis RANDOM 0-255 skaleje.-->
<!--atvaizduoti php pagalba jas HTML’e-->


<?php
$spalva1 = rand(0,255) . ‘, ’ . rand(0,255) . ‘, ’ . rand(0,255);
$spalva2 = rand(0,255) . ‘, ’ . rand(0,255) . ‘, ’ . rand(0,255);
$spalva3 = rand(0,255) . ‘, ’ . rand(0,255) . ‘, ’ . rand(0,255);
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <style>
       .spalva {
           width: 70vw;
           height: 30vh;
       }
   </style>
</head>
<body>
   <section>
       <div class=“spalva” style=“background-color: rgb(<?php print $spalva1;?>)“></div>
       <div class=“spalva” style=“background-color: rgb(<?php print $spalva2;?>)” ></div>
       <div class=“spalva” style=“background-color: rgb(<?php print $spalva3;?>)” ></div>
   </section>
</body>
</html>
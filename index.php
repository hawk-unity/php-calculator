   <?php
   if (isset($_GET['topla']))
   {
      echo $_GET['birincisayi'] + $_GET['ikincisayi'];
   }
   elseif(isset($_GET['cikar']))
   {
      echo $_GET['birincisayi'] - $_GET['ikincisayi'];
   }
   
   elseif(isset($_GET['button2']))
   {
      echo $_GET['birincisayi'] * $_GET['ikincisayi'];
   }
   
   elseif(isset($_GET['button3']))
   {
      echo $_GET['birincisayi'] / $_GET['ikincisayi'];
   }
   else {
      ?>
   <center>
   <form name="form1" method="get" action="">
     <p>
       <label for="birincisayi">Birinci Sayı:</label>
       <input type="text" name="birincisayi">
     </p>
     <p>
       <label for="ikincisayi">İkinci Sayı:</label>
       <input type="text" name="ikincisayi">
     </p>
     <p>İşleminiz :</p>
     <p>
       <input type="submit" name="topla" value="Topla">
       <input type="submit" name="cikar"  value="Çıkar">
       <input type="submit" name="button2" value="Çarp">
       <input type="submit" name="button3" value="Böl">
     </p>
   </form>
   </center>
   <?php  } ?>
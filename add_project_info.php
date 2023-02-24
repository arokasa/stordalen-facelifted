
<?php

session_start();
$db = mysqli_connect('localhost', 'test', '95749', 'root@localhost');
?>


<div class='alert alert-error'></div>
<section id='main'>
     <h1>Legg ut ny annonse</h1>

   <form class='form' enctype='multipart/form-data' method='post'>
    <label for='postnr' style='margin-bottom:8px;'>Hva gjelder annonsen? </label>
       <select style='width:90%;' placeholder='Type' name='annonse_type'>

<?php
      $sqlSetning="SELECT * FROM dyrevenn_annonse_type ORDER BY navn ASC;";
      $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
      $antallRader=mysqli_num_rows($sqlResultat);
      for($r=1; $r<=$antallRader; $r++)
        {
            $rad=mysqli_fetch_array($sqlResultat);
            $id=$rad["id"];
            $navn=$rad["navn"];
            print("<option value='$navn'>  $navn  </option>");
        }
?>
      </select>

<label for='postnr' style='margin-bottom:8px;'>Hva slags dyr gjelder det? </label>
   <select style='width:90%;' placeholder='Kategori' name='annonse_kategori'>
<?php

        $sqlSetning="SELECT * FROM dyrevenn_annonse_kategori ORDER BY navn DESC;";
        $sqlResultat=mysqli_query($db, $sqlSetning) or die ("Ikke mulig å hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);
        for($r=1; $r<=$antallRader; $r++)
          {
              $rad=mysqli_fetch_array($sqlResultat);
              $id=$rad["id"];
              $navn=$rad["navn"];
              print("<option value='$navn'> $navn   </option>");
          }
  ?>
  </select>
  <label for="tittel">Legg til en tittel for annonsen</label>
  <input type="text" id="tittel" placeholder="Tittel" style="width:90%;" name="tittel" required />

  <label for="innhold">Legg til en beskrivelse</label>
  <textarea placeholder=". . ." style="height:200px;" id="innhold" name="innhold"></textarea>

  <label for='fil' style='margin-bottom:8px;'>Last opp et bilde (bildet bør være kvadratisk)</label>
  <input type='file' id='fil' placeholder='Bilde' style='width:90%;' name='fil'>
  <br/><br/>

  <input type="reset" style="width:100px;" value="Nullstill" name="nullstill" class="btn2 btn2-block btn2-primary" />
  <input type="submit" style="width:130px;" value="Legg ut annonse!" name="nyAnnonse" class="btn btn-block btn-primary" />
</br>

</section>

  <?php

  $db = mysqli_connect('localhost', 'web-prg11v04', '95749', 'web-prg11v04');
  $bruker = "SELECT * FROM dyrevenn_brukere WHERE brukernavn='$innloggetBruker';";
  $sqlResultat=mysqli_query($db, $bruker) or die ("Ikke mulig å hente data fra databasen");
  $rad=mysqli_fetch_array($sqlResultat);

  $id=$rad["id"];
  $fornavn=$rad["fornavn"];
  $etternavn=$rad["etternavn"];
  $gateadresse=$rad["gateadresse"];
  $postnr=$rad["postnr"];
  $brukernavn=$rad["brukernavn"];
  $epost=$rad["epost"];
  $fylke=$rad["fylke"];

  echo "
  <aside style='font-style:normal;'>
  <h3>Kontaktopplysninger for annonsen</h3>

  <label for='epost'>Din e-post </label>
  <input type='text' value='$epost' id='epost' placeholder='E-post' style='width:90%;' name='epost' readonly/>

  <label for='fornavn'>Fornavn</label>
  <input type='text' value='$fornavn' id='fornavn' placeholder='Fornavn' style='width:90%; float:left;' name='fornavn' readonly/>

  <label for='etternavn'>Etternavn</label>
  <input type='text' value='$etternavn' id='etternavn' placeholder='Etternavn' style='width:90%;' name='etternavn' readonly/>

  <label for='postnr'>Postnr</label>
  <input type='text' value='$postnr' id='postnr' placeholder='Postnr' style='width:90%;' name='postnr' readonly />

  <label for='postnr'>Fylke</label>
  <input type='text' value='$fylke' id='fylke' placeholder='Fylke' style='width:90%;' name='fylke' readonly />

  <input type='hidden' value='$id' id='fylke' placeholder='ID' style='width:90%;' name='id' readonly />
  </aside>
  </form>
  ";

  ?>
 <section id='main2'>
   <?php

   $dato=date("Y-m-d");

    $nyAnnonse=$_POST["nyAnnonse"];
    if($nyAnnonse)    {

      $filnavn=$_FILES["fil"]["name"];
      $filtype=$_FILES["fil"]["type"];
      $filstorrelse=$_FILES["fil"]["size"];
      $tmpname=$_FILES["fil"]["tmp_name"];
      $filplassering="D:\\sites\\home.usn.no\\phptemp\\test/".$filnavn;  // informasjon OM hvor bildet ligger lagret (denne verdien lagres i DB)
      $path="https://home.usn.no/phptemp/test/".$filnavn;

      if ($filtype != "image/gif" && $filtype != "image/jpeg"  && $filtype != "image/JPG"  && $filtype != "image/jpg" && $filtype != "image/png")
        {
          echo "<div id='container2'>
          <div id='link-message2'>
            <p style='font-size:15px;'>Filen må være av type .jpg, .gif eller .png!</br> </p>
          </div>
         </div>";
        }

        else if ($filsize > 5000000)
         {
           echo "<div id='container2'>
           <div id='link-message2'>
             <p style='font-size:15px;'>For stor fil! Bildet kan ikke overskride 5MB.</br> </p>
           </div>
          </div>";
         }

         else {

          $db = mysqli_connect('localhost', 'web-prg11v04', '95749', 'web-prg11v04');
          $bruker = "SELECT * FROM dyrevenn_brukere WHERE id='$id';";
          $sqlResultat=mysqli_query($db, $bruker) or die ("Ikke mulig å hente data fra databasen");
          $rad=mysqli_fetch_array($sqlResultat);
          $db = mysqli_connect('localhost', 'web-prg11v04', '95749', 'web-prg11v04');

          $fornavn = mysqli_real_escape_string($db, $_POST['fornavn']);
          $etternavn = mysqli_real_escape_string($db, $_POST['etternavn']);
          $postnr = mysqli_real_escape_string($db, $_POST['postnr']);
          $brukernavn = mysqli_real_escape_string($db, $_POST['brukernavn']);
          $epost = mysqli_real_escape_string($db, $_POST['epost']);
          $fylke = mysqli_real_escape_string($db, $_POST['fylke']);
          $annonse_type = mysqli_real_escape_string($db, $_POST['annonse_type']);
          $annonse_kategori = mysqli_real_escape_string($db, $_POST['annonse_kategori']);
          $tittel = mysqli_real_escape_string($db, $_POST['tittel']);
          $innhold = mysqli_real_escape_string($db, $_POST['innhold']);
          $id = mysqli_real_escape_string($db, $_POST['id']);

          $insertSQL = "INSERT INTO dyrevenn_annonse (bruker_id, tidspunkt, annonse_type, annonse_kategori, postnr, fylke, innhold, fornavn, etternavn, epost, tittel, filplassering, filnavn)
                VALUES('$id', '$dato', '$annonse_type', '$annonse_kategori', '$postnr', '$fylke', '$innhold', '$fornavn', '$etternavn', '$epost', '$tittel', '$path', '$filnavn')";

          mysqli_query($db, $insertSQL) or die ("<div id='container2'>
           <div id='link-message2'>
             <p style='font-size:15px;'>Ikke mulig å lagre i databasen. </p>
           </div>
          </div> ");

          move_uploaded_file($tmpname,$filplassering) or die ("<div id='container2'>
           <div id='link-message2'>
             <p style='font-size:15px;'>Ikke mulig å laste opp bilde til server. </p>
           </div>
          </div> ");

          echo "

          </br>
          <div id='link-message-annonse'>
            <p style='font-size:18px; padding-top:2px;'>
              <h3>Annonsen din er publisert!</h3> <br/><b>Du har registrert disse opplysningene:</b><br/>
                <b>Oversikt:</b> $annonse_type, $annonse_kategori - $tittel <br/>
                <b>Område:</b> $postnr, $fylke  <br/>
                <b>Personinfo:</b> $fornavn $etternavn, $epost  <br/>
                <b>Innhold:</b> $innhold  <br/>
                Bilde med filnavn: $filnavn er også lagret i databasen! <br/>
            </p>
          </div>

          ";

          }
    }
?>


</section>
</div>
</body>
</html>

<?php       }   ?>

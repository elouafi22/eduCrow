<?php
function call_info()
    {
      $fichies = fopen("./../../Data/student.csv", "r");
      while ($user = fgetcsv($fichies, 0, ';')) {
        if ($user[0] == $_SESSION['nom'] and $user[1] == $_SESSION['prenom'] and $user[12] == $_SESSION['ID']) {
          $tab1[] = $user[8]; // filiere  // 0
          $tab1[] = $user[5]; // sexe  //  1
          echo '<script type="text/javascript">document.getElementById("cne").value ='.$user[2].'; </script>';   // cne  // 2
          echo '<script type="text/javascript">document.getElementById("cin").value ='.$user[3].'; </script>';   // cin  // 3
          echo '<script type="text/javascript">document.getElementById("nom").value ='.$user[0].'; </script>';   // nom  // 4
          echo '<script type="text/javascript">document.getElementById("prenom").value ='.$user[1].'; </script>';   // prenom  // 5
          echo '<script type="text/javascript">document.getElementById("address").value ='.$user[4].'; </script>';   // address  // 6
          echo '<script type="text/javascript">document.getElementById("city").value ='.$user[7].'; </script>';   // city  // 7
          echo '<script type="text/javascript">document.getElementById("country").value ='.$user[6].'; </script>';   // state // 8
          
    
          if (isset($user[13])) { // for call info de code postal
            echo '<script type="text/javascript">document.getElementById("postal").value ='.$user[13].'; </script>'; // 9
          }
    
          if (isset($user[14])) { // for call info what is write in textarea
            echo '<script type="text/javascript">document.getElementById("about").value ='.$user[14].'; </script>'; // 10
          }
        }
      }
      fclose($fichies);
      return $tab1;
    }



    ?>
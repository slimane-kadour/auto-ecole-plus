<?php

include('function.php');

 if(isset($_POST['id'])&& !empty($_POST['id'])){
 
                                  $id=$_POST['id'];
                                  $commentaires = recup_commentaire($id);
                                  foreach($commentaires as $commentaire){

                  echo"<h4>".$commentaire['membre_commentaire']."</h4></br><p>".$commentaire['corps_commentaire']."</p><hr/>";
                                 }
                                                 }

?>
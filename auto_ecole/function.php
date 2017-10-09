<?php
mysql_connect('localhost','root','') or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_select_db('blog');


function ajouter_article($titre_article,$membre_article,$corps_article)
{
$query=mysql_query("INSERT INTO articles(titre_article,membre_article,corps_article,date_article)
VALUES('$titre_article','$membre_article','$corps_article',NOW())") or die();
$req->execute(array(
'titre_article' => $titre_article,
'membre_article' => $membre_article,
'corps_article' => $corps_article,
));


}
function recup_article()
{
  
  $articles=array();
  
  $result=mysql_query("SELECT
  
  articles.id_article,
  articles.titre_article,
  articles.membre_article,
  articles.corps_article,
  DATE_FORMAT(articles.date_article,'%d/%m/%Y %H:%I:%S') AS date_article,
  commentaires.totales_commentaires,
  DATE_FORMAT(commentaires.dernier_commentaire,'%d/%m/%Y %H:%I:%S') AS dernier_commentaire
  
  
  FROM articles LEFT JOIN(
       SELECT id_article,COUNT(id_commentaire) AS totales_commentaires,
       MAX(date_commentaire) AS dernier_commentaire
	   FROM commentaires GROUP BY id_article
           )AS commentaires ON articles.id_article=commentaires.id_article
          ") or die(mysql_error());
  
  while($row=mysql_fetch_assoc($result))
  {
   $articles[] = $row;
  }
  return $articles;
  }

  function inserer_commentaire($id,$membre_commentaire,$corps_commentaire)
  {
  
   $bdd=mysql_query("INSERT INTO commentaires(id_article,membre_commentaire,corps_commentaire,date_commentaire)
  VALUES('$id','$membre_commentaire','$corps_commentaire',NOW())");
  }
  
  function recup_commentaire($id)
  {
  $id=(int)$id;
  $commentaire=array();
  $sql=mysql_query("SELECT
  membre_commentaire,
  corps_commentaire,
  DATE_FORMAT(date_commentaire,'%d/%m/%Y %H:%I:%S') AS date_commentaire
  FROM commentaires WHERE id_article='$id' ORDER BY id_commentaire DESC
  
  
  ") or die(mysql_error());
  
  
  while($row=mysql_fetch_assoc($sql))
  {
  
  $commentaire[]=$row;
  
  }
  return $commentaire;
  
  }
  
  function recup_info()
{
  
  $info=array();
  
  $result2=mysql_query("SELECT
  
  candidats.nom,
  candidats.prenom,
  candidats.num_telephone,
  candidats.email,
  candidats.type_permis,
  
  FROM candidats ") or die(mysql_error());
  
  while($row=mysql_fetch_assoc($result2))
  {
   $info[] = $row;
  }
  return $info;
  }
  
 ?>
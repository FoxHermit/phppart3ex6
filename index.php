<?php
// Création du tableau array $départements
$départements = array(
  '59' => 'Nord',
  '62' => 'Pas-De-Calais',
  '76' => 'Seine-Maritime',
  '60' => 'Oise',
  '02' => 'Aisne',
  '80' => 'Somme',
  '27' => 'Eure'); // Pas de virgule sur le dernier
  // On met des quotes sur les chiffres des départements ici car on ne vas pas les calculer, c'est des "noms"
  ?>
  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <ul>
      <?php
      foreach($departments as $cle => $element) {
        ?>
        <li>Le département <?= $element; ?> a le numéro <?= $cle; ?></li>
      <?php } ?>
    </ul>
  </body>
    </html>

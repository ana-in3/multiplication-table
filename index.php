<?php include("includes/header.php"); ?>


  <div class="starter-template">
    <h1>TABLICA MNOŽENJA</h1>
    <p class="lead">-projektni zadatak-</p>


  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
          
        <?php
                for ($i=1; $i < 11; $i++) {
                     echo '  <th scope="col">'.$i.'</th>';
                }
         ?>
      </tr>
        
    </thead>
    <tbody>
        
<?php
        
//Petlja za prikaz brojeva u tabeli

for ($i=1; $i <=10 ; $i++) {
echo "<tr><th scope='row'>" . $i . "</th>";
for ($j=1; $j <=10 ; $j++) {
    
  echo "<td>";

  echo $i . " x " . $j;
  echo "</td>";
}
echo "</tr>";
}
?>
    </tbody>
  </table>

  </div>

<?php include("includes/footer.php"); ?>

<?php
if(isset($_POST['submit'])){
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
    $merge = $_POST['merge'];

    $tableHTML = '<table>';
    for($i = 0; $i < $rows; $i++){
        $tableHTML .= '<tr>';
        for($j = 0; $j < $cols; $j++){
            if(isset($merge[$i][$j])){
                $rowspan = $merge[$i][$j]['rowspan'];
                $colspan = $merge[$i][$j]['colspan'];
                $tableHTML .= '<td rowspan="'.$rowspan.'" colspan="'.$colspan.'">Cellule '.$i.'-'.$j.'</td>';
            } else {
                $tableHTML .= '<td>Cellule '.$i.'-'.$j.'</td>';
            }
        }
        $tableHTML .= '</tr>';
    }
    $tableHTML .= '</table>';

    echo '<div>'.$tableHTML.'</div>';
    echo '<textarea>'.$tableHTML.'</textarea>';
}
?>

<form method="POST" action="">
    <label for="rows">Nombre de lignes :</label>
    <input type="number" name="rows" id="rows" required>
    <br>
    <label for="cols">Nombre de colonnes :</label>
    <input type="number" name="cols" id="cols" required>
    <br>
    <label for="merge">Fusionner des cellules :</label>
    <br>
    <small>Format : [ligne],[colonne],[rowspan],[colspan]</small>
    <br>
    <textarea name="merge" id="merge" rows="4" cols="30"></textarea>
    <br>
    <input type="submit" name="submit" value="Générer le tableau">
</form>
  <?php

<?php
if(isset($_POST['submit'])){
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];

    $tableHTML = '<table>';
    for($i = 0; $i < $rows; $i++){
        $tableHTML .= '<tr>';
        for($j = 0; $j < $cols; $j++){
            $tableHTML .= '<td>Cellule '.$i.'-'.$j.'</td>';
        }
        $tableHTML .= '</tr>';
    }
    $tableHTML .= '</table>';

    echo $tableHTML;
}
?>

<form method="POST" action="">
    <label for="rows">Nombre de lignes :</label>
    <input type="number" name="rows" id="rows" required>
    <br>
    <label for="cols">Nombre de colonnes :</label>
    <input type="number" name="cols" id="cols" required>
    <br>
    <input type="submit" name="submit" value="Générer le tableau">
</form>

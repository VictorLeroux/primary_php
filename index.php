<?php
function generateTab(int $n): array
{
    $tab = array();
    if (is_int($n) && $n > 1) {
        for ($i = 2; $i <= $n; $i++) {
            array_push($tab, $i);
        }
        return $tab;
    } else {
        return false;
    }
}
function erato(array $x, int $val = 2)
{
    return "uo";
}

?>

<?php
if (isset($_POST['FormArray']))
{
    $n = isset($_POST['valeur']) ? $_POST['valeur'] : '';
//    var_dump(erato($n));
} else { ?>
    <form action="index.php" method="post">
    <div class="truc">
        <label for="val">Saisir nombre entier</label>
        <input type="text" name="val" id="val"/>
    </div>
    <div>
        <input type="reset" value="delete"/>
        <input type="submit" value="Valider"/>
    </div>
    <input type="hidden" name="FormArray"/>
</form>
<?php }

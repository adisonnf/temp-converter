<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit - 32) * 5 / 9;
    printf("%.2f°F = %.2f°C", $fahrenheit, $celsius);
} else {
?>
    <form method="post">
        Температура в °F: <input type="text" name="fahrenheit"><br>
        <input type="submit" value="Перевести">
    </form>
<?php
}

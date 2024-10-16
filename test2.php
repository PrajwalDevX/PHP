<form method="post">
    <input type="checkbox" name="language[]" value="English">English
    <br>
    <input type="checkbox" name="language[]" value="Hindi">Hindi
    <br>
    <input type="checkbox" name="language[]" value="Marathi">Marathi
    <br>
    <input type="submit" name="btnsub" value="submit">
</form>

<?php
if(isset($_POST['btnsub'])) {
    // Check if any language is selected
    if (isset($_POST['language']) && !empty($_POST['language'])) {
         
        $languages = $_POST['language']; // Array of selected languages
        echo "<table border=1>";
        echo "<tr><td>Languages Known</td><td>" . implode(", ", $languages) . "</td></tr>";
        echo "</table>";
    } else {
        echo "<table border=1>";
        echo "<tr><td>Languages Known</td><td>No language selected</td></tr>";
        echo "</table>";
    }
}
?>

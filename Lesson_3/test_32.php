<?php
session_start();
?>

<fieldset>
    <p><b class="T">Task 2. </b></p>
    <?php
    echo 'На прошлой странице вводил следущее - ' . $_SESSION['name'] . ' и ' . $_SESSION['surname'], '<br>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b></p>
    <?php
    echo $_SESSION['country'];
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 6. </b></p>

    <form action="" method="post">
        <input type="text" name="name">
        <input type="text" name="surname">
        <input type="password" name="pass">
        <input type="email" name="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
    </form>

</fieldset>
<br>

<form method='POST'>
<?php
for ($r=0; $r<=2; $r++){
    for ($i=1; $i<=10; $i++){
        ?>
            <input type='checkbox' value='<?php echo $i ?>' name='array[]'>
        <?php
    }echo '<br>';
}
?>
<input type='submit' name='btn' value='OK'>
</form>

<?php
if(isset($_POST['btn']))
{
    $value = $_POST['array'];
    foreach($value as $a => $v)
    {
        echo '<br>'.$v.'<br>';
    }
}
?>
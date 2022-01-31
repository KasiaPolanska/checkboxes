<form method='POST'>
<?php
session_start();
for ($i=1; $i<=30; $i++){
    ?>
        <input type='checkbox' value='<?php echo $i ?>' name='array[]'>
        
    <?php
    if($i === 10 || $i === 20){
        echo '<br>';
    }
}
?>
<br>
<input type='submit' name='btn' value='save'>
<input type='submit' name='show' value='show session'>
<input type='submit' name='clean' value='clean session'>
</form>

<?php
if(isset($_POST['btn']))
{
    echo 'Selected: ';
    $value = $_POST['array'];
    foreach($value as $a => $v)
    {
        echo $v.', ';
    }
    if(empty($_SESSION['cb'])){
        $array = array(
            'checked' => $_POST['array']
        );
        $_SESSION['cb'][0] = $array;
    } else {
        $count = count($_SESSION['cb']);
        $array = array(
            'checked' => $_POST['array']
        );
        $_SESSION['cb'][$count] = $array;
    }
}


if(isset($_POST['show'])){
    if(!empty($_SESSION['cb']))
    {
        echo 'Saved in session: ';
        foreach($_SESSION['cb'] as $b)
        {
            foreach($b['checked'] as $c){
                echo $c. ', ';
            }
        }
    }else {
            echo "Session is empty";
        }
    
}

if(isset($_POST['clean']))
{
    session_destroy();
}
?>
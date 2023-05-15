
<?php 
$txtNombre="";
$rdglenguaje="";

$chkphp="";
$chkhtml="";

$petsselect ="";

// En resumen, este código sirve para asignar un valor a la variable $txtNombre si se ha enviado un valor con el método POST desde un formulario web, de lo contrario, se asigna una cadena vacía a la variable.
if($_POST ){
    
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdglenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    
    $chkphp=(isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml=(isset($_POST['chkhtml'])=="si")?"checked":"";

    $petsselect = ( isset($_POST['pets']) )?$_POST['pets']:"";

    // print_r($petsselect);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
        <?php if($_POST) { ?>   
            <strong>Hola</strong>: <?php echo $txtNombre; ?>
            <!-- <strong>Tu lenguaje es: </strong> <?php echo $rdglenguaje; ?> -->
            <br/>
            <strong>Estas aprendiendo: </strong>
            <br/>
            - <?php echo ($chkphp== "checked")? "PHP":"";?><br/>   
            - <?php echo ($chkhtml== "checked")? "HTML":"";?><br/>   
            <strong>Tu Animal es : </strong> <?php  echo $petsselect; ?>
            <br/>
        <?php } ?>
        
        <form action="ejercicio31.php" method ="post">

            
        Nombre: <input value = "<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
             <br/> <br/>

            Te gusta?:
           <br/> php:<input type="radio" <?php echo($rdglenguaje == "php")?"checked":""; ?> name="lenguaje" id=""><br/>
             html:<input type="radio"  <?php echo($rdglenguaje == "html")?"checked":""; ?> name="lenguaje" id="">
            <br/> <br/>
            Estoy aprendiendo...              
            <br/> php:<input type="checkbox"<?php echo $chkphp;?> name="chkphp"  value="si" id="">
            <br/> html:<input type="checkbox"<?php echo $chkhtml;?> name="chkhtml"  value="si"  id="">

            <br/> <br/>

            Que animal te gusta ? <br/>
            <select name="pets" id="">
                <option value="">[Ningun Animal]</option>
                <option value="dog" <?php echo ($petsselect == "dog")? "selected":"";?>>Dog</option>
                <option value="cat" <?php echo ($petsselect == "cat")? "selected":"";?>>Cat</option>
                <option value="hamster"<?php echo ($petsselect == "hamster")? "selected":"";?>>Hamster</option>
                <option value="parrot"<?php echo ($petsselect == "parrot")? "selected":"";?>>Parrot</option>
                <option value="spider"<?php echo ($petsselect == "spider")? "selected":"";?>>Spider</option>
                <option value="goldfish"<?php echo ($petsselect == "goldfish")? "selected":"";?>>Goldfish</option>
            </select>
            <br/>
            <input type="submit" value="Enviare informacion">

        </form>
</body>
</html>
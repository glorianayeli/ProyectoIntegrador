<!DOCTYPE html>
<html lang="en">

<head>
    <!--cambiar a español el placeholder-->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php
            if(isset($this->carabiner)){
                $this->carabiner->display('css');
                $this->carabiner->display('js');
            }
        ?>
       
        <title>Inicio de sesión Usuario</title>
    </head>
</head>
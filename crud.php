<?php
session_start();
include_once 'clases/database/DatabaseProc.php';
error_reporting(0);
?>

<html>

    <head>
        <title>Pràctica Guess my number PHP - Lucas Padilla</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>
        <h1>Guess my number</h1>
        <h2>CRUD</h2>
        <form method="get" action="index.php">
            <div id="center_button">
                <button type="submit" class="button button2">Inicio</button>
            </div>
        </form>

        <form method="get" action="tabla_estadisticas.php">
            <div id="center_button">
                <button type="submit" class="button button2">Puntuación</button>
            </div>
        </form>

        <div>
            <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
            <h3>Añadir entrada</h3>

            <form id="fupForm" name="form1" method="post" action="save.php">
                <div class="form-group">
                    <label for="email">Modalitat:</label>
                    <input class="form-control" id="modalidad" placeholder="Modalitat" name="modalidad">
                </div>

                <div class="form-group">
                    <label for="pwd">Nivell:</label>
                    <input class="form-control" id="nivell" placeholder="Nivell" name="nivell">
                </div>

                <div class="form-group">
                    <label for="pwd">Intents:</label>
                    <input class="form-control" id="intents" placeholder="Intents" name="intents">
                </div>

                <input type="button" name="save" class="button2" value="Guardar" id="butsave">

                <h3>Borrar entrada</h3>

                <div class="form-group">
                    <label for="pwd">ID:</label>
                    <input class="form-control" id="id" placeholder="ID" name="id">
                </div>
                <input type="button" name="delete"  class="button2" value="¡Se ha borrado la entrada correctamente!" id="butdelete">
            </form>
        </div>

        <script>
            $(document).ready(function () {
                $('#butsave').on('click', function () {
                    $("#butsave").attr("disabled", "disabled");
                    var modalidad = $('#modalidad').val();
                    var nivell = $('#nivell').val();
                    var intents = $('#intents').val();
                    if (modalidad != "" && nivell != "" && intents != "") {
                        $.ajax({
                            url: "save.php",
                            type: "POST",
                            data: {
                                modalidad: modalidad,
                                nivell: nivell,
                                intents: intents,
                            },
                            cache: false,
                            success: function (dataResult) {
                                var dataResult = JSON.parse(dataResult);
                                if (dataResult.statusCode == 200) {
                                    $("#butsave").removeAttr("disabled");
                                    $('#fupForm').find('input:text').val('');
                                    $("#success").show();
                                    $('#success').html('Data added successfully !');
                                } else if (dataResult.statusCode == 201) {
                                    alert("Error occured !");
                                }

                            }
                        });
                    } else {
                        alert('Please fill all the field !');
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $('#butdelete').on('click', function () {
                    $("#butdelete").attr("disabled", "disabled");
                    var id = $('#id').val();
                    if (id != "") {
                        $.ajax({
                            url: "delete_ajax.php",
                            type: "POST",
                            data: {
                                id: id
                            },
                            cache: false,
                            success: function (dataResult) {
                                var dataResult = JSON.parse(dataResult);
                                if (dataResult.statusCode == 200) {
                                    $("#butdelete").removeAttr("disabled");
                                    $('#fupForm').find('input:text').val('');
                                    $("#success").show();
                                    $('#success').html('Data added successfully !');
                                } else if (dataResult.statusCode == 201) {
                                    alert("Error occured !");
                                }

                            }
                        });
                    } else {
                        alert('Please fill all the field !');
                    }
                });
            });
        </script>
        <br>

        <div class="footer">
            <p id="p_footer">Lucas Padilla Hidalgo™</p>
            <p id="p_footer">Todos los derechos reservados. 2021.</p>
        </div>
    </body>

</html>
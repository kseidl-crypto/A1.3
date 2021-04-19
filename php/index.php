<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästebuch</title>
    <link href="../css/Bootstrap/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <div class="col-sm-1">
        <h1>Kundenformular</h1>
    </div>
    <!-- Daten eingegeben -->
    <form action="indexBeispiel.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-2">Vorname:</label>
            <div class="col-sm-10">
                <input type="text" name="vname" />
            </div>


        </div>
        <div class="form-group">
            <label class="col-sm-2">Nachname:</label>
            <div class="col-sm-10"><input type="text" name="nname" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2">Email:</label>
            <div class="col-sm-10"><input type="email" name="email" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2">ID:</label>
            <div class="col-sm-10"><input type="number" name="kid" />
            </div>
        </div>


        <input type="submit"/>

    </form>



</div>

</body>
</html>

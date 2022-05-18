
<!DOCTYPE>
    <html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap4/css//bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include_once("top.php");
            ?>
        </div>
        <div class="row">
            <?php
            include_once("middle.php");
            ?>
        </div>


        <div class="row">
            <?php
            include_once("left.php");
            ?>




            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        Ajout d'un PFA
                    </div>
                    <div class="card-body">
                    <form method="POST" action="addpfa.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titre">Titre Du PFA</label>
                            <input type="text" class="form-control" name="nom"  placeholder="Enterer le titre">
                        </div>
                        <div class="form-group">
                            <label for="titre">Nom etudiant</label>
                            <input type="text" class="form-control" name="nom_etudiant"  placeholder="Enterer un nom">
                        </div>
                        <div class="form-group">
                            <label for="titre">Nom enseignant</label>
                            <input type="text" class="form-control" name="nom_enseignant"  placeholder="Enterer un nom">
                        </div>
                        <div class="form-group">
                            <input type="file"  name="fichier">
                        </div>
                        <p class=" list-group-item-action text-danger" >
                        Votre fichier pdf doit obligatoirement porter le meme nom que le titre de votre PFA
                        </p>
                        
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
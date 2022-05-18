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
                        Liste des PFA
                    </div>
                    <div class="card-body">
                        <a class="btn btn-danger" href="ajouterpfa.php">Ajouter un projet</a>
                        <br>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>Titre</th>
                                    <th>Etudiant</th>
                                    <th>Enseignant</th>
                                    <th>Lire le PDF</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once("functions.php");
                                $pfa = getAllpfa();
                                
                                foreach ($pfa as $k => $v) {
                                    echo "<tr>";
                                    //echo "<td>".$v->id."</td>";
                                    echo "<td>".$v->nom."</td>";
                                    echo "<td>".$v->nom_enseignant."</td>";
                                    echo "<td>".$v->nom_etudiant."</td>";
                                    
                                    echo "'<td><a href='files/$v->nom'>$v->nom</a></td>'";

                                    
                                    
                                    
                                    
                                    echo '<td><a class="btn btn-danger" href="del.php?id='.$v->id.'">supprimer</a></td>';
                                    echo "</tr>";
                                   
                                }
                                
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
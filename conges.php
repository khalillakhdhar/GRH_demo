<html>

<head>
    <title>Congés</title>
</head>

<body>
    <?php include("header.php"); ?>
    <br><br>
    <!-- Button trigger modal -->
    <div align="center"> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Ajoutez un Congé
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID employé</th>
                <th>Début</th>
                <th>durée</th>
                <th>Type</th>
                <th>Titre</th>
                <th>Cause</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID employé</td>
                <td>Début</td>
                <td>durée</td>
                <td>Type</td>
                <td>Titre</td>
                <td>Cause</td>
                <td><a href="#">supprimer</a></td>
            </tr>

        </tbody>

    </table>

</body>

</html>
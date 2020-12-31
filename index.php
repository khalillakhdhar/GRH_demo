<html>

<head>
    <?php include("./model/employeeCRUD.php");   ?>
    <title>Employees</title>
    <?php
    $emp = new Employee();
    $liste = $emp->list_users();
    ?>


</head>

<body>
    <?php include("header.php"); ?>
    <br><br>
    <!-- Button trigger modal -->
    <div align="center"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajoutez un employé
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
                <th>Nom</th>
                <th>Téléphone</th>
                <th>adresse</th>
                <th>Grade</th>
                <th>Salaire</th>
                <th>CIN</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $liste->fetch_assoc()) {
            ?>
                <tr>
                    <td></td>
                    <td>Téléphone</td>
                    <td>adresse</td>
                    <td>Grade</td>
                    <td>Salaire</td>
                    <td>CIN</td>
                    <td><a href="#">supprimer</a></td>
                </tr>
            <?php }
            ?>
        </tbody>

    </table>

</body>

</html>
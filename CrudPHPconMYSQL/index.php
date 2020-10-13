<?php include("db.php")?>
<?php include("include/header.php") ?>
<?php include("include/navigation.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message type'] ?> alert-dismissible fade show" role="alert">
                  <?=    $_SESSION['message']?>  
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();} ?>
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control"
                        placeholder="Título de la tarea" autofocus>
                    </div>
                    <div class="form-group">
                       <textarea name="description" rows="2" class="form-control"
                       placeholder="Descripción de la tarea"></textarea>
                    </div>
                    <button type="submit" name="save_task" class="btn btn-success btn-block">
                    <i class="fas fa-save"></i>  GUARDAR TAREA
                    </button>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                     <tr>
                        <th>título</th>
                        <th>descripción</th>
                        <th>fecha</th>
                        <th>Acciones</th>
                     </tr>
                </thead>
                 <tbody>
                    <?php
                    $query = "SELECT id, title, decription, create_at FROM task";
                    $result_query = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_query)){?>
                        <tr>
                            <td><?php echo $row['title']?></td>
                            <td><?php echo $row['decription']?></td>
                            <td><?php echo $row['create_at']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker" ></i>
                                </a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>"  class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                 </tbody>
         </table>      
        </div>      
    </div>
</div>
<?php include("include/footer.php")?>



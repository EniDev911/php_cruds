<?php

include("db.php");


if (isset($_POST['save_task'])){
    //Guardamos n variables lo que recibimos del los input
       $title = $_POST['title'];
       $description = $_POST['description'];
    //Creamos la sentencia sql para utilizar la variable
       $query = "INSERT INTO task (title, decription) VALUES ('$title', '$description')"; 
    //En otra variable hacemos método para ejecutar la query recibe la cadena de conexioón y nuestra variable con la query   
    $result = mysqli_query($conn, $query); 
    //Validamos con un if
    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Tarea guardada correctamente';
    $_SESSION['message type'] = 'success';
    // Si todo sale bién redirigimos a nuestro index
    header("location: index.php");
}
?>
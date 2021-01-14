 <form action="index.php" method="POST">
 <label for="mail">Email</label>
            <input type="email" placeholder="E-mail" name="mail">
            <button type="submit">Añadir</button>
 </form>


 <?php
    if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
        $conn = new mysqli("localhost", "root", "", "examenmails");
        
        if ($conn->connect_error) {
        echo "error";
        } else {
        $insertMail = "INSERT INTO emails (`email`) VALUES ('$mail')";
        if ($conn->query($insertMail) === FALSE) {
            echo "Ya existe ese email!!";
        }
        $conn->close();
    }
    }
 ?>
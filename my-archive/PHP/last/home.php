<?php
session_start();

?>
<html>

<head>
    <title>HOME PAGE</title>
</head>

<body>

    <h1>Welcome <?php echo $_SESSION['username']; ?></h1><br>
    <form method="POST" action="question.php">
        <button>PERSONALITY TEST</button>
    </form>
    <a href="logout.php">logout</a>

</body>

</html>
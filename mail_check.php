<?php 
    session_start();
    $_SESSION['mail'] = time();
    
    ?>
    <script>
        location.href = "board.php"
    </script>
    <?php
?>
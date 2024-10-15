<?php
  session_start();
?>

<body>
  <p> <?php echo "Chào bạn ".$_SESSION['hoten']; ?> </p>
  <p>
    <form action="process.php" method="post" name="formThoat" id="formThoat">
      <input name="thoat" type="submit" value="Thoát" />
    </form>
  </p>
</body>
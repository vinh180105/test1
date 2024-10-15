<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trang Đăng Nhập</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>TRANG ĐĂNG NHẬP</h1>
  <form id="formlogin" name="formlogin" method="post" action="process.php">
    <p>
      <label for="username">Username:</label>
      <input type="text" class="txt" name="username" id="username" />
    </p>
    <p>
      <label for="password">Password</label>
      <input type="password" class="txt" name="password" id="password" />
    </p>
    <p>
      <input type="checkbox" name="rem" id="rem"> Remember
    </p>
    <p>
      <input type="submit" name="login" id="login" value="Login" />
      <input type="reset" name="cancel" id="cancel" value="Reset" />
    </p>
  </form>
</body>
</html>
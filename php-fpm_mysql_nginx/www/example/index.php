<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP info</title>
</head>

<body>
  <?php $mysqli = new mysqli("mysql", "user", "password"); ?>
  <div class="center">
    <table>
      <tbody>
        <tr class="h">
          <td>
            <h1 class="p">MySQL connection</h1>
          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <tbody>
        <tr>
          <td class="e">Server info</td>
          <td class="v"><?php echo $mysqli->server_info; ?></td>
        </tr>
        <tr>
          <td class="e">Client info</td>
          <td class="v"><?php echo $mysqli->client_info; ?></td>
        </tr>
        <tr>
          <td class="e">Host info</td>
          <td class="v"><?php echo $mysqli->host_info; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <?php phpinfo(); ?>
</body>

</html>
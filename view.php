<!DOCTYPE html>
<html lang="en">
<head>
  <title>SiteHost Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>I assume that JSON key for each record is "domain" and using that variable:</h2>
  <p>I am blinded because I keep geting message: <br>
"msg": "Unauthorised. You cannot use this Api Key from your location. (109.93.213.53:6d5dd535:112)"</p>            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Domain</th>
        <th>Registered at</th>
        <th>Expires on</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $single): ?>
      <tr>
        <td><?= $single->msg; ?></td>
        <td>20.01.2021</td>
        <td>19.01.2022</td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
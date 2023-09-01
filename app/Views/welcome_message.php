<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <a href="<?= site_url("downlord") ?>" class="btn btn-sm btn-success mb-3">Download</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Firstname</th>
          <th scope="col">Lastname</th>
          <th scope="col">Address</th>
          <th scope="col">Phonenumber</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if (!empty($tableData)) {
            foreach ($tableData as $index => $row) {
        ?>
          <tr>
            <th scope="row"><?= $index ?></th>
            <td><?= $row->firstname ?></td>
            <td><?= $row->lastname ?></td>
            <td><?= $row->address ?></td>
            <td><?= $row->phonenumber ?></td>
            <td>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton<?= $index ?>" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= $index ?>">
                  <li><a class="dropdown-item" href="#">ex1</a></li>
                  <li><a class="dropdown-item" href="#">ex2</a></li>
                  <!-- Add more options here if needed -->
                </ul>
              </div>
            </td>
          </tr>
        <?php
              $index++;
            }
          }
        ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

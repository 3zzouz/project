<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('location:../index.php');
  exit;
}
$page_title = "Consulter Client";
$stylesheets = [
  'client.css',
  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
];
$scripts = [];
$inline_style = '
    .btn-outline-info {
        color: black !important;
        border-color: black !important;
        --bs-btn-hover-bg: rgb(233, 96, 17);
    }

    .container {
        background-color: rgb(233, 96, 17);
    }
';

include '../../utilities/layout.php';
?>

<body>

  <?php
  require_once '../../utilities/autoloader.php';
  $client = new Client();
  $offre = new offreClient();
  $offres = $offre->findAll()->getData();
  $clients = $client->getAll()->getData();

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cardid = htmlentities($_POST['cardidf']);

    $name = htmlentities($_POST['namef']);
    $email = htmlentities($_POST['emailf']);
    $number = htmlentities($_POST['numf']);
    if (isset($_POST['addnew'])) {
      $result = $client->insert(['NAME' => $name, 'EMAIL' => $email, 'PHONE_NUMBER' => $number]);
      if ($result->getStatus()) {
        header("Refresh:0");
        exit();
      } else { ?>
        <script>
          alert("Error: Make sure that the name and email and phone number are unique");
          window.history.back();
        </script>
        <?php
      }

    } elseif (isset($_POST['modify'])) {
      $toinsert = [];
      if ($name != "") {
        $toinsert['NAME'] = $name;
      }
      if ($email != "") {
        $toinsert['EMAIL'] = $email;
      }
      if ($number != "") {
        $toinsert['PHONE_NUMBER'] = $number;
      }
      $result = $client->update($cardid, $toinsert);
      if ($result->getStatus()) {
        header("Refresh:0");
        exit();
      } else {
        ?>
        <script>
          alert("Error : Enter the correct ID and make sure name and email and phone number are unique");
          window.history.back();
        </script>
        <?php
      }
    } elseif (isset($_POST['delete'])) {
      if ($client->findById($cardid)->getData() == null) {
        ?>
        <script>
          alert("Error: ID doesn't exist ");
          window.history.back();
        </script>
        <?php
      } else {
        $result = $client->delete($cardid);
        if ($result->getStatus()) {
          header("Refresh:0");
          exit();
        } else {
          ?>
          <script>
            alert("Error: Please re-enter the information correctly and retry again");
            window.history.back();
          </script>
        <?php }
      }
    }

  }
  ?>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
          </div>
          <div class="table-responsive">
            <table class="table no-wrap user-table mb-0">
              <thead>
                <tr>
                  <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Phone number</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Added</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">subscribtion limit</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Access Card Id</th>

                </tr>
              </thead>

              <?php foreach ($clients as $clt): ?>
                <tbody>

                  <tr>

                    <td>
                      <h5 class="font-medium mb-0">
                        <?= $clt->NAME ?>
                      </h5>
                    </td>
                    <td>
                      <span class="text-muted">
                        <?= $clt->PHONE_NUMBER ?>
                      </span><br>
                    </td>
                    <td>
                      <span class="text-muted">
                        <?= $clt->EMAIL ?>
                      </span><br>
                    </td>
                    <td>

                      <span class="text-muted">
                        <?= $clt->DATE_AJOUT ?>
                      </span><br>

                    </td>
                    <td>

                      <span class="text-muted">
                        <?= ($offre->getSubscriptionEndDate($clt->ID))->getData() ?>
                      </span><br>

                    </td>

                    <td>
                      <h1>
                        <?= $clt->ID ?>
                      </h1>
                    </td>


                  </tr>


                </tbody>

              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <form action="client.php" method="post" name="formclient" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group ">
            <label for="cardidf">Card Id</label>
            <input type="text" class="form-control" name="cardidf" placeholder="Card Id">
          </div>
        </div>
        <div class="form-group">
          <label for="namef"> Name</label>
          <input type="text" class="form-control" name="namef" placeholder="give a name">
        </div>
        <div class="form-group">
          <label for="emailf">Email </label>
          <input type="email" class="form-control" name="emailf" placeholder="Email">
        </div>
        <div class="form-row">
          <div class="form-group ">
            <label for="numf">phone number</label>
            <input type="text" class="form-control" name="numf">

          </div>
        </div>
        <button type="submit" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" name="addnew"><i
            class="fa fa-upload"></i> </button> add new client <strong>fill the form below </strong> <br></li>
        <button type="submit" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" name="modify"><i
            class="fa fa-edit"></i> </button> modify existant client ,put his card id and change the rest<br></li>
        <button type="submit" name="delete" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i
            class="fa fa-trash"></i> </button>Delete client <strong>Enter ID </strong></li>
      </form>
    </div>
  </div>
</body>

</html>
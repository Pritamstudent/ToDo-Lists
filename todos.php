<?php
include "./includes/config.php";
include "./includes/header.php";
if (isset($_GET['remove'])) {
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `tasks` WHERE id = '$remove_id'") or die('query failed');
  header('location: todos.php');
}
?>

<head>


  <link rel="stylesheet" href="../todolistpritam/includes/tablesort.css">
  <style>



    .card:hover {
      transform: scale(1.05);
    }

    table {
      width: 700px;
      margin-top: auto;
      margin: auto;
      background-color: aqua;
    }

    table {
      width: 100%;
      text-align: center;
      border: var(--border);
      border-radius: 5px;
      box-shadow: var(--box-shadow);
      background-color: var(--white);
    }

    table thead {
      background-color: var(--black);
    }

    table thead th {
      padding: 10px;
      color: var(--white);
      text-transform: capitalize;
      font-size: 20px;
    }

    table .table-bottom {
      background-color: var(--light-bg);
    }

    table tr td {
      padding: 10px;
      font-size: 20px;
      color: var(--black);
    }

    table tr td:nth-child(1) {
      padding: 0;
    }


    tr:hover {
      background-color: #D6EEEE;
    }

    table {
      border: 2px solid black;
    }
  </style>
</head>

<body style="background-image: url('https://muffingroup.com/blog/wp-content/uploads/2021/03/yeloow-heaer.jpg');">



  <div class="container">
    <div class="row">
    
      <div class="card text-center card-flip" id="card" style="width: 45rem; margin: auto; margin-top: 100px;margin-bottom: 100px;">
        <div>
          <img  class="card-img-top"src="https://www.actitime.com/wp-content/uploads/2020/03/best-to-do-list-apps-to-stop-forgetting-things.png" alt="Card image cap">
        </div>
        <div class="card-body">
        <input class="text-center" style="width:500px;margin-bottom:20px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for title..">
        <table id="myTable" class="table table-sortable table table-striped table table-sm table-responsive">
            <thead style="background-color:lavender;" class="text-secondary">
              <th>
                Title
              </th>
              <th>
                Description
              </th>
              <th>
                Type of Work
              </th>
              <th>
                Date
              </th>
              <th>
                Action
              </th>
            </thead>
            <tbody>
              <?php
              $task_query = mysqli_query($conn, "SELECT * FROM tasks WHERE email = '{$_SESSION["email"]}'") or die('query has failed');
              if (mysqli_num_rows($task_query) > 0) {
                while ($fetch_tasks = mysqli_fetch_assoc($task_query)) {

              ?>
                  <tr>
                    <td>
                      <?php echo $fetch_tasks['name']; ?>
                    </td>
                    <td>
                      <?php echo $fetch_tasks['description']; ?>
                    </td>
                    <td>
                      <?php echo $fetch_tasks['type']; ?>
                    </td>
                    <td>
                      <?php echo $fetch_tasks['date']; ?>

                      <form action="./update.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $fetch_tasks['id']; ?>">
                        <input type="date" name="date" value="<?php echo $fetch_tasks['date']; ?>">
                        <input type="submit" name="update_deadline" value="Update" class="btn btn-warning">
                      </form>
                    </td>
                    <td>
                      <form action="./remove.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $fetch_tasks['id']; ?>">
                        <input type="submit" name="remove" value="remove" class="btn btn-danger" onclick="return confirm('remove the task from the todo list');">
                      </form>


                    </td>
                  </tr>
              <?php
                };
              };
              ?>

            </tbody>
          </table>
        </div>
        <ul class="list-group list-group-flush btn-btn-primary" >
            <li class="list-group-item"> <a href="./add.php"  > <button type="button" class="btn btn-primary">Add New Task</button> </a> </li>
          </ul>

      </div>

    </div>
  </div>
<script src = "./includes/tablesort.js"></script>
</body>
<?php
include "./includes/footer.php"
?>
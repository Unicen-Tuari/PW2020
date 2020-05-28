<?php
include_once('database.php');
function tasks($member = null){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>ToDo List App</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>Tasks</h1>
            <ul class="list-group">
            <?php
              $tasks = getTasks();
              foreach($tasks as $task)
              {
            ?>
                <li class="list-group-item">
                  <blockquote class="blockquote">
                  <p class="mb-0">
                    <? echo $task['title']?>
                    <a href="deleteTask/<? echo $task['id_task']?>">
                      <i data-feather="trash-2"></i>
                    </a>
                  </p>
                  <footer class="blockquote-footer"><? echo $task['description']?></footer>
                  </blockquote>
                </li>
              <?php
              }
              ?>
              </ul>
          </div>
          <div class="col-sm">
            <h1>Create Task</h1>
            <form action="insertTask"  method="GET">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Task title">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Create">
              </div>
            </form>
          </div>
        </div>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="js/icons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}


function insertTask(){
  echo "Insert Task - 123";
  echo "Title:". $_GET["title"];
  echo "Description:". $_GET["description"];
  createTask($_GET["title"], $_GET["description"]);
  header("Location: home");
}

function deleteTask($params){
  removeTask($params[0]);
  header("Location: ../home");
}
?>
<?php   
    
session_start();
    
   $x = isset($_SESSION['email']);
   
   if(!$x)
   {

    header("Location: signin.php");

   }
    include ("view/header.php");
    include("model/database.php");
    include("model/accounts.php");
    include("model/todos.php");

    $email = $_SESSION['email'];
    $notDone = show_not_done_tasks($email);
    $done = show_done_tasks($email);
    
?>


    
    <style>
        .jumbotron{
            background-color: #395DFF;
            text-align: center;
            color: white;
            padding: 5px;
        }
        
        #welcome{
            text-align: center;
        }

        #logout{
            text-align: right;
        }
        
        table{
            border: 2px solid black;
            border-radius: 5px;
        }
        
        button a{
            color: white;
        }
        
        .footer {
            position: fixed;
            height: 100px;
            bottom: 0;
            width: 100%;
            background-color: #395DFF;
            text-align: center;
            color: white;
            font-size: 25px;
            
        }


        
        button{
        }
    </style>

<body>

    <div class = "jumbotron">
            <h1>Todos by Rahul</h1>
            <form action="logout.php" method="POST" >
                <input type="submit" class="btn-danger" value="Logout" >
            </form>
    </div>
        
    <div class="container">

        <h2 id="welcome">Welcome, <?php echo $_SESSION['fname'], ' ', $_SESSION['lname'];?></h2>
            
        <br>

        <h3>Todos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Task.</th>
                    <th scope="col">Created Date.</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Complete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($notDone as $row): ?>
                <tr>
                    <th scope="row">1</th>
                    <td> <?php echo $row['message']; ?> </td>
                    <td> <?php echo $row['createddate']; ?> </td>
                    <td> <?php echo $row['duedate']; ?> </td>
                    <td><button type="button" class="btn btn-primary"><a href = "edit.php">Edit</a></button></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                    <td><button type="button" class="btn btn-success">Complete</button></td>

                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <form action="add.php">
            <input type="submit" name="add" class="btn btn-info" value="Add Task">
        </form>

        <br>
        <br>

        <h3>Completed Tasks</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Task.</th>
                    <th scope="col">Created Date.</th>
                    <th scope="col">Completed Date</th>
                    <th scope="col">Add Back</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($done as $row):?>
                <tr>
                    <th scope="row">1</th>
                    <td> <?php echo $row['message']; ?> </td>
                    <td> <?php echo $row['createddate']; ?> </td>
                    <td> <?php echo $row['duedate']; ?> </td>
                    <td><button type="button" class="btn btn-primary"><a href = "edit.php">Add Back</a></button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    </div>

    

 <br>
 <br>   
<?php include ("view/footer.php") ; ?>










































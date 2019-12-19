<?php
    $title = 'Administrator Login';

    require_once 'includes/header.php' ;
    require_once 'db/conn.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userName = strtolower(trim($_POST['username']));
        $password = $_POST ['password'];
        $new_password = md5($password.$userName);


        $result = $user->getUser($userName, $new_password);
        if(!$result){

            echo '<div class=" alert alert-danger"> Username or Password is incorrect </div>';
        }else{
            $_SESSION['userName'] = $userName;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrecords.php");
        }
    }
?>
 <h1 class="text-center"><?php echo $title ?></h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table class="table table-sm">
            <tr>
                <td><label for="username">Username: * </label></td>
                <td><input type="text" name="username" class="form-control" id="username" value="
                <?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">

                <?php if (empty($userName) && $_SERVER['REQUEST_METHOD'] == 'POST') 
                echo "<p class='text-danger'>$username_error</p>";?>
                </td>
            </tr>

            <tr>
                <td><label for="password">Password: * </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
                <?php if (empty($password) && isset($password_error)) echo "<p class='text-danger'>
                $password_error</p>"; ?>
                </td>
            </tr>
        </table>

        <input type="submit" value="Login" class="btn btn-warning btn-block">

        <a class=text-info href="#"> Forgot Password?</a>
            
    </form>
<br>
<br>
<br>
<br>


    <?php require_once 'includes/footer.php' ;?>
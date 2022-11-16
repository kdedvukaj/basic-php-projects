<?php

    $title = $email = $ingredients = '';
    $errors = array('email'=>"",'title'=>"", 'ingredients'=>"");

    if(isset($_POST['submit'])){
        // $email = htmlspecialchars($_POST['email']);
        // $title = htmlspecialchars($_POST['title']);
        // $ingredients = htmlspecialchars($_POST['ingredients']);

        if(empty($_POST['email'])){
            $errors['email'] = "An email is required <br/>";
        }else{
           $email = $_POST['email'];
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Must be a valid email address <br/>";
           } 
        }

        if(empty($_POST['title'])){
            $errors['title'] = "An title is required <br/>";
        }else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = "Must be a valid title with letters and space only <br/>";
            }
        }

        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = "An ingredient is required <br/>";
        }else{
           $ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
        }

        if(array_filter($errors)){
            // echo "errors in the form";
        }else{
            header('Location: index.php');
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="add.php" method="POST">
            <label for="">Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text">
                <?php echo $errors['email']; ?>
            </div>
            <label for="">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text">
                <?php echo $errors['title']; ?>
            </div>
            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>" >
            <div class="red-text">
                <?php echo $errors['ingredients']; ?>
            </div>
            <div class="center">
                <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

<?php include('templates/footer.php'); ?>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Destry Amiott
 * Date: 5/20/2017
 * Time: 1:52 PM
 */


    if($_POST['password'] == 'e3fca7865a7ef536a43aee19730e73ba'){
        header("Location: http://kanoka42.github.io/units.html"); /* Redirect here if the password is correct */
    } else {
        header("Location: http://www.google.com"); /* Redirect here if the password is correct */
    }

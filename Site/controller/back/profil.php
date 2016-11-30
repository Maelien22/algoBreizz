<?php
$title = 'Profil';
require_once('../../view/back/template/pages/header.php');
session_start();
require_once('../../view/back/template/pages/navbar.php');

require('../../model/back/admin.php');
$id = $_SESSION['id'];
$info = getinfo_user($id);

ob_start();

include('../../view/back/template/pages/profil.php');



if(isset($_POST['username']) AND isset($_POST['email'])){
    $usernamenew = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $usernamedef = htmlspecialchars(trim($_POST['usernamedefault']));
    $emaildef = htmlspecialchars(trim($_POST['emaildef']));
    
    if(empty($usernamenew) AND !empty($email)){
        modif_profil($usernamedef, $email, $id);
        $_SESSION['username'] = $usernamedef;
    }
    else if(!empty($usernamenew) AND !empty($email)){
        modif_profil($usernamenew, $email, $id);
        $_SESSION['username'] = $usernamenew;
    }
    else if(!empty($usernamenew) AND empty($email)){
        modif_profil($usernamenew, $emaildef, $id);
        $_SESSION['username'] = $usernamenew;
    }
?>    
<?php
}

if(isset($_POST['password1']) AND isset($_POST['password2'])){
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);
    if(isset($paswword1) == isset($paswword2)){
        $password = sha1($password1);
        modif_pwd($id, $password);
        echo "ok";
    }
    else{
        echo"Les mots de passe ne correspondent pas";
    }
}
$test = ob_end_flush();

header('Location: profil.php');
?>
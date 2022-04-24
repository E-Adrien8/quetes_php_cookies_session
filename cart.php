<?php
require 'inc/head.php';
require 'inc/data/products.php';

if(!isset($_SESSION['login'])){
        header('Location:login.php');
}
?>
<section class="cookies container-fluid">
        <div class="row">
                <ul>
                        <?php
                        if(isset($_SESSION['cart']) && $_SESSION['user_name']){
                                foreach ($_SESSION['cart'] as $key => $cookie){
                                        echo '<li>' . $cookie . '</li>';
                                }
                        }

                        ?>
                </ul>
        </div>
</section>

<?php require 'inc/foot.php'; ?>

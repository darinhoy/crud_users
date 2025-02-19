<?php if (isset($_SESSION['user'])) : ?>
<div class="container">
    <h1>Welcome to PHP</h1>
</div>
<?php 
else: 
    $this->redirect("/users/login"); 
endif;   
?>

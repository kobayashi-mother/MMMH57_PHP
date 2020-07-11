<?php include __DIR__. '/part-to-php/head.php'; ?>
<?php include __DIR__. '/part-to-php/navbar.php'; ?>


<div class="container">
<pre>
    <?php
    print_r($_POST);
    //print_r($_REQUEST); post get皆會接收
    ?>
</pre>


<form novalidate method="post" action="">
    <div class="row">
        <div class="col-lg-6">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox">
        <label class="form-check-label" for="checkbox">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
</form>
</div>
<?php include __DIR__. '/part-to-php/script.php'; ?>
<?php include __DIR__. '/part-to-php/footer.php'; ?>



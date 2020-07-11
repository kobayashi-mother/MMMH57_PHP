<?php include __DIR__. '/part-to-php/head.php'; ?>
<?php include __DIR__. '/part-to-php/navbar.php'; ?>

<!--pre是直接輸出php-->
<!--print_r 專門用來梳出完整的陣列-->

<div class="container">
<pre>
    <?php
    print_r($_GET);
    ?>
</pre>

<!--//novalidate給填資料的表格不會受限-->
<!--//form預設值為method="get" action=""-->
<!--//action="" 指傳給自己-->
<!--//html的lable 就算點到字也可以填入資料 id 和 form 要同名稱-->
<!--//資料傳出一定要有name，通常name和id同名稱-->

<form novalidate method="get" action="">
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


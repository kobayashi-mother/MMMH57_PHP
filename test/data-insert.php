<?php
require __DIR__. '/__connect_dp.php';
$page_name = 'data-insert';

if(isset($_POST['name']) and isset($_POST['number'])) {

    $sql = "INSERT INTO `adress_book`(
`name`,`address`, `mail`, `birthday`, `number`,  `created_at`
) VALUES (?, ?, ?, ?, ?, NOW())";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['name'],
        $_POST['address'],
        $_POST['mail'],
        $_POST['birthday'],
        $_POST['number'],
    ]);

    if($stmt->rowCount()==1){
        $success = true;
    } else{
        $success = false;
    }


}
?>

<?php include __DIR__. '/part-to-php/head.php'; ?>
<?php include __DIR__. '/part-to-php/navbar.php'; ?>

<div class="container">
    <?php if(isset($success)): ?>
    <?php if($success): ?>
        <div class="alert alert-success" role="alert">
            資料新增成功
        </div>
    <?php else: ?>
        <div class="alert alert-success" role="alert">
            資料新增失敗
        </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-6">
            <form method="post">
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" id="name" name="name"
                           value="<?= isset($_POST['name']) ? htmlentities($_POST['name']) : '' ?>">
                    <small id="nameHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                    <small id="addressHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="mail">mail</label>
                    <input type="mail" class="form-control" id="mail" name="mail">
                    <small id="mailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="birthday">birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    <small id="birthdayHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="number">number</label>
                    <input type="text" class="form-control" id="number" name="number" pattern="09\d{2}-?\d{3}-?\d{3}" required>
                    <small id="numberHelp" class="form-text text-muted"></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
<?php include __DIR__. '/part-to-php/script.php'; ?>
<?php include __DIR__. '/part-to-php/footer.php'; ?>
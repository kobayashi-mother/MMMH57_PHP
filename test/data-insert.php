
<?php include __DIR__. '/part-to-php/head.php'; ?>
<?php include __DIR__. '/part-to-php/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form>
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <small id="nameHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                    <small id="addressHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="birthday">birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    <small id="birthdayHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="number">number</label>
                    <input type="text" class="form-control" id="number" name="number">
                    <small id="numberHelp" class="form-text text-muted"></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>

<?php include __DIR__ . '/parts/html-foot.php'; ?>

<?php include __DIR__. '/part-to-php/footer.php'; ?>
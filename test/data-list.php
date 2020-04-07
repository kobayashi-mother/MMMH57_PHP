<?php
require __DIR__. '/__connect_dp.php';

$stmt = $pdo->query("SELECT * FROM adress_book");

?>

<?php include __DIR__. '/part-to-php/head.php'; ?>
<?php include __DIR__. '/part-to-php/nav.php'; ?>

<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">address</th>
            <th scope="col">mail</th>
            <th scope="col">birthday</th>
            <th scope="col">number</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($r=$stmt->fetch()): ?>
            <tr>
                <td><?=$r['sid']?></td>
                <td><?=$r['name']?></td>
                <td><?=$r['address']?></td>
                <td><?=$r['mail']?></td>
                <td><?=$r['birthday']?></td>
                <td><?=$r['number']?></td>
            </tr>
        <?php endwhile ?>
        </tbody>
    </table>
</div>
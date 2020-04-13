<?php
if (! isset($page_name)){
    $page_name = '';
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $page_name=='data-list' ? 'active' : ''?>">
                    <a class="nav-link" href="data-list.php">資料列表</a>
                </li>
                <li class="nav-item <?= $page_name=='data-insert' ? 'active' : ''?>">
                    <a class="nav-link" href="data-insert.php">新增資料</a>
                </li>
                <li class="nav-item <?= $page_name=='data-insert2' ? 'active' : ''?>">
                    <a class="nav-link" href="data-insert2.php">新增資料ajax</a>
                </li>
                <li class="nav-item <?= $page_name=='data-list2' ? 'active' : ''?>">
                    <a class="nav-link" href="data-list2.php">新增資料ajax2</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    #navbarSupportedContent .nav-item.active{
        background: #17a2b8;
    }
</style>
<?php
require __DIR__. '/__connect_dp.php';

$page_name = 'data-list2';

?>

<?php include __DIR__. '/part-to-php/head.php'; ?>
<?php include __DIR__. '/part-to-php/navbar.php'; ?>

<style>
    tbody tr i.fa-trash-alt {
        color: red;
    }
</style>

<div class="container">
    <div class="row">
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
        <tbody class="data-tbody">
<!--            <tr>-->
<!--                <td></td>-->
<!--                <td></td>-->
<!--                <td></td>-->
<!--                <td></td>-->
<!--                <td></td>-->
<!--                <td></td>-->
<!--            </tr>-->
        </tbody>
    </table>
    </div>
    <div class="row">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
<!--            <li class="page-item ">-->
<!--                <a class="page-link" href="?page="></a>-->
<!--            </li>-->
<!--            <li class="page-item">-->
<!--                <a class="page-link" href="?page="></a>-->
<!--            </li>-->
<!---->
<!--            <li class="page-item ">-->
<!--                <a class="page-link" href="?page="></a>-->
<!--            </li>-->
        </ul>
    </nav>
    </div>
</div>

<?php include __DIR__. '/part-to-php/script.php'; ?>
<script>
    /*
        運作的流程 steps
        1. 取得資料 (包成 function
        2. 生頁碼列的按鈕
        3. 生資料表格
     */
    const pagination=$('.pagination'),
        tbody=$('.data-tbody')


    const paginationTpl =o=>{
        // {active:true, page:2}
        return`
           <li class="page-item ${o.active ? 'active' : ''}">
              <a class="page-link" href=#${o.page}">${o.page}</a>
           </li>
        `;
    };

    const escapeTag = str=> {
        /*
          '&': '&amp;',
          '<': '&lt;',
          '>': '&gt;'
         */
        return str
            .split('&').join('&amp;')
            .split('<').join('&lt;')
            .split('>').join('&gt;')
    };

    const itemTpl =o=>{
        return`
            <tr>
                <td>${escapeTag(o.sid)}</td>
                <td>${escapeTag(o.name)}</td>
                <td>${escapeTag(o.address)}</td>
                <td>${escapeTag(o.mail)}</td>
                <td>${escapeTag(o.birthday)}</td>
                <td>${escapeTag(o.number)}</td>
            </tr>
        `;
    };
    
    function getDataByPage(page=1) {
        $.get('data-list2-api.php', {page:page}, function (data) {
            console.log(data);
            let pStr ='';
            for (let i=1; i<=data.totalPages; i++){
                pStr += paginationTpl({
                    active:page===i,
                    page:i
                })
            }
            pagination.html(pStr);

            let tStr = '';
            for (let i=0; i<data.rows.length; i++){
                let item = data.rows[i];
                tStr += itemTpl(item);
            }
            tbody.html(tStr);

        }, 'json');
    }
    getDataByPage()

    function whenHashChange() {
        let hashStr = location.hash.slice(1);
        let page = parseInt(hashStr);

        if (page){
            getDataByPage(page);
        }else {
            getDataByPage(1)
        }
    }
 window.addEventListener('hashchange', whenHashChange);

whenHashChange();

</script>
<?php include __DIR__. '/part-to-php/footer.php'; ?>

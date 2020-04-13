<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--在form裡面button的預設都是type=submit-->
<!--可以這樣使用onsubmit="return false" 使表單不會送出-->
<!--一定要使用form才能傳輸到後端-->

<form action="" name="form1" onsubmit="return mySubmit()">
<!--    隱藏的資料使用hidden-->
    <input type="hidden" name="yyy" value="hello">

    <input type="number" id="a">+<input type="number" id="b"><button>=</button>
    <input type="text" id="c" disabled="disabled">

</form>

<script src="../js/jquery-3.4.1.min.js"></script>
<script>
    // /*方法1--------------------*/
    // function mySubmit() {
    //     $.post('a20200406-03-ajax-api.php',
    //         {a: document.querySelector('#a').value,
    //          b: $('#b').val
    //         }, function (data) {
    //         console.log(data);
    //         $('#c').val(data.c);
    //     }, 'json');
    //
    //     return false;
    // }

    /*方法2--------------------*/
    // 使用serialize form和a和b需要加name
    function mySubmit() {
        $.post('a20200406-03-ajax-api.php', $(document.form1).serialize(), function (data) {
            console.log(data);
            $('#c').val(data.c)
            },'json');

        return false;
    }

</script>
</body>
</html>
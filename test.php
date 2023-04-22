<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS相关测试学习</title>
    <!-- <script src="./js/test.js"></script> -->
    
</head>
<body >

<section style="text-align:center;">
    <form action="xxx.php" method="get" name="myform">
        <p><label> 汇款金额</label><input type="text" name="huikuanname" /></label></p>
        <p><label> 手续费</label> <input type="text" name="txtfee" readonly /></p>
        <p><input type="button" value="确 定"   onclick="calc()"/></p>
        <p><input type="button" value="判 断"  onclick="panduan()"></p>
        <p><input type="button" value="函数 "   onclick="hanshu()"> </p>


        <p><label for="加数A"></label><input type="text" name="Ajiashu"></p>
        <p><label for="加数B"></label><input type="text" name="Bjiashu"></p>
        <p><input type="button" value="计算和" onclick="jiashu()"></p>
    </form>

<script>

    function calc()
    {
    var money= document.myform.huikuanname.value;
    var fee=money*0.02;

    if (fee<=2){
        fee=2;
    }
    document.myform.txtfee.value=fee;
    }

    function panduan()
    {
        if(document.myform.huikuanname.value<=100) document.myform.txtfee.value="金额小于100";
      //  document.write("金额小于100");
    }

    function hanshu()
    {
        document.write("这是函数 hanshu()");
    }

    function jiashu()
    {
        var A=Number(document.myform.Ajiashu.value);
        var B=Number(document.myform.Bjiashu.value);

        document.myform.txtfee.value=A + B;

    }


</script>
  

</section>








  

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icon/font_icon/iconfont.css">
    <link rel="stylesheet" href="./css/sub_account.css">
<?php
include_once("top.php");
include_once("left-nav.php");
// include_once("admin-body-page.php");
?>
</head>
<body>
    
    <span class="sub_account_title"> 
        <span class="iconfont icon-shouye" ></span>
        子帐户管理
    </span>

    <div class="sub_account_search_key">关键词
        <form action="xxxxxx.php" method="post">            
                <input type="text" name="" id="" class="sub_account_input_search_key" placeholder=请输入消息或内容关键字>
                <input type="submit" value="查 询" class="submit">
                <input type="submit" value="增 加" class="submit">
                <input type="submit" value="删 除" class="submit">        
                <input type="checkbox" name="nopay" id="sub_account_nonever-pay" class="sub_account_nonever_pay_checkbox">
                <span class="sub_account_nonever_pay_checkbox_text">筛选一个月未充值</span>
      
        </form>
    </div>

    <!-- 内容显示区 -->
    <div class="sub_account_page_body_show">
        
    

        <div class="sub_account_body_excl_data_table">

            <table casss="sub_account_body_table_data">
                <tr casss="sub_account_body_table_data_tr" style=" font-family:SimHei;" >
                    <td><input type="checkbox" name="" id=""> </td>
                    <td>序号</td>
                    <td>类型</td>
                    <td>登录名</td>
                    <td>呢称</td>
                    <td>电话</td>
                    <td>最近充值</td>
                    <td>累计充值</td>
                    <td>操作11111111111111111</td>
                </tr>
                <?php
                for($i=1;$i<=25;$i++){
                 ?>

                <tr style="font-size: 18px;" <?php if($i%2==0)echo('class="background-color: red;"');?>>
                    <td><input type="checkbox" name="" id=""> </td>
                    <td> <?php echo $i ?></td>
                    <td>类型</td>
                    <td>登录名</td>
                    <td>呢称</td>
                    <td>电话</td>
                    <td>最近充值</td>
                    <td>累计充值</td>
                    <td>操作11111111111111111</td>

                </tr>

                <?php }?>




            </table>


        </div>

        <div class="sub_acc_body_excl_data_table_page_cho"></div>
    </div>
 

<?php
// include_once("data_show.php");
// include_once("buttom.php")
?>
    
</body>
</html>
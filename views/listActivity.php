<?php
//foreach ($data as $row);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <!--顯示活動頁面-->
        <table border="2" align="center" bordercolor="#6666FF">
            <tr bgcolor="#00a0dc"> 
                <td align="right"><font color="#ffffff">活動名稱</font></td>
                <td align="right"><font color="#ffffff">人數限制</font></td>
                <td align="right"><font color="#ffffff">可否攜伴</front></td>
                <td align="right"><font color="#ffffff">開始報名時間</font></td>
                <td align="right"><font color="#ffffff">截止報名時間</font></td>
                <td align="right"><font color="#ffffff">目前報名人數</font></td>
                <td align="right"><font color="#ffffff">活動連結</font></td>
            </tr>
            <!--讀取資料庫的活動資料並顯示出來-->
            <tr>
                <?php foreach($data as $data); ?>
                <td align="right"><?php $data['active']?></td>
                <td align="right"><?php $data['maxpeople']?></td>
                <td align="right"><?php $data['active']?></td>
                <td align="right"><?php $data['starttime']?></td>
                <td align="right"><?php $data['endtime']?></td>
                <td align="right"><?php $data['joinman']?></td>
                <td align="right"><a href="<?php $data['url'] ?>"></a><?php $data['url']?></td>
            </tr>
        </table>
        
    </body>
</html>
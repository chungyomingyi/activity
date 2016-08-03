<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <form action="" method="post" name="myForm">
            <table border="2" align="center" bordercolor="#6666FF">
                <tr bgcolor="#00a0dc"> 
                    <td align="right">活動名稱</td>
                    <td><input name="account" type="text" size="15"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right">人數限制(總數量)</td>
                    <td><input name="people" type="number" size="15"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right">是否可攜伴</td>
                    <td> 
                        <input type="radio" name="sex" value="可" checked>可 
                        <input type="radio" name="sex" value="不可">不可
                    </td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right">開始報名時間</td>
                    <td><input type="datetime-local" id="starttime" ></td>
                    </td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right">報名截止時間</td>
                    <td><input type="datetime-local" id="endtime"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="center" colspan="2"> 
                        <input type="submit" value="建立活動" >　
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
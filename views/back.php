<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <!--新增活動表單-->
        <form action="../Home/create" method="post" name="myForm">
            <table border="2" align="center" bordercolor="#6666FF">
                <tr bgcolor="#00a0dc"> 
                    <td align="right"><font color="#ffffff">活動名稱</font></td>
                    <td><input name="active" type="text" size="15"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right"><font color="#ffffff">人數限制(總數量)</font></td>
                    <td><input name="limit" type="number" size="15"></td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right"><font color="#ffffff">是否可攜伴</font></td>
                    <td> 
                        <input type="radio" name="friend" value="可" checked><font color="#ffffff">可</font> 
                        <input type="radio" name="friend" value="不可"><font color="#ffffff">不可</font>
                    </td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right"><font color="#ffffff">開始報名時間</font></td>
                    <td><input type="date" id="start" name="start"></td>
                    </td>
                </tr>
                <tr bgcolor="#00a0dc"> 
                    <td align="right"><font color="#ffffff">報名截止時間</font></td>
                    <td><input type="date" id="end" name="end"></td>
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
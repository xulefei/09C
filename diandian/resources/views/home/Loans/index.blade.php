<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    </head>
    <body  style="font-size:12px">
       <table width="974" border="1">
  <tr>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td width="256" height="110"><table width="257" height="112" border="1">
      <tr>
        <td width="100">总交易额</td>
        <td width="134"><label for="textfield"></label>
          <input name="textfield" type="text" id="textfield" value="123213"></td>
      </tr>
      <tr>
        <td>累积收益</td>
        <td><label for="textfield2"></label>
          <input name="textfield2" type="text" id="textfield2" value="1232"></td>
      </tr>
      <tr>
        <td>累积交易人数</td>
        <td><label for="textfield3"></label>
          <input name="textfield3" type="text" id="textfield3" value="123"></td>
      </tr>
      <tr>
        <td>交易成功率</td>
        <td><label for="textfield4"></label>
          <input name="textfield4" type="text" id="textfield4" value="1232"></td>
      </tr>
    </table></td>
    <td width="540"><table width="678" height="91" border="1">
      <tr>
        <td height="23">放贷消息列表 金额
        <form action="" method="get">
          <select name="je" id="select">
            <option value="1-100000000000">全部</option>
            <option value="100-1000">100-1000</option>
          </select>
            <label>
              <input type="radio" name="t" value="2"  class="t">
            有担保</label>

            <label>
              <input name="t" type="radio"  value="1" class="t" checked>
            无担保</label>
          <label for="radio">
            <input type="button" name="button" id="button" value="查询" >
          </label>
          </form></td>
        </tr>
        <tr>
        <td><table width="668" border="1">
          <tr>
            <td>借款人</td>
            <td>借款标题</td>
            <td>借款金额</td>
            <td>有无担保</td>
            <td>操作</td>
          </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
</table>

</body>
</html>

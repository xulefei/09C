<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>发布贷款信息</div>
        <form action="" method="post">
            标题:<input type="text" name="biaoti" /><br />
            借款金额:<input type="text" name="jine" /><br />
            借款期限:
            <select name="qixian">
                <option value="3">3个月</option>
                <option value="6">6个月</option>
                <option value="12">12个月</option>
                <option value="15">15个月</option>
                <option value="24">24个月</option>
            </select><br />
            还款方式:<input type="text" name="fanshi" /><br />
            描述:<textarea name="miaoshu" ></textarea><br />
            <input type="submit" value="提  交" />
        </form>
    </body>
</html>

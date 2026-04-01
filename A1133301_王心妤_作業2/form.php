<html>
<head>
    <meta charset="utf-8" />
    <title>2026一起fun暑假夏令營報名表單</title>
</head>
<body>
    <body style="background-color: lightyellow;">
    <form action="result.php" method="post">
    <h1 style="text-align: center;">2026一起fun暑假夏令營報名表單</h1>
    <p>姓名: <input type="text" placeholder="your name" name="nName" required><br></p>
    <p>出生年月日: <input type="date" placeholder="your birthday" name="birthday" required><br></p>
    <p>身分證字號: <input type="id" placeholder="your ID" name="nid" required><br></p>
    <p>
        年紀: <select name="nold">
        <option value="小一" selected>小一</option>
        <option value="小二">小二</option>
        <option value="小三">小三</option>
        <option value="小四">小四</option>
        <option value="小五">小五</option>
        <option value="小六">小六</option>
        </select>
    </p>
    <p>電話: <input type="phone" placeholder="your phone number" name="nphone" required><br></p>
    <p>Email: <input type="email" placeholder="your email" name="nemail" required><br></p>
    <p>
        性別:
        男<input type="radio" name="mGender" value="m">
        女<input type="radio" name="mGender" value="f"><br>
    </p>
    <p>緊急聯絡人: <input type="text" placeholder="your emergency_name" name="nemergency_name" required><br></p>
    <p>緊急聯絡人電話: <input type="text" placeholder="your emergency_phone" name="nemergency_phone" required><br></p>
    <p>通訊地址: <input type="text" name="naddress" required><br></p>
    <p>
        欲報名梯次:
        <input type="radio" name="mtired" value="第一梯次" required>第一梯次
        <input type="radio" name="mtired" value="第二梯次" required>第二梯次
        <input type="radio" name="mtired" value="第三梯次" required>第三梯次
        <input type="radio" name="mtired" value="第四梯次" required>第四梯次
        <input type="radio" name="mtired" value="第五梯次" required>第五梯次
        <input type="radio" name="mtired" value="第六梯次" required>第六梯次
    <p>
        繳費方式: <select name="npay">
        <option value="visa">信用卡</option>
        <option value="ibon">超商繳費(ibon)</option>
        <option value="atm">ATM轉帳繳費</option>
        </select>
    </p>
     <p>
        用餐習慣:
        <input type="radio" name="nfood" value="葷">葷
        <input type="radio" name="nfood" value="素">素<br>
    </p>
    <p>
        對於活動的意見:<br>
        <textarea name="comment" rows="10" cols="50"></textarea>
    </p>
    <p style="background-color: lightpink;">
        活動注意事項!!<br>
        1.報名後如因故無法參加，請於活動前 14 天通知，可全額退費。<br>
        2.活動前 7-13 天取消者退費 60%；活動前 3 天內取消恕不退費。<br>
        3.如遇天災或不可抗力因素導致營隊取消，將統一通知並全額退款。<br>
        4.主辦單位保有最終修改和變更以及取消本活動之權利。<br>
    
    </p>
        <input type="submit" value="繳交報名表">
        <input type="reset" value="重填">
    </p>

    </form>
</body>
</html>
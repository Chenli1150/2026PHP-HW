

<style>
    /* 簡單的美化，讓表單更易讀 */
    .camp-form {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        line-height: 2;
        background-color: #f9f9f9;
        font-family: sans-serif;
    }
    .form-group { margin-bottom: 15px; }
    label { font-weight: bold; }
    input[type="text"], input[type="password"], input[type="date"], input[type="email"], select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; /* 確保寬度包含 padding */
    }
    .btn-group { margin-top: 20px; }
    input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
    input[type="reset"] { background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
</style>

<div class="camp-form">
    <h2>🏕️ 夏令營報名表單</h2>
    <form action="0320HW-2.php" method="POST">
        
        <div class="form-group">
            <label>姓名：</label>
            <input type="text" placeholder="請輸入真實姓名" name="nName" required>
        </div>

        <div class="form-group">
            <label>設定查詢密碼：</label>
            <input type="password" name="nPassword" placeholder="以便日後查詢報名狀態" required>
        </div>

        <div class="form-group">
            <label>性別：</label>
            <label><input type="radio" name="nGender" value="m"> 男</label>
            <label><input type="radio" name="nGender" value="f" checked> 女</label>
        </div>

        <div class="form-group">
            <label>興趣愛好：</label><br>
            <label><input type="checkbox" name="nInterest[]" value="swim"> 游泳</label>
            <label><input type="checkbox" name="nInterest[]" value="novel"> 看小說</label>
            <label><input type="checkbox" name="nInterest[]" value="sleep"> 睡覺</label>
        </div>

        <div class="form-group">
            <label>居住地區：</label>
            <select name="nCity">
                <option value="Taipei" selected>台北市</option>
                <option value="New Taipei">新北市</option>
                <option value="Taichung">台中市</option>
                <option value="Other">其他地區</option>
            </select>
        </div>

        <div class="form-group">
            <label>出生年月日：</label>
            <input type="date" name="nBirthday" required>
        </div>

        <div class="form-group">
            <label>聯絡電子信箱：</label>
            <input type="email" name="nEmail" placeholder="example@email.com" required>
        </div>

        <div class="btn-group">
            <input type="submit" value="送出報名">
            <input type="reset" value="重新填寫">
        </div>
        
    </form>
</div>
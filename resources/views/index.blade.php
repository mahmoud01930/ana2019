<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج تسجيل</title>
</head>
<body>

    <form action="{{route('insert')}}" method="POST">
        @csrf
        <label for="username">اسم المستخدم:</label>
        <input type="text" id="username" name="username" required>

        <br><br>

        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

        <button type="submit">إرسال</button>
    </form>

</body>
</html>
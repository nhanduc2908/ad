<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
</head>
<body>
    <h1>Form thêm sinh viên</h1>

    <form method="POST" action="/students/store">
        @csrf
        <input type="text" name="name" placeholder="Tên"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>

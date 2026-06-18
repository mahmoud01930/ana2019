<!DOCTYPE html>
<html lang="ar">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <h2>جدول المستخدمين</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>pro</th>
            </tr>
        </thead>

        <tbody>
      @foreach($users as $user)
            <tr>
            <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('edit',$user->id)}}" role="button">EDIT</a>
                    <a class="btn btn-danger" href="#" role="button">DELET</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
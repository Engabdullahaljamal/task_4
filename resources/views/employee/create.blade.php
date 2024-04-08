<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('employee.save')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="employee name">
        <input type="text" name="email" placeholder=" email">
        <input type="text" name="job_title" placeholder="job title">
        <input type="text" name="password" placeholder="account password">
        <select name="is_admin" id="">

            <option value="0"> not admin</option>
            <option value="1"> admin</option>

        </select>
        <input type="submit">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('employee.update',$employee->id)}}" method="post">
        @csrf
        @method('PUT')
        <input value="{{$employee->name}}" type="text" name="name" placeholder="employee name">
        <input value="{{$employee->email}}" type="text" name="email" placeholder=" email">
        <input value="{{$employee->job_title}}" type="text" name="job_title" placeholder="job title">
        <input type="submit" value="update">
    </form>

</body>

</html>
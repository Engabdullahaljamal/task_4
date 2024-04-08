<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">JOB TITLE</th>
                <th scope="col">IS ADMIN</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($all_employees as $e)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$e->name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->job_title}}</td>
                <td>{{$e->is_admin}}</td>
                <td><a href="{{route('employee.edit',$e->id)}}"> Edit</a></td>
                <td><a href="{{route('employee.delete',$e->id)}}">Delete </a></td>

            </tr>

            @endforeach
        </tbody>
    </table>
    <a href="{{route('home')}}"> back to home</a>
    <br>
    <a href="{{route('employee.create')}}">create a new employee</a>
</body>

</html>
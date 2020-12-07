<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVC Training - Laravel: Department List</title>
</head>
<body>
    <p>For the list below, the database that was used for the department data is from the vvc_timekeeping database.</p>
    <h3>List of Departments</h3>
    <ol>
    @foreach ($depts as $dept)
        <li>{{ $dept->department_name }}</li>
    @endforeach
    </ol>
    <a href="/department">Home</a>
</body>
</html>
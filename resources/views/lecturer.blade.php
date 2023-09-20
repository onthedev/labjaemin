<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    @import url( {{asset('css/style.css')}});
    </style>
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('index') }}">Lecturer List</a></li>
        </ul>
    </nav>
    <header><h1>Lecturer Management</h1></header>
    <h2>Add Lecturer</h2>
    <form method="post" action="{{ route('insert') }}">
        @csrf
        <label for="lec_name">Lecturer name:</label><br>
        <input type="text" in="lec_name" name="lec_name"><br>

        <label for="email">Email:</label><br>
        <input type="text" in="email" name="email"><br>

        <label for="major">Major:</label><br>
        <select id="major" name="major"><br>
            <option name="cs">Computer Science</option>
            <option name="it">Information Technology</option>
            <option name="gis">Geo-informatics</option>
            <option name="ai">Artificial Intelligence</option>
            <option name="cyber">Cybersecurity</option>
        </select>
        <br><input class="subbtn" type="submit" value="add Lacturer">
    </form>

    <h2>Lecturer lsit ( {{ $count }} Lecturer)</h2>
<table border="1">
    <tr>
        <th>Lecturer ID</th>
        <th>Lecturer Name</th>
        <th>Email</th>
        <th>Major</th>
        <th>#</th>
    </tr>
    @foreach ($Lecturer as $d)
    <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->lec_name }}</td>
        <td>{{ $d->email }}</td>
        <td>{{ $d->major }}</td>
        <td><a href="{{ route('delete', ['id' => $count]) }}">delete</a>
        </td>
    </tr>
    @endforeach

</table>
</body>
</html>

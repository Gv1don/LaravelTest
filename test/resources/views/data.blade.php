<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <h1>Data page</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" value="1"> Выйти </button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Visit time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->ip }}</td>
                    <td>{{ $user->visit_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
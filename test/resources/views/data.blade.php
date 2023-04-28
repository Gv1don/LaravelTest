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
        <form action="{{ route('sortIP') }}" method="POST">
            @csrf
            <input type="hidden" name="sort_order" value="{{ $sort_order }}">
            <button type="submit" value="1"> Сортировать по IP </button>
        </form>
        <form action="{{ route('sortVisit') }}" method="POST">
            @csrf
            <input type="hidden" name="sort_order" value="{{ $sort_order }}">
            <button type="submit" value="1"> Сортировать по времени </button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ip</th>
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
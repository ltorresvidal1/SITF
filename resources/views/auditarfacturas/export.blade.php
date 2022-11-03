<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($errores as $error)
        <tr>
            <td>{{ $error->id_registro }}</td>
            <td>{{ $error->descripcionerror }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
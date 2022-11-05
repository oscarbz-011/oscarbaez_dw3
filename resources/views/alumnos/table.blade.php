<div class="table-responsive">
    <table class="table" id="alumnos-table">
        <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Email</th>
        <th>Profesion</th>
        <th>Genero</th>
        <th>Curso</th>
        <th>Fecha Nac</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>{{ $alumno->edad }}</td>
            <td>{{ $alumno->ci }}</td>
            <td>{{ $alumno->telefono }}</td>
            <td>{{ $alumno->direccion }}</td>
            <td>{{ $alumno->email }}</td>
            <td>{{ $alumno->profesion }}</td>
            <td>{{ $alumno->genero }}</td>
            <td>{{ $alumno->fecha_nac }}</td>
            <td>{{ $alumno->curso->nombre }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['alumnos.destroy', $alumno->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('alumnos.show', [$alumno->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('alumnos.edit', [$alumno->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

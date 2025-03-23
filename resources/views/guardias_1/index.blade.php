{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <form action="{{ route('generar.rotaciones') }}" method="POST" class="mb-3">
            @csrf
            <button type="submit" class="btn btn-primary">Generar Rotaciones hasta Julio</button>
        </form>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif


        <form method="post" action="{{ route('guardias.index') }}">

            @csrf
            <label for="name">Mes:</label>
            <select name="mes">
                <option value="">Elige mes:</option>
                <option value="septiembre">Septiembre</option>
                <option value="octubre">Octubre</option>
                <option value="noviembre">Noviembre</option>
                <option value="diciembre">Diciembre</option>
                <option value="enero">Enero</option>
                <option value="febrero">Febrero</option>
                <option value="marzo">Marzo</option>
                <option value="abril">Abril</option>
                <option value="mayo">Mayo</option>
                <option value="junio">Junio</option>

              </select>
            <!--ponemos old porque en el caso que carguemos el formulario y diera error habría que volver a introducir todos los campos, así recuerda o guarda los campos que están bien-->
         {!! $errors->first('name', '<small>:message</small><br>' )!!}  <!-- así especificamos los errores debajo-->

          <button type="submit">Enviar</button>
    </form>


        <h2>Horario de Guardias - {{ \Carbon\Carbon::now()->translatedFormat('F Y') }}
        </h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>Profesores</th>
                    <th>Zonas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guardias as $horarioId => $grupo)

                @php
                $horario = $grupo->first()->horario; // Todas las filas del grupo tienen el mismo horario
            @endphp
            <tr>
                <td>{{ $horario->hora_inicio }} - {{ $horario->hora_fin }}</td>
                <td>
                    <ul>
                        @foreach($grupo as $guardia)
                            <li>{{ $guardia->profesor->nombre }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <ul>
                        @foreach($grupo as $guardia)
                            <li>{{ $guardia->zona->nombre }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>

        @endforeach

            </tbody>
        </table>
    </div>
{{-- @endsection --}}

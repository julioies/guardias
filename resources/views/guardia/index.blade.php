@extends('layouts.app')

@section('template_title')
    Guardias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Guardias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('guardias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Profesor Id</th>
									<th >Horario Id</th>
									<th >Zona Id</th>
									<th >Mes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guardias as $guardia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $guardia->profesor_id }}</td>
										<td >{{ $guardia->horario_id }}</td>
										<td >{{ $guardia->zona_id }}</td>
										<td >{{ $guardia->mes }}</td>

                                            <td>
                                                <form action="{{ route('guardias.destroy', $guardia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('guardias.show', $guardia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('guardias.edit', $guardia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $guardias->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('template_title')
    Individual
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Individual') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('individuals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Game Id</th>
										<th>Celular</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($individuals as $individual)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $individual->nombre }}</td>
											<td>{{ $individual->game_id }}</td>
											<td>{{ $individual->celular }}</td>
											<td>{{ $individual->correo }}</td>

                                            <td>
                                                <form action="{{ route('individuals.destroy',$individual->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('individuals.show',$individual->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('individuals.edit',$individual->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $individuals->links() !!}
            </div>
        </div>
    </div>
@endsection

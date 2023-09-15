@extends('layouts.app-master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Bodegas</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form class="form-horizontal" action="{{ route('bodega.mod') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    @foreach ($bodega as $bodega)
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="bodega" class="col-sm-2 col-form-label">Bodega</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="bodega" name="bodega"
                                                        value="{{ $bodega->bodega }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="estado" id="estado">
                                                        @if ($bodega->estado === 1)
                                                            <option value="1">Activa</option>
                                                            <option value="2">Inactiva</option>
                                                        @else
                                                            <option value="2">Inactiva</option>
                                                            <option value="1">Activa</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" id="id" name="id"
                                            value="{{ $bodega->id }}">
                                    @endforeach
                                </div>
                                <div class="card-footer pull-right">
                                    <button type="button" class="btn btn-default"
                                        onclick="location.href='/bodegas'">Cerrar</button>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

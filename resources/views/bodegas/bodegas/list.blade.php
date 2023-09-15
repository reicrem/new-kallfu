@extends('layouts.app-master')

@section('css')
    <link href="{{ asset('plugins/datatables/datatables.css') }}" rel="stylesheet">
@endsection

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
                    <div class="col-md-12">
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
                            <div class="card-body">
                                <table id="tb_bodegas" class="table table-hover shadow" style="width:100%">
                                    <thead>
                                        <tr class="bg-success">
                                            <th>CODIGO</th>
                                            <th>BODEGA</th>
                                            <th>ESTADO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bodega as $bodega)
                                            <tr ondblclick="vbode({{ $bodega->id }});">
                                                <td>{{ $bodega->codigo }}</td>
                                                <td>{{ $bodega->bodega }}</td>
                                                <td>
                                                    @if ($bodega->estado === 1)
                                                        Activa
                                                    @else
                                                        Inactiva
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@section('js')
    <!-- DataTables -->
    <script type="text/javascript" src="{{ asset('plugins/datatables/datatables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/tableexport/tableExport.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/tableexport/jquery.base64.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/tableexport/html2canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/tableexport/jspdf/libs/sprintf.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/tableexport/jspdf/jspdf.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/tableexport/jspdf/libs/base64.js') }}"></script>

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/kallfu.js') }}"></script>
@endsection
@endsection

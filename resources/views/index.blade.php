@extends('master')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
        <h4 class="text-center">Multi dropdown</h4>
    </div>

    <div class="panel-body">
        <div class="col-md-3">
            <label class="form-label">Pais</label>
            <select class="form-control" name="pais" id="pais">
                <option value="0" disabled selected>Selecione um pais</option>
                @foreach ( $paises as $pais)
                    <option value="{{ $pais->id }}">{{ $pais->pais }}</option>                    
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label class="form-label">Estado</label>
            <select class="form-control" name="estado" id="estado">
            </select>
        </div>

        <div class="col-md-3">
            <label class="form-label">NIP</label>
            <input class="form-control" type="text" id="nip" name="nip"/>
        </div>   
        
        <div class="col-md-3">
            <label class="form-label">CPF</label>
            <input class="form-control" type="text" id="cpf" name="cpf"/>
        </div>       


    </div>
</div>
@endsection

@section('scripts')
<script>

    $(document).ready(function(){
        
        var $seuNip = $("#nip");
        $seuNip.mask('00.0000.00', {reverse: true});

        var $seuCpf = $("#cpf");
        $seuCpf.mask('000.000.000-00', {reverse: true});

        $("#pais").on('change', function () {
            var id = $(this).val();
            $('#estado').empty();
            $('#estado').append(`<option value="0" disabled selected>Carregando...</option>`);
            $.ajax({
                type: 'get',
                url: 'pega_estados/' + id,
                success: function (response) {
                    var response = JSON.parse(response);   
                    $('#estado').empty();
                    $('#estado').append(`<option value="0" disabled selected>Selecione um estado</option>`);
                    response.forEach(element => {
                        $('#estado').append(`<option value="${element['id']}">${element['estado']}</option>`);
                    });
                }
            });
        });
    });

</script>    
@endsection
@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')

@if ($response->status == "DENIED")
    <div class="card center red darken-1" id='cartaopago'>
        <div class="card-content white-text">
        <span class="card-title">{{$response->description}}</span>
        <p>{{$response->description_detail}}.</p>

            <br>
            <a href='javascript:history.go(-1)' class="waves-effect waves-light btn blue">VOLTAR</a>
        </div>
    </div>
@endif
@if ($response->status != "DENIED")
    <div class="card center green darken-1" id='cartaopago'>
        <div class="card-content white-text">
            <span class="card-title">Pagamento Confirmado.</span>
            <p>Agradecemos seu pagamento.</p>

            <br>
            <a class="center blue btn-small waves-effect waves-light" href='{{url('/')}}'>Voltar para Página Inicial</a>
        </div>
    </div>

    <div class="card center orange darken-1" id='cartaoaguarde'>
    <div class="card-content white-text">
        <span class="card-title">Aguarde...</span>
        <p>Estamos confirmando seu pagamento.</p>

        <br>
        <a class="center blue btn-small waves-effect waves-light" href='{{url('/')}}'>Voltar para Página Inicial</a>
    </div>
    </div>
@endif
<input type='hidden' id='idinscri' value='{{$response->order_id}}'>

<script>
    $(document).ready(function() {
        function getData() {
            let id = $('#idinscri').val();
            let url = "{{url('pagamento/confirma/')}}"

            $.ajax({
                url: url + '/'+ id,
                type: "get",
                dataType: 'html',
                success: function (res) {
                    $('#cartaopago').hide();
                    $('#cartaoaguarde').show();
                    if (res == 1) {
                        $('#cartaoaguarde').hide();
                        $('#cartaopago').show();
                    }
                    console.log(res);
                },
                complete: function(){
                    setTimeout(getData, 10000);
                }
            });
        }
        getData();
    });

</script>

@endsection
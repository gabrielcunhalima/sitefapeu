@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')

{{-- @php dd($response); @endphp --}}

<input type='hidden' name='id_inscricao' id='id_inscricao' value='{{$dados['id_inscricao']}}'>

<div class="card center orange darken-1" id='cartaoaguarde' hidden>
    <div class="card-content white-text">
        <span class="card-title">Aguardando Pagamento</span>
        <p>Estamos aguardando a confirmação do seu pagamento.</p>

        <br>
        <a class="center blue btn-small waves-effect waves-light" href='{{url('/')}}'>Voltar para Página Inicial</a>
    </div>
</div>

<div class="card center green darken-1" id='cartaopago' hidden>
    <div class="card-content white-text">
        <span class="card-title">Pagamento Confirmado.</span>
        <p>Agradecemos seu pagamento.</p>

        <br>
        <a class="center blue btn-small waves-effect waves-light" href='{{url('/')}}'>Voltar para Página Inicial</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#cartaoaguarde').show();
        function getData() {
            let id = $('#id_inscricao').val();
            let url = "{{url('pagamento/confirma/')}}"
            
            $.ajax({
                url: url + '/'+ id,
                type: "get",
                dataType: 'html',
                success: function (res) {
                    $('#cartaopago').hide();
                    if (res == 1) {
                        $('#cartaoaguarde').hide();
                        $('#cartaopago').show();
                    }
                    console.log(res);
                },
                complete: function(){
                    setTimeout(getData, 2500);
                }
            });
        }
        getData();
    });
</script>

@endsection
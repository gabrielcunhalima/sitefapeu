@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')

{{-- @php dd($response); @endphp --}}

<div class="card center green darken-1" id='cartaopago'>
    <div class="card-content white-text">
        <span class="card-title">Pagamento Confirmado.</span>
        <p>Agradecemos seu pagamento.</p>

        <br>
        <a class="center blue btn-small waves-effect waves-light" href='{{url('/')}}'>Voltar para Página Inicial</a>
    </div>
</div>

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
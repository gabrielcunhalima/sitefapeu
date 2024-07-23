@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')

<input type='hidden' name='id_inscricao' id='id_inscricao' value='{{$dados['id_inscricao']}}'>
<div class="card center green darken-1" id='pixpago'>
    <div class="card-content white-text">
        <span class="card-title">Pagamento Confirmado.</span>
        <p>Agradecemos seu pagamento.</p>

        <br>
        <a class="center blue btn-small waves-effect waves-light" href='{{url('/')}}'>Voltar para Página Inicial</a>
    </div>
</div>

<script>

    document.getElementById('copiar').addEventListener('click',clipboardCopy);

    async function clipboardCopy() {
        let text = document.querySelector('#codepix').value;
        navigator.clipboard.writeText(text);
    }

    $(document).ready(function() {
        $('#pixpago').hide();
        function getData() {
            let id = $('#id_inscricao').val();
            let url = "{{url('pagamento/confirma/')}}"

            $.ajax({
                url: url + '/'+ id,
                type: "get",
                dataType: 'html',
                success: function (res) {
                    $('#pixpago').hide();
                    if (res == 1) {
                        $('#pix').hide();
                        $('#pixpago').show();
                    }
                },
                complete: function(){
                    setTimeout(getData, 10000);
                }
            });
        }
        getData();
    });

    setTimeout( function() {
        window.location.reload(1);
    }, 180000); //3minutos
    

</script>

@endsection
@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')
<div class="page-container">
    <h3 class='center'>Pagamento por PIX</h3>
    <div class="row"> 
        <input type="hidden" name="valorInsc" class="form-control" id="valorInsc" value='{{$dados['valorInsc']}}'>
        <input type="hidden" name="id_inscricao" class="form-control" id="id_inscricao" value='{{$dados['id_inscricao']}}'>
        <input type="hidden" name="codsessao" class="form-control" id="codsessao" value='{{$dados['codsessao']}}'>
        {{-- <input type="hidden" name="cpf" class="form-control kitweb" value='{{$dados['cpf']}}'>
        <input type="hidden" name="modalidade" class="form-control" id="modalidade" value='{{$dados['modalidade']}}'>
        <input type="hidden" name="evento" class="form-control" id="evento" value='{{$dados['evento']}}'> --}}
        
        
    @php
        //    dd($dados,$dadosinsc);
        $name = explode(" ",$dadosinsc['nomeCompleto']);
        $firstname = $name[0];
        $lastname = $name[count($name)-1];
        $trataFone = preg_replace("/[\-\(\)( )]+/","", $dadosinsc->telefone);
        
        $trataValor = explode(".",$infoinsc['valorInsc']);
        if (count($trataValor) == 1) {
            $infoinsc['valorInsc'] = $infoinsc['valorInsc'] . '.00';
        } else {
            if (strlen($trataValor[1]) == 1) {
                $infoinsc['valorInsc'] = $infoinsc['valorInsc'] . '0';
            }
        }
        $valor = $infoinsc['valorInsc'];
        $urlRetorno = "https://eventos.fapeu.com.br/eventos/public/pagamento/aguardando/".$dados['id_inscricao'];

    @endphp
    <center>
        <a class="btn waves-effect waves-light btnlarge pay-button-getnet">MOSTRAR QRCORDE</a>
            <script async src="https://checkout.getnet.com.br/loader.js"
                            data-getnet-sellerid="{{$dados['seller_id']}}"
                            data-getnet-payment-methods-disabled = '["boleto","debito","credito","qr-code"]'
                            data-getnet-token="Bearer {{$dados['authtoken']}}"
                            data-getnet-amount="{{$valorInsc}}"
                            data-getnet-customerid="{{$dadosinsc['id']}}"
                            data-getnet-orderid="{{$dadosinsc['id']}}"
                            data-getnet-button-class="pay-button-getnet"
                            data-getnet-installments="1"
                            data-getnet-customer-first-name="{{$firstname}}"
                            data-getnet-customer-last-name="{{$lastname}}"
                            data-getnet-customer-document-type="CPF"
                            data-getnet-customer-document-number="{{$dadosinsc['cpf']}}"
                            data-getnet-customer-email="{{$dadosinsc['email']}}"
                            data-getnet-customer-phone-number="{{$trataFone}}"
                            data-getnet-customer-address-street="Sem Rua"
                            data-getnet-customer-address-street-number="0"
                            data-getnet-customer-address-complementary=""
                            data-getnet-customer-address-neighborhood="Sem Bairro"
                            data-getnet-customer-address-city="{{$dadosinsc['cidade']}}"
                            data-getnet-customer-address-state="{{$dadosinsc['uf']}}"
                            data-getnet-customer-address-zipcode="88040370"
                            data-getnet-customer-country="{{$dadosinsc['pais']}}"
                            data-getnet-shipping-address='[{ "first_name": "{{$firstname}}", 
                                                            "name": "{{$dadosinsc['nomeCompleto']}}", 
                                                            "email": "{{$dadosinsc['email']}}", 
                                                            "phone_number": "{{$trataFone}}", 
                                                            "shipping_amount": 0, 
                                                            "address": { 
                                                                    "street": "Sem Rua", 
                                                                    "complement": "", 
                                                                    "number": "0", 
                                                                    "district": "Sem Bairro", 
                                                                    "city": "{{$dadosinsc['cidade']}}", 
                                                                    "state": "{{$dadosinsc['uf']}}", 
                                                                    "country": "{{$dadosinsc['pais']}}", 
                                                                    "postal_code": "88040370"}}]'
                            data-getnet-url-callback="{{$urlRetorno}}"
                            data-getnet-pre-authorization-credit=""
                            data-getnet-soft-descriptor="EVENTO*FAPEU*"	
>
                            
            </script>
            <!-- Aqui adicionamos o iframe com o ID getnetIfrm -->
    <iframe id="getnetIfrm" src="https://checkout.getnet.com.br/loader.js" hidden></iframe>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var getnetIfrm = document.getElementById("getnetIfrm");

        getnetIfrm.addEventListener('load', function(ev) { 
            // Funções compatíveis com IE e outros navegadores
            var eventMethod = (window.addEventListener ? 'addEventListener' : 'attachEvent');
            var eventer = window[eventMethod];
            var messageEvent = (eventMethod === 'attachEvent') ? 'onmessage' : 'message';

            // Ouvindo o evento do loader
            eventer(messageEvent, function iframeMessage(e) {
                var data = e.data || '';

                switch (data.status || data) {
                    // Corfirmação positiva do checkout.
                    case 'success':
                        console.log('Transação realizada.');
                        break;

                    // Notificação de que o IFrame de checkout foi fechado a aprovação.
                    case 'close':
                        console.log('Checkout fechado.'); 
                        break; 

                    // Notificação que um boleto foi registrado com sucesso 
                    case 'pending': 
                        console.log('Boleto registrado e pendente de pagamento'); 
                        console.log(data.detail); 
                        break;      

                    // Notificação que houve um erro na tentativa de pagamento 
                    case 'error': 
                        console.warn(data.detail.message); 
                        break;

                    // Ignora qualquer outra mensagem 
                    default:
                        break;
                }
            }, false);
        });
    });
</script>
        </center>
    </div>
</div>


<script>
    function onlyNumber(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }  

    function openGetNet() {
        console.log('aa987a');
    }
    
</script>
@endsection




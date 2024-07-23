@extends('layout.header')
@section('css','../css/app.css')
@section('title','[FAPEU] Inscrição em eventos')

@section('conteudo')
<center>
    <span>Clique abaixo para emitir o boleto</span>
<form method="post" action="https://shopline.itau.com.br/shopline/shopline.asp" onsubmit="carregabrw();" target="SHOPLINE">
    <input type="hidden" name="DC" value="<?php echo $dados; ?>">
    <button type='submit' class='' name='shopline'><img src="{{url('assets/itau.png')}}" height="100px"></button>
</form>

<script language='Javascript'>
function carregabrw() {
window.open('','SHOPLINE',"toolbar=yes,menubar=yes,resizable=yes,status=no,scrollbar=yes,width=780,height=485");
}
</script>
</center>

@endsection
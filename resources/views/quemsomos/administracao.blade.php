@extends('layout.header')
@section('title',' Administração')

@section('conteudo')
<style>
.marble-bg {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.02' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.3'/%3E%3C/svg%3E"),
    linear-gradient(135deg,rgb(241, 234, 195) 0%,rgb(241, 234, 195) 100%);
    
}

</style>

<div class="container">
    <!-- conselho curador -->
    <div class="card shadow-sm mb-5 border-0 overflow-hidden">
        <div class="card-header bg-verde4 text-white py-3">
            <h3 class="mb-0 fw-bold">Conselho Curador</h3>
            <p class="mb-0 mt-1 text-white-50">Mandato 4 anos | Gestão 01/10/2024 - 30/09/2028</p>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4" style="width:50%;">Nome</th>
                            <th class="px-4" style="width:50%;">Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4">Mario Steindel</td>
                            <td class="px-4">Presidente</span></td>
                        </tr>
                        <tr>
                            <td class="px-4">Alexandre Verzani Nogueira</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Fabrício Augusto Menegon</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Janine da Silva Alves Bello</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Jovelino Falqueto</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Roberto Ferreira de Melo</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Valdir Rosa Correia</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Viviane Maria Heberle</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Alison Fiuza da Silva</td>
                            <td class="px-4">Suplente</td>
                        </tr>
                        <tr>
                            <td class="px-4">Augusto Humberto Bruciapaglia</td>
                            <td class="px-4">Suplente</td>
                        </tr>
                        <tr>
                            <td class="px-4">Irineu Afonso Frey</td>
                            <td class="px-4">Suplente</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- conselho fiscal-->
    <div class="card shadow-sm mb-5 border-0 overflow-hidden">
        <div class="card-header bg-verde4 text-white py-3">
            <h3 class="mb-0 fw-bold">Conselho Fiscal</h3>
            <p class="mb-0 mt-1 text-white-50">Mandato 4 anos | Gestão 02/08/2021 – 01/8/2025</p>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4" style="width:50%;">Nome</th>
                            <th class="px-4" style="width:50%;">Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4">Sinesio Stefano Dubiela Ostroski</td>
                            <td class="px-4">Presidente</span></td>
                        </tr>
                        <tr>
                            <td class="px-4">João Santana</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Silvana de Gaspari</td>
                            <td class="px-4">Titular</td>
                        </tr>
                        <tr>
                            <td class="px-4">Celso Spada</td>
                            <td class="px-4">Suplente</td>
                        </tr>
                        <tr>
                            <td class="px-4">Paulo Roberto Medeiros dos Santos</td>
                            <td class="px-4">Suplente</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- diretoria executiva -->
    <div class="card shadow-sm mb-5 border-0 overflow-hidden">
        <div class="card-header bg-verde4 text-white py-3">
            <h3 class="mb-0 fw-bold">Diretoria Executiva</h3>
            <p class="mb-0 mt-1 text-white-50">Mandato 4 anos | Gestão 25/09/2021 – 24/09/2025</p>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4" style="width:50%;">Nome</th>
                            <th class="px-4" style="width:50%;">Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4">Felício Wessling Margotti</td>
                            <td class="px-4">Diretor Presidente</td>
                        </tr>
                        <tr>
                            <td class="px-4">Wilson Erbs</td>
                            <td class="px-4">Diretor de Projetos</td>
                        </tr>
                        <tr>
                            <td class="px-4">Julio Felipe Szeremeta</td>
                            <td class="px-4">Diretor Financeiro</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- superintendencia -->
    <div class="card shadow-sm mb-5 border-0 overflow-hidden">
        <div class="card-header bg-verde4 text-white py-3">
            <h3 class="mb-0 fw-bold">Superintendência</h3>
            <p class="mb-0 mt-1 text-white-50">Mandato Indeterminado</p>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4" style="width:50%;">Nome</th>
                            <th class="px-4" style="width:50%;">Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4">Fábio Silva de Souza</td>
                            <td class="px-4">Superintendente</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- galeria antigos diretores-->
    <div class="shadow rounded-2 p-5 border text-center mt-5 marble-bg">
        <h3 class="font-weight-bold mb-5 text-dourado"><b class="rounded-pill bg-white p-2 px-5">Galeria dos antigos Diretores Executivos</b></h3>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente bg-transparente"><img src="images/AntigosConselheiros/Cópia de Colombo Machado Salles_gestão 21091977 a 07121977.jpg" class="img-fluid" alt="Colombo Machado Salles">
            <h5 class="mt-3">Colombo Machado Salles</h5>
            <p class="text-muted">Mandato: 21/09/1977 a 07/12/1977</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de Paulino Vandresen_gestão 07121977 a 31031978.jpg" class="img-fluid" alt="Paulino Vandresen">
            <h5 class="mt-3">Paulino Vandresen</h5>
            <p class="text-muted">Mandato: 07/12/1977 a 31/03/1978</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de Ignácio Ricken_gestão 31031978 a 07061983.jpg" class="img-fluid" alt="Ignácio Ricken">
            <h5 class="mt-3">Ignácio Ricken</h5>
            <p class="text-muted">Mandato: 31/03/1978 a 07/06/1983</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de Nelson Moritz Laporta_gestão 07061983 a 05121983.jpg" class="img-fluid" alt="Nelson Moritz Laporta">
            <h5 class="mt-3">Nelson Moritz Laporta</h5>
            <p class="text-muted">Mandato: 07/06/1983 a 05/12/1983</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de Antônio Diomário de Queiroz_gestão 05121983 a 17031986.jpg" class="img-fluid" alt="Antônio Diomário de Queiroz">
            <h5 class="mt-3">Antônio Diomário de Queiroz</h5>
            <p class="text-muted">Mandato: 05/12/1983 a 17/03/1986</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de José Carlos Zanini_Gestão 17031986 a 04061991.jpg" class="img-fluid" alt="José Carlos Zanini">
            <h5 class="mt-3">José Carlos Zanini</h5>
            <p class="text-muted">Mandato: 17/03/1986 a 04/06/1991</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de Rodolfo Joaquim Pinto da Luz_gestão 04061991 a 13051992.jpg" class="img-fluid" alt="Joaquim Pinto da Luz">
            <h5 class="mt-3">Rodolfo Joaquim Pinto da Luz</h5>
            <p class="text-muted">Mandato: 04/06/1991 a 13/05/1992</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de Edemar Roberto Andreatta_gestão 13051992 a 10051996.jpg" class="img-fluid" alt="Edemar Roberto Andreatta">
            <h5 class="mt-3">Edemar Roberto Andreatta</h5>
            <p class="text-muted">Mandato: 13/05/1992 a 10/05/1996</p>
            </div>
            <div class="col-md-3 col-sm-12 card m-2 bg-transparente"><img src="images/AntigosConselheiros/Cópia de Carlos Fernando Miguez_gestão 10051996 a 09032009.jpg" class="img-fluid" alt="Carlos Fernando Miguez">
            <h5 class="mt-3">Carlos Fernando Miguez</h5>
            <p class="text-muted">Mandato: 10/05/1996 a 09/03/2009</p>
            </div>
            <div class="col-md-8 col-sm-12"><img src="images/AntigosConselheiros/Cópia de Galeria Diretoria Executiva - Cleo, Gilberto, Elizbete, Momm, Abelardo.jpg" class="img-fluid" alt="Diretoria Executiva - Cleo, Gilberto, Elizbete, Momm, Abelardo"></div>
            <div class="col-12 mt-2"><img src="images/AntigosConselheiros/Galeria Diretoria Executiva - Gestão 2017 2021.jpg" class="img-fluid" alt="Diretoria Executiva - Gestão 2017 2021"></div>
        </div>
    </div>
</div>

@endsection
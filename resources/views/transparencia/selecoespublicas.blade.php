@extends('layout.header')
@section('title', 'FAPEU Novo')

@section('inicio')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="font-weight-bold text-preto">Formulários de Processos</h1>
    </div>
</div>

@endsection

@section('conteudo')

<div class="container" style="font-size:16px;">
    <table class="table table-bordered">
        <thead class="bg-verdeescuro text-white">
            <tr>
                <th scope="col">Ordem</th>
                <th scope="col">Processo</th>
                <th scope="col">Orgão</th>
                <th scope="col">Projeto</th>
                <th scope="col">Contrato/Convênio</th>
                <th scope="col">Seleção Pública</th>
                <th scope="col">Data Abertura*</th>
                <th scope="col">Objeto</th>
                <th scope="col">Resultado</th>
                <th scope="col">Data Publicação</th>
            </tr>
        </thead>
        <tbody>
            <!-- Entradas de 150 a 185 -->
            <tr>
                <td>150</td>
                <td></td>
                <td>UFSC</td>
                <td>1452016</td>
                <td>255/2016</td>
                <td>092/2021</td>
                <td>08/10/2021</td>
                <td>Contratação de serviços de abertura de valas, limpeza de canais e terraplenagem do fundo de viveiros da Fazenda Experimenta Yakult.</td>
                <td>Ata de Abertura, Ata de Julgamento, Aviso de Resultado</td>
                <td>01/10/2021</td>
            </tr>
            <tr>
                <td>151</td>
                <td></td>
                <td>UFSC</td>
                <td>0392020</td>
                <td>66/2020</td>
                <td>094/2021</td>
                <td>09/12/2021</td>
                <td>Aquisição de equipamentos e componentes de informática.</td>
                <td>Ata de Abertura, Aviso de Resultado</td>
                <td>01/12/2021</td>
            </tr>
            <tr>
                <td>152</td>
                <td></td>
                <td>UFSC</td>
                <td>0172021</td>
                <td>250/2020</td>
                <td>152/2021</td>
                <td>05/01/2022</td>
                <td>Contratação de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA.</td>
                <td></td>
                <td>23/12/2021</td>
            </tr>
            <tr>
                <td>153</td>
                <td></td>
                <td>UFSC</td>
                <td>0692020</td>
                <td>139/2020</td>
                <td>120/2021</td>
                <td>29/12/2021</td>
                <td>Contratação de serviços de reforma e manutenção do Laboratório de Educação em Rede - LED, localizado na Universidade Federal de Santa Catarina - Florianópolis/SC.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>07/01/2022</td>
            </tr>
            <tr>
                <td>154</td>
                <td></td>
                <td>UFSC</td>
                <td>0542020</td>
                <td>342/2019</td>
                <td>042/2022</td>
                <td>17/03/2022</td>
                <td>Contratação de serviços para levantamento de recursos específicos da sociobiodiversidade ligados à Acolhida na Colônia - Desenvolvimento de roteiros integrados de agroturismo com foco em produtos e serviços da sociobiodiversidade.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>09/03/2022</td>
            </tr>
            <tr>
                <td>155</td>
                <td></td>
                <td>UFSC</td>
                <td>0172021</td>
                <td>250/2020</td>
                <td>076/2022</td>
                <td>22/04/2022</td>
                <td>Contratação de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association).</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>13/04/2022</td>
            </tr>
            <tr>
                <td>156</td>
                <td></td>
                <td>UFSC</td>
                <td>0232021</td>
                <td>032/2021</td>
                <td>077/2022</td>
                <td>26/04/2022</td>
                <td>Contratação de serviços de comunicação de dados (SCD), na forma de instalação, manutenção e operação, com dupla abordagem, e de vazão assegurada, de 10 Gbps (Dez gigabits por segundo) em ambas as abordagens, interligando dois pontos na cidade de Florianópolis/SC, pelo período de 12 (doze) meses.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>14/04/2022</td>
            </tr>
            <tr>
                <td>157</td>
                <td></td>
                <td>BNDES</td>
                <td>0222021</td>
                <td>078/2021</td>
                <td>075/2022</td>
                <td>02/05/2022</td>
                <td>Aquisição de 01 (um) veículo automotivo do tipo pick-up, 0 Km (zero quilometro).</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>25/04/2022</td>
            </tr>
            <tr>
                <td>158</td>
                <td></td>
                <td>UFSC</td>
                <td>0692020</td>
                <td>139/2020</td>
                <td>091/2022</td>
                <td>09/05/2022</td>
                <td>Aquisição de equipamentos (04 (quatro) Smart TV 70"; 04 (quatro) Nobreak 6000VA; 03 (três) Tele Prompter).</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>02/05/2022</td>
            </tr>
            <tr>
                <td>159</td>
                <td></td>
                <td>FCEE</td>
                <td>0662021</td>
                <td>36/FCEE/2021</td>
                <td>098/2022</td>
                <td>10/05/2022</td>
                <td>Contratação de empresa especializada em gestão de comunicação para a prestação de serviços de produção, captação, edição, finalização com experiência em televisão para transmissão de áudio e vídeo em streaming e via satélite.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>03/05/2022</td>
            </tr>
            <tr>
                <td>160</td>
                <td></td>
                <td>GIZ</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>083/2022 <br>QUESTIONAMENTO I</td>
                <td>16/05/2022</td>
                <td>Contratação de serviços de fabricação e instalação de estrutura metálica, com fornecimento de material, para a edificação do Projeto de Expansão do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, localizada em Florianópolis/SC.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>09/05/2022</td>
            </tr>
            <tr>
                <td>161</td>
                <td></td>
                <td>UFSC</td>
                <td>0752021</td>
                <td>082/2021</td>
                <td>096/2022</td>
                <td>10/06/2022</td>
                <td>Aquisição de 01 (um) resfriador de água (chiller), com capacidade de 60.000 Kcal/h – 20 TR.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>03/06/2022</td>
            </tr>
            <tr>
                <td>162</td>
                <td></td>
                <td>FAPEU</td>
                <td>FAPEU</td>
                <td>S/Nº</td>
                <td>120/2022</td>
                <td>13/06/2022</td>
                <td>Compromisso de fornecimento de passagens rodoviárias nacionais, compreendendo serviços de cotação de valores, reserva, emissão, marcação/remarcação, desdobramento, substituição, revalidação, cancelamento, fornecimento e endosso.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>06/06/2022</td>
            </tr>
            <tr>
                <td>163</td>
                <td></td>
                <td>IFC</td>
                <td>0922021</td>
                <td>IFC 207/2021</td>
                <td>128/2022</td>
                <td>01/07/2022</td>
                <td>Aquisição de 01 (um) trator agrícola novo, com capota e carregador frontal.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>24/06/2022</td>
            </tr>
            <tr>
                <td>164</td>
                <td></td>
                <td>UFSC</td>
                <td>0752021</td>
                <td>082/2021</td>
                <td>130/2022</td>
                <td>01/07/2022</td>
                <td>Contratação de serviços de manutenção preventiva, em caráter mensal, dos sistemas elétricos do Laboratório de Moluscos Marinhos (LMM), da Universidade Federal de Santa Catarina, pelo período de 12 (doze) meses.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>14/07/2022</td>
            </tr>
            <tr>
                <td>165</td>
                <td></td>
                <td>UFSC</td>
                <td>0752021</td>
                <td>082/2021</td>
                <td>129/2022</td>
                <td>29/07/2022</td>
                <td>Contratação de serviços de manutenção preventiva, em caráter mensal, dos equipamentos responsáveis pela climatização das diferentes áreas e setores do Laboratório de Moluscos Marinhos (LMM), da Universidade Federal de Santa Catarina (UFSC), pelo período de 12 (doze) meses.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>22/07/2022</td>
            </tr>
            <tr>
                <td>166</td>
                <td></td>
                <td>PETROBRAS</td>
                <td>0252021</td>
                <td>Petrobras 0050.0117882.21.9</td>
                <td>147/2022</td>
                <td>12/08/2022</td>
                <td>Contratação de serviços especializados para o desenvolvimento e implementação de módulo de potência e periféricos para soldagem de pinos por arco retraído aplicados ao projeto de P&D Processo Stud Welding para Aplicação em Soldagem Área Naval.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>05/08/2022</td>
            </tr>
            <tr>
                <td>167</td>
                <td></td>
                <td>UFSC</td>
                <td>0752021</td>
                <td>082/2021</td>
                <td>159/2022</td>
                <td>30/08/2022</td>
                <td>Compromisso de fornecimento de dióxido de carbono (CO₂).</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>23/08/2022</td>
            </tr>
            <tr>
                <td>168</td>
                <td></td>
                <td>UFSC</td>
                <td>0172021</td>
                <td>250/2020</td>
                <td>172/2022</td>
                <td>06/09/2022</td>
                <td>Anexo V Planilha de Endereços - Compromisso de fornecimento de serviços para transporte de material biológico, em até 48 (quarenta e oito) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association).</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>30/08/2022</td>
            </tr>
            <tr>
                <td>169</td>
                <td></td>
                <td>UFSC</td>
                <td>0392020</td>
                <td>066/2020</td>
                <td>165/2022</td>
                <td>08/09/2022</td>
                <td>Aquisição de equipamentos de informática (04 (quatro) Desktops i7 e 04 (quatro) Notebooks i5).</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>31/08/2022</td>
            </tr>
            <tr>
                <td>170</td>
                <td></td>
                <td>UFSC</td>
                <td>0532021</td>
                <td>166/2021</td>
                <td>180/2022</td>
                <td>22/09/2022</td>
                <td>Compromisso de fornecimento de rações para camarões marinhos - Marca GUABI.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>15/09/2022</td>
            </tr>
            <tr>
                <td>171</td>
                <td></td>
                <td>BNDES</td>
                <td>0222021</td>
                <td>078/2021</td>
                <td>193/2022</td>
                <td>17/10/2022</td>
                <td>Aquisição de 03 (três) containers adaptados para construção do Centro Reforma da Universidade Federal de Santa Catarina - Campus Curitibanos.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>10/10/2022</td>
            </tr>
            <tr>
                <td>172</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0722021</td>
                <td>SGPX202119053</td>
                <td>222/2022</td>
                <td>28/10/2022</td>
                <td>Contratação de serviços de fabricação e instalação de estruturas de alumínio, com fornecimento de material, para a edificação do Projeto de Expansão do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, localizada em Florianópolis/SC.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>21/10/2022</td>
            </tr>
            <tr>
                <td>173</td>
                <td></td>
                <td>UFSC</td>
                <td>0422021</td>
                <td>064/2021</td>
                <td>231/2022</td>
                <td>28/11/2022</td>
                <td>Aquisição de 01 (um) sistema de geração de energia solar fotovoltaica, com instalação no Laboratório de Camarões Marinhos da Universidade Federal de Santa Catarina, em Florianópolis/SC.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>21/11/2022</td>
            </tr>
            <tr>
                <td>174</td>
                <td></td>
                <td>UFSC</td>
                <td>0952021</td>
                <td>197/2021</td>
                <td>122/2022</td>
                <td>02/12/2022</td>
                <td>Aquisição de Solução de Tecnologia da Informação e Comunicação – SOLUÇÃO DE VIDEOCONFERÊNCIA, incluindo o fornecimento de equipamentos para auditório, projeção e captação de áudio e vídeo, infraestrutura de suporte e gestão de salas virtuais para sessões de vídeo conferência, gravação, transmissão e gerenciamento.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>25/11/2022</td>
            </tr>
            <tr>
                <td>175</td>
                <td></td>
                <td>UFSC</td>
                <td>0562020</td>
                <td>071/2020</td>
                <td>267/2022</td>
                <td>02/12/2022</td>
                <td>Contratação de serviços de cercamento da usina piloto fotovoltaica do Centro de Pesquisa e Capacitação em Energia Solar da UFSC, localizada em Florianópolis S/C, com fornecimento de material.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>06/01/2023</td>
            </tr>
            <tr>
                <td>176</td>
                <td></td>
                <td>UFSC</td>
                <td>0442022</td>
                <td>022/2022</td>
                <td>247/2022</td>
                <td>17/02/2023</td>
                <td>Contratação de serviços de conserto do telhado do Complexo Aquático do Centro de Desportos da Universidade Federal de Santa Catarina.</td>
                <td>Ata de Abertura e Julgamento, Aviso de Resultado</td>
                <td>10/02/2023</td>
            </tr>
            <tr>
                <td>177</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>004/2023</td>
                <td>08/03/2023</td>
                <td>Contratação de serviços de instalação de paredes em dry wall, no Centro de Pesquisa e Capacitação de Energia Solar da UFSC, em Florianópolis/SC, com fornecimento de material.</td>
                <td></td>
                <td>01/03/2023</td>
            </tr>
            <tr>
                <td>178</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>003/2023</td>
                <td>16/03/2023</td>
                <td>Aquisição de 01 (um) elevador.</td>
                <td></td>
                <td>09/03/2023</td>
            </tr>
            <tr>
                <td>179</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>015/2023</td>
                <td>17/03/2023</td>
                <td>Contratação de serviços de elaboração de projeto e execução de sistema de ventilação e exaustão das salas de hidrogênio e amônia do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.</td>
                <td></td>
                <td>10/03/2023</td>
            </tr>
            <tr>
                <td>180</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>204/2022</td>
                <td>21/03/2023</td>
                <td>Contratação de serviços de fabricação e instalação de arquibancada em concreto armado, com fornecimento de material.</td>
                <td></td>
                <td>14/03/2023</td>
            </tr>
            <tr>
                <td>181</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>014/2023</td>
                <td>21/03/2023</td>
                <td>Contratação de serviços de elaboração de projeto executivo e execução da rede de controle de gases do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.</td>
                <td></td>
                <td>14/03/2023</td>
            </tr>
            <tr>
                <td>182</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>040/2023</td>
                <td>30/03/2023</td>
                <td>Contratação de serviços de execução de edificação central de armazenamento de gases do Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, com fornecimento de material.</td>
                <td></td>
                <td>22/03/2023</td>
            </tr>
            <tr>
                <td>183</td>
                <td></td>
                <td>UFSC</td>
                <td>0652022</td>
                <td>114/2022</td>
                <td>234/2022</td>
                <td>31/03/2023</td>
                <td>Compromisso de fornecimento de serviços gráficos, cópias e reproduções.</td>
                <td></td>
                <td>24/03/2023</td>
            </tr>
            <tr>
                <td>184</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>0742021</td>
                <td>81276699</td>
                <td>032/2023</td>
                <td>14/04/2023</td>
                <td>Contratação de serviços de execução de projeto hidrossanitário, com fornecimento de material</td>
                <td></td>
                <td>04/04/2023</td>
            </tr>
            <tr>
                <td>185</td>
                <td></td>
                <td>EMPRESAS</td>
                <td>UFFS</td>
                <td>0742021</td>
                <td>992022</td>
                <td>44/2022</td>
                <td>Aquisição de livros novos.</td>
                <td></td>
                <td>17/07/2023</td>
            </tr>
          
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
    <td>186</td>
    <td></td>
    <td>UFSC</td>
    <td>692020</td>
    <td>139/2020</td>
    <td>099/2023</td>
    <td>25/08/2023</td>
    <td>Aquisição de equipamentos de informática, áudio e vídeo.</td>
    <td>Ata de Abertura e Julgamento <br> Aviso de Resultado</td>
    <td>18/08/2023</td>
</tr>
<tr>
    <td>187</td>
    <td></td>
    <td>Empresas - GIZ</td>
    <td>742021</td>
    <td>81276699</td>
    <td>133/2023</td>
    <td>21/09/2023</td>
    <td>Aquisição de mobiliário, com entrega e montagem, para o Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, em Florianópolis/SC, visando atender as necessidades de projeto administrado pela FAPEU, conforme especificações constantes no Termo de Referência – Anexo I deste instrumento convocatório.</td>
    <td></td>
    <td>31/08/2023</td>
</tr>
<tr>
    <td>188</td>
    <td></td>
    <td>UFSC</td>
    <td>222021</td>
    <td>2021/0078</td>
    <td>120/2023</td>
    <td>14/09/2023</td>
    <td>Fornecimento de mobiliário para o CENTRO REFORMA da Universidade Federal de Santa Catarina, campus de Curitibanos/SC.</td>
    <td>Ata de Abertura e Julgamento <br> Aviso de Resultado</td>
    <td>14/09/2023</td>
</tr>
<tr>
    <td>189</td>
    <td></td>
    <td>EMPRESAS</td>
    <td>742021</td>
    <td>81276699</td>
    <td>133/2023</td>
    <td>21/09/2023</td>
    <td>Aquisição de mobiliário, com entrega e montagem, para o Centro de Pesquisa e Capacitação de Energia Solar da Universidade Federal de Santa Catarina, em Florianópolis/SC.</td>
    <td>Ata de Abertura e Julgamento <br> Aviso de Resultado</td>
    <td>31/08/2023</td>
</tr>
<tr>
    <td>190</td>
    <td></td>
    <td>UFSC</td>
    <td>562020</td>
    <td>2020/0071</td>
    <td>126/2023</td>
    <td>26/09/2023</td>
    <td>Aquisição de material elétrico e SPDA.</td>
    <td>Ata de Abertura e Julgamento <br> Aviso de Resultado</td>
    <td>14/09/2023</td>
</tr>
<tr>
    <td>191</td>
    <td></td>
    <td>UFSC</td>
    <td>442022 </td>
    <td>022/2022</td>
    <td>130/2023 
        <br> QUESTIONAMENTO 01
        <br>ERRATA 01
        <br>ERRATA 02</td>
    <td>16/10/2023</td>
    <td>Aquisição de 12 (doze) Raias / Balizas Antiturbulência PEQUIM - para piscina com 50m - BAT061 e assessórios, MARCA FIORE.</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>192</td>
    <td></td>
    <td>UFSC</td>
    <td>442022</td>
    <td>022/2022</td>
    <td>168/2023</td>
    <td>10/11/2023</td>
    <td>Aquisição de 20 (vinte) blocos de saída para natação – Modelo RIO – Marca FIORE.</td>
    <td>26/09/23</td>
    <td></td>
</tr>
<tr>
    <td>193</td>
    <td></td>
    <td>UFSC</td>
    <td>222021</td>
    <td>2021/0078</td>
    <td>169/2023</td>
    <td>22/11/2023</td>
    <td>Aquisição de material de construção (7.550 (sete mil quinhentos e cinquenta) palanques de eucalipto, 127.500 (cento e vinte e sete mil e quinhentos) metros de arame, 4.000 (quatro mil) balancins, 200 (duzentos) quilogramas de grampos para cerca), para entrega em Curitibanos/SC.</td>
    <td>26/09/23</td>
    <td></td>
</tr>
<tr>
    <td>194</td>
    <td></td>
    <td>UFSC</td>
    <td>0222021 </td>
    <td>2021/078</td>
    <td>1752023</td>
    <td>06/12/20233</td>
    <td>Contratação de serviços técnicos especializados de construção de 30.000 (trinta mil), metros de cerca na Reserva Legal do Assentamento Índio Galdino, localizada nos municípios de Curitibanos e Frei Rogério - SC.</td>
    <td></td>
    <td>01/11/2023 - 14/11/2023</td>
</tr>
<tr>
    <td>195</td>
    <td></td>
    <td>UFSC</td>
    <td>0652022</td>
    <td>114/2022</td>
    <td>187/2023</td>
    <td>30/11/2023</td>
    <td>Contratação de serviços de locação de equipamentos de informática em Brasília - DF, pelo período de 12 (doze) meses.</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>196</td>
    <td></td>
    <td>FAPEU</td>
    <td>9991991</td>
    <td></td>
    <td>013/2024</td>
    <td>19/03/2024</td>
    <td>Credenciamento de Agências de Turismo para a prestação de serviços de orçamentação e fornecimento de passagens aéreas nacionais e internacionais, compreendendo serviços de emissão, marcação, remarcação, cancelamento e seguro viagem.</td>
    <td> Aviso de Resultado </td>
    <td>19/03/2024</td>
</tr>
<tr>
    <td>197</td>
    <td></td>
    <td>UFSC</td>
    <td>392022</td>
    <td>025/2022</td>
    <td>006/2024</td>
    <td>24/04/2024</td>
    <td>Aquisição de 01 (um) container adaptado com entrega em Florianópolis/SC.</td>
    <td></td>
    <td>16/04/2024</td>
</tr>
<tr>
    <td>198</td>
    <td></td>
    <td>UFSC</td>
    <td>752021</td>
    <td>082/2021</td>
    <td>031/2024-1</td>
    <td>31/2024-2</td>
    <td>24/05/2024</td>
    <td>Contratação de serviços de manutenção preventiva e corretiva de 58 (cinquenta e oito) motobombas e 6 (seis) compressores radiais do Laboratório de Moluscos Marinhos, pelo período de 12 meses.</td>
    <td></td>
    <td>17/05/2024</td>
</tr>
<tr>
    <td>199</td>
    <td></td>
    <td>UFSC</td>
    <td>992023</td>
    <td>186/2023
    <td>051/2024-1
    <br>051/2024-2
    <br>051/2024-3
    <br>051-2024-4
    <br>051-2024-5</td>
    <td>07/06/2024 <br> 13:00 Horas</td>
    <td>Contratação de empresa especializada para reforma das instalações do Espaço Cultural Gênero e Diversidade – ECGD, do Centro de Filosofia e Ciências Humanas da Universidade Federal de Santa Catarina - PRÉDIO DAE001.</td>
    <td></td>
    <td>17/05/2024</td>
</tr>
<tr>
    <td>200</td>
    <td></td>
    <td>UFSC</td>
    <td>222022</td>
    <td>232/2021</td>
    <td>043/2024</td>
    <td>24/05/2024 <br> 13:00 Horas</td>
    <td>Aquisição de 18 (dezoito) monitores profissionais - (Marca/Modelo: LG 32UN500).</td>
    <td></td>
    <td>17/05/2024</td>
</tr>
<tr>
    <td>201</td>
    <td></td>
    <td>UFSC</td>
    <td>172021</td>
    <td>250/2020</td>
    <td>032/2024-1, 032/2024-2, 032/2024-3</td>
    <td>04/06/2024</td>
    <td>Compromisso de fornecimento de serviços para transporte de material biológico, entre 24 (vinte e quatro) e 72 (setenta e duas) horas, para serem entregues em todas as regiões do Brasil, respeitando as normas IATA (International Air Transport Association).</td>
    <td></td>
    <td>24/05/2024</td>
</tr>

<tr>
    <td>202</td>
    <td></td>
    <td>UFSC</td>
    <td>222021</td>
    <td>2021/0078</td>
    <td>055/2024 
        <br> 055/2024-E</td>
    <td>07/06/2024 <br> 13:00 Horas</td>
    <td>Aquisição de 01 (uma) mesa de tensão para determinar a curva de retenção d'água no solo de 0 a 0,1 bar, com entrega em Curitibanos - SC.</td>
    <td></td>
    <td>28/05/2024</td>
</tr>
<tr>
    <td>203</td>
    <td></td>
    <td>UFSC</td>
    <td>1162023</td>
    <td>48/2023</td>
    <td>042/2024</td>
    <td>29/05/2024</td>
    <td>Credenciamento para contratação de serviços de transporte de passageiros, com motorista, nos estados do Paraná e Rio Grande do Sul.</td>
    <td></td>
    <td>04/06/2024</td>
</tr>
<tr>
    <td>204</td>
    <td></td>
    <td>UFFS</td>
    <td>1042023</td>
    <td>41/2023</td>
    <td>060/2024</td>
    <td>13/06/2024</td>
    <td>Credenciamento para contratação de serviços de transporte de passageiros, com motorista, nos estados do Paraná e Rio Grande do Sul.</td>
    <td></td>
    <td>13/06/2024</td>
</tr>
<tr>
    <td>205</td>
    <td></td>
    <td>UFSC</td>
    <td>222021</td>
    <td>2021/0078</td>
    <td>079/2024</td>
    <td>09/08/2024</td>
    <td>Contratação de serviços para plantio de 16.000 (dezesseis mil) mudas, nos municípios de Curitibanos e Frei Rogério - SC.</td>
    <td></td>
    <td>01/08/2024</td>
</tr>
<tr>
    <td>206</td>
    <td></td>
    <td>UFSC</td>
    <td>752021</td>
    <td>082/2021</td>
    <td>099/2024</td>
    <td>26/08/2024</td>
    <td>Aquisição de 100 (cem) incubadoras de moluscos em acrílico, com entrega em Florianópolis/SC.</td>
    <td></td>
    <td>19/08/2024</td>
</tr>
<tr>
    <td>207</td>
    <td></td>
    <td>UFSC</td>
    <td>922023</td>
    <td>146/2023</td>
    <td>102/2024</td>
    <td>27/08/2024 
        <br> 13:00 Horas
    </td>
    <td>Contratação de serviços de locação de estrutura, consistindo no fornecimento e montagem de cobertura, piso, pórtico, estandes, palco e tablado, com elaboração e execução de projetos e laudos, para a realização de Feira de Cursos da UFSC 2024, nos dias 10 e 11/09/2024, em Florianópolis/SC.</td>
    <td></td>
    <td>20/08/2024</td>
</tr>
<tr>
    <td>208</td>
    <td></td>
    <td>UFSC</td>
    <td>222021</td>
    <td>2021/0078</td>
    <td>115/2024</td>
    <td>12/09/2024</td>
    <td>Contratação de serviços para plantio de 16.000 (dezesseis mil) mudas, nos municípios de Curitibanos e Frei Rogério - SC.</td>
    <td></td>
    <td>05/09/2024</td>
</tr>
<tr>
    <td>209</td>
    <td></td>
    <td>UFFS</td>
    <td>1162023</td>
    <td>48/2023</td>
    <td>121/2024</td>
    <td>13/09/2024</td>
    <td>Contratação de serviços para produção de material de divulgação personalizado (120 camisetas, 120 camisas polo, 1.200 estojos, 1.300 garrafas tipo squeeze, 1.200 cadernos tipo planner, 1.200 crachás, 1.200 mochilas, 1.200 canetas e 1.200 mousepads), para realização do 1º Encontro de Pesquisa e Redes de Ensino em Educação Integral da Região Sul (EPREI-Sul), nos dias 10 a 11/10/2024, em Chapecó/SC.</td>
    <td></td>
    <td>06/09/2024</td>
</tr>
<tr>
    <td>210</td>
    <td></td>
    <td>UFSC</td>
    <td>442022</td>
    <td>22/2022</td>
    <td>110/2024</td>
    <td>13/09/2024</td>
    <td>Contratação de empresa para fornecimento e instalação de portas internas e externas, bem como serviços complementares, para o Complexo Aquático da UFSC, em Florianópolis/SC.</td>
    <td></td>
    <td>06/09/2024</td>
</tr>
<tr>
    <td>211</td>
    <td></td>
    <td>UFFS</td>
    <td>1162023</td>
    <td>48/2023</td>
    <td>124/2024</td>
    <td>20/09/2024</td>
    <td>Contratação de serviços de fornecimento de 4.000 (quatro mil) refeições do tipo coffee break, para realização do EPREISUL, nos dias 10 e 11/10/2024, em Chapecó/SC.</td>
    <td></td>
    <td>13/09/2024</td>
</tr>
<tr>
    <td>212</td>
    <td></td>
    <td>UFFS</td>
    <td>1132023</td>
    <td>46/2023</td>
    <td>131/2024 <br> <br> ERRATA 01 (UM)</td>
    <td>30/09/2024 <br> 13:00 Horas</td>
    <td>Compromisso de fornecimento de 3.400 (três mil e quatrocentas) diárias de refeições, contendo 05 (cinco) refeições cada diária, com fornecimento de material e utensílios, no período de Abril a Junho de 2024, no Instituto Educar - Assentamento Nossa Senhora Aparecida, em Pontão/RS.</td>
    <td></td>
    <td>23/09/2023</td>
</tr>

      
        </tbody>
    </table>
</div>

@endsection

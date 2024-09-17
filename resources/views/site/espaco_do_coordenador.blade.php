@extends ('site.master.layout')

@section('content')
    <div style="text-align: center; padding: 20px;">
        <h2 style="color: #004d00;">Espaço do Coordenador</h2>

        <div style="display: flex; justify-content: space-around; padding-top: 30px; padding-bottom: 30px;">
            <!-- Botão Coordenador -->
            <div>
                <a href="#" style="text-decoration: none;">
                    <button style="background-color: #146551; color: white; border: none; padding: 15px 30px; font-size: 16px; border-radius: 5px;">
                        Coordenador (clique aqui!)
                    </button>
                </a>
                <p style="margin-top: 10px;">Aqui os coordenadores de projetos da FAPEU podem fazer pedidos e consultar relatórios financeiros.</p>
            </div>

            <!-- Botão Funcionário -->
            <div>
                <a href="#" style="text-decoration: none;">
                    <button style="background-color: #146551; color: white; border: none; padding: 15px 30px; font-size: 16px; border-radius: 5px;">
                        Funcionário (clique aqui!)
                    </button>
                </a>
                <p style="margin-top: 10px;">Aqui os coordenadores de projetos da FAPEU podem administrar pessoal.</p>
            </div>
        </div>

        <div style="border-top: 2px solid #004d00; padding-top: 20px;">
            <h3>Atenção</h3>
            <p>
                Para garantir a segurança de suas informações, os acessos acontecem apenas por meio de seu CPF e senha.
            </p>
            <p>
                Por se tratar de plataformas distintas, as senhas são diferentes.
            </p>
            <p>
                Em caso de dúvidas, entre em contato com o gestor do seu projeto.
            </p>
        </div>
    </div>
@endsection

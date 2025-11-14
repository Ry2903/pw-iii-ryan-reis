<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <!-- W3CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .sidebar {
            width: 230px;
        }

        .main-content {
            margin-left: 230px;
            padding: 20px;
        }

        /* --- Responsividade --- */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .main-content {
                margin-left: 0 !important;
            }

            #btnMenu {
                display: block;
            }
        }

        #btnMenu {
            display: none;
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000;
        }

        /* Tabela rolável no celular */
        .table-responsive {
            overflow-x: auto;
        }
    </style>

    <script>
        function openSidebar() {
            document.getElementById("sidebar").style.display = "block";
        }
        function closeSidebar() {
            document.getElementById("sidebar").style.display = "none";
        }
    </script>

</head>

<body>

    <!-- BOTÃO MENU MOBILE -->
    <button id="btnMenu" class="w3-button w3-blue w3-large" onclick="openSidebar()">
        <i class="fa fa-bars"></i>
    </button>

    <!-- SIDEBAR -->
    <div id="sidebar" class="w3-sidebar w3-bar-block w3-dark-grey sidebar w3-card-4 w3-large">
        <button class="w3-button w3-red w3-small w3-right w3-margin" onclick="closeSidebar()">X</button>
        <h3 class="w3-bar-item w3-center">MENU</h3>

        <a href="#home" onclick="closeSidebar()" class="w3-bar-item w3-button"><i class="fa fa-house"></i> Home</a>
        <a href="#dados" onclick="closeSidebar()" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Dados Pessoais</a>
        <a href="#formacao" onclick="closeSidebar()" class="w3-bar-item w3-button"><i class="fa fa-graduation-cap"></i> Formação</a>
        <a href="#experiencia" onclick="closeSidebar()" class="w3-bar-item w3-button"><i class="fa fa-briefcase"></i> Experiência</a>
    </div>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="main-content">

        <!-- HOME -->
        <div id="home" class="w3-container w3-animate-opacity">
            <h2>Bem-vindo(a)!</h2>
            <p>Selecione uma opção no menu ao lado para navegar.</p>
            <hr>
        </div>

        <!-- DADOS PESSOAIS -->
        <div id="dados" class="w3-container w3-animate-opacity" style="margin-top:50px;">
            <h2>Dados Pessoais</h2>
            <p>Área destinada ao gerenciamento de informações pessoais do usuário.</p>
            <hr>
        </div>

        <!-- FORMAÇÃO -->
        <div id="formacao" class="w3-container w3-animate-opacity" style="margin-top:50px;">
            <h2>Formação Acadêmica</h2>
            <p>Área destinada ao gerenciamento das informações de formação acadêmica.</p>
            <hr>
        </div>

        <!-- EXPERIÊNCIA PROFISSIONAL -->
        <div id="experiencia" class="w3-container w3-animate-opacity" style="margin-top:50px;">
            <h2>Experiência Profissional</h2>
            <hr>

            <form method="post" action="../Controller/controleExperiencia.php" class="w3-container w3-padding w3-white w3-card">
                <label>Início</label>
                <input type="date" name="txtInicioEP" class="w3-input w3-border w3-round" required>

                <label class="w3-margin-top">Fim</label>
                <input type="date" name="txtFimEP" class="w3-input w3-border w3-round" required>

                <label class="w3-margin-top">Empresa</label>
                <input type="text" name="txtEmpEP" class="w3-input w3-border w3-round" placeholder="Ex: Senai" required>

                <label class="w3-margin-top">Descrição</label>
                <input type="text" name="txtDescEP" class="w3-input w3-border w3-round" placeholder="Funções exercidas" required>

                <button class="w3-button w3-green w3-margin-top w3-round" name="btnAddEP">Adicionar</button>
            </form>

            <!-- Tabela Responsiva -->
            <div class="table-responsive">
                <table class="w3-table-all w3-margin-top w3-card">
                    <tr class="w3-dark-grey">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Empresa</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                    <tr>
                        <td>2020-01</td>
                        <td>2021-05</td>
                        <td>Empresa X</td>
                        <td>Auxiliar administrativo</td>
                        <td><a href="#" class="w3-button w3-red w3-small w3-round">X</a></td>
                    </tr>
                </table>
            </div>

        </div>

    </div>

</body>

</html>

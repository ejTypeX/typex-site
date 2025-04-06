<?php 
    include '../../includes/header.php';
    include "../../includes/connect.php";
    include "../diretoria/metas.php";
?>

<link rel="stylesheet" href="../../resources/css/layout.css">
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Estratégica</title>
    <script>
        function alertMessage(message) {
            alert(message);
        }
    </script>
</head>
    <h1>Painel de Gestão Estratégica</h1>
    
    <div id="metas">
        <h2>Gerenciar Metas Estratégicas</h2>
        
        <form action="metas.php" method="post">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Meta</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Diretor Responsável</th>
                    <th>Diretoria</th>
                </tr>
                </thead>
                
                <tbody id="tabelaMetas">
                    <tr>
                        <td>1</td>
                        <td><input type="text" name="nomeMeta" value="Projetar protótipo" id="nomeMeta" placeholder="Digite o nome da meta"></td>
                        <td><input type="text" name="descricao"value="descricao" id="descricao" placeholder="Escreva a descrição da meta"></td>
                        <td>
                            <select name="status" id="status" required>
                                <option name="pendente" value="Pendente" id="pendente" >Pendente</option>
                                <option name="emAndamento" value="Em andamento" id="emAndamento" >Em andamento</option>
                                <option name="concluido" value="Concluído" id="concluido">Concluído</option>
                            </select>
                        </td>
                        <td>
                            <select name="diretores" id="diretores" required>
                                <option name="vitor" value="Vitor Ferreira" id="vitor">Vitor Ferreira</option>
                                <option name="igor" value="Igor Kussumoto"  id="igor">Igor Kussumoto</option>
                                <option name="gabriel" value="Gabriel Fontana" id="gabriel">Gabriel Fontana</option>
                            </select>
                        </td>
                        <td><input type="text" name="diretoria" value="Projetos" id="diretoria" placeholder="Digite a diretoria"></td>
                    </tr>
                </tbody>
            </table>

            <button type="submit">Salvar meta</button>
        </form>
       
    <div id="tarefas">
        <h2>Atribuir Tarefas dos Diretores</h2>

        <form action="tarefas.php" method='post'>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da tarefa</th>
                        <th>Descrição</th>
                        <th>status</th>
                        <th>Diretoria</th>
                    </tr>
                </thead>
                <tbody id="tabelaTarefas">
                    <tr>
                        <td>1</td>
                        <td><input type="text" name="nomeTarefa" value="Fazer formulário" id="nomeTarefa" placeholder="Digite o nome da tarefa"></td>
                        <td><input type="text" name="descricao" value="descricao" id="descricao" placeholder="Escreva a descrição da tarefa"></td>
                        <td>
                            <select name="status" id="status" required>
                                <option name="pendente" value="Pendente" id="pendente">Pendente</option>
                                <option name="emAndamento" value="Em Andamento" id="emAndamento">Em Andamento</option>
                                <option name="concluido" value="Concluido" id="concluido">Concluído</option>
                            </select>
                        </td>
                        <td><input type="text" name="diretoria" value="RH" id="diretoria" placeholder="Digite o nome da diretoria"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <button type="submit">Salvar tarefa</button>
    </div>

    <div id="progresso">
        <h2>Visualizar Progresso das Tarefas</h2>

        <form action="VizualizarProgresso.php" method='get'></form>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da Tarefa</th>
                        <th>Status</th>
                        <th>Observações</th>
                    </tr>
                </thead>
            </table>
        </form>
    </div>

    <div id="calendario">
        <h2>Gerenciar Calendário de Reuniões</h2>

        <form action="calendarioReuniao.php" method="post"></form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Assunto</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Tipo</th>
                    <th>Ações Definidas</th>
                </tr>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><input type="text" name="assunto" value="Organizar tarefas entre as equipes" id="assunto" placeholder="Digite o assunto"></td>
                        <td><input type="text" name="descricao" value="descricao" id="descricao" placeholder="Escreva a descrição da reunião"></td>
                        <td><input type="date" name="data" id="data"></td>
                        <td><input type="datetime" name="horario" id="horario"></td>
                        <td>
                            <select name="tipo" id="tipo">
                                <option name="presencial" value="Presencial" id="presencial">Presencial</option>
                                <option name="online" value="Online" id="online">Online</option>
                                <option name="hibrida" value="Híbrida" id="hibrida">Híbrida</option>
                            </select>
                        </td>
                        <td><input type="text" name="acoesDefinidas" value="Tarefas definidas para cada diretoria" id="acoesDefinidas" placeholder="Escreva as ações definidas"></td>
                    </tr>
                </tbody>
            </thead>
        </table>
        <button type="submit">Salvar Reunião</button>
    </div>

    <div id="atas">
        <h2>Gerenciar Ata de Reuniões</h2>
        <button onclick="alertMessage('Criar ou editar ata de reunião')">Criar/Editar Ata</button>
    </div>

    <div id="documentos">
        <h2>Anexar Documentos às Atas de Reuniões</h2>
        <button onclick="alertMessage('Anexar documento à ata')">Anexar Documento</button>
    </div>

    <div id="decisoes">
        <h2>Registrar Decisões</h2>
        <button onclick="alertMessage('Registrar decisão importante')">Registrar Decisão</button>
    </div>

    <div id="relatorios">
        <h2>Gerar Relatórios de Desempenho</h2>
        <button onclick="alertMessage('Gerar relatório de desempenho')">Gerar Relatório</button>
    </div>

    <div id="kpis">
        <h2>Visualizar Indicadores-Chave (KPIs)</h2>
        <button onclick="alertMessage('Visualizar indicadores-chave')">Visualizar KPIs</button>
    </div>
</body>
</html>
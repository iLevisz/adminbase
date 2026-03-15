<?php
// criado com <3 por Levi
// github.com/ilevisz

require_once '../core/auth.php';
require_login();

include '../includes/head.php';
include '../includes/sidebar.php';
include '../includes/topbar.php';
?>

<div class="page-header">
    <h1>Visão Geral</h1>
    <p>Bem-vindo ao seu painel administrativo moderno.</p>
</div>

<div class="grid-cards">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Total de Registros</h3>
            <div class="card-value">1,024</div>
            <div class="card-trend positive">+15% este mês</div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Receita</h3>
            <div class="card-value">R$ 45.230,00</div>
            <div class="card-trend positive">+8% este mês</div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Usuários Ativos</h3>
            <div class="card-value">842</div>
            <div class="card-trend negative">-2% este mês</div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Tarefas Pendentes</h3>
            <div class="card-value">12</div>
            <div class="card-trend neutral">Sem alteração</div>
        </div>
    </div>
</div>

<div class="grid-layout">
    <div class="card grid-col-2">
        <div class="card-header">
            <h3>Atividade Recente</h3>
        </div>
        <div class="card-body p-0">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>Atualização de sistema</td>
                        <td><span class="badge badge-success">Concluído</span></td>
                        <td>Hoje, 10:30</td>
                    </tr>
                    <tr>
                        <td>#002</td>
                        <td>Novo usuário registrado</td>
                        <td><span class="badge badge-info">Novo</span></td>
                        <td>Hoje, 09:15</td>
                    </tr>
                    <tr>
                        <td>#003</td>
                        <td>Falha no backup</td>
                        <td><span class="badge badge-danger">Erro</span></td>
                        <td>Ontem, 23:00</td>
                    </tr>
                    <tr>
                        <td>#004</td>
                        <td>Relatório exportado</td>
                        <td><span class="badge badge-success">Concluído</span></td>
                        <td>Ontem, 15:45</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Atalhos Rápidos</h3>
        </div>
        <div class="card-body">
            <ul class="shortcut-list">
                <li><a href="#">Adicionar Novo Registro</a></li>
                <li><a href="#">Gerenciar Permissões</a></li>
                <li><a href="#">Configurar Notificações</a></li>
                <li><a href="#">Exportar Dados</a></li>
                <li><a href="#">Visualizar Logs</a></li>
            </ul>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
<?php

return [

    /*
    *  Constants
    */
    'nav-settings'                  => 'Configurações',
    'nav-agents'                    => 'Agentes',
    'nav-dashboard'                 => 'Dashboard',
    'nav-categories'                => 'Categorias',
    'nav-priorities'                => 'Prioridades',
	'nav-places'					=> 'Locais',
    'nav-statuses'                  => 'Status',
    'nav-configuration'             => 'Configuração',  // New
    'nav-administrator'             => 'Administrador',

    'table-hash'                    => '#', // New
    'table-id'                      => 'ID',
    'table-name'                    => 'Nome',
    'table-action'                  => 'Função',
    'table-categories'              => 'Categorias',
    'table-join-category'           => 'Categorias Relacionadas',
    'table-remove-agent'            => 'Remover de Agentes',
    'table-remove-administrator'    => 'Remover administrador', // New

    'table-slug'                    => 'Índice', // New
    'table-default'                 => 'Valor Inicial', // New
    'table-value'                   => 'Meus Valores',  // New
    'table-lang'                    => 'Lingua', // New
    'table-edit'                    => 'Editar', // New

    'btn-back'                      => 'Voltar',
    'btn-delete'                    => 'Excluir',
    'btn-edit'                      => 'Editar',
    'btn-join'                      => 'Adicionar',
    'btn-remove'                    => 'Remover',
    'btn-submit'                    => 'Enviar',
    'btn-save'                      => 'Salvar',  // New
    'btn-update'                    => 'Atualizar',
    
    'colon'                         => ': ',

    /*
    *  Page specific
    */

    // tickets-admin/____
    'index-title'                         => 'Sistema de Chamados - Dashboard',
    'index-empty-records'                 => 'Sem Chamados ainda',
    'index-total-tickets'                 => 'Total de Chamados',
    'index-open-tickets'                  => 'Chamados Abertos',
    'index-closed-tickets'                => 'Chamados Encerrados',
    'index-performance-indicator'         => 'Indicador de Performance',
    'index-periods'                       => 'Periodos',
    'index-3-months'                      => '3 meses',
    'index-6-months'                      => '6 meses',
    'index-12-months'                     => '12 meses',
    'index-tickets-share-per-category'    => 'Chamados Divididos por Categoria',
    'index-tickets-share-per-agent'       => 'Chamados Divididos por Agentes',
    'index-tickets-share-per-place'       => 'Chamados Divididos por Locais', //new
    'index-categories'                    => 'Categorias',
    'index-category'                      => 'Categoria',
    'index-agents'                        => 'Agentes',
    'index-agent'                         => 'Agente',
    'index-administrators'                => 'Administradores',  //new
    'index-administrator'                 => 'Administrador',  //new
    'index-users'                         => 'Usuários',
    'index-user'                          => 'Usuário',
    'index-tickets'                       => 'Chamados',
    'index-open'                          => 'Aberto',
    'index-closed'                        => 'Fechado',
    'index-total'                         => 'Total',
    'index-month'                         => 'Mês',
    'index-performance-chart'             => 'Quantos dias você tem para resolver este Chamado?',
    'index-categories-chart'              => 'Chamados distribuidos por Categoria',
    'index-agents-chart'                  => 'Chamados distribuidos por Agente',

    // tickets-admin/agent/____
    'agent-index-title'             => 'Gerenciar Agentes',
    'btn-create-new-agent'          => 'Criar Novo Agente',
    'agent-index-no-agents'         => 'Nenhum Agente cadastrado, ',
    'agent-index-create-new'        => 'Adicionar agentes',
    'agent-create-title'            => 'Adicionar Agente',
    'agent-create-add-agents'       => 'Adicionar Agentes',
    'agent-create-no-users'         => 'Nenhum Usuário cadastrado, Crie uma conta de Usuário Primeiro.',
    'agent-create-select-user'      => 'Selecione uma conta de Usuário para criar um Agente',

    // tickets-admin/administrators/____
    'administrator-index-title'                   => 'Gerenciar Administradores',  //new
    'btn-create-new-administrator'                => 'Criar novo administrador',  //new
    'administrator-index-no-administrators'       => 'Não há administradores, ',  //new
    'administrator-index-create-new'              => 'Adicionar Administradores',  //new
    'administrator-create-title'                  => 'Adicionar Administrador',  //new
    'administrator-create-add-administrators'     => 'Adicionar Administradores',  //new
    'administrator-create-no-users'               => 'Não há conta de usuário, crie a conta de usuário primeiro.',  //new
    'administrator-create-select-user'            => 'Selecione a conta de susário a ser adicionado como administrador',  //new
    
    // tickets-admin/category/____
    'category-index-title'          => 'Gerenciar Categorias',
    'btn-create-new-category'       => 'Criar Nova Categoria',
    'category-index-no-categories'  => 'Nenhuma Categoria cadastrada, ',
    'category-index-create-new'     => 'Criar Nova Categoria',
    'category-index-js-delete'      => 'Você tem certeza que deseja excluir esta Categoria: ',
    'category-create-title'         => 'Criar Nova Categoria',
    'category-create-name'          => 'Nome',
    'category-create-color'         => 'Cor',
    'category-edit-title'           => 'Editar Categoria: :name',

    // tickets-admin/priority/____
    'priority-index-title'          => 'Gerenciar Prioridades',
    'btn-create-new-priority'       => 'Criar Nova Prioridade',
    'priority-index-no-priorities'  => 'Nenhuma Prioridade cadastrada, ',
    'priority-index-create-new'     => 'criar nova prioridade',
    'priority-index-js-delete'      => 'Você tem certeza que deseja excluir esta prioridade: ',
    'priority-create-title'         => 'Criar Nova Prioridade',
    'priority-create-name'          => 'Nome',
    'priority-create-color'         => 'Cor',
    'priority-edit-title'           => 'Editar Prioridade: :name',
    
    // tickets-admin/place/____
    'place-index-title'             => 'Gerenciar Locais',
    'btn-create-new-place'          => 'Criar Novo Local',
    'place-index-no-places'         => 'Nenhum local cadastrado, ',
    'place-index-create-new'        => 'criar novo local',
    'place-index-js-delete'         => 'Você tem certeza que deseja excluir este local: ',
    'place-create-title'            => 'Criar Novo Local',
    'place-create-name'             => 'Nome',
    'place-create-color'            => 'Cor',
    'place-edit-title'              => 'Editar Local: :name',

    // tickets-admin/status/____
    'status-index-title'            => 'Gerenciar Status',
    'btn-create-new-status'         => 'Criar Novo status',
    'status-index-no-statuses'      => 'Nenhum Status cadastrado,',
    'status-index-create-new'       => 'criar novo status',
    'status-index-js-delete'        => 'Você tem certeza que deseja excluir este status: ',
    'status-create-title'           => 'Criar Novo Status',
    'status-create-name'            => 'Nome',
    'status-create-color'           => 'Cor',
    'status-edit-title'             => 'Editar Status: :name',

    // tickets-admin/configuration/____
    'config-index-title'            => 'Gerenciar Configurações', // New
    'config-index-subtitle'         => 'Configurações', // New
    'btn-create-new-config'         => 'Adicionar Nova Configuração', // New
    'config-index-no-settings'      => 'Nenhuma Configuração, ', // New
    'config-index-initial'          => 'Inicial', // New
    'config-index-tickets'          => 'Chamados', // New
    'config-index-notifications'    => 'Notificações', // New
    'config-index-permissions'      => 'Permissões', // New
    'config-index-editor'           => 'Editor', //Added: 2016.01.14
    'config-index-other'            => 'Outras', // New
    'config-create-title'           => 'Criar: Nova Configuração Global', // New
    'config-create-subtitle'        => 'Criar Configuração', // New
    'config-edit-title'             => 'Editar: Configuração Global', // New
    'config-edit-subtitle'          => 'Editar Configuração', // New
    'config-edit-id'                => 'ID',
    'config-edit-slug'              => 'Índice',
    'config-edit-default'           => 'Valor Inicial',
    'config-edit-value'             => 'Meu Valor',
    'config-edit-language'          => 'Lingua',
    'config-edit-unserialize'       => 'Pega os valores do array, e muda os valores',
    'config-edit-serialize'         => 'Pega a string serial dos valores (para ser adicionada ao campo)',
  'config-edit-should-serialize'  => 'Serial', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'Quando marcado, o servidor executa eval()!
  									  Não use isto se eval() estiver desabilitado no seu servidor ou se voc não sabe exatamente o que você êstá fazendo!
  									  Código exato executado:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Re-digite sua senha', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Senhas não com´binam', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Valor inválido', //Added: 2016-01-16
  'config-edit-tools'             => 'Tools:',

];

<?php

return [

    /*
    *  Constants
    */

    'nav-active-tickets'               => 'Chamados Ativos',
    'nav-completed-tickets'            => 'Chamados Finalizados',

    // Tables
    'table-id'                         => '#',
    'table-subject'                    => 'Assunto',
    'table-owner'                      => 'Proprietário',
    'table-status'                     => 'Status',
    'table-last-updated'               => 'Ultima Atualização',
    'table-priority'                   => 'Prioridade',
    'table-agent'                      => 'Agente',
    'table-category'                   => 'Categoria',

    // Datatables
    'table-decimal'                    => '',
    'table-empty'                      => 'Sem dados nesta tabela',
    'table-info'                       => 'Exibindo _START_ ate _END_ do _TOTAL_ de entradas',
    'table-info-empty'                 => 'Exibindo 0 de 0 até 0 entradas',
    'table-info-filtered'              => '(filtrando do _MAX_ total entradas)',
    'table-info-postfix'               => '',
    'table-thousands'                  => ',',
    'table-length-menu'                => 'Exibindo _MENU_ entradas',
    'table-loading-results'            => 'Carregando...',
    'table-processing'                 => 'Processando...',
    'table-search'                     => 'Buscar:',
    'table-zero-records'               => 'Nenhuma registro compátivel foi encontrado',
    'table-paginate-first'             => 'Primeiro',
    'table-paginate-last'              => 'Ultimo',
    'table-paginate-next'              => 'Próximo',
    'table-paginate-prev'              => 'Anterior',
    'table-aria-sort-asc'              => ': Classificando coluna Ascendente',
    'table-aria-sort-desc'             => ': Classificando coluna Descendente',

    'btn-back'                         => 'Voltar',
    'btn-cancel'                       => 'Cancelar', // NEW
    'btn-close'                        => 'Fechar',
    'btn-delete'                       => 'Excluir',
    'btn-edit'                         => 'Editar',
    'btn-mark-complete'                => 'Concluido',
    'btn-submit'                       => 'Enviar',

    'agent'                            => 'Agente',
    'category'                         => 'Categoria',
    'colon'                            => ': ',
    'comments'                         => 'Comentário',
    'created'                          => 'Criado',
    'description'                      => 'Descrição',
    'flash-x'                          => '×', // &times;
    'last-update'                      => 'Última Atualização',
    'no-replies'                       => 'Sem Resposta.',
    'owner'                            => 'Proprietário',
    'priority'                         => 'Prioridade',
    'reopen-ticket'                    => 'Reabrir Chamado',
    'reply'                            => 'Responder',
    'responsible'                      => 'Responsável',
    'status'                           => 'Status',
    'subject'                          => 'Assunto',

    /*
    *  Page specific
    */

    // ____
    'index-title'                      => 'Manutenção Página Principal',

    // tickets/____
    'index-my-tickets'                 => 'Meus Chamados',
    'btn-create-new-ticket'            => 'Criar novo chamado',
    'index-complete-none'              => 'Nenhum Chamado Finalizado',
    'index-active-check'               => 'Se você não achar seu Chamado. Verifique Chamados Ativos.',
    'index-active-none'                => 'Nenhum Chamado Ativo,',
    'index-create-new-ticket'          => 'Criar novo Chamado',
    'index-complete-check'             => 'Se você não achar seu Chamado. Verifique Chamados Fechados.',

    'create-ticket-title'              => 'Novo Formulário de Chamado',
    'create-new-ticket'                => 'Criar Novo Chamado',
    'create-ticket-brief-issue'        => 'Descreva brevemente seu Chamado',
    'create-ticket-describe-issue'     => 'Descreva seu problema em Detalhes',

    'show-ticket-title'                => 'Chamado',
    'show-ticket-js-delete'            => 'Tem certeza que deseja excluir: ',
    'show-ticket-modal-delete-title'   => 'Excluir Chamado',
    'show-ticket-modal-delete-message' => 'Tem certeza que deseja excluir Chamado: :subject?',

    /*
    *  Controllers
    */

    // AgentsController
    'agents-are-added-to-agents'       => ':names foi adicionado ao Time de Agentes',
    'agents-joined-categories-ok'      => 'Adicionado a Categoria com Sucesso',
    'agents-is-removed-from-team'      => ':name foi removido do time de Agentes',

    // CategoriesController
    'category-name-has-been-created'   => 'A categoria :name foi criada!',
    'category-name-has-been-modified'  => 'A categoria :name foi modificada!',
    'category-name-has-been-deleted'   => 'A categoria :name foi excluida!',

    // PrioritiesController
    'priority-name-has-been-created'   => 'A prioridade :name foi criada!',
    'priority-name-has-been-modified'  => 'A prioridade :name foi modificada!',
    'priority-name-has-been-deleted'   => 'A prioridade :name foi excluida!',
    'priority-all-tickets-here'        => 'Todas prioridades dos chamados relacionadas aqui',

    // StatusesController
    'status-name-has-been-created'   => 'O status :name foi criado!',
    'status-name-has-been-modified'  => 'O status :name foi modificado!',
    'status-name-has-been-deleted'   => 'O status :name foi excluido!',
    'status-all-tickets-here'        => 'O Status de todos Chamados está relacionados aqui',

/*
 *  Middlewares
 */

//  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access-this-page'     => 'Você não tem permissão para acessar esta página!',

    // CommentsController
    'comment-has-been-added-ok'        => 'Comantário adicionado com Sucesso',

    // NotificationsController
    'notify-new-comment-from'          => 'Novo comentário para ',
    'notify-on'                        => ' ligado ',
    'notify-status-to-complete'        => ' status concluido',
    'notify-status-to'                 => ' status para ',
    'notify-transferred'               => ' transferido ',
    'notify-to-you'                    => ' Para Você',
    'notify-created-ticket'            => ' criou o chamado ',
    'notify-updated'                   => ' Atualizado ',

    // TicketsController
    'the-ticket-has-been-created'      => 'O Chamado foi Criado!',
    'the-ticket-has-been-modified'     => 'O Chamado foi Modificado!',
    'the-ticket-has-been-deleted'      => 'O Chamado :name foi Excluido!',
    'the-ticket-has-been-completed'    => 'O Chamado :name foi Finalizado!',
    'the-ticket-has-been-reopened'     => 'O Chamado :name foi Re-aberto!',
    'you-are-not-permitted-to-do-this' => 'Você não tem permissão para esta Ação!',

];

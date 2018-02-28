var oTable = configTable();//Seta a configuração do datatables

$(document).ready(function() {
    $(document).on('click', '.destroyTr', destroyTr);
    $('.pesquisar_form').on('click', onSearchForm);
    $('#limparFiltros').on('click', onResetForm);
});

/**
 * Destroy o item da modelo
 * @returns {undefined}
 */
function destroyTr() {
    var id = $(this).attr('data-rel');
    
    appUtil.confirmBox('Deseja realmente excluir este Menu?', function(retorno) {
        if (retorno) {
            $.ajax({
                url: APP.controller_url + '/destroy/'+id
            }).done(function(data) {
                appUtil.createFlashMesseger(data.msg, data.success);
                oTable.draw();
            });
        } 
     });
}

/**
 * Monta config do DataTables
 * @returns {unresolved}
 */
function configTable() {
    return $('#data_table').DataTable({
        ajax: {
            url: APP.controller_url + '/index',
            data: function (data) {
                data.header = $('input[name=header]').val();
                data.parent = $('select[name=parent]').val();
            }
        },
        columns: [
            {data: 'header', name: 'header'},
            {data: 'parent', name: 'parent'},
            {data: 'order', name: 'order'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'acoes', name: 'botoes'}
        ]
    });
}

/**
 * Reseta o formulário de pesquisa
 * @param event Evento
 */
function onResetForm(e) {
    $(this).closest('form')[0].reset();
    $(this).closest('form').find('select').select2();
    oTable.draw();
}

/**
 * Realiza o ajax do datatable em seguida atualiza o datatables da tela
 * @param event Evento
 */
function onSearchForm(e){
    oTable.draw();
}
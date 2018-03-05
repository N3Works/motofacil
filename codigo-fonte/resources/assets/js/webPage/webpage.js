$(document).ready(function() {
    $(document).on('submit', '#solicitar_proposta', function() {
        $('.enviarSolicitacao').prop('disabled', true);
        $('.enviarSolicitacao').html('Enviando..');
    });
});

function limparCampos(id) {
    var form = $('#'+id);
    form.find('input').each(function() {
        $(this).val('');
    });
    form.submit();
}
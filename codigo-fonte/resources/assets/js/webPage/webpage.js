$(document).ready(function() {
    $(document).on('submit', '#solicitar_proposta', function() {
        $('.enviarSolicitacao').prop('disabled', true);
        $('.enviarSolicitacao').html('Enviando..');
    });
    $('.select2').select2();
    
    $(document).on('change', '.marca-select', selecionaMarca);
});

function limparCampos(id) {
    var form = $('#'+id);
    form.find('input').each(function() {
        $(this).val('');
    });
    form.find('select').each(function() {
        $(this).val('').select2();
    });
    form.submit();
}

function selecionaMarca() {
    var marca = $(this).val();
    
    
    $.ajax({
        url: 'webPage/buscarModeloEAno/'+marca
    }).done(function(data) {
        $('.anos-select').find('option').remove();
        $('.modelos-select').find('option').remove();
        
        $('.anos-select').append('<option value="">Digite ou selecione o Ano</option>');
        $('.modelos-select').append('<option value="">Digite ou selecione o Modelo</option>');
        
        for (var i in data.anos) {
            $('.anos-select').append('<option value="'+data.anos[i]+'">'+data.anos[i]+'</option>');
        }
        
        for (var x in data.modelos) {
            $('.modelos-select').append('<option value="'+data.modelos[x]+'">'+data.modelos[x]+'</option>');   
        }
        
        $('.anos-select').select2();
        $('.modelos-select').select2();
    });
    
}
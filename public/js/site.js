$(document).ready(function(){
    $("input.dinheiro").maskMoney({prefix:'R$ ', thousands:'.', decimal:',', affixesStay: true});
});
$(function () {
  $('#form-test').on('submit', function () {
    nome_input = $("input[name='nome']");
    email_input = $("input[name='email']");
    datanasc_input = $("input[name='datanasc']");
    senha1_input = $("input[name='senha1']");
    senha2_input = $("input[name='senha2']");
    file_input = $("input[name='file']");

    if (nome_input.val() == '' || nome_input.val() == null) {
      $('#erro-nome').html('O nome é obrigatório');
      return false;
    }

    if (email_input.val() == '' || email_input.val() == null) {
      $('#erro-email').html('O email é obrigatório');
      return false;
    }

    if (datanasc_input.val() == '' || data_input.val() == null) {
      $('#erro-data').html('A data de nascimento é obrigatória');
      return false;
    }

    if (senha1_input.val() == '' || senha1_input.val() == null) {
      $('#erro-senha1').html('A senha é obrigatória');
      return false;
    }

    if (senha2_input.val() == '' || senha2_input.val() == null) {
      $('#erro-senha2').html('A confirmação de senha é obrigatoria');
      return false;
    }

    if (file_input.val() == '' || file_input.val() == null) {
      $('#erro-file').html('A imagem é obrigatoria');
      return false;
    }

    return true;
  });
});

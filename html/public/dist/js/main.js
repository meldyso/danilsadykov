
function application() {
  $.post('/user/application',{ username: $('#username').val()}).then(e=>{
    $('#alertt').removeClass('display');
  });
}



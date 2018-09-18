(function () {
  $(function () {

    $('#modalNewUser').dialog({
      autoOpen: false,
      width: '380px',
      height: 450,
      modal: true,
      buttons: [{
          id: 'saveNewUser',
          text: "Зарегистрироваться",
          click: function () {
            addNewUser();
          }
        }
      ],
      position: {my: "center", at: "top+300px", of: window}
    });

    $('#modalAuth').dialog({
      autoOpen: false,
      width: '380px',
      height: 280,
      modal: true,
      buttons: [{
        id: 'saveNewUser',
        text: "Войти",
        click: function () {
          addNewUser();
        }
      }
      ],
      position: {my: "center", at: "top+300px", of: window}
    });


    $('#logo')
      .on('click', function () {
        window.location = '/';
      })
      .hover(function () {
        $(this).css({'transform': 'rotate(-180deg)'});
      }, function () {
        $(this).css({'transform': 'rotate(0)'});
      });

    $('#newGoods')
      .on('click', 'li', function () {
        var id = $(this).attr('id');
        window.location = 'catalog/' + id;
      });

    $('#buttonNewUser').on('click', function () {
      $('#modalNewUser').dialog('open');
    });

    $('#buttonAuthUser').on('click', function () {
      $('#modalAuth').dialog('open');
    });
  });


  function addNewUser() {

  }
})();
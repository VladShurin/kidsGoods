(function () {
  $(function () {
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
      })
  });
})();
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
      })

  });
})();
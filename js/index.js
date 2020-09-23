  $('#search').click(function() {
    var words = $('#words').val();

      $.ajax({
        url: 'search.php',
        type: 'POST',
        cache: false,
        data: {'words' : words},
        dataType: 'html',
        success: function(data) {
            $('.text').html(data);
          }
      });
});

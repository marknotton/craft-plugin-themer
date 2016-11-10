(function(){

  var elements = {
    header     : {
      target : "header",
      style : "",
    },
    background : {
      target : "body, html",
      style : "background-color",
    },
    buttons    : {
      target : ".btn, .submit",
      style : "background-color",
    },
    headings   : {
      target : "#page-title h1",
      style : "color",
    },
    links      : {
      target : "links",
      style : "",
    },
    sidebar    : {
      target : "#global-sidebar",
      style : "background-color",
    },
    pane       : {
      target : ".pane",
      style : "background-color",
    },
    switch     : {
      target : "switch",
      style : "",
    },
    text       : {
      target : "body",
      style : "color",
    },
    help       : {
      target : "help",
      style : "",
    },
    small      : {
      target : "#footer ul li a",
      style : "color",
    },
  };

  $( ".reset" ).on('click', function(event) {
    event.preventDefault();
    $( ".jscolor" ).each(function() {
      var $this = $(this);
      $this.val($this.data('default'));
      $this.trigger( "change" );
    });
  });

  $( ".jscolor" ).on(function(event) {
    var $this = $(this),
        item = $this.data('id'),
        colour = $this.val();

    $(elements[item].target).css(elements[item].style, '#'+colour);

    $this.css('background-color','#'+colour);
    $('#settings-'+item).val('#'+colour);
  });

})();

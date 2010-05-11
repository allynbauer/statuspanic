function render_module(name, args) {
  $('#' + name).load('modules/' + name + '.module.php?' + args);
}

function activate_module(name, seconds, args) {
  render_module(name, args);
  if (seconds > 0) {
    setInterval("render_module('"+name+"', '"+args+"')", (seconds * 1000));
  }
}

$(document).ready(function() {
  $('.middle').each(function(id, val) {
    var outer_height = $(val).height();
    var inner_height = $(val).children().first().height();
    var buffer = (outer_height - inner_height) / 2;
    var SEL = '#' + $(val).attr('id') + '>div';
    $(SEL).css('marginTop', buffer);
    $(SEL).css('marginBottom', buffer);
  });
});
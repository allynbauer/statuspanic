function render_module(name, type, args) {
  $('#' + name).load('modules/' + type + '/?' + args);
}

function activate_module(name, type, seconds, args) {
  render_module(name, type, args);
  if (seconds > 0) {
    setInterval("render_module('"+name+"', '"+type+"', '"+args+"')", (seconds * 1000));
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
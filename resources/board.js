function render_module(name, args) {
  $('#' + name).load('modules/' + name + '.module.php?' + args);
}

function activate_module(name, seconds, args) {
  render_module(name, args);
  if (seconds > 0) {
    setInterval("render_module('"+name+"')", (seconds * 1000));
  }
}
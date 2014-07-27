
$(document).ready(function(){
 
$('#submit').click(function(){
 
$.post("contact.php", $("#contact").serialize(),  function(response) {
$('#success').html(response);
//$('#success').hide('slow');
});
return false;
 
});
 
});
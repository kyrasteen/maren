
$(document).ready(function(){
 
$('#submit').click(function(){
 
$.get("contact.php", $("#contact").serialize(),  function(response) {
$('#success').html(response);
//$('#success').hide('slow');
});
return false;
 
});
 
});
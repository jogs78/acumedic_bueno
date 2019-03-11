$(document).ready (function () {
    
$('.delete').click (function () {
        
        if (confirm("¿ Está seguro de que desea eliminar ?")) {
            var id = $(this).attr ("title");   
            document.location.href='users/eliminar/'+id;   
        }  
}); 
    
});

$(document).ready(function() {
$('#buscadores').dataTable();
});
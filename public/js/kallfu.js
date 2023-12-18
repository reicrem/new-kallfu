
$(document).ready(function() {
    $('#tb_bodegas').DataTable();

    vbode = function($req) {

        location.href='/vbodega/'+$req;
        //$('#framea').attr('src', '/vbodega');
        //$('#modal-bodega').modal('show');
    };




});








/*
function env_frm() {
    alert("envia formualrio");
    //document.getElementById('frm_bodega').submit();


}
*/

/**
 * Created by leonel on 19/05/16.
 */


function loadAjax(id,numberview) {
    $( id ).on("click", function(){

        var parametros = { view : numberview };
        $.ajax({
            data:  parametros,
            url:   "/sigepro/dashboard/ajaxUserProfile/",
            type:  "post",
            beforeSend: function () {
                // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
            },
            success:  function (response) {

                $("#ajax-middle").html(response);
            }
        });

    });
}


function loadAjaxtProject(numberview,pk) {
        var parametros = {
            view : numberview,
            pk: pk
        };
        $.ajax({
            data:  parametros,
            url:   "/sigepro/dashboard/ajaxProject/",
            type:  "post",
            beforeSend: function () {
                // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
            },
            success:  function (response) {

                $("#ajax-middle").html(response);
            }
        });

}


function loadAjaxtListView(numberview,key) {

        var parametros = {
            view : numberview,
            key: key
        };
        $.ajax({
            data:  parametros,
            url:   "/sigepro/dashboard/listView/",
            type:  "post",
            beforeSend: function () {
                // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
            },
            success:  function (response) {
                $("#ajax-middle").html(response);
            }
      
    });
}
$(document).ready(function () {
        $.ajax({
            type: 'GET',
            url: '/api/APIdatabase',
            dataType: 'json',
            success: function (API) {
                for(let n = 0; n < API.length; n++){
                    $("#usersTable").append("ID: " + API[n].id + "<br>");
                    $("#usersTable").append("Fornavn: " + API[n].Fornavn + "<br>");
                    $("#usersTable").append("Efternavn: " + API[n].Efternavn + "<br>");
                    $("#usersTable").append("Besked: " + API[n].Besked + "<br>");
                    $("#usersTable").append("<hr>");
                }


                if(API.length === 0){
                    $("#usersTable").append("There are no users in the database.");
                }


            },error: function (){
                console.log("Error loading json data from -> [fetchDogImagesFromApi.js]");
                $("#usersTable").append("There are no users in the database.");
            }
        });//Ajax call end.
});//Document ready end.


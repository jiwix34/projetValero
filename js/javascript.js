
    $(function(){
        $("#contact").submit(function(event){
            var nom        = $("#nom").val();
            var prenom      = $("#prenom").val();
            var email      = $("#email").val();
            var objet      = $("#objet").val();
            var message    = $("#message").val();
            var dataString = nom + prenom + email + objet + message;
            var msg_all    = "Merci de remplir tous les champs";
            var msg_alert  = "Merci de remplir ce champs";

            if (dataString  == "") {
                $("#msg_all").html(msg_all);
            } else if (nom == "") {
                $("#msg_nom").html(msg_alert);
            }else if (prenom == "") {
                $("#msg_prenom").html(msg_alert);
            } else if (email == "") {
                $("#msg_email").html(msg_alert);
            } else if (objet == "") {
                $("#msg_objet").html(msg_alert);
            } else if (message == "") {
                $("#msg_message").html(msg_alert);
            } else {

              //ajax
                $.ajax({
                    type : "POST",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success : function() {
                        $("#contact").html("<p>Formulaire bien envoyé</p>");
                    },
                    error: function() {
                        $("#contact").html("<p>Erreur d'appel, le formulaire ne peut pas fonctionner</p>");
                    }
                });
            }

            return false;
        });
    });

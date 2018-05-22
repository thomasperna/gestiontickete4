<html>
    <head>
        <title>Connexion</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctions.js"></script>
       
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            
           $
           (
                function()
                    {
                       $('#btn').click
                                (
                                    function()
                                    {
                                        verificationLogin();
                                        
                                    }
                                );
                        
                    }
           );
        </script>
    </head>
    
    <body>
        <h2>Gestion tickets ==> Connexion</h2>
<!--        <img src="Securite.jpg">-->
        
        </br>
        
        <a>Identifiant :</a>
        <input type="text" name="login" id="login">
        
        </br>
        
        <a>Mot de passe :</a>
        <input type="text" name="pwd" id="mdp">
        
        </br>
        </br>
        
        <input type="button" value="Connexion" id="btn" onclick="verificationLogin()">
    </body>
    
</html>

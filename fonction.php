<?php
            function valid_donnees($donnees){
                $donnees= trim($donnees);// enlever les espaces au début et à la fin de ma string (chaine de caractère)
                $donnees = stripslashes($donnees);//supprime les anti-slash dans ma string 
                $donnees = htmlspecialchars($donnees);//converti les caractères speciaux en entité HTML (https://developer.mozilla.org/fr/docs/Glossary/Entity)
                return $donnees;// retourne la string modifiée 
            }
            ?>
<?php

    function generateRandomPass($length) {
            $password = '';
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';
            $charactersLength = strlen($characters);

            for ($i = 0; $i < $length; $i++){
                $randomCharacter = $characters[rand(0, $charactersLength - 1)];
                $password .= $randomCharacter; 
            }

            return $password; 
        }

?>
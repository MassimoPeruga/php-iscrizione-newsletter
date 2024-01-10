<?php
function verificaEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "La mail è ben formata.";
    } else {
        return "La mail non è ben formata.";
    }
};

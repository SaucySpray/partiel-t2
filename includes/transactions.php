<?php

    function addTransaction($_transactionID) {
        "INSERT INTO
            expenses (date, ammount, description)
        VALUES
            ('".$_POST["date"]."','".$_POST["ammount"]."','".$_POST["description"]."')
        ";
    }

    function deleteTransaction($_transactionID) {

    }

    function editTransaction($_transactionID) {
        
    }
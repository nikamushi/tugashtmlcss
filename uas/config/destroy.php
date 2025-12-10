<?php
include 'conn.php';

function destroyOwner($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM owners Where id = $id");

    return mysqli_affected_rows($conn);
}

function destroyPets($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM pets Where id = $id");

    return mysqli_affected_rows($conn);
}

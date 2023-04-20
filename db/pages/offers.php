<?php
include './db/dbFunctions.php';

function getAllRooms()
{
  $connection = getConnection();
  $result = mysqli_query($connection, 'SELECT * FROM rooms');
  $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($connection);
  return $rooms;
};

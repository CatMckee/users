<?php

if(isset($_POST["id"]) && (isset($_POST["email"]) || isset($_POST["name"]))) {
  $id = intval($_POST["id"]);
  // edit by id
  // redirect
} 
//EOF
<?

/* TP8 Recipe Loader */

$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

if ($name == "Lemon Bars") {
  
  if ($list == "ingredients") {
   include "ingredients.html";
  }
  
  elseif ($list == "equipment") {
    include "equipment.html";
  }
  
  elseif ($list == "directions") {
    include "directions.html";
  }
  
  else {
    echo "1";
  }
  
} elseif ($name == "Monkey Bread Kabobs") {
  
  if ($list == "ingredients") {
   include "bread-ingredients.html";
  }
  
  elseif ($list == "equipment") {
    include "bread-equipment.html";
  }
  
  elseif ($list == "directions") {
    include "bread-directions.html";
  }
  
  else {
    echo "1";
  }  
} 
  elseif ($name == "Lemon Panko Crusted Salmon") {
  
  if ($list == "ingredients") {
   include "salmon-ingredients.html";
  }
  
  elseif ($list == "equipment") {
    include "salmon-equipment.html";
  }
  
  elseif ($list == "directions") {
    include "salmon-directions.html";
  }
  
  else {
    echo "1";
  }
  
}

else {
  echo "0";
}

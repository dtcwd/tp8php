<?

/* TP8 Recipe Loader */

// gets values for the passed recipeName and recipeList
$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

//testing for Lemon Bars recipe name
if ($name == "Lemon Bars") {
  // if found and list names are founds, following files will be returned
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
  
  // tests for this recipe name if the first was not found
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
//tests for this recipe name if the first and second were not found
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
// returns a zero if the recipeName does not match any of the three recipes
else {
  echo "0";
}

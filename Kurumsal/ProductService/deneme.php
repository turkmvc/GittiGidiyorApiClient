<?php
include '../../client.php';


$client = new ggClient();

$deneme = $client->getParentCategories(false, false, false); // ana kategori
$getCategory = $deneme->categories->category;
$GLOBALS['category'] = $getCategory;

$deneme1 = $client->getSubCategories('e',false,false,false); // alt kategori



$GLOBALS['subcategory'] = $deneme1->categories->category;


?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <script type="text/javascript">
    function makeSubmenu(value, say) {
      var category = $GLOBALS['category'];
      var citiesOptions = "";
      if (value.length == 0) {
        document.getElementById("subcategory" + say).innerHTML = "<option></option>";
        document.getElementById("subcategory" + say + 1).innerHTML = "<option></option>";
        document.getElementById("subcategory" + say + 2).innerHTML = "<option></option>";
      } else {
        var myObj, i, j, k, l, t = "";


        for (i in myObj.categories) {
          if (myObj.categories[i].categoryName != value) {
            for (j in myObj.categories[i].subCategories) {
              if (myObj.categories[i].subCategories[j].categoryName != value) {
                for (k in myObj.categories[i].subCategories[j].subCategories) {
                  if (myObj.categories[i].subCategories[j].subCategories[k].categoryName != value) {
                    for (l in myObj.categories[i].subCategories[j].subCategories[k].subCategories) {
                      if (myObj.categories[i].subCategories[j].subCategories[k].subCategories[l].categoryName == value) {
                        for (t in myObj.categories[i].subCategories[j].subCategories[k].subCategories[l].subCategories) {
                          citiesOptions += "<option>" + myObj.categories[i].subCategories[j].subCategories[k].subCategories[l].subCategories[t].name + "</option>";

                        }
                      } else {


                      }
                    }
                  } else {
                    for (l in myObj.categories[i].subCategories[j].subCategories[k].subCategories) {
                      citiesOptions += "<option>" + myObj.categories[i].subCategories[j].subCategories[k].subCategories[l].name + "</option>";

                    }
                  }

                }
              } else {
                for (k in myObj.categories[i].subCategories[j].subCategories) {
                  citiesOptions += "<option>" + myObj.categories[i].subCategories[j].subCategories[k].name + "</option>";
                }
              }
            }
          } else {
            for (j in myObj.categories[i].subCategories) {
              citiesOptions += "<option>" + myObj.categories[i].subCategories[j].name + "</option>";
            }
          }
        }


        document.getElementById("subcategory" + say).innerHTML = citiesOptions;

      }
    }

  function findByName(o, name) {//bu bir arama fonksiyonu. biz bunu kullanarak kategorilerin içinde ismini bildiğimiz bir 
//kategorinin id'sini bulduk. bu id'yi bulmak istememizin sebebi ürün güncellerken bizden kategori id'si isteniyor ancak 
//barkod ile ürün aratıp bulduğumuzda, bize döndürülen üründe sadece kategori adı var.


    if( o.name === name ){//eğer objenin adı istediğimiz isimse objeyi döndür.
      return o;
    }
    var result, p; 
    for (p in o) {
      
        if( o.hasOwnProperty(p) && typeof o[p] === 'object' ) {//eğer objenin içnde başka objeler (property) varsa o property'nin
        //içine gir ve aynı fonksiyonu çağırarak recursive bir şekilde istediğimizi bulana kadar arama yapmaya devam et
                  
            
            result = findByName(o[p], name);
            
            if(result){
                return result;
            }
        }
    }
    return result;
}


    function displaySelected() {
      var parentCategory = document.getElementById("category").value;
      var subCategory1 = document.getElementById("subcategory1").value;
      var subCategory2 = document.getElementById("subcategory2").value;
      var subCategory3 = document.getElementById("subcategory3").value;
      var subCategory4 = document.getElementById("subcategory4").value;
      alert(country + "\n" + city);
    }

    function resetSelection() {
      document.getElementById("category").selectedIndex = 0;
      document.getElementById("subcategory1").selectedIndex = 0;
    }
  </script>
</head>

<body onload="resetSelection()">
  <?php
  $depth = 0;
  function print_menu_1($menu, $key, $depth)
  {
    $indent_string = "    ";

    foreach ($menu as $value) {
      //   $this_key = $value['id'];
      echo str_repeat($indent_string, $depth + 2) . '<option>' . $value['name'] . '</option>' . "\n";
    }
  }

  ?>


  <select id="category" onchange="makeSubmenu(this.value,1)">
    <option value="" disable selected>Choose Category</option>

    <?php
    foreach ($GLOBALS['category'] as $item) {

      $a = "<option value = $item->categoryCode>$item->categoryName </option>";
      print_r($a);
    }
    ?>
  </select>
  <select id="subcategory1" onchange="makeSubmenu(this.value,2)">
    <option value="" disabled selected>Choose Subcategory</option>

    <?php
    
    foreach ($GLOBALS['subcategory'] as $item) {

      $a = "<option value = $item->categoryCode>$item->categoryName </option>";
      print_r($a);
    
    }
    ?>

    <option></option>

  </select>
  <select id="subcategory2" onchange="makeSubmenu(this.value,3)">
    <option value="" disabled selected>Choose Subcategory</option>
    <option></option>
  </select>
  <select id="subcategory3" onchange="makeSubmenu(this.value,4)">
    <option value="" disabled selected>Choose Subcategory</option>
    <option></option>
  </select>
  <select id="subcategory4" onchange="makeSubmenu(this.value,5)">
    <option value="" disabled selected>Choose Subcategory</option>
    <option></option>
  </select>
  <button onclick="displaySelected()">show selected</button>


  <button onclick="clickButton()">Click me!</button>

  <p id="demoj"></p>

  <script>
    function clickButton() {
      var s = document.createElement("script");
      s.src = "demo_file_array.php";
      document.body.appendChild(s);
    }

    function myFunc(myObj) {
      document.getElementById("demoj").innerHTML = myObj.name;
    }
  </script>

</body>

</html>
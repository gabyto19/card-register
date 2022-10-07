<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="style.less" />
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="/products.js"></script>
    <title>Document</title>
</head>
<body onload="first()">

    <form class="product-form" id="product_form"  method="post" action="insert.php">
        <div class="main_nav">
            <h1>Product Add</h1>
            <div class="nav_form" >
                <button type="submit" name="Save" id="Save" >Save</button>
                <a class="cancel" href="index.php">Cancel</a>
            </div>
        </div>

        <div id="product_inputs" class="product_inputs">
            <div>
                <label for="SKU">SKU</label>
                <input type="text" id="SKU" name="SKU" required><br>
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required><br>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" id="price" name="price" required><br>
            </div>
            <div>
                <label for="productType">switcher</label>
                <select name="switcher" id="productType" onchange="products()">
                    <option></option>
                    <option id="DVD" value="DVD">DVD</option>
                    <option id="Furniture" value="Furniture">furniture</option>
                    <option id="Book" value="Book">book</option>
                </select>   
            </div>
        
            <div id="size_div">
                <label for="size">Size(MB)</label>
                <input type="number" id="size" name="size" >
            </div>
            <div id="furniture_div">
                <div>
                    <label for="height">Height(CM)</label>
                    <input type="number" id="height" name="height" ><br>
                </div>
                <div>
                    <label for="width">Width(CM)</label>
                    <input type="number" id="width" name="width" ><br>
                </div>
                <div>
                    <label for="length">Length(CM)</label>
                    <input type="number" id="length" name="length" ><br>
                </div>
            </div>
            <div id="book_div">
                <label for="weight">Weight(KG)</label>
                <input type="number" id="weight" name="weight" >
            </div>
        </div> 
        <p id="result" style="display: none;"></p>

    </form>

    <script>
  $(document).ready(function(){
   var $form = $('form');
   $form.submit(function(){
      $.post($(this).attr('action'), $(this).serialize(), function(response){
            // do something here on success
      },'json');
      return false;
   });
});

</body>
</html>

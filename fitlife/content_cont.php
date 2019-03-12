<?php 
    session_start(); 

    include('server.php');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Fit Life</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/comment_style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="fitness.php" class="brand-logo">Fit Life</a>
          <ul class="right hide-on-med-and-down" class="navbar_link">
            <li><a href="content.php">Recipes</a></li>
            <li><a href="#">Workout Routines</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">face</i></a></li>
          </ul>
    
          <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
        </div>
      </nav>

  <ul id="slide-out" class="side-nav" class="side-nav-right">
    <li><div class="user-view">
    <div class="background">
        <br><div class="account">
      <i class="material-icons">account_box</i></div>
      </div><br>
      <br><form method="post" action="fitness.php"> 
            <label for="username">Username</label> 
            <input name="username" id="username" type="text" /><br /> 
            <label for="password">Password</label> 
            <input name="password" id="password" type="password" /><br /><br>
            <div class="center-align">
              <button class="btn waves-effect waves-light test" type="submit" name="action">Login
              </button>
            </div> 
</form>

    </div></li>
</ul>

<img src="img/cooking.jpg" alt="cook" width="100%"/>

    <?php 
    if(isset($_SESSION['logged_in']) && ($_SESSION['logged_in_access_level'] == 'user')) {
    ?>
    <ul>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

<?php
} ?>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center green-text">Recipes</h1>
      <div class="row center">
        <h5 class="header col s12 light"></h5><br>
      </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Mushroom Butter Masala</h3>
      <h5>Nutritional Information (per serving):<br> Calories 217; Protein 3g; Carbohydrate 20g; Total Fat 14g; Sodium 449g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal11">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/mushroom.jpg" alt="mushroom" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal11" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>10 ounces, mushrooms, chopped<br>
        6 garlic cloves, chopped<br>
        4 green chilis chopped<br>
        1-inch piece ginger, grated<br>
        1 onion, chopped<br>
        2 big or 3 small tomatoes<br>
        7 cashews<br>
        1 teaspoon red chili powder<br>
        1 teaspoon garam masala powder<br>
        1/2 teaspoon turmeric powder<br>
        1/4 cup non-dairy milk<br>
        2 tablespoons vegan butter<br>
        1 tablespoon vegetable oil<br>
        1 teaspoon kasuri methi/dried fenugreek leaves<br>
        Salt, to taste<br>
        Coriander leaves, for garnish</p>

      <h4>Directions:</h4>
      <p>1. Heat oil and butter in a non-stick pan. Add onion, garlic, green chili and ginger and sauté until translucent. Add a pinch of salt while sautéeing so that onion cooks faster.<br><br>
        2. Add the mushroom and sauté until it develops some color.<br><br>
        3. Meanwhile, grind the tomatoes and the cashews together adding a little water to form a smooth paste.<br><br>
        4. Add this ground paste along with red chili powder, garam masala powder, and turmeric powder to the cooked mushrooms and onion and bring it to a boil. Adjust the salt and water for desired consistency. This might take about 4 to 5 minutes.<br><br>
        5. Add the non-dairy milk and again bring to a boil. Finally, add the dried kasuri methi/fenugreek leaves, mix well, and cook for one minute or until you get the desired consistency.<br><br>
        6. Garnish with coriander leaves and serve hot.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Sheet Pan Tofu Stur Fry</h3>
      <h5>Nutritional Information (per serving):<br> Calories 452; Protein 35g; Carbohydrate 422g; Total Fat 63g; Sodium 156g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal12">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/stir.jpg" alt="stir" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal12" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>1 package of tofu, extra firm<br>
        3 cups carrots, peeled and chopped<br>
        3 cups snap peas<br>
        1/4 cup tamari<br>
        2 tablespoons water<br>
        2 tablespoons maple syrup<br>
        1 tablespoon sesame seeds<br>
        1 teaspoon red pepper flakes<br>
        1/2 teaspoon ginger powder</p>

      <h4>Directions:</h4>
      <p>1. Pre-heat oven to 400ºF. Line a large baking sheet (or two smaller baking sheets) with parchment.<br><br>
        2. Drain tofu of excess water and cut into cubes about 1/2-inch squares.<br><br>
        3. Add marinade ingredients to a bowl and whisk to combine.<br><br>
        4. Combine tofu, carrots, and snap peas in a large ziplock bag and pour in marinade. Shake well to coat everything evenly.<br><br>
        5. Pour the tofu and veggies onto the baking sheet and spread evenly.<br><br>
        6. Bake 30-35 minutes, tossing halfway. Serve and enjoy!</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Gluten-Free Naan Bread</h3>
      <h5>Nutritional Information:<br> Calories 1743; Protein 27g; Carbohydrate 258g; Total Fat 73g; Sodium 235g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal13">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/naan.jpg" alt="naan" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal13" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>FOR THE WET INGREDIENTS:<br>
        1 cup unsweetened non-dairy milk<br>
        1/2 cup homemade non-dairy yogurt<br>
        1 tablespoon olive oil<br><br>
        FOR THE DRY INGREDIENTS:<br>
        2 cups all-purpose gluten-free flour<br>
        1/4 cup cornstarch<br>
        1 teaspoon psyllium husk powder<br>
        1-1/2 teaspoon sugar<br>
        1 teaspoon active dry yeast<br>
        1/2 teaspoon salt<br><br>
        FOR THE GARNISH:<br>
        1/4 cup olive oil, for brushing<br>
        1 tablespoon black sesame seeds or cumin seeds, for sprinkling</p>

      <h4>Directions:</h4>
      <p>1. In a small mixing bowl, mix together all wet ingredients. In a large mixing bowl, whisk the dry ingredients together.<br><br>
      2. Add the wet ingredient mixture into the dry ingredient mixture and use a spatula or clean hand to form the dough.<br><br>
        3. Lightly dust a working surface with some gluten-free flour and transfer the yeast dough onto the surface. Roll the dough gently to form a smooth ball and then flatten the ball to form a disc.<br><br>
        4. Divide the dough into 8 pieces and roll each piece into a small smooth ball. Use a rolling pin to form each ball into an oval-shaped disc, approximately 1/8-inch thick.<br><br>
        5. Lightly brush a thin layer of olive oil on top of the naan and sprinkle with sesame seeds or cumin seeds.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Coconut Curry Linguini</h3>
      <h5>Nutritional Information:<br> Calories 797; Protein 12g; Carbohydrate 115g; Total Fat 31g; Sodium 2022mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal14">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/coconut.jpg" alt="coconut" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal14" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>1-2 tablespoons red curry paste<br>
        1 13.66-ounce can coconut milk<br>
        2 tablespoons agave nectar<br>
        1-2 tablespoons vegan fish sauce or tamari<br>
        1 teaspoons of paprika<br>
        1 lime<br>
        1/2 cup Thai basil leaves (sweet basil)<br>
        7 ounces rice noodles<br>
        Thinly sliced green onions<br>
        A handful of coriander, chopped</p>

      <h4>Directions:</h4>
      <p>1. Place your rice noodles in a large bowl of hot water, (not boiling) and set aside.<br><br>
        2. In a large saucepan, add your curry paste and bring to medium-low heat to toast for about 1 minute.<br><br>
        3. Scrape off the coconut cream and add to pan (leaving over the coconut water) and stir until combined.<br><br>
        4. Next, add your agave nectar, vegan fish sauce, paprika, and juice of half your lime. Give it a stir, and give it a taste.<br><br>
        5. Add in your Thai basil leaves and stir, letting the leaves infuse your sauce.<br><br>
        6. Drain your rice noodles. They should be softened, but not cooked.<br><br>
        7. Add your rice noodles to your pan of sauce bringing the heat to medium-high, stirring constantly, for about 3-5 minutes until noodles are cooked through.<br><br>
        8. The noodles will finish cooking in the sauce, and absorb the liquid from the sauce, leaving you with a rich creamy sauce over the noodles.<br><br>
        9. Plate and top with chopped coriander, green onions, and more lime, if desired.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Spinach Dip Crescent Roll Ring</h3>
      <h5>Nutritional Information:<br> Calories 743; Protein 17g; Carbohydrate 37g; Total Fat 59g; Sodium 1337g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal15">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/spinach.jpg" alt="spinach" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal15" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>8 ounces vegan cream cheese<br>
        3 ounces vegan sour cream<br>
        1/2 teaspoon onion powder<br>
        1/4 teaspoon garlic powder<br>
        2 handfuls spinach<br>
        1 cannister vegan crescent rolls</p>

      <h4>Directions:</h4>
      <p>1. Preheat oven to 400°F.<br><br>
        2. Put the vegan cream cheese in a mixing bowl.<br><br>
        3. Pour the vegan sour cream onto the vegan cream cheese and whisk until smooth.<br><br>
        4. Add the onion powder and garlic powder.<br><br>
        5. Chop 2 handfuls of fresh spinach (or add drained frozen spinach) and mix into the creamy mixture.<br><br>
        6. Place crescent triangles overlapping each other to look like a sun or wreath and lay the creamy mixture along the middle. Wrap the dough around the mixture.<br><br>
        7. Bake for about 18 minutes. The outside will be golden while the center will be doughy.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Lemon Avacado Chickpea Mash</h3>
      <h5>Nutritional Information:<br> Calories 919; Protein 17g; Carbohydrate 75g; Total Fat 66g; Sodium 535g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal16">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/lemon.jpg" alt="lemon" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal16" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>1 15-ounce can of chickpeas, drained and rinsed<br>
        2 avocados<br>
        2 tablespoons lemon juice<br>
        2 tablespoons minced green onion<br>
        Salt and pepper, to taste</p>

      <h4>Directions:</h4>
      <p>1. In a medium-sized bowl, mash the chickpeas until almost all the beans have been mashed, leaving a few whole for texture.<br><br>
        2. Add in the avocado, lemon juice, green onion, and a large pinch of salt and pepper. Mash until everything is combined.<br><br>
        3. Taste and add more lemon juice, salt, and pepper as needed.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Cinnamon Tumeric Sweet Potatoes</h3>
      <h5>Nutritional Information (per serving):<br> Calories 209; Protein 15g; Carbohydrate 20g; Total Fat 14g; Sodium 54g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal17">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/cinn.jpg" alt="cinn" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal17" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>3 medium-large sweet potatoes<br>
        2 tablespoons turmeric<br>
        2 tablespoons cinnamon<br>
        2 tablespoons thyme<br>
        Salt and pepper, to taste<br>
        2-4 tablespoons extra virgin olive oil</p>

      <h4>Directions:</h4>
      <p>1. Preheat oven to 400°F.<br><br>
        2. Peel sweet potatoes and cut into bite size pieces.<br><br>
        3. Place potatoes in a large bowl. Add extra virgin olive oil to lightly cover. Add spices, herbs, salt, and pepper. Mix well.<br><br>
        4. Place the potatoes on a sprayed baking sheet.<br><br>
        5. Cook for 45-60 minutes. Serve.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Asian Cauliflower Bites</h3>
      <h5>Nutritional Information (per serving):<br> Calories 419; Protein 15g; Carbohydrate 95g; Total Fat 6g; Sodium 2307mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal18">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/bites.jpg" alt="bites" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal18" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>FOR THE SAUCE:<br>
        3/4 cup coconut sugar or brown sugar<br>
        1 cup tamari<br>
        1 tablespoon rice vinegar<br>
        1/2 orange (juice)<br>
        1 teaspoon orange zest<br>
        2 teaspoons sesame oil<br>
        1/2 teaspoon cracked black pepper<br>
        2 teaspoons fresh grated ginger<br>
        4 cloves garlic, grated<br>
        1 tablespoon red pepper flakes<br>
        1 1/2 tablespoons arrowroot<br>
        1 tablespoon water<br>
        3 tablespoons scallions<br><br>
        FOR THE CAULIFLOWER:<br>
        1 cup almond milk<br>
        1 cup flour<br>
        1 teaspoon garlic powder<br>
        Pepper, to taste<br>
        1 tablespoon olive oil<br>
        1 head of cauliflower<br>
        1 cup panko bread crumbs<br>
        2 tablespoons sesame seeds<br>
        1 scallion, sliced</p>

      <h4>Directions:</h4>
      <p>TO MAKE THE SAUCE:
        1. In a small saucepan over medium-high heat, add all the ingredients except for the arrowroot and water. Whisk everything together and bring to a boil. In a small bowl, stir together the arrowroot and water until it dissolves. Gradually pour the mixture into the boiling sauce while continuously whisking for 1 minute.<br><br>
        2. Reduce heat to medium-low and allow to simmer for 3-5 minutes, until the sauce has thickened. Remove from heat and let cool before pouring into a jar. It should make roughly 1 1/2 cups.<br><br>
        TO MAKE THE CAULIFLOWER:<br>
        3. Preheat oven to 450°F. Cut cauliflower into bite-sized pieces, discarding the stems.<br><br>
        4. Combine almond milk, flour, garlic powder, pepper, and olive oil in a large bowl. Set up a station where you dip the cauliflower bites in the batter and let excess batter drip off. Sprinkle with panko, place on a foil-lined pan, and bake 15 minutes.<br><br>
        5. Remove from the oven and gently toss in the sauce. Cauliflower should be coated but not soaked. Top with sesame seeds while wet. Place back on the pan and bake an additional 5-10 minutes or until cauliflower is tender-crisp. Top with chopped scallions and serve warm.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Lentil Burger with Mustard Sauce</h3>
      <h5>Nutritional Information:<br> Calories 2574; Protein 82g; Carbohydrate 301g; Total Fat 143g; Sodium 1271mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal19">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/burger.jpg" alt="burger" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal19" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>FOR THE MUSTARD SAUCE:<br>
        3 tablespoons yellow mustard<br>
        4 tablespoons maple syrup<br>
        A pinch of curry<br><br>
        FOR THE VEGAN LENTIL BURGER PATTIES:<br>
        1 cup uncooked lentils<br>
        1/3 cup raisins<br>
        1 cup gluten-free bread crumbs<br>
        1/2 cup crushed walnuts<br>
        2 tablespoons mustard sauce<br>
        Salt</p>

      <h4>Directions:</h4>
      <p>TO MAKE THE MUSTARD SAUCE:<br>
        1. Combine the yellow mustard and the maple syrup in a small bowl. Add a pinch of curry if you like and whisk together.<br><br>
        TO MAKE THE VEGAN LENTIL BURGER PATTIES:<br>
        2. If you use uncooked lentils, cook them according to the manufacturer’s instructions. Transfer to a blender.<br><br>
        3. Add the raisins and walnuts to the lentils. Blend until you get a chunky mixture.<br><br>
        4. In a separate bowl, combine the lentil mixture with bread crumbs. Let sit for 5-10 minutes so that the bread crumbs can absorb excess moisture.<br><br>
        5. Form patties and either bake them on the oven at 390°F or fry them in a pan with a bit of oil.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Haliflax Mushroom Donair</h3>
      <h5>Nutritional Information:<br> Calories 1318; Protein 37g; Carbohydrate 178g; Total Fat 58g; Sodium 1429g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal20">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/hali.jpg" alt="hali" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal20" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>FOR THE DONAIR SAUCE:<br>
        1/2 cup raw cashews, soaked for at least 8 hours<br>
        3/4 cup plain unsweetened almond milk<br>
        2 tablespoons agave nectar<br>
        1 tablespoon, plus 1 teaspoon apple cider vinegar<br>
        1 teaspoon garlic powder<br><br>
        FOR THE DONAIR:<br>
        2 tablespoons olive oil<br>
        8 ounces mushrooms, sliced<br>
        1 teaspoon garlic powder<br>
        1 teaspoon onion powder<br>
        1/2 teaspoon dried oregano<br>
        1/2 teaspoon paprika<br>
        1/2 teaspoon black pepper<br>
        1/2 teaspoon salt<br>
        4 pitas<br>
        Sliced tomato<br>
        Sliced red pepper<br>
        Shredded lettuce<br>
        Sliced red onion</p>

      <h4>Directions:</h4>
      <p>1. In a blender, blend cashews, almond milk, and agave nectar, until completely smooth.<br><br>
        2. Transfer to a small sauce pan. Add vinegar and garlic powder. Bring to a boil, whisking frequently. Sauce will begin to thicken after a few minutes. Remove from heat.<br><br>
        3. Meanwhile, heat oil in a cast iron skillet. Add the mushrooms and spices, and sauté until the mushrooms begin to brown and caramelize.<br><br>
        4. To assemble, place the mushrooms and vegetables on top of the pita. Top with donair sauce and serve.</p>
    </div>
  </div><br>

  
  <ul class="pagination center-align">
    <li class="waves-effect"><a href="content.php"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-effect"><a href="content.php">1</a></li>
    <li class="active"><a href="content_cont.php">2</a></li>
    <li class="disabled"><a href="content_cont.php"><i class="material-icons">chevron_right</i></a></li>
  </ul><br><br>

  <div class="divider"></div><br><br>

<h2 class="black-text center-align">Leave a Comment</h2><br><br>

<div class="wrapper">
  <?php echo $comments; ?>
  <form class="comment_form">
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
    </div>
    <div>
      <label for="comment">Comment:</label>
      <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
    </div>
    <button type="button" id="submit_btn">POST</button>
    <button type="button" id="update_btn" style="display: none;">UPDATE</button>
  </form>
</div>

  <footer class="page-footer green">
    <div class="container">
      <div class="row">
        <div class="col l5 s12">
          <h2 class="white-text left-align">Fit Life</h2>
          <h5 class="white-text left-align">#1 source for all things fitness.</h5>
        </div>
        <div class="col l7 s12">
          <h2 class="white-text right-align">About</h2>
          <ul class="right-align">
          <li><a class="white-text" href="#!">Meet Our Trainers</a></li>
          <li><a class="white-text" href="#!">Terms &amp; Conditions</a></li>
          <li><a class="white-text" href="#!">Privacy</a></li>
          <li><a class="white-text" href="#!">Employment</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center-align">
      <a class="white-text icon" href="https://www.facebook.com/"><img src="img/facebook.png" alt="facebook" height="20px" width="20px"/></a>      
      <a class="white-text icon" href="https://twitter.com/?lang=en"><img src="img/twitter.png" alt="twitter" height="20px" width="20px"/></a>      
      <a class="white-text icon" href="https://www.instagram.com/"><img src="img/insta.png" alt="instagram" height="20px" width="20px"/></a> 
</div>    
    </div>
  </footer>

  <a id="scroll" title="scroll" href="#">&#10148;</a>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/scripts.js"></script>

  </body>
</html>
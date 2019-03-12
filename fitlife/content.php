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
      <h3>Asian Seasame Zucchini Noodles</h3>
      <h5>Nutritional Information (per serving):<br> Calories 85; Protein 2g; Carbohydrate 12g; Total Fat 4g; Saturated Fat 1g; Dietary Fiber 2g; Sodium 575mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal1">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/noodles.jpg" alt="noodles" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>1/4 c. packed fresh cilantro, finely chopped<br>
        3 tbsp. seasoned rice vinegar<br>
        1 tbsp. toasted sesame oil<br>
        2 cloves garlic, crushed with press<br>
        2 tsp. crushed red pepper<br>
        2 tsp. sugar<br>
        3 medium zucchini, spiralized</p>

      <h4>Directions:</h4>
      <p>1. In a large bowl, whisk cilantro, vinegar, oil, garlic, red pepper, sugar, and 1/2 teaspoon salt.<br><br>
      2. Add zucchini; toss until well-combined. Serve immediately.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Sweet Potato Mac and Cheese With Spinach</h3>
      <h5>Nutritional Information:<br> Calories 2609; Protein 83g; Carbohydrate 428g; Total Fat 63g; Sodium 1857g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal2">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/sweet.jpeg" alt="sweet" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>2 medium sweet potatoes (about 2 cups cooked)<br>
        1 pound dried pasta shells<br>
        1/3 cup vegan butter<br>
        1/3 cup flour<br>
        2 cups unsweetened non-dairy milk<br>
        3 garlic cloves, minced<br>
        2 teaspoons Dijon mustard<br>
        2 teaspoons white miso<br>
        1/2 teaspoon cayenne<br>
        1 teaspoon nutmeg<br>
        1/2 teaspoon salt<br>
        2 tablespoons nutritional yeast<br>
        2 cups baby spinach, chopped<br>
        Freshly ground pepper, to taste</p>

      <h4>Directions:</h4>
      <p>1. Preheat oven to 425°F. Poke a few holes with a fork into sweet potatoes and wrap them in foil. Bake until cooked through, 
      about 60 minutes. When sweet potatoes are cooked and slightly cool, scoop out the flesh and discard the skins. Set flesh aside.<br><br>
      2. Cook pasta according to package instructions. Drain and set aside.<br><br>
      3. In a medium pot, melt the butter. Stir in flour and cook, stirring frequently for 3-5 minutes until mixture thickens. Stir in half the non-dairy milk and continue stirring another 2 minutes or so as mixture continues to thicken. 
      Stir in sweet potatoes. Add in remaining milk, garlic, mustard, miso, cayenne, nutmeg, nutritional yeast, and salt. Continue cooking another few minutes until a thick sauce consistency is reached.<br><br>
      4. Transfer sauce to a blender and blend until smooth. Place cooked pasta into the sauce pot. Over low heat, pour blended sauce over pasta and stir well. Stir in baby spinach and cook about 2 minutes until pasta is warm and spinach is wilted.<br>
      5. Serve with freshly ground pepper.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Crispy Cauliflower Nuggets</h3>
      <h5>Nutritional Information:<br> Calories 1338; Protein 24g; Carbohydrate 117g; Total Fat 84g; Sodium 533g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal3">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/nuggets.jpg" alt="nuggets" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>1 head of cauliflower, cut into florets<br>
        1 1/2 cups flour<br>
        2 teaspoons garlic powder<br>
        2 teaspoons black pepper<br>
        1 teaspoons paprika<br>
        1 tablespoon salt<br>
        5 tablespoons coconut oil, plus a few extra<br>
        1 cup almond milk</p>

      <h4>Directions:</h4>
      <p>1. Preheat the oven to 400°F. Put the coconut oil on a baking sheet and place in the oven for a few minutes to melt. Remove from oven and make sure it is spread evenly.<br><br>
        2. Put the flour, garlic powder, black pepper, paprika, and salt in a large bowl and mix.<br><br>
        3. In another bowl, pour the almond milk. Working a few a time, dip the cauliflower in the milk and then coat well with the flour mixture. Put all the florets in a single layer on the baking sheet.<br><br>
        4. Bake for about 15 minutes. Flip the cauliflower, brushing the extra almond milk on any floury spots on the cauliflower. Add a bit more coconut oil to the pan if it’s dry. Bake for an additional 15 minutes.<br><br>
        5. Cool on a paper towel and serve with dipping sauces like ketchup.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Colombian Black Bean Stew</h3>
      <h5>Nutritional Information (per serving):<br> Calories 287; Protein 12g; Carbohydrate 53g; Total Fat 3g; Sodium 723g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal4">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/bean.jpg" alt="bean" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal4" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>2 13 1/2-ounce cans black beans<br>
        A dash of olive oil, rice bran oil, or water (for frying)<br>
        Scant 1/2 cup water<br>
        5 garlic cloves<br>
        1 14-ounce can chopped tomatoes<br>
        1 teaspoon ground cumin<br>
        1 vegetable broth cube or vegetable broth<br>
        2 small onions<br>
        1/2 teaspoon ground ginger<br>
        1 heaped teaspoon of dried oregano<br>
        2-4 teaspoons of sugar<br>
        A pinch of ground black pepper</p>

      <h4>Directions:</h4>
      <p>1. Drain the black beans and set aside.<br><br>
        2. Peel and chop the onions and garlic finely.<br><br>
        3. Over a medium heat, warm the oil in a large frying pan and sweat the onions until translucent, about 5-10 minutes. 
        Add the garlic and pan fry everything for about 2 minutes. Next, add the chopped tomatoes, stir, and add the water.<br><br>
        4. Next, add the beans and stir until nicely combined. At this point lower the heat to a simmer, add the vegetable broth cube and let it dissolve completely. 
        Add the cumin, ground ginger, sugar, and dried oregano. Let it simmer to intensify the flavors. Taste and see if it needs a tiny bit more sugar.<br><br>
        5. Let the liquid reduce a little more — this shouldn’t take very long. When done, remove from the heat, sprinkle some ground black pepper, and serve warm..</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Szechuan Hot and Sour Soup</h3>
      <h5>Nutritional Information:<br> Calories 706; Protein 35g; Carbohydrate 110g; Total Fat 25g; Sodium 2119g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal5">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/soursoup.jpg" alt="soup" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal5" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>1 tablespoon sesame oil or toasted sesame oil<br>
        2 teaspoons minced garlic<br>
        1 tablespoon peeled and minced fresh ginger<br>
        1 hot chile pepper, seeded and diced, or cayenne pepper, to taste<br>
        6 cups water or vegetable broth<br>
        1 cup sliced mushrooms (try straw or shiitake)<br>
        1 8-ounce can bamboo shoots<br>
        1 cup chopped tomatoes<br>
        1 cup chopped small zucchini<br>
        1 cup chopped small carrots<br>
        1 tablespoon agave nectar or organic sugar<br>
        1/4 cup, plus 2 tablespoons rice vinegar<br>
        2 tablespoons arrowroot powder dissolved in 1/2 cup cold water<br>
        Half a 14-ounce package extra-firm tofu, grated (optional)<br>
        1/4 cup, plus 2 tablespoons soy sauce, or to taste<br>
        1/4 cup diced green onion</p>

      <h4>Directions:</h4>
      <p>1. Place the oil in a medium pot over medium heat. Add the garlic, ginger, and chile pepper, and stir constantly for 1 minute. Add the water, mushrooms, bamboo shoots, and mixed vegetables and cook for 10 minutes, 
      stirring occasionally.<br><br>
        2. Add the agave, vinegar, and arrowroot mixture, and gently stir until soup thickens. Add the soy sauce and tofu, if using, and cook for an additional 5 minutes or until the vegetables are tender.<br><br>
        3. Add the green onion and mix well before serving.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Cheesy Corn and Smashed Avocado Quesadillas</h3>
      <h5>Nutritional Information (per serving):<br> Calories 85; Protein 2g; Carbohydrate 12g; Total Fat 4g; Sodium 575mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal6">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/queso.jpg" alt="queso" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal6" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>FOR THE VEGAN CHEESE:<br>
        1 15-ounce can corn<br>
        4 tablespoons nutritional yeast<br>
        5 garlic cloves<br>
        Salt and pepper<br><br>
        FOR THE QUESADILLAS:<br>
        1-2 smashed avocados<br>
        1 cup cherry tomatoes<br>
        Your favorite tortillas</p>

      <h4>Directions:</h4>
      <p>TO MAKE THE VEGAN CHEESE:<br>
        1. Combine corn, garlic, nutritional yeast, salt, and pepper to taste in the bowl of a blender or food processor. Process until the mixture is well combined. Don’t over-process or it will end up too smooth.<br><br>
        TO MAKE THE QUESADILLAS:<br>
        2. Put smashed avocado on your favorite tortilla. Add halved cherry tomatoes. Top all of it with a real good amount of cheesy corn. If you like, add a bit more heat with the optional chili powder. Finish with the second tortilla.<br><br>
        3. Cut the quesadilla into triangles, brush them with a bit oil if needed. Bake at 400°F on a parchment paper-lined baking sheet for around 15 minutes, until crispy and golden.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Cauliflower Cheese-Stuffed Sweet Potatoes</h3>
      <h5>Nutritional Information (per serving):<br> Calories 304; Protein 15g; Carbohydrate 42g; Total Fat 10g; Sodium 358g<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal7">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/potato.jpg" alt="potato" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal7" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>4 sweet potatoes<br>
      1/2 head of cauliflower<br>
      1/2 cup nutritional yeast<br>
      1/2 cup vegetable broth or water<br>
      1 garlic clove<br>
      1/2 teaspoon cayenne pepper<br>
      1 small chili pepper<br>
      1 tablespoon white miso<br>
      1 tablespoon lemon juice<br>
      1 teaspoon tahini<br>
      3/4 cup diced tempeh<br>
      1 tablespoon balsamic vinegar<br>
      1 tablespoon apple cider vinegar<br>
      4 sun-dried tomatoes<br>
      1 cup kale<br>
      20 fresh basil leaves<br>
      1/3 cup pecan nuts</p>

      <h4>Directions:</h4>
      <p>TO MAKE THE SWEET POTATOES:<br>
      1. Wash sweet potatoes, place them on a baking tray and use a fork to pierce a few holes into potatoes. Roast them at 360ºF for about 45 minutes, or until fork-tender.<br><br>
      2. Meanwhile, cut cauliflower into large florets. Bring a large saucepan of water to the boil, then add the cauliflower and cook for 15-20 minutes, until cauliflower is soft. Drain and let cool a bit.<br><br>
      TO MAKE THE CHEESE SAUCE:<br>
      3. Add cooked cauliflower, nutritional yeast, broth, garlic, cayenne, chopped chili, miso, lemon juice, and tahini to a blender, and blend until completely smooth.<br><br>
      4. Heat balsamic and apple cider vinegar together in a skillet. Add tempeh cubes and stir quickly to coat. Sauté over high heat until begins to turn crisp, about 5 minutes. Stir frequently.<br><br>
      5. Prepare remaining toppings, such as chopped kale, basil, sun-dried tomatoes, and pecans.<br><br>
      6. To serve, split open the baked potatoes and gently press in on both ends. Fill each potato with cauliflower cheese and toppings.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Tumeric Falafel</h3>
      <h5>Nutritional Information (per serving):<br> Calories 35; Protein 6g; Carbohydrate 25g; Total Fat 2g; Saturated Fat 1g; Dietary Fiber 2g; Sodium 345mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal8">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/falafel.jpg" alt="falafel" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal8" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>1 14-ounce can chickpeas<br>
      2 tablespoons aquafaba (liquid from a can of chickpeas)<br>
      1 handful fresh cilantro or parsley<br>
      1 garlic clove<br>
      1 teaspoon turmeric<br>
      1 teaspoon olive oil<br>
      Salt and pepper, to tasted</p>

      <h4>Directions:</h4>
      <p>1. Preheat oven to 390°F<br>
      2. Combine all ingredients in a blender or food processor. Blend until smooth. Form balls with your hands.<br>
      3. Bake for 20 minutes.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Cashew Cream Stuffed Avacado</h3>
      <h5>Nutritional Information (per serving):<br> Calories 353; Protein 8g; Carbohydrate 20g; Total Fat 29g; Sodium 252mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal9">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/cream.jpg" alt="cream" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal9" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>2 avocados<br>
      FOR THE FILLING:<br>
      1 cup cashews, soaked for 4 hours and rinsed<br>
      1/2 cup water<br>
      1 tablespoon nutritional yeast<br>
      1 teaspoon apple cider vinegar<br>
      2 teaspoons lemon juice<br>
      1 teaspoon tamari<br>
      1/4 clove of garlic<br>
      1/4 teaspoon sea salt<br>
      1 teaspoon extra virgin olive oil<br><br>
      FOR THE GARNISH:<br>
      1 tablespoon chopped chives<br>
      4 Brazil nuts, roughly ground and mixed with 1/2 teaspoon tamari.<br>
      4 cherry tomatoes, julienned<br>
      2 tablespoons paté</p>

      <h4>Directions:</h4>
      <p>1. Blend all ingredients for the filling in high-speed blender until smooth.<br><br>
      2. Cut the avocados in half, remove the seeds, and with a spoon, scoop out the flesh in one piece.<br><br>
      3. Brush olive paté on a plate, place the avocado half on top and fill with the filling. Garnish with ground Brazil nuts and chopped chives. Add the cherry tomato julienne on the side.</p>
    </div>
  </div>

  <div class="divider"></div><br><br><br>

<div class="row gutter expend-height">
    <div class="col s12 m6 l6">
      <h3>Indian Golden Mashed Potatoes with Curried Gravy</h3>
      <h5>Nutritional Information:<br> Calories 1624; Protein 26g; Carbohydrate 184g; Total Fat 90g; Sodium 762 mg<h5>
      <a class="bottom waves-effect waves-ripple btn modal-trigger test" href="#modal10">Ingredients &amp; Directions</a>
    </div>
    <div class="col s12 m6 l6">
      <img src="img/mashed.jpg" alt="mashed" height="370px" width="600px">
    </div>
</div>

<br><br>

  <div id="modal10" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Ingredients:</h4>
      <p>2.2 pounds red potatoes<br>
      1 13.66-ounce can of coconut milk<br>
      1/3 cup tomato sauce<br>
      2 tablespoons olive oil<br>
      1 slice of onion, chopped<br>
      1 teaspoon cumin seeds<br>
      1 teaspoon mustard seeds<br>
      1 tablespoon coriander powder<br>
      1 teaspoon fenugreek powder<br>
      1 teaspoon turmeric powder<br>
      Salt, to taste<br>
      Frozen peas, for garnish</p>

      <h4>Directions:</h4>
      <p>1. Peel, chop, boil, and drain potatoes<br><br>
      2. Sauté a chopped slice of onion in 1 tablespoon oil with a dash of salt.<br><br>
      3. Once onion starts to soften, add 1 teaspoon of cumin and 1 teaspoon mustard seed. After a couple minutes, add a second tablespoon of oil then 1 tablespoon coriander powder and 1 teaspoon turmeric. Mix well and take off heat.<br><br>
      4. Mash the potatoes and add the spiced oil and onion to the potatoes. Mix well. Add salt to taste.<br><br>
      5. In a small pot, add a can of coconut milk and 1/3 cup of tomato sauce. Mix in 1 teaspoon turmeric, 1 teaspoon fenugreek, and 1 teaspoon coriander powder. Mix well and salt to taste.<br><br>
      6. Pour curry gravy on mashed potatoes and top with warm green peas.</p>
    </div>
  </div><br>

  
  <ul class="pagination center-align">
    <li class="disabled"><a href="content.php"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="content.php">1</a></li>
    <li class="waves-effect"><a href="content_cont.php">2</a></li>
    <li class="waves-effect"><a href="content_cont.php"><i class="material-icons">chevron_right</i></a></li>
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
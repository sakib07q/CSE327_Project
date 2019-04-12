<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calorie Intake Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" href="css_files/index.css">
  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/cycle2.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel ="stylesheet" href="css_files/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1|Inconsolata|Roboto|Montserrat|Abril+Fatface" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-expand-md bg-dark navbar-dark" style="background-image: linear-gradient(to right, #0D0D0D, #0D0D0D);">
  <a href="navigation.html" class="logo" style="float: "><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color: #F7B800;">LogOut</a>
      </li>    
    </ul>
  </div>  
</nav>
<p id="calorie">Excuses don't burn calories</p>
<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8" style=""><img src="images/calorie.gif" style="margin-left: 50px;width: 84%"></div>
      <div class="col-sm-4" style="background-color: rgb(0,0,0,);">
        <form action="calorie_intake_calculator.php" method="post">
      <lable>Enter your age</lable>
      <div class="form-group">
        <input type="number" name = "age" placeholder="Years" class="form-control" required>
      </div>
      <lable>Enter your sex</lable>
      <div class="radio">
        <lable><input type="radio" name = "sex" value="male" required> Male</lable>
      </div>
      <div class="radio">
        <lable><input type="radio" name = "sex" value="female" required> Female</lable>
      </div>
      <lable>Enter your height</lable>
      <div class="form-group">
        <input type="number" name = "feet" placeholder="Feet" class="form-control" style="width: 49%; float: left" required>
        <input type="number" name = "inches" placeholder="Inches" class="form-control" style="width: 49%; float: right" required>
      </div>
      <lable>Enter your weight</lable>
      <div class="form-group">
        <input type="number" name = "weight" placeholder="Kilograms" class="form-control" required>
      </div>
      <lable>Enter your activity level</lable>
      <div class="radio">
        <lable><input type="radio" name = "activity_level" value="lightly_active" required> Lightly active</lable>
      </div>
      <div class="radio">
        <lable><input type="radio" name = "activity_level" value="moderately_active" required> Moderately active</lable>
      </div>
      <div class="radio">
        <lable><input type="radio" name = "activity_level" value="very_active" required> Very active</lable>
      </div>
      <div class="radio">
        <lable><input type="radio" name = "activity_level" value="extra_active" required> Extra active</lable>
      </div>
      <button type="submit" name="submit" class="btn btn-default" style="margin: 0px 10px 0px 0px; float: right;" id="btn-submit">Calculate</button>
      </form>
      
    </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-8" style="text-align: center; color: #F7B800; font-size: 150%;">
        <?php
        if (isset($_POST['submit'])){
          function bmr_for_men($height, $weight, $age, $activity){
            if($activity == "lightly_active"){
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) + 5) * 1.3;
              return $bmr;
            }
             else if($activity == "moderately_active"){
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) + 5) * 1.5;
              return $bmr;
            }
             else if($activity == "very_active"){
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) + 5) * 1.7;
              return $bmr;
            }
             else{
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) + 5) * 1.9;
              return $bmr;
            }
          }

          function bmr_for_women($height, $weight, $age, $activity){
            if($activity == "lightly_active"){
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) - 161) * 1.3;
              return $bmr;
            }
             else if($activity == "moderately_active"){
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) - 161) * 1.5;
              return $bmr;
            }
             else if($activity == "very_active"){
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) - 161) * 1.7;
              return $bmr;
            }
             else{
                $bmr = ((10 * $weight) + (6.25 * $height) - (5 * $age) - 161) * 1.9;
              return $bmr;
            }
          }
          $age = $_POST['age'];
          $feet = $_POST['feet'];
          $inches = $_POST['inches'];
          $weight = $_POST['weight'];
          $sex = $_POST['sex'];
          $activity =$_POST['activity_level'];

          $height = ($feet * 30.48) + ($inches * 2.54); 

          if($sex == "male"){
            $result = bmr_for_men($height, $weight, $age, $activity);
          }
          else{
            $result = bmr_for_women($height, $weight, $age, $activity);
          }
        }
      ?>
      <p><?php
        if(isset($_POST['submit'])){
          echo "Your required calorie intake is";
        } 
      ?></p>
      <p style="font-family: 'Inconsolata'; font-size: 500%; margin-top: -35px; margin-bottom: -45px; text-align: center;"><?php
        if(isset($_POST['submit'])){
          echo round($result,2)."cal";
        } 
      ?></p>
    </div>
      <div class="col-sm-2"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-8"><br><br>
      <p style="text-align: center">The calculator is based on the Mifflin-St. Jeor equation, a formula that has been shown to be an accurate way of estimating calorie needs in numerous studies.</p>
      <h1>How Many Calories Should You Eat on Average?</h1>
      <p class="text-justify">An average woman needs to eat about 2000 calories per day to maintain, and 1500 calories to lose one pound of weight per week. An average man needs 2500 calories to maintain, and 2000 to lose one pound of weight per week.<br>However, this depends on numerous factors. These include age, height, current weight, activity levels, metabolic health and several others.</p>
      <h1>What Are Calories?</h1>
      <p class="text-justify">A calorie is a unit that measures energy. Calories are usually used to measure the energy content of foods and beverages. To lose weight, you need to eat fewer calories than your body burns each day.</p>
      <h1>The Best Online Calorie Counters</h1>
      <p class="text-justify">Here is a list of free sites where you can insert foods you’re eating to keep track of your calorie intake:<a href="https://www.healthline.com/nutrition/5-best-calorie-counters#section6" style="text-decoration: none; color: #F7B800"> 5 Best Calorie Counter Websites and Apps.</a><br>All of them are available online and include apps for iPhone/iPad and Android devices.<br>It’s highly recommended to use a calorie counter for at least a few days, to see how many calories, carbs, protein, fat, fiber, vitamins and minerals you’re truly eating.<br>Seeing the numbers like this can often be an eye opener.</p>
      <h1>How to Reduce Calorie Intake Without Starving Yourself</h1>
      <p class="text-justify">Calories are simply a measure of energy.<br>It’s a known fact that in order to gain weight, more calories need to be entering your body than leaving it.<br>Conversely, you lose weight if more calories leave your body than enter it.<br>That being said, cutting calories without taking the foods you eat into account is usually not a sustainable way to lose weight.<br>Though it works for some people, the most end up hungry and eventually give up on their diet.<br>For this reason, it’s highly recommended to make a few other permanent changes to help you maintain a calorie deficit in the long term, without feeling starved.<br>Here are 5 evidence-based diet and lifestyle changes that have been shown to help people lose weight in numerous studies.</p>
      <h3>1. Eating More Protein Can Reduce Appetite, Cut Cravings and Increase the Number of Calories You Burn</h3>
      <p class="text-justify">When it comes to losing weight, protein is the king of nutrients.<br>Adding protein to your diet is the simplest, most effective and most delicious way to lose weight with minimal effort.<br>Studies show that protein both increases your metabolic rate and helps curb your appetite.<br>Because protein requires energy to metabolize, a high-protein diet can increase calories burned by 80–100 calories per day.<br>Protein is also by far the most filling nutrient. One study showed that people who ate 30% of calories as protein automatically ate 441 fewer calories per day.<br>In other words, you can easily increase calories out and reduce calories in just by adding protein to your diet.<br>Protein can also help fight cravings, which are the dieter's worst enemy.<br>In one study, 25% of daily calories as protein reduced obsessive thoughts about food by 60% and cut the desire for late-night snacking by 50%.<br>If you want to lose weight sustainably and with minimal effort, consider making a permanent increase in your protein intake.<br>Not only will it help you lose, it will also prevent or at least significantly reduce weight regain, in case you ever decide to abandon your weight loss efforts.<br>For more details, read this in-depth article about how much protein you should eat.</p>
      <div class="note">
        <p><strong>SUMMARY</strong><br>Increasing your protein intake can boost metabolism, fight cravings and significantly reduce appetite. This can lead to automatic weight loss.</p>
      </div><br>
      <h3>2. Avoid Sugary Soft Drinks and Fruit Juices</h3>
      <p class="text-justify">Another relatively easy change you can make is to eliminate liquid sugar calories from your diet.<br>This includes sodas, fruit juices, chocolate milk and other beverages with added sugar.<br>These products are likely the most fattening aspect of the modern diet, as your brain doesn’t register liquid calories in the same way as solid calories.<br>For this reason, drinking sugary soda doesn't make your brain automatically compensate by having you eat less of other things instead.<br>Studies have shown that sugary drinks are strongly linked to an increased risk of obesity, with one study in children showing a 60% increased risk for each daily serving of a sugar-sweetened beverage.<br>Of course, the harmful effects of sugar go beyond weight gain. It can have disastrous effects on metabolic health and raise your risk of many diseases.<br>Though small amounts of natural sugars from foods like fruit are absolutely fine, large amounts from added sugar and sugary drinks can be an absolute disaster.<br>There is absolutely no physiological need for these beverages and the long-term benefits of avoiding them can be enormous.</p>
      <div class="note">
        <p><strong>SUMMARY</strong><br>It’s important to avoid sugary soft drinks and fruit juices since liquid sugar is the single most fattening aspect of the Western diet.</p>
      </div><br>
      <h3>3. Drinking More Water Can Aid Weight Loss</h3>
      <p class="text-justify">One very simple trick to increase weight loss is to drink more water.<br>This can increase the number of calories you burn for up to 90 minutes.<br>Drinking about 8 glasses (equal to 68 ounces or 2 liters) of water per day can make you burn about 96 more calories.<br>However, the timing of when you drink water may be even more important, as having it before meals can help reduce hunger and make you automatically eat fewer calories.<br>In one 12-week study, drinking 17 ounces (0.5 liters) of water half an hour before meals made people lose 44% more weight.<br>When combined with a healthy diet, drinking more water (especially before meals) does appear to be helpful if you need to lose weight.<br>Caffeinated beverages such as coffee and green tea are also excellent. Their caffeine content can somewhat boost metabolism, at least in the short term.</p>
      <div class="note">
        <p><strong>SUMMARY</strong><br>Studies have shown that drinking water can boost metabolism. Drinking it half an hour before meals can help you eat fewer calories.</p>
      </div><br>
      <h3>4. Exercise and Lift Weights</h3>
      <p class="text-justify">When we eat fewer calories, our bodies compensate by saving energy, making us burn less.<br>This is why long-term calorie restriction can significantly reduce metabolism.<br>Not only that, but it can also lead to loss of muscle mass. Muscle is metabolically active, so this can reduce metabolism even further.<br>The only proven strategy to prevent this effect is to exert your muscles by lifting weights.<br>This has been repeatedly shown to prevent muscle loss and stops your metabolism from slowing down during long-term calorie restriction.<br>Of course, if you’re trying to lose weight, you don't want to just lose fat, you also want to make sure that what is beneath also looks good.<br>If you can't get to a gym, consider doing bodyweight exercises at home, like push-ups, squats, sit-ups, etc.<br>Doing some cardio like walking, swimming or jogging can also be important — not necessarily for weight loss but for optimal health and general wellbeing.<br>Of course, exercise also has a variety of other benefits that go beyond weight loss, such as longevity, lower risk of disease, more energy and feeling better every day.</p>
      <div class="note">
        <p><strong>SUMMARY</strong><br>Lifting weights is important, as it reduces muscle loss and prevents your metabolic rate from slowing down.</p>
      </div><br>
      <h3>5. Reduce Carbohydrate Intake, Especially Refined Carbs and Sugars</h3>
      <p class="text-justify">Cutting carbs is a very effective way to lose weight, as it reduces appetite and makes you eat fewer calories automatically.<br>Studies have shown that eating a low-carb diet until fullness can make you lose about 2–3 times more weight than a calorie-restricted, low-fat diet.<br>Not only that, but low-carb diets also have many other benefits for health, especially for people with type 2 diabetes or metabolic syndrome.<br>But you don’t have to go low-carb. Simply ensure that you eat quality, fiber-rich carbohydrate sources, focusing on whole, single-ingredient foods.<br>If you stick to real foods, the exact composition of your diet becomes less important.</p>
      <div class="note">
        <p><strong>SUMMARY</strong><br>Cutting carbs may aid weight loss but reducing appetite and making you eat fewer calories.</p>
      </div><br>
      <h1>The Bottom Line</h1>
      <p class="text-justify">How many calories you need per day, depends on whether you want to maintain, lose or gain weight, as well as various factors such as your gender, age, height, current weight, activity levels and metabolic health.<br>Reducing calories does not have to mean starving yourself. A few simple diet and lifestyle changes like exercise, proper hydration and increased protein and reduced carb intake can help you lose weight and feel satisfied.</p>
    </div>
    <div class="col-sm-2"></div>
  </div>  
</div>
</body>
<footer>
  <div class="container-fluid">
    <div class="row">
    <div class="col-sm-4"><p class="footer-heading">COMPANY</p><p class="footer-body"><a href="#" class="footer-body">About us</a><br><a href="#" class="footer-body">Our services</a><br><a href="#" class="footer-body">Contacts</a><br><a href="#" class="footer-body">Blog</a></p></div>
    <div class="col-sm-4"><p class="footer-heading">CONTACT</p><p class="footer-body">ishaqniloy1996@gmial.com<br>+880 167676****<br></p>
      <p class="p-company">&copy North South University</p>
    </div>
    <div class="col-sm-4"><p class="footer-heading">ADDRESS</p><p class="footer-body">45/2, Link Road, Gulshan,<br> Dhaka-1200</p></div>
  </div>
</div>
  </footer>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>about</title>
</head>
<body>
<div class="container p-4">
    <!-- start navbar -->
    <?php
    include("include/navbar.php");
    ?>
    <!-- end navbar -->
    
<!-- code -->

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <h3>Why online course?</h3>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
        <p>
        <ul>
        <li>The COVID-19 has resulted in schools shut all across the world. Globally, over 1.2 billion children are out of the classroom.</li>
        <li>As a result, education has changed dramatically, with the distinctive rise of e-learning, whereby teaching is undertaken remotely and on digital platforms.</li>
        <li>Research suggests that online learning has been shown to increase retention of information, and take less time, meaning the changes coronavirus have caused might be here to stay.</li>
        </ul>
        In response to significant demand, many online learning platforms are offering free access to their services, including platforms like BYJU’S, a Bangalore-based educational technology and online tutoring firm founded in 2011, which is now the world’s most highly valued edtech company. Since announcing free live classes on its Think and Learn app, BYJU’s has seen a 200% increase in the number of new students using its product, according to Mrinal Mohit, the company's Chief Operating Officer.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <h3>Our Mission</h3>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>The mission of this website is to connect underprivileged, disadvantaged, and marginalized groups of people – especially youth and women – to education and online labor markets thus, significantly increasing quality income-earning opportunities and economic independence. Combining education and job creation forges is a unique ecosystem. Here people are connected globally with a purpose and mutual benefit.</p>
        <p><strong>“Learn a Skill; the World is Yours”</strong></p>
        <p> Bangladesh believes that investing in the education of youths is something from which everyone will get benefited. The local and freelance market will have more qualified workers; our students will become financially independent equipped with modern skills, and nations like Bangladesh can earn a sizeable amount of foreign currency through online labor markets. </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       <h3>What used in makeing this website?</h3>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <P>It has 2 side:
            <ul><li>user side </li><li>admin side</li></ul>
        </P>
        <p>It's About Online Course System That Have Login, Logout, Register, Password Change ,Welcome Message, Course Enroll And Contact Us Feature For User.

HTML5, CSS3, Bootstrap, PHP, Mysql Was Used To Build This Website.</p>
      </div>
    </div>
  </div>
</div>

    <!-- start footer -->
<?php
    include("include/footer.php");
    ?>
    <!-- end footer -->
</div>
</body>
</html
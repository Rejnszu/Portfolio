<?php




$args = [
  "metaDescription" => "Rejnszu",

  "ogTitle" => "",
  "ogUrl" => get_home_url(),
  "ogSite_name" => "",
  "title" => "Rejnszu portfolio-en"
];
if (is_page(portfolio_en)) {
  get_header('en');
} else {
  get_header();
}
wp_head();
?>

<!-- EKRAN ŁADOWANIA -->
<div id="background_wrap"></div>

<div class="container-fluid loader">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-gear" viewBox="0 0 16 16">
    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
  </svg>
  <span class="loader-left"></span>
  <span class="loader-right"></span>
</div>

<!-- GŁOWNA TREŚĆ STRONY -->
<div class="container-fluid content  text-center">
  <button class="go_top">Go up!</button>
  <!-- O MNIE -->

  <section class="container-fluid about-me__container section" data-name="aboutMe">
    <h1 id="aboutMe">
      <p> &#10094</p> Welcome to my portfolio site<p>&#10095</p>

    </h1>

    <video class="aboutMe-Video" src="<?php echo get_template_directory_uri() . '/assets/about-black-1.webm'; ?>" autoplay loop muted> Your browser does not support the video tag.</video>
    <div class="row">
      <div class="col-sm-12  about-me__col d-flex justify-content-center align-items-center">
        <fieldset class="about-me__fieldset d-flex ">
          <legend id="legend" align="center">About me:</legend>
          <div class="about-me__outer-wrapper col-sm-12 col-xl-8">
            <div class="about-me__inner-wrapper">
              <input class="inner-wrapper__radio" type="radio" name="about" checked>
              <h3 class="inner-wrapper__header">Introduction:</h3>
              <p class="inner-wrapper__text">Hello everyone! My name is Lukas and Welcome to my portfolio site which was made to encourage You to
                hire me as your professional or maybe semi-professional... nah just front-end/web developer. Everything You will
                see here is the example of my skills and dedication to this job which I'm constantly trying to improve.
              </p>
            </div>
            <div class="about-me__inner-wrapper">
              <input class="inner-wrapper__radio" type="radio" name="about">
              <h3 class="inner-wrapper__header">Some facts about me:</h3>
              <p class="inner-wrapper__text">I am a self-taught person who tries to break into the world of commercial development of websites and web applications, as well as everything related to the design of web content. My adventure with "coding" began over a year and a half ago, when I came to the conclusion that my current job is not very developing and it would be appropriate to find a new challenge. Not that I didn't like her, but I needed something that would require constant development of me. As an enthusiast of new technologies and a person curious about the world, I decided that it would be worth getting interested in the subject on which half of our current civilization is based.
              </p>
            </div>
            <div class="about-me__inner-wrapper">
              <input class="inner-wrapper__radio" type="radio" name="about">
              <h3 class="inner-wrapper__header">My career:</h3>
              <p class="inner-wrapper__text">I have finished my engineering studies in the field of energy, but basically I knew from the beginning that it was not for me. At that time, I also didn't feel any interest in computer science, maybe because I always associated it with boring connecting of monitors and mouses to computers, well, I was wrong. Over the last 7 years of my professional career, I have been doing different things. Mainly sales, both on-site and online, taking care of online stores, lighting projects design, as well as assistance in the development of large projects in the field of photovoltaics. Generally speaking, I am familiar with contact with clients and I can talk easily to people ; )..
              </p>
            </div>
            <div class="about-me__inner-wrapper">
              <input class="inner-wrapper__radio" type="radio" name="about">
              <h3 class="inner-wrapper__header">Moje goals:</h3>
              <p class="inner-wrapper__text">I am fully aware that I still make many mistakes, I have gaps in knowledge, and I lack certain habits that would improve the quality of my code, which is why I want to cooperate with people who have been working in the industry for some time and could guide me and show what is most important in this environment.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-xl-4 d-flex align-items-center justify-content-end myFaceWrapper"><span class="imgWrapperFace"><img src=<?php echo get_template_directory_uri() . "/assets/hobbiton-min.jpg"; ?> alt="myface" class=" myFace" loading="lazy"></span>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="quiz-container">
      <h3 id="quizH3">If u want to know me better try out my quiz!</h3>
      <a href="<?php echo get_home_url() ?>/quiz/" target="_blank"><button class="custom-button">
          <p>QUIZ</p>
        </button></a>
    </div>
  </section>
  <!-- UMIEJETNOŚCI -->
  <section class="container-fluid section" data-name="mySkills">
    <div class="h2-wrapper">
      <h2 id="mySkills">
        <p class="left-bracket"> &#10094</p> <span class="h2-inside"> Current level of my coding skills</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
    </div>
    <div class="skills__legend">
      <p class="legend__begginer"><span>*</span> 0% means I have no clue what's that thing means</p>
      <p class="legend__master"><span>*</span> 100% means I can code in that language a space rocket</p>
    </div>
    <div class="row skills" skill-card-container>
      <template data-skill-template>
        <div class="col-sm-12 col-md-4 col-lg-3 skills-div">
          <p data-skill></p>
          <div class="skill-box-new"><span class="skill-box-dot">
              <p data-percent></p>
            </span>
          </div>
        </div>
      </template>

    </div>

  </section>
  <!-- UMIEJĘTNOŚci Praktyczne -->
  <section class="container-fluid section" data-name="mySkillsPractical">
    <div class="h2-wrapper">
      <h2 id="mySkillsPractical">
        <p class="left-bracket"> &#10094</p><span class="h2-inside"> What Can I do?</span>
        <p class='right-bracket'>&#10095</p>
      </h2>
    </div>
    <div class="row">
      <div class="col-sm-12 d-flex flex-column align-items-start code-background ">
        <ul class="practice-skills-list">
          <li><i class="bi bi-check2-all"></i>
            <p>Landing pages</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p>Multi-site websites</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p>Wordpress based pages</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p>Fully interactive pages</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p>Coding functionalities</p>
          </li>

          <li><i class="bi bi-check2-all"></i>
            <p>Connecting webpages/apps with API</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p>JS/React apps</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p>Help with creating projects</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p>Preparing sites for SEO</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Making sites perform smoothly</p>
          </li>
        </ul>
      </div>
    </div>



  </section>
  <!-- Portfolio -->

  <section class="container-fluid section " data-name="port">
    <div class="h2-wrapper">
      <h2 id="port">
        <p class="left-bracket"> &#10094</p><span class="h2-inside">My portfolio</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
    </div>
    <div class="nav__portfolio">
      <ul>
        <li><a href="javascript:void(0);" data-nav="websites">Websites</a> </li>
        <li><a href="javascript:void(0);" data-nav="games">Apps</a> </li>
      </ul>
    </div>
    <div class="row row--portfolio active" data-row="websites">
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>School courses</p> <a href="https://rejnszu.github.io/school-form/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/formularz szkolny.png"; ?>" alt="school courses" loading="lazy"></a>
          <div class="hidden-info">
            Website/app/module made for client. The project was meant to have a form of strongly interactive SPA, however it required to be integrated with wordpress and to be more precise with built in page builder, that's why I went with vanilla JS and tons of CSS, because it was the easiest way to implement it in already built website. Client apart from having ready diagram of development paths, didn't have any idea for design and decided to trust me in this case in 100%.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class=" col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>biker</p> <a href="https://rejnszu.github.io/Bike-Shop-Site/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/biker-min.png"; ?>" alt="biker" loading="lazy"></a>
          <div class="hidden-info">
            Sample front page made for online bike store, just to practice new skills and not get rusty.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Domsi</p> <a href="https://domsi.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/domsi-min.png"; ?>" alt="domsi" loading="lazy"></a>
          <div class="hidden-info">
            In this website client had his own idea for the webiste, however he didn't have any ready project, and needed some help with styling. With a little help of proffesional designer, we created a rough design for him which he accepted with very little changes. After that we coded it and implemented all the necessary things to keep the site working smoothly.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Sprawdzauto</p> <a href="https://www.sprawdzauto.com.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/sprawdzauto-min.png"; ?>" alt="sprawdzauto" loading="lazy"></a>
          <div class="hidden-info">
            Working on this project was pretty tough. Client had no idea what he wanted and in addition didn't want to hire any professional designer, to cut the costs. We had to improvise, so we presented him few different project layouts. He accepted it and was happy what he saw, however in the whole process of creating website he was changing his mind all the time, which finally resulted with the website, that in my opinion could look better, but customer is always right, and was really pleased with what he got. It included coding and optimalization.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Rebro</p> <a href="https://rebro.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/rebro-min.png"; ?>" alt="rebro" loading="lazy"></a>

          <div class="hidden-info">
            This website was meant to be the base of my web-developing business and also a good practice. To be honest it could be better, but it was made at the time I was at the beginning of my coding journey and my styling skills weren't at the level they are at now. That's why I made my own portfolio site.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Newtool</p> <a href="https://newtool.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/newtool-min.png"; ?>" alt="newtool" loading="lazy"></a>

          <div class="hidden-info">
            This website was made as a simple landing page to show the most important information about company. Client didn't want to have anything reallly fancy, just a smoothly working "business card", and that's what he got.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>rehasquad</p> <a href="https://rehasquad.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/reha-min.png"; ?>" alt="rehasquad" loading="lazy"></a>

          <div class="hidden-info">
            This was my first website I made for a client. I know it isn't a showcase of web-developer skills, but it was made really fast and almost for free. Client didn't really care how it would look, however he didn't have any objection about design. The plan was to make a simple website containing all the necessary informations about His business.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>github</p> <a href="https://github.com/Rejnszu?tab=repositories" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/github.png"; ?>" alt="github" loading="lazy" style="background-color:white"></a>
        </div>
      </div>
    </div>
    <div class="row row--portfolio " data-row="games">
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Musify</p> <a href="https://rejnszu.github.io/Musify" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/musify-min.png"; ?>" alt="Musify" loading="lazy"></a>
          <div class="hidden-info">
            My private app, made in react, designed for creating music playlists. Everyday I'm trying to improve it, in hope that one day it will become useful. In addition it's a nice way to check my knowledge in react in practice.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>Więcej informacji</p>
            <p class="hide">Mniej informacji</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Tanks</p> <a href="https://rejnszu.github.io/Tanks-game/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/tanks-min.jpg"; ?>" alt="tanks" loading="lazy"></a>
          <div class="hidden-info">
            Gra tworzona w reactcie w celu praktycznego wykorzystania zdobytej wiedzy połączona z próbą odtworzenia chociaż w niewielkim stopniu starej gry z dzieciństwa.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Tic Tac Toe</p> <a href="https://rejnszu.github.io/Tic-Tac-Toe-AI/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/tictactoe-min.jpg"; ?>" alt="tictactoe" loading="lazy"></a>
          <div class="hidden-info">
            Pierwsza gra stworzona w reactcie, chyba zakończona sukcesem. W grze został zaimplementowany "komputer", który z początkowo raczej mało rozgarniętego zmienił się w potwora ;).
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Crypto Compare</p> <a href=" https://rejnszu.github.io/React-Crypto-MarketCap-Compare/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/crypto-min.jpg"; ?>" alt="crypto" loading="lazy"></a>
          <div class="hidden-info">
            Gra tworzona w reactcie w celu praktycznego wykorzystania zdobytej wiedzy połączona z próbą odtworzenia chociaż w niewielkim stopniu starej gry z dzieciństwa.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Calculator</p> <a href="https://rejnszu.github.io/React-Calculator/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/calculator-min.jpg"; ?>" alt="calculator" loading="lazy"></a>
          <div class="hidden-info">
            Gra tworzona w reactcie w celu praktycznego wykorzystania zdobytej wiedzy połączona z próbą odtworzenia chociaż w niewielkim stopniu starej gry z dzieciństwa.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>FitHits</p> <a href="https://rejnszu.github.io/FitHits/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/fithits-min.jpg"; ?>" alt="fithits" loading="lazy"></a>
          <div class="hidden-info">
            Gra tworzona w reactcie w celu praktycznego wykorzystania zdobytej wiedzy połączona z próbą odtworzenia chociaż w niewielkim stopniu starej gry z dzieciństwa.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Currency Exchange</p> <a href="https://rejnszu.github.io/Currency-exchange/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/currency-min.jpg"; ?>" alt="tanks" loading="lazy"></a>
          <div class="hidden-info">
            Gra tworzona w reactcie w celu praktycznego wykorzystania zdobytej wiedzy połączona z próbą odtworzenia chociaż w niewielkim stopniu starej gry z dzieciństwa.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>More info</p>
            <p class="hide">Less info</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Opinie -->
  <section id="containerReview" class="container-fluid container-review section" data-name="containerReview">
    <div class="h2-wrapper">
      <h2 id="port">
        <p class="left-bracket"> &#10094</p><span class="h2-inside"> What people think about me?</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
    </div>
    <div class="row m-0 container-review-row">
      <div class="col-sm-7 col-review">
        <div class="wrapper-review text-center wrapper-review-1">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i> <img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon" loading="lazy"> </span>
          <h2 class="fullname">My Future boss</h2>
          <h3 class="proffesion">Boss</h3>
          <p class="random-text">"I have no idea how it is possible that i didn't hire him years ago, he is the person
            everyone is looking for."</p>

        </div>
      </div>
      <div class="col-sm-7 col-review">
        <div class="wrapper-review text-center wrapper-review-2">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i> <img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon" loading="lazy"></span>
          <h2 class="fullname">My ex boss</h2>
          <h3 class="proffesion">Boss</h3>
          <p class="random-text">"I hate that guy from previous review, he stole my best employee, where will I find
            another one like that."</p>

        </div>
      </div>
      <div class="col-sm-7 col-review">
        <div class="wrapper-review  text-center wrapper-review-3">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i><img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon" loading="lazy"></span>
          <h2 class="fullname">Wiesław Rejnsz</h2>
          <h3 class="proffesion">Father</h3>
          <p class="random-text">"Talented, but lazy. Sitting all they on computer."</p>

        </div>
      </div>
      <div class="col-sm-7 col-review">
        <div class="wrapper-review text-center wrapper-review-4">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i> <img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon" loading="lazy"></span>
          <h2 class="fullname">Joanna Rejnsz</h2>
          <h3 class="proffesion">Mother</h3>
          <p class="random-text">"Get a job finally, and stop playing this stupid games!"</p>

        </div>
      </div>
    </div>
  </section>
  <!-- KONTAKT/FOOTER -->
  <footer class="container-fluid footer section" data-name="contact">
    <div class="h2-wrapper">
      <h2 id="contact">
        <p class="left-bracket"> &#10094</p> <span class="h2-inside"> If you like my work, contact me!</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6 form-input">
        <div class="h2-wrapper">
          <h2>
            <span class="h2-inside-contact h2-inside"> Through form!</span>


          </h2>
        </div>

        <?php echo apply_shortcodes('[contact-form-7 id="29" title="Rejnszu formularz kontaktowy angielski"]'); ?>
      </div>

      <div class="col-sm-12 col-md-6">

        <div class="h2-wrapper">
          <h2>
            <span class="h2-inside-contact h2-inside"> Directly!</span>


          </h2>

        </div>
        <form class="fetch-data__form">
          <label class="fetch-data__label" for="fetchPassword">To get my contact informations enter password (you may win it in my <a href="<?php echo get_home_url() ?>/quiz/" target="_blank">quiz</a>)</label>
          <input type="text" class="fetch-data__input" id="fetchPassword">
          <span class="fetch-data__loading">Loading data.</span>
          <span class="fetch-data__error">Wrong password, try again.</span>
          <button type="submit" class="fetch-data__button">Submit</button>
        </form>
        <ul class="contact-list">
          <li> Phone number:</li>
          <li>E-mail:</li>

        </ul>
        <ul class="social-list">
          <li class="social-list-li"><a href="#"> <i class="bi bi-facebook social-icon" target="_blank" title="facebook"></i></a></li>
          <li class="social-list-li"><a href="https://github.com/Rejnszu" target="_blank" title="github"> <i class="bi bi-github social-icon"></i></a></li>
          <li class="social-list-li"><a href="#"> <i class="bi bi-twitter social-icon" target="_blank" title="twitter"></i></a></li>
          <li class="social-list-li"><a href="https://www.linkedin.com/in/%C5%82ukasz-rejnsz-167492238/" target="_blank" title="linkedin"> <i class="bi bi-linkedin social-icon"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>

<?php get_footer(); ?>
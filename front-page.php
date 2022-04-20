<?php $args = [
  "metaDescription" => "Rejnszu",

  "ogTitle" => "",
  "ogUrl" => get_home_url(),
  "ogSite_name" => "",
  "title" => "Rejnszu portfolio"
];

get_header(null, $args);
?>





<!-- EKRAN ŁADOWANIA -->
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

  <!-- O MNIE -->

  <div class="container-fluid about-me-container section" data-name="aboutMe">
    <h1 id="aboutMe">
      <p> &#10094</p> Witaj na mojej stronie wizytówce<p>&#10095</p>

    </h1>

    <video src=<?php echo get_template_directory_uri() . "/assets/about-black-1.webm"; ?> autoplay loop muted> Your browser does not support the video tag.</video>
    <!-- <img src="assets/aboutme.gif" alt="aboutgif"> -->
    <div class="row">
      <div class="col-sm-12 col-lg-7 about-me-col d-flex justify-content-center align-items-center">
        <fieldset class="about-me">
          <legend id="word" align="center">O mnie:</legend>
          <div class="about-me-inside-wrapper">
            <h3>Wprowadzenie:</h3>
            <p>Witam wszystkich! Nazywam się Łukasz, a oto moja strona wizytówka, która ma was przekonać do zatrudnienia mnie jako waszego profesjonalnego, no może nie do końca profesjonalnego...ehhh po prostu web developera. Wszystko co znajdziecie na tej stronie jest przykładem moich umiejętności i dedykacji dla tej pracy, którą cały czas staram się udoskonalać.
            </p>
            <h3>Trochę faktów o mnie:</h3>
            <p>Jestem samoukiem, który próboje przebić się do świata komerycjnego tworzenia stron oraz aplikacji internetowych, a także wszystkiego co związane jest z designem treści internetowych. Moja przygoda z "kodowaniem" zaczęła się ponad półtora roku temu, kiedy doszedłem do wniosku, że moja obecna praca mnie nudzi oraz prowadzi mnie do nikąd, nie żebym jej nie lubił, ale potrzebowałem większych wyzwań i czegoś co będzie wymagało ode mnie ciągłego rozwoju. Jako entuzjasta nowych technologii oraz osoba ciekawa świata stwierdziłem, że warto by zainteresować się tematyką, na której opiera się połowa naszej obecnej cywilizacji.

            </p>
            <h3>Moja kariera:</h3>
            <p>Skończyłem studia inżynierskie na kierunku energetyka, ale w zasadzie od początku wiedziałem, że to nie jest dla mnie. W tamtym okresie również nie czułem jakiegoś większego zainteresowania informatyką, może dlatego iż zawsze kojarzyło mi się to z nudnym podpinaniem monitorów i myszek pod komputery, no cóż, byłem w błędzie. Przez ostatnie 7 lat kariery zawodowej zajmowałem się różnymi rzeczami. Głównie sprzedażą, zarówno na miejscu jak i internetową, opieką nad sklepami internetowymi, projektowaniem oświetlenia, a także pomocą przy rozwoju dużych projektów z zakresu fotowoltaiki. Generalnie kontakt z klientem nie jest mi obcy i potrafię rozmawiać z ludźmi ; ).
            </p>
          </div>
        </fieldset>
      </div>
      <div class="col-sm-12 col-lg-5 d-flex align-items-center justify-content-center myFaceWrapper"><span class="imgWrapperFace"><img src=<?php echo get_template_directory_uri() . "/assets/hobbiton-min.png"; ?> alt="myface" class=" myFace"></span>
      </div>
    </div>
    <div class="quiz-container">
      <h3 id="quizH3">Chcesz dowiedzieć się wiecej o mnie, sprawdź mój quiz!</h3>
      <a href="<?php echo get_home_url() ?>/quiz/" target="_blank"><button class="custom-button">
          <p>QUIZ</p>
        </button></a>
    </div>
  </div>
  <!-- UMIEJETNOŚCI -->
  <div class="container-fluid section" data-name="mySkills">
    <div class="h2-wrapper">
      <h2 id="mySkills">
        <p class="left-bracket"> &#10094</p> <span class="h2-inside"> Mój obecny stopień zaawansowania</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
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

  </div>
  <!-- UMIEJĘTNOŚci Praktyczne -->
  <div class="container-fluid section" data-name="mySkillsPractical">
    <div class="h2-wrapper">
      <h2 id="mySkillsPractical">
        <p class="left-bracket"> &#10094</p><span class="h2-inside"> Co potrafię zrobić?</span>
        <p class='right-bracket'>&#10095</p>
      </h2>
    </div>
    <div class="row">
      <div class="col-sm-12 d-flex flex-column align-items-start code-background ">
        <ul class="practice-skills-list">
          <li><i class="bi bi-check2-all"></i>
            <p> Strony wizytówki</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Witryny wielostronnicowe</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Strony oparte na wodpressie</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Strony w pełni interaktywne</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Pomoc przy tworzeniu projektu wizualnego</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Programowanie</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Przygotowanie stron pod pozycjonowanie</p>
          </li>
          <li><i class="bi bi-check2-all"></i>
            <p> Optymalizowanie pod kątem wydajności</p>
          </li>

        </ul>
      </div>
    </div>



  </div>
  <!-- Portfolio -->
  <div class="container-fluid section " data-name="port">
    <div class="h2-wrapper">
      <h2 id="port">
        <p class="left-bracket"> &#10094</p><span class="h2-inside">Moje portfolio</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Domsi</p> <a href="https://domsi.pl/"><img src="<?php echo get_template_directory_uri() . "/assets/domsi-min.png"; ?>" alt="domsi"></a>
          <div class="hidden-info">
            Przy tej witrynie klient miał własny pomysł na stronę internetową, aczkolwiek nie miał żadnego gotowego projektu. Przy drobnej współpracy z projektantem, oraz narzuceniu mu naszej i klienta wizji na stronę, otrzymamliśmy projekt, który w pełni zadowolił zainteresowanego, bez jakichś większych zmian. Następnym krokim było zakodowanie strony oraz zaimplementowanie wszystkich niezbędnych do prawidłowego i płynnego działania strony rzeczy.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>Więcej informacji</p>
            <p class="hide">Mniej informacji</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Sprawdzauto</p> <a href="https://www.sprawdzauto.com.pl/ " target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/sprawdzauto-min.png"; ?>" alt="sprawdzauto"></a>
          <div class="hidden-info">
            Praca nad tym projektem, nie ukrywam, była trudna. Klient nie do końca miał pojęcie czego by chciał, a ponad to, nie chciał zatrudnić profesjonalnego projektanta, który by mu to wszystko poukładał(brak jakichkolwiek materiałów i struktury strony nie ułatwiały sprawy). Musieliśmy improwizować, w związku z czym przedstawiliśmy mu kilka wizji projektu. Spodobało mu się to co zobaczył i zaakceptował jedną z wersji, aczkolwiek podczas całego procesu tworzenia często zmieniał zdanie i narzucał swoje pomysły co finalnie dało stronę, która mogła by wyglądać moim zdaniem lepiej i być bardziej spójna, ale nasz klient nasz pan. To co się liczy to fakt, że finalny efekt bardzo mu się podobał. Po wszystkim strona została zakodowana i w pełni przygotowana do podboju internetu. </div>
          <div class="info-btn d-flex flex-column ">
            <p>Więcej informacji</p>
            <p class="hide">Mniej informacji</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Rebro</p> <a href="https://rebro.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/rebro-min.png"; ?>" alt="rebro"></a>

          <div class="hidden-info">
            Ta strona miała być bazą pod naszą firmę zajmującą się web-developingiem oraz dobrym sposobem na pocwiczenie swoich umiejętności w praktyce. Jeśli mam być szczery to w trakcie jej tworzenia często dochodziło do odmiennych zdań co do tego tego jak ma wyglądać, w związku z czym mam pełną świadomość, iż mogła by wyglądać nieco lepiej. Tworzona była w czasie kiedy moje umiejętności były już na poziomie zadowalającym oraz umożliwiającym mi samodzielną pracę nad projektem, aczkolwiek moja wiedza była nadal mocno ograniczona, a pomysły na design nie tak rozwinięte jak teraz. Dlatego też postanowiłem na nowo stworzyć swój własny projekt, którym jest obecna strona wizytówka. </div>
          <div class="info-btn d-flex flex-column ">
            <p>Więcej informacji</p>
            <p class="hide">Mniej informacji</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>Newtool</p> <a href="https://newtool.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/newtool-min.png"; ?>" alt="newtool"></a>

          <div class="hidden-info">
            Ta strona miała być prostym landing pagem, który miał ukazać najistotniejsze informację na temat firmy. Klient nie oczekiwał niczego specjalnego, po prostu przejrzystą stronę, która będzie reprezentować jego biznes i wydaję mi się, że to właśnie dostał.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>Więcej informacji</p>
            <p class="hide">Mniej informacji</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-xl-4 col-portfolio">
        <div class="portfolio-wrapper">
          <p>rehasquad</p> <a href="https://rehasquad.pl/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/assets/reha-min.png"; ?>" alt="rehasquad"></a>

          <div class="hidden-info">
            To była moja pierwsza strona robiona dla klienta. Mam świadomość iż nie jest ona pokazem umiejętności web-developera, ale była tworzona ona w bardzo któtkim czasie i praktycznie za darmo. Bardziej w ramach poćwiczenia, aniżeli chęci osiągnięcia spektakularnego efektu. Klientowi jednak nie zależało na wyglądzie, a na szybkim wdrożeniu "wizytówki" własnej działalności. Pomimo mojego ogólnego niezadowolenia, klient zaakceptował stronę i był z niej zadowolony.
          </div>
          <div class="info-btn d-flex flex-column ">
            <p>Więcej informacji</p>
            <p class="hide">Mniej informacji</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Opinie -->
  <div id="containerReview" class="container-fluid container-review section" data-name="containerReview">
    <div class="h2-wrapper">
      <h2 id="port">
        <p class="left-bracket"> &#10094</p><span class="h2-inside"> Co ludzie o mnie mówią?</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
    </div>
    <div class="row m-0 container-review-row">
      <div class="col-sm-7 col-review">
        <div class="wrapper-review text-center wrapper-review-1">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i> <img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon"> </span>
          <h2 class="fullname">Mój przyszły szef</h2>
          <h3 class="proffesion">Szef</h3>
          <p class="random-text">"Nie wiem jakim cudem nie zatrudniłem go lata temu, jest to osoba, której każdy poszukuje do swojej firmy!"</p>

        </div>
      </div>
      <div class="col-sm-7 col-review">
        <div class="wrapper-review text-center wrapper-review-2">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i> <img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon"></span>
          <h2 class="fullname">Mój były szef</h2>
          <h3 class="proffesion">Szef</h3>
          <p class="random-text">"Nienawidzę gościa z poprzedniej opinii, ukradł mi najlepszego pracownika, gdzie ja teraz znajdę drugiego takiego jak on?"</p>

        </div>
      </div>
      <div class="col-sm-7 col-review">
        <div class="wrapper-review  text-center wrapper-review-3">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i><img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon"></span>
          <h2 class="fullname">Wiesław Rejnsz</h2>
          <h3 class="proffesion">Ojciec</h3>
          <p class="random-text">"Utalentowany, ale leniwy. Ciągle tylko klika w ten kąkuter."</p>

        </div>
      </div>
      <div class="col-sm-7 col-review">
        <div class="wrapper-review text-center wrapper-review-4">
          <span class="arrow-review-left"><i class="bi bi-arrow-left-circle"></i></span>
          <span class="arrow-review-right"><i class="bi bi-arrow-right-circle"></i></span>
          <span class="img-wrapper"><i class="bi bi-quote"></i> <img src=<?php echo get_template_directory_uri() . "/assets/anon.png"; ?> alt="anon"></span>
          <h2 class="fullname">Joanna Rejnsz</h2>
          <h3 class="proffesion">Matka</h3>
          <p class="random-text">"Znalazł byś sę w końcu porządną pracę, a nie tylko grał w te gierki..."</p>

        </div>
      </div>
    </div>
  </div>
  <!-- KONTAKT/FOOTER -->
  <div class="container-fluid footer section" data-name="contact">
    <div class="h2-wrapper">
      <h2 id="contact">
        <p class="left-bracket"> &#10094</p> <span class="h2-inside"> Jeśli spodobała ci się moja praca, skontaktuj
          się ze mną!</span>
        <p class='right-bracket'>&#10095</p>

      </h2>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6 form-input">
        <div class="h2-wrapper">
          <h2>
            <span class="h2-inside-contact h2-inside"> Poprzez formularz!</span>


          </h2>
        </div>
        <div class="row input-container">

          <div class="col-sm-12">
            <div class="styled-input wide">
              <input type="text" required />
              <label>Imie</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="styled-input">
              <input type="text" required />
              <label>Email</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="styled-input">
              <input type="text" required />
              <label>Numer telefonu</label>
            </div>
          </div>
          <div class="col-sm-12">

            <select id="reason" name="reason" class="styled-input">
              <option value="australia">Strona</option>

              <option value="usa">Oferta pracy</option>
            </select>
          </div>
          <div class="col-sm-12">
            <div class="styled-input wide">
              <textarea required></textarea>
              <label>Wiadomość</label>
            </div>
          </div>
          <div class="col-sm-12 d-flex justify-content-center">
            <div id="sendBtn" class="custom-button-contact">
              <p>Wyślij wiadomość</p> <i class="bi bi-send-check"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">

        <div class="h2-wrapper">
          <h2>
            <span class="h2-inside-contact h2-inside"> Bezpośrednio!</span>


          </h2>

        </div>
        <ul class="contact-list">
          <li>Numer telefonu: 609-660-472</li>
          <li>E-mail: lukaszrejnsz@op.pl</li>

        </ul>
        <ul class="social-list">
          <li class="social-list-li"><a href=""> <i class="bi bi-facebook social-icon"></i></a></li>
          <li class="social-list-li"><a href="https://github.com/Rejnszu" target="_blank"> <i class="bi bi-github social-icon"></i></a></li>
          <li class="social-list-li"><a href=""> <i class="bi bi-twitter social-icon"></i></a></li>
          <li class="social-list-li"><a href=""> <i class="bi bi-linkedin social-icon"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
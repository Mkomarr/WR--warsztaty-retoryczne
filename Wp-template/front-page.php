<?php get_header(); ?>
<?php $retoryka = get_field('retoryka_to_warsztat'); ?>
<?php $najblizszyKurs = get_field('najblizszy_kurs'); ?>
<?php $why = get_field('po_co'); ?>
<?php $who = get_field('autorska_formula_warsztatow'); ?>
<?php $toWhom = get_field('dla_kogo'); ?>
<?php $offer = get_field('oferta'); ?>
<?php $testimonials = get_field('rekomendacje'); ?>

<!-- first section -->
<header id="top">
        <h1>Powiedz to <br />bardziej</h1>
        <div class="img-right say-it"></div>
    </header>
    <div class="hr section"></div>
<!-- about -->
<main>
    <article class="workshop-art">
     <section class="wr-workshop">
            <img src="<?php echo get_template_directory_uri() . '/img/arrow-breadcrums.png' ?>" class="arrow-workshop arrow mobile-hidden" alt="">
            <p class="mobile-hidden wr-calendar"><a href="" id="see-courses-3">>> najbliższe kursy</a></p>
            <img src="<?php echo get_template_directory_uri() . '/img/warsztaty-retoryczne-about.png' ?>" class="mobile-hidden img-about" alt="">
            <h2 class="h2-about"><?php echo $retoryka['haslo']; ?></h2>
            <p class="p-about"><?php echo $retoryka['opis']; ?></p>
     </section>
     <section class="workshop">
      <div class="workshop-content">
        <p class="recent-courses">\\\ <?php echo $najblizszyKurs['pod_retoryka']; ?></p>
        <button class="button button-workshop" id="see-courses-1">
            <span>zobacz kursy </span>
            <span>>></span>
        </button>
      </div>
    </section>
    </article>
<!-- why -->
    <article class="why article-set">
        <h2 class="h2-why"><?php echo $why['po-co-tytul']; ?></h2>
        <h3 class="h3-why-1">\\\ <?php echo $why['improwizacja_tytul']; ?></h3>
        <p class="p-why-1"><?php echo $why['improwizacja_opis']; ?></p>
        <h3 class="h3-why-2">\\\ <?php echo $why['krotko_i_tresciwie']; ?></h3>
        <p class="p-why-2"><?php echo $why['krotko_i_tresciwie_opis']; ?></p>
        <h3 class="h3-why-3">\\\ <?php echo $why['pod_presja']; ?></h3>
        <p class="p-why-3"><?php echo $why['pod_presja_opis']; ?></p>
        <img src="<?php echo get_template_directory_uri() . '/img/po-co-warsztaty-retoryczne.png' ?>" class="mobile-hidden img-why" alt="Po co Warsztaty Retoryczne?">
        <section class="contact-us-breadcrumb">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow-breadcrums.png' ?>" class="arrow arrow-why" alt="Breadcrumbs">
                <a href="" class="contact-why" id="contact-us">>>  napisz do nas</a>
        </section>
    </article>
<!-- what -->
    <article class="article-set what">
        <h2 class="h2-what"><?php echo $who['autorska_formula_haslo']; ?></h2>
        <h3 class="h3-what">\\\ <?php echo $who['dominik_mazur_tytul']; ?></h3>
        <p class="p-what"><?php echo $who['bio']; ?></p>
        <img src="<?php echo get_template_directory_uri() . '/img/warsztaty-retoryczne-dominik-mazur.png' ?>" class="mobile-hidden img-what" alt="Dominik Mazur">
    </article>
<!-- newsletter -->
    <article class="workshop">
        <div class="newsletter-desktop">
            <input type="text" placeholder="\\\ Podaj swój mail i otrzymuj wiedzę" class="newsletter input-newsl">
            <button class="button button-newsletter"><span>zapisz </span><span>>></span></button>
        </div>
    </article>
<!-- to whom -->
    <article class="for-everyone article-set" id="kursy">
        <h2 class="h2-to-whom"><?php echo $toWhom['dla_kogo_haslo']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/img/warsztaty-retoryczne-dla-wszystkich.png' ?>" class="mobile-hidden img-to-whom" alt="">
        <h3 class="h3-to-whom-1">\\\ <?php echo $toWhom['dla_firm_tytul']; ?></h3>
        <ul class="ul-to-whom-1">
            <li>jak zadawać pytania, aby się dowiedzieć czego naprawdę potrzebuje klient, oszczędza to czas i pieniądze</li>
            <li>jesteś w IT i masz pracowników o wrażliwym podejściu do siebie</li>
            <li>każdy ma doświadczenie spotkań na których wszystko się strasznie wlecze, a na sam koniec pada pytanie “czy ktoś ma jeszcze pytania?” i nagle się ktoś zgłasza i wiecie, że spotkanie potrwa jeszcze długo - o tym jak sobie z tym radzić</li>
            <li>jak mówić o produkcie i o sobie innym głosem niż pani z infolinii</li>
            <li>łatwiejsze rozwiązywanie konfliktów
            <li>jak chwalić ludzi</li>
            <li>jak działać w sytuacjach kryzysowych i tłumaczyć wpadki</li>
            <li>jak mówić i dobierać informacje dla zarządu, zespołu, sprzedawców i mangerów.</li>
        </ul>

        <h3 class="h3-to-whom-2">\\\ <?php echo $toWhom['dla_klientow_indywidualnych_tytul']; ?></h3>
        <ul class="ul-to-whom-2">
            <li>gdy trzeba przemawiać do grupy ludzi - jak się przełamać,</li>
            <li>jak mówić, aby przekonać i kogo trzeba przekonywać
            <li>jak myśleć krytycznie i improwizować,</li>
            <li>refleks w dyskusjach, tak aby nie myśleć później - a mogłam/em coś powiedzieć</li>
            <li>jak dojść do słowa</li>
            <li>jak prezentować pomysły, idee i opinie - szybko i żeby były zapamiętane</li>
        </ul>
        <h3 class="h3-to-whom-3">\\\ <?php echo $toWhom['dla_freelancerow_tytul']; ?></h3>
        <ul class="ul-to-whom-3">
            <li>jak tłumaczyć to czym się zajmujesz</li>
            <li>jak wyjaśnić, że to że jesteś freelancerem nie znaczy, że jesteś bezrobotny, radzenie sobie z uprzedzeniami</li>
            <li>jak tłumaczyć idee</li>
            <li>storytelling</li>
            <li>lift talk</li>
        </ul>
    </article>
<!-- offer -->
    <article class="offer article-set" id="offer">
        <h2 class="h2-offer"><?php echo $offer['oferta-haslo']; ?></h2>
        <ul class="ul-offer">
                <li class="li-header"><?php echo $offer['warsztaty_retoryczne_w_grupie']; ?></li>
                 <ul class="group-lvls">
                    <li class="collapse li-basic li-header"><?php echo $offer['grupa_poczatkujaca_tytul']; ?></li>
                        <span class="basic-details">
                        <?php echo $offer['grupa_poczatkujaca_opis']; ?>
                        </span>
                    <li class="collapse li-advanced li-header"><?php echo $offer['grupa_zaawansowana']; ?></li>
                        <span class="advanced-details">
                            <?php echo $offer['grupa_zaawansowana_tekst']; ?>
                        </span>
                    <!-- <li class="collapse">grupa otwarta</li> -->
                 </ul>
                <li class="collapse li-companies ul-short-li li-header"><?php echo $offer['warsztaty_dla_firm']; ?></li>
                    <span class="for-companies">
                        <?php echo $offer['warsztaty_dla_firm_tekst']; ?>
                    </span>
                <li class="collapse li-IT ul-short-li li-header"><?php echo $offer['warsztaty_dla_it']; ?></li>
                    <span class="IT-details">
                        <?php echo $offer['warsztaty_dla_it_tekst']; ?>
                    </span>
                <li class="collapse li-one-to-one ul-short-li li-header"><?php echo $offer['warsztaty_indywidualne_tytul']; ?></li>
                    <span class="one-to-one">
                        <?php echo $offer['warsztaty_indywidualne_tekst']; ?>
                    </span>
        </ul>
<!-- details -->

<!-- sing in -->
        <img src="<?php echo get_template_directory_uri() . '/img/oferta-warsztaty-retoryczne.png' ?>" class="mobile-hidden img-offer" alt="">
        <div class="sign-in">
         <p class="p-offer"><a href="" id="sign-in-link">Zapisz się</a></p>
         <img src="<?php echo get_template_directory_uri() . '/img/arrow-breadcrums.png' ?>" class="arrow arrow-offer" alt=""></div>
    </article>
<!-- see courses -->
    <section class="workshop">
        <div class="workshop-content">
          <p class="recent-courses">\\\ <?php echo $najblizszyKurs['pod_oferta']; ?></p>
          <button class="button button-workshop" id="see-courses-2">
              <span>zobacz kursy </span>
              <span>>></span>
          </button>
        </div>
      </section>
<!-- testimonials -->
      <article class="article-set testimonials"  id="opinions">
        <div class="slider">
                <div class="left-arrow">&lt;</div>
                <div class="right-arrow">></div>
        <h2><?php echo $testimonials['opinie_kursantow']; ?></h2>
         <div class="carousel">
         <section class="testimonial">
              <h3><?php echo $testimonials['testim_1']; ?></h3>
              <p><?php echo $testimonials['testim_1_tekst']; ?></p>
              <img src="<?php echo get_template_directory_uri() . '/img/Maciej-Prostko.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
              <h3>\\\ Aleksander Foks<br/>\ Social Media & Content Marketing & New Business experienced</h3>
              <p>Polecam warsztaty prowadzone przez Dominika! Sama praktyka, indywidualne podejście, brak pustego kołczowania, półśrodków ("złóż rączki do piramidki i jakoś to będzie") czy "szkolenia dla samego szkolenia się". Poza benefitami czysto merytorycznymi, dyskusje prowadzone na WR poszerzają horyzonty i zabijają ćwieka, w pozytywnym tego słowa znaczeniu.</p>
              <img src="<?php echo get_template_directory_uri() . '/img/Aleksander-Foks.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
              <h3>\\\ Van Anh Dam<br/>\ Założycielka Fundacji Girls Code Fun</h3>
              <p>Na warsztaty trafiłam przez przypadek, było to bardzo cenne doświadczenie. Możliwość ćwiczenia w praktyce wypowiedzi publicznych, konstruowania argumentów i uczestnictwa w często zażartej dyskusji, które okazały się cenne w życiu prywatnym, społecznym jak i mojej pracy. Polecam szczególnie ze względu na duże skupienie na praktycznych ćwiczeniach. Cztery gwiazdki, piąta jak prowadzący będzie wyraźniej pisał na tablicy 🤪😁</p>
              <img src="<?php echo get_template_directory_uri() . '/img/Van-Anh-Dam.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
              <h3>\\\ Rafał Momot<br/>\ były wiceprezes LOT AMS, IMS Polska</h3>
              <p>Zajęcia prowadzone są na wysokim poziomie profesjonalnym oraz w bardzo praktyczny sposób. Spędzony tam czas to ciągłe ćwiczenia, którym towarzyszy wsparcie i feedback od prowadzącego. Poza zdobyciem w bardzo komfortowy sposób cennych umiejętności, można również rozwijać swoje inne obszary czy też szerzej spojrzeć na swój dotychczasowy sposób komunikacji.</p>
              <img src="<?php echo get_template_directory_uri() . '/img/Rafal-Momot.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
              <h3>\\\ Paweł Mańkowski<br/>\ broker ubezpieczeniowy Benefit Solution Sp. z o.o.</h3>
              <p class="short-testimonial">Warsztaty wzmocniły moje kompetencje z negocjacji, nauczyłem się kontrolować stres podczas prezentacji biznesowych, a jako bonus – dzięki kursowi potrafię przepraszać bez przepraszania. Polecam!</p>
              <img src="<?php echo get_template_directory_uri() . '/img/Pawel-Mankowski.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
              <h3>\\\ Paweł Ernst<br />\ Prezes Korporacji Akademickiej Aquilonia</h3>
              <p class="short-testimonial">Pierwsze szlify w dyskusjach i przemówieniach zdobywałem właśnie tutaj i uważam, że to były najlepiej zainwestowane pieniądze we własny rozwój.</p>
              <img src="<?php echo get_template_directory_uri() . '/img/Pawel-Ernst.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
            <h3>\\\ Maria Wojas<br/>\ Expert Fundacji Republikańskiej</h3>
            <p>Nigdy nie sądziłam, że będę w stanie przemawiać. Na pierwszych zajęciach u Dominika nie umiałam wykrztusić słowa. Ułożona w głowie wypowiedź zamieniała się w „yyyyyy….” i „eeee…”. W miarę uczęszczania na zajęcia nauczyłam się nie tylko technik przygotowania wypowiedzi, ale przede wszystkim prezentowanie swoich poglądów bez strachu, a z czasem również z radością. Dzięki temu występuję m.in. przed 200-osobowym audytorium, w telewizji i radio. Szczerze polecam, również tym, którym wydaje się to niewykonalne.
            </p>
            <img src="<?php echo get_template_directory_uri() . '/img/maria-wojas.jpg' ?>" class="mobile-hidden" alt="" />
        </section>
          <section class="testimonial">
              <h3>\\\ Paweł Soproniuk<br />\ Partner Neuron PR, jeden z „50 najbardziej kreatywnych w biznesie”.</h3>
              <p>Kurs retoryki prowadzony przez Dominika oceniam bardzo wysoko. Od ponad 15 lat zajmuję się zawodowo komunikacją (zarządzam agencją PR) i kwestie prawidłowej argumentacji i prezentacji własnych poglądów nie są mi zupełnie obce, niemniej zajęcia bardzo porządkują wiedzę i opierają się niemal w całości o zajęcia warsztatowe. Dostajesz wiedzę i ćwiczysz umiejętności w przyjaznej atmosferze. Zdecydowanie polecam!
              </p>
              <img src="<?php echo get_template_directory_uri() . '/img/Pawel-Soproniuk.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
              <h3>\\\ Piotr Jakubiak<br/>\ Senior Associate BI Consultant at Microstrategy</h3>
              <p>WR to doskonały sposób na poprawę swoich umiejętności w zakresie wystąpień publicznych, organizację myśli pod presją czasu/publiki i zyskanie doświadczenia w dyskusjach lub debatach. Zajęcia pokazują, że retoryka nie jest umiejętnością wrodzoną, tylko czymś, co można wyćwiczyć systematycznym treningiem. Zdecydowanie polecam każdemu, nie tylko w celach zawodowych, ale również jako po prostu świetną rozrywkę.</p>
              <img src="<?php echo get_template_directory_uri() . '/img/Piotr-Jakubiak.jpg' ?>" class="mobile-hidden" alt="" />
          </section>
          <section class="testimonial">
            <h3>\\\ Marta Komar<br/>\ Digital Marketing & E-commerce Manager</h3>
            <p class="short-testimonial">Warsztaty Retoryczne to świetna okazja do przetrenowania wszelkiego rodzaju wystąpień publicznych w kontrolowanych i komfortowych warunkach. Każde zajęcia to maksymalna dawka praktycznego treningu z optymalną ilością wiedzy oraz konkretnym feedbackiem.</p>
            <img src="<?php echo get_template_directory_uri() . '/img/Marta-Komar.jpg' ?>" class="mobile-hidden" alt="" />
        </section>
          <!-- UWAGA przy dodawaniu kolejnych sekcji zmień także JS sectionIndex i % translate oraz width .carousel, każda kolejna sekcja to 100% -->
         </div>
        </div>
      </article>
<!-- kontakt -->
    <article class="article-set" id="kontakt">
        <section class="address">
            <h2 class="h2-contact-1">Kontakt</h2>
            <p class="p-contact">\ +48 889 073 582 <br />
                \ kontakt@warsztatyretoryczne.pl<br /><br />
                \ <a href="https://www.facebook.com/warsztatyretoryczne/" target="_blank">facebook</a><br />
                \ <a href="https://www.linkedin.com/in/dominik-mazur-4a077bb3/" target="_blank">linkedin</a><br />
            </p>
        </section>
        <section class="form">
        <h2 class="h2-contact-2">Napisz do nas</h2>
        <?php echo do_shortcode( '[contact-form-7 id="15" title="Napisz do nas"]' ); ?>
        </section>
    </article>
</main>

<?php get_footer(); ?>
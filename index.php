<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="src/fonts/iconfont/material-icons.css"/>
    <link rel="stylesheet" href="src/chosen/chosen.min.css" type="text/css"/>
    <link rel="stylesheet" href="src/slick/slick/slick.css" type="text/css"/>
    <link rel="stylesheet" href="src/slick/slick/slick-theme.css" type="text/css"/>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_US"></script>
    <script src="src/js-files/jquery-3.5.0.min.js"> </script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="src/chosen/chosen.jquery.min.js"></script>
    <script src="src/slick/slick/slick.min.js"></script>
    <script src="src/js-files/buttons.js"></script>
    <script src="src/js-files/menu-list.js"></script>
    <script src="src/js-files/formDayRate.js"></script>
    <script src="src/js-files/chosenSelect.js"></script>
    <script src="src/js-files/formEmployees.js"></script>
    <script src="src/js-files/slick.js"></script>
    <script src="src/js-files/map.js"></script>
    <script src="src/js-files/link-icons.js"></script>
    <title>M-cash</title>
  </head>
  <body>
    <div class="wrapper">
      <main class="page">
        <div class="main-screen js-main-screen">
          <div class="container">
            <div class="wrapper__flex-sb">
              <div class="logo logo__pos"> <img src="src/img/logo1.png" alt="logo"/></div>
              <nav class="menu">
                <ul class="menu__list">
                  <li class="menu__li"><a class="menu__a" href="#about">About Us</a></li>
                  <li class="menu__li menu__topmenu js-menu-list"><a class="menu__a expand expand__li" href="#">Resources</a>
                    <ul class="menu__submenu hide">
                      <li class="menu__li menu__li--view"><a class="menu__a" href="#">Our Resource 1</a></li>
                      <li class="menu__li menu__li--view"><a class="menu__a" href="#">Our Resource 2</a></li>
                      <li class="menu__li menu__li--view"><a class="menu__a" href="#">Our Resource 3</a></li>
                    </ul>
                  </li>
                  <li class="menu__li"><a class="menu__btn js-button" href="#about">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="wrapper__flex-row">
            <div class="belief-info">
              <div class="belief-info__container">
                <div class="belief-info__title-belief">Be Smart, Think Smart, Save Money</div>
                <div class="belief-info__text-belief">Compare your take-home today</div>
                <form id="form" class="phone-submit phone-submit__pos" action="send.php" method="post">
                  <input class="phone-submit__phone js-phone" type="number" placeholder="Phone Number" name="PhoneNumber" min="0" oninput="validity.valid||(value='');" autofocus="autofocus"/>
                  <input class="phone-submit__rate js-rate" type="number" placeholder="Day Rate" name="DayRate" min="1" oninput="validity.valid||(value='');"/>
                  <input class="phone-submit__submit js-DayRate-Submit" type="submit" value="Submit" name="submit"/>
                  <div class="hide-show__dark-block hide js-hidden-block">
                    <div class="hide-show__hidden-block">Your data has been received, we will call you back soon.</div>
                  </div>
                  <div class="hide-show__dark-block hide js-no-data-block"> 
                    <div class="hide-show__hidden-block">Enter your data please.</div>
                  </div>
                </form>
              </div>
            </div>
            <div class="main-screen__img-pos">
              <div class="main-screen__img"><img src="src/img/img.png" alt="main-screen-img"/></div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="features">
            <div class="title features__title">Features</div>
            <div class="text features__text">Our key competitive advantages</div>
            <div class="features__advantages">
              <div class="container">
                <div class="wrapper__flex-sa">
                  <div class="advantages-elem">
                    <div class="advantages-elem__icon1"><img src="src/img/feauture1.png" alt="feauture-icon"/></div>
                    <div class="advantages-elem__title">Header</div>
                    <div class="advantages-elem__text">Interdum et malesuada fames ac ante primis in faucibus. Duis vitae sem lacus. ut eros vel libero pharetra pharetra. Praesent nec pellentesque risus. </div>
                  </div>
                  <div class="advantages-elem">
                    <div class="advantages-elem__icon2"><img src="src/img/feauture2.png" alt="feauture-icon"/></div>
                    <div class="advantages-elem__title">Header</div>
                    <div class="advantages-elem__text">Interdum et malesuada fames ac ante primis in faucibus. Duis vitae sem lacus. ut eros vel libero pharetra pharetra. Praesent nec pellentesque risus. </div>
                  </div>
                  <div class="advantages-elem">
                    <div class="advantages-elem__icon3"><img src="src/img/feauture3.png" alt="feauture-icon"/></div>
                    <div class="advantages-elem__title">Header</div>
                    <div class="advantages-elem__text">Interdum et malesuada fames ac ante primis in faucibus. Duis vitae sem lacus. ut eros vel libero pharetra pharetra. Praesent nec pellentesque risus. </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="steps">
            <div class="title steps__title">How it works</div>
            <div class="text steps__text">Get the result in 3 easy steps</div>
            <div class="steps__count">
              <div class="container">
                <div class="wrapper__flex-sb">
                  <div class="steps-elem">
                    <div class="steps-elem__title">01</div>
                    <div class="steps-elem__text">Enter your details</div>
                  </div>
                  <div class="steps-elem">
                    <div class="steps-elem__title">02</div>
                    <div class="steps-elem__text">We calculate your take-home from over 200+ payroll provider</div>
                  </div>
                  <div class="steps-elem">
                    <div class="steps-elem__title">03</div>
                    <div class="steps-elem__text">We contact you to give you the results</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="action">
            <div class="action-block">
              <div class="action-block__decor1"> <img src="src/img/decor1.png" alt="decor"/></div>
              <div class="action-block__decor2"> <img src="src/img/decor2.png" alt="decor"/></div>
              <div class="action-block__title">Call to action</div>
              <div class="action-block__text">Mauris sed dapibus metus. Integer dictum fringilla metus, facilisis lacinia lorem facilisis eget. Mauris auctor lacinia velit, in pretium lectus placerat nec. Nam porttitor nisi in velit blandit ultricies. </div>
              <button class="action-block__button js-button">Learn more</button>
            </div>
          </div>
          <div class="employees">
            <div class="employees__block">
              <div class="decor-block"><img class="decor3" src="src/img/decor3.png" alt="decor"/><img class="decor4" src="src/img/decor3.png" alt="decor"/></div>
              <div class="employees__titles"><span class="employees__title">Number of employees</span><span class="employees__title">For the payroll, I use</span><span class="employees__title"> </span></div>
              <form class="employees__buttons">
                <input class="employees__button1 js-number-employees" type="number" oninput="validity.valid||(value='');"/>
                <div class="b-input">
                  <select class="employees__button2 expand expand__btn b-input__input my_select_box js-select-options" name="select" multiple="multiple">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                    <option value="6">Option 6</option>
                    <option value="7">Option 7</option>
                    <option value="8">Option 8</option>
                    <option value="9">Option 9</option>
                    <option value="10">Option 10</option>
                    <option value="11">Option 11</option>
                    <option value="12">Option 12</option>
                    <option value="13">Option 13</option>
                    <option value="14">Option 14</option>
                    <option value="15">Option 15</option>
                  </select>
                </div>
                <input class="employees__button3 js-button js-employees-submit" type="submit" value="Compare plans" name="submit"/>
                <div class="hide-show__dark-block hide js-select-block">
                  <div class="hide-show__hidden-block">Select some options please</div>
                </div>
                <div class="hide-show__dark-block hide js-employees-block">
                  <div class="hide-show__hidden-block">Enter number of employees please</div>
                </div>
              </form>
            </div>
          </div>
          <div class="price">
            <div class="title price__title">Price</div>
            <div class="text price__text">Compare our tariff plans</div>
            <div class="tiers">
              <div class="tier tier__pos js-tier1">
                <div class="tier__title">Tier 1</div>
                <div class="tier__price"><span class="tier__currency">$ </span><span class="tier__number">11.99 </span><span class="tier__month">/ month</span></div>
                <ul class="tier__options">
                  <li class="tier__option-li js-tr1">Option 1</li>
                  <li class="tier__option-li js-tr1">Option 2</li>
                  <li class="tier__option-li js-tr1">Option 3</li>
                  <li class="tier__option-li js-tr1">Option 4</li>
                  <li class="tier__option-li js-tr1">Option 5</li>
                </ul>
                <button class="tier__btn js-button">Choose</button>
              </div>
              <div class="tier tier__pos js-tier2">
                <div class="tier__title tier__title--dark">Tier 2</div>
                <div class="tier__price tier__price--dark"><span class="tier__currency">$ </span><span class="tier__number">19.99 </span><span class="tier__month">/ month</span></div>
                <ul class="tier__options">
                  <li class="tier__option-li js-tr2">Option 6</li>
                  <li class="tier__option-li js-tr2">Option 7</li>
                  <li class="tier__option-li js-tr2">Option 8</li>
                  <li class="tier__option-li js-tr2">Option 9</li>
                  <li class="tier__option-li js-tr2">Option 10</li>
                </ul>
                <button class="tier__btn tier__btn--dark js-button">Choose</button>
              </div>
              <div class="tier js-tier3">
                <div class="tier__title">Tier 3</div>
                <div class="tier__price"><span class="tier__currency">$ </span><span class="tier__number">29.99 </span><span class="tier__month">/ month</span></div>
                <ul class="tier__options">
                  <li class="tier__option-li js-tr3">Option 11</li>
                  <li class="tier__option-li js-tr3">Option 12</li>
                  <li class="tier__option-li js-tr3">Option 13</li>
                  <li class="tier__option-li js-tr3">Option 14</li>
                  <li class="tier__option-li js-tr3">Option 15</li>
                </ul>
                <button class="tier__btn js-button">Choose</button>
              </div>
            </div>
          </div>
          <div class="partners">
            <div class="title partners__title">Our partners</div>
            <div class="text partners__text">We work with a lot of partners, it would be ugly of us not to mention them</div>
            <div class="partners__links">
              <div class="container">
                <div class="wrapper-flex-se"><a class="partners__link" href="https://www.bp.com"><img src="src/img/partner1.png" alt="www.bp.com"/></a><a class="partners__link" href="https://www.virgin.com"><img src="src/img/partner2.png" alt="www.virgin.com"/></a><a class="partners__link" href="https://www.salisbury.nhs.uk"><img src="src/img/partner3.png" alt="www.salisbury.nhs.uk"/></a><a class="partners__link" href="https://www.fraserhealth.ca"><img src="src/img/partner4-1.png" alt="www.fraserhealth.ca"/></a><a class="partners__link" href="https://www.sony.co.uk"><img src="src/img/partner5.png" alt="www.sony.co.uk"/></a></div>
              </div>
            </div>
          </div>
          <div class="review">
            <div class="title review__title">Review</div>
            <div class="text review__text">Our partners are in a hurry to share their opinions about us</div>
            <div class="slider slider__pos">
              <div class="slider__container">
                <div class="slicker">
                  <div class="slicker__item">
                    <p class="slicker__text">Fusce faucibus euismod nisl non fringilla. Integer semper dui justo, quis cursus mi tempus in. Sed pretium diam ex, non convallis magna pretium vel. Maecenas semper augue vel</p><span class="slicker__name">Sahara Reeves</span><span class="slicker__comma">&#44;&#44;</span>
                  </div>
                  <div class="slicker__item">
                    <p class="slicker__text">Etiam hendrerit malesuada vestibulum. Nunc sed tortor enim. Suspendisse ultrices elit ut elit scelerisque, sit amet pharetra felis viverra. Morbi ultricies orci augue.</p><span class="slicker__name">Samirah Mckeown</span><span class="slicker__comma">&#44;&#44;</span>
                  </div>
                  <div class="slicker__item">
                    <p class="slicker__text">Sed sed posuere urna, et dignissim ex. Mauris sit amet ultrices orci, ut fermentum dui. Nulla ut efficitur leo, at efficitur magna. Vestibulum ante ipsum primis</p><span class="slicker__name">Sahara Mckeown</span><span class="slicker__comma">&#44;&#44;</span>
                  </div>
                  <div class="slicker__item">
                    <p class="slicker__text">Fusce volutpat ex ac magna aliquet porta. Donec fermentum pretium tellus, et consequat leo blandit eu. Mauris varius felis massa, bibendum egestas risus vehicula et.</p><span class="slicker__name">Samirah Reeves</span><span class="slicker__comma">&#44;&#44;</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="faq">
            <div class="container">
              <div class="title faq__title">FAQ</div>
              <div class="text faq__text">The answer to the questions you were afraid to ask</div>
              <div class="wrapper__flex-sb">
                <div class="faq__block">
                  <p class="faq__block-title">Maecenas fringilla ante metus?</p>
                  <p class="faq__block-text">Vestibulum eget feugiat nisl, aliquet ultrices nisi. Suspendisse quis nulla massa. Nunc eleifend mi nec molestie aliquam. Nulla turpis nunc, commodo a est id, pretium convallis sem. Praesent faucibus et neque at blandit. Quisque eget tincidunt enim, eget tempor ex.</p>
                </div>
                <div class="faq__block">
                  <p class="faq__block-title">Duis justo diam, rutrum non dignissim?</p>
                  <p class="faq__block-text">Sed quis urna quam. Fusce vitae hendrerit purus. Donec aliquam justo sed vulputate porttitor. Integer laoreet lacinia odio id finibus. Proin mi libero, accumsan nec mauris nec, malesuada auctor orci. Mauris aliquet convallis eros, id ultrices mi sodales vel.</p>
                </div>
              </div>
              <div class="wrapper__flex-sb">
                <div class="faq__block">
                  <p class="faq__block-title">Phasellus tellus urna, malesuada vel est sit amet?</p>
                  <p class="faq__block-text">Sed ultricies eget velit quis dictum. Nulla finibus pellentesque arcu in rutrum. Maecenas ipsum lorem, lobortis maximus cursus nec, hendrerit volutpat sem. Nam rutrum sed dolor eget fringilla. Vestibulum erat velit, tincidunt eu ullamcorper in, hendrerit sed nunc.</p>
                </div>
                <div class="faq__block">
                  <p class="faq__block-title">Cras leo nulla, lacinia non suscipit sed, scelerisque nisi?</p>
                  <p class="faq__block-text">Fusce volutpat ex ac magna aliquet porta. Donec fermentum pretium tellus, et consequat leo blandit eu. Mauris varius felis massa, bibendum egestas risus vehicula et. Fusce faucibus euismod nisl non fringilla. Integer semper dui justo, quis cursus mi tempus in. </p>
                </div>
              </div>
              <button class="faq__button js-button">All questions</button>
            </div>
          </div>
          <div class="map" id="yandexmap"><a name="about"></a>
            <div class="map-contacts map-contacts__pos">
              <div class="map-contacts__title">Contact</div>
              <div class="map-contacts__text">
                <p>Phone:</p>
                <p>0 800 123 45 67</p>
              </div>
              <div class="map-contacts__text">
                <p>Hours available:</p>
                <p>11AM — 8PM</p>
              </div>
              <div class="map-contacts__text">
                <p>Email:</p>
                <p>support@yoursite.com</p>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="container">
              <div class="superfooter">
                <div class="superfooter__logo-text">
                  <div class="superfooter__logo"><img src="src/img/logo2.png" alt="logo"/></div>
                  <div class="superfooter__text">Praesent varius feugiat dolor, a pulvinar leo facilisis blandit. Sed quis lobortis mauris, et lacinia justo. Sed sollicitudin risus consequat pulvinar efficitur. Praesent ac augue in lorem laoreet bibendum. Vestibulum mattis accumsan nulla eget sagittis. </div>
                </div>
                <div class="superfooter__links-blocks">
                  <div class="superfooter__block-link">
                    <div class="superfooter__link-title">Documents</div>
                    <div class="superfooter__link-text"><a class="superfooter__link" href="#">Privacy policy</a><a class="superfooter__link" href="#">Terms and conditions</a></div>
                  </div>
                  <div class="superfooter__block-link">
                    <div class="superfooter__link-title">Menu</div>
                    <div class="superfooter__link-text"><a class="superfooter__link" href="#">About Us</a><a class="superfooter__link" href="#">Resources</a><a class="superfooter__link" href="#">Contact Us</a></div>
                  </div>
                  <div class="superfooter__block-link">
                    <div class="superfooter__link-title">About company</div>
                    <div class="superfooter__link-text"><a class="superfooter__link" href="#">Company no.: 12345678</a><a class="superfooter__link" href="#">VAT Number: 123 4567 89</a></div>
                  </div>
                  <div class="superfooter__block-link">
                    <div class="superfooter__link-title">Follow Us</div>
                    <div class="superfooter__link-icons"><a class="superfooter__link" href="https://www.facebook.com/"><img class="js-icon1" src="src/img/social1.png" alt="facebook-icon"/></a><a class="superfooter__link" href="https://www.linkedin.com/"><img class="js-icon2" src="src/img/social2.png" alt="linkedin-icon"/></a></div>
                  </div>
                </div>
              </div>
              <div class="subfooter">Trinity Court, Molly Millars Ln, Wokingham RG41 2PY, United Kingdom</div>
            </div>
          </footer>
        </div>
      </main>
    </div>
  </body>
</html>
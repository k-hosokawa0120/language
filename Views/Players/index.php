<?php
  //session_start();
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  // exit;
  // $player = new PlayerController();
    $users = new PlayerController();
     // $player->playerTmp();
         // var_dump($_SESSION['id']);
         // exit;
    // $users->signin2();

    //$player = new PlayerController();
    //$params = $player->view();
    //$_SESSION['nickname'] = $params['player']['nickname'];
    // exit;
     // $params = $player->index();
     // if(!isset($_SESSION[''])){
     //         }else{
     //           echo "ログインされていません";
     //           header('Location:signup.php');
     //           exit;
     //         }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>メインページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <header>
    <?php if(isset($_SESSION['id'])): ?>
    <div class="header_parent">
      <?php include(__DIR__.'/header2.php');?>
    </div>
    <?php endif; ?>
    <?php if(!isset($_SESSION['id'])): ?>
    <div class="header_parent">
      <?php include(__DIR__.'/header1.php');?>
    </div>
    <?php endif; ?>
  </header>

 <main>

<?php if(isset($_SESSION['id'])): ?>
  <div class="lang-selector-test our-story-container" dir="ltr">
  <div class="our-story-header-wrapper">
    <div class="our-story-header">
      <span class="svg-nfLogo our-story-logo nfLogo">
    </div>
    <div class="our-story-cards">
      <div class="top">
          <div class="our-story-card hero-card hero_fuji vlv">
            <div class="our-story-card-background">
              <div class="concord-img-wrapper">
                <!-- <img class="concord-img vlv-creative" src="/img/world.jpeg" srcset="" alt=""> -->
                <div class="concord-img-gradient"></div>
              </div>
            </div>
            <div class="our-story-card-text">
              <div class="main-title">
                  <h1 id="" class="our-story-card-title">生きた語学を学ぶ</h1>
                  <h2 id="" class="our-story-card-subtitle" >語学を習得するための<br>マッチングサービス</h2>

              </div>
            </div>
          </div>
        </div>

      <div class="step_wrap">
        <div class="our-story-card">
            <div class="title">
              <h2>簡単ステップ</h2>
              <p>マッチングまでのステップをご紹介します。</p>
            </div>
            <section>
              <ol>
                  <li>
                      <div class="img_step_container">
                        <img class="img_step1" src="/img/seach.png">
                      <!-- <img class="img_step1" src="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step1.png?20220428173957" srcset="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step1@2x.png?20220428173957 2x,
                                https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step1@3x.png?20220428173957 3x" alt="" role="presentation"> -->
                      </div>
                      <article>
                        <h3><span> １. </span> まずは学びたい言語or教えたい言語とその相手を探します。</h3>
                        <p>サイトの上にある「相手を探す」をクリック！<br>どんな言語をどんなシチュエーションでどんな相手に学びたいか探すことができます。</p>
                      </article>
                  </li>

                  <li>
                      <div class="img_step_container">
                        <img class="img_step2" src="/img/profile.png">
                        <!-- <img class="img_step2" src="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step2.png?20220428173957" srcset="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step2@2x.png?20220428173957 2x,
                                  https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step2@3x.png?20220428173957 3x" alt="" role="presentation"> -->
                      </div>
                      <article>
                        <h3><span> ２. </span> 気に入ったお相手に<br>「教わりたい」or「教えたい」を送る。</h3>
                        <p>条件の合うお相手を見つけたら、「教わりたい」or「教えたい」ボタンを押しましょう。</p>
                      </article>
                  </li>

                  <li>
                      <div class="img_step_container">
                        <img class="img_step3" src="/img/talk.png">
                        <!-- <img class="img_step3" src="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step3.png?20220428173957" srcset="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step3@2x.png?20220428173957 2x,
                                  https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step3@3x.png?20220428173957 3x" alt="" role="presentation"> -->
                      </div>
                      <article>
                        <h3><span> ３. </span> マッチング後、<br>メッセージ交換。</h3>
                        <p>お相手からも「教わりたい」or「教えたい」ボタンが押されたらメッセージができるようになります。
                          <br>メッセージもできるだけその言語で行い、設定したシチュエーションに行って語学を学ぼう！
                        </p>
                      </article>
                  </li>
              </ol>
            </section>
          </div>
        </div>


      <div class="our-story-card animation-card watchOnTv">
        <div class="animation-card-container">
          <div class="third-title">
            <div class="our-story-card-text">
              <h2 id="" class="our-story-card-title">色んなシチュエーションで学べる</h2>
              <h3 id="" class="our-story-card-subtitle">
                買い物、食事、スポーツ、道案内などの様々なシチュエーションで実際に体験しながら学ぶことができます。
              </h3>
            </div>
          </div>
            <div class="our-story-card-img-container">
              <div class="wrap">
                <div class="our-story-card-animation-container">
                  <img alt="" class="our-story-card-img" src="/img/eat.webp">
                  <img alt="" class="our-story-card-img" src="/img/travel.jpeg">
                  <img alt="" class="our-story-card-img" src="/img/tennis.jpeg">
                  <img alt="" class="our-story-card-img" src="/img/shopping.jpeg">
                </div>
              </div>
            </div>
            <div class="center-pixel" style="position:absolute"></div>
        </div>
      </div>

      <div class="story-card animation-card downloadAndWatch flipped">
        <div class="animation-card-container">
          <div class="third-title">
            <div class="story-card-text">
              <h2 id="" class="story-card-title">様々な言語を好きな時に学べる</h2>
              <h3 id="" class="story-card-subtitle">
                マッチングに制限はありません。色んな人とマッチングをすれば同時にたくさんの言語を学べます。
              </h3>
            </div>
         </div>
          <div class="story-card-img-container">
            <div class="story-card-animation-container">
              <img alt="" class="story-card-img" src="/img/hello.png">
            </div>
          </div>
            <div class="center-pixel" style="position:absolute"></div>
        </div>
      </div>

      <div class="oour-story-card animation-card watchOnDevice">
        <div class="animation-card-container">
          <div class="third-title">
            <div class="oour-story-card-text">
              <h2 id="" class="oour-story-card-title">安心・安全</h2>
              <h3 id="" class="oour-story-card-subtitle">
                メッセージのやり取りには本人確認を行います。
                <br>不適切な言動のあったユーザーは退会処理を行います。
              </h3>
            </div>
          </div>
          <div class="oour-story-card-img-container">
            <div class="oour-story-card-animation-container">
              <img alt="" class="oour-story-card-img" src="/img/passport.jpeg">
            </div>
          </div>
              <div class="center-pixel" style="position:absolute"></div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php endif; ?>

<?php if(!isset($_SESSION['id'])): ?>
<?php //var_dump($_SESSION['id']);?>
  <div class="lang-selector-test our-story-container" dir="ltr">
  <div class="our-story-header-wrapper">
    <div class="our-story-header">
      <span class="svg-nfLogo our-story-logo nfLogo">
        <!-- <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" aria-hidden="true" focusable="false">
        </svg> -->
        <!-- <span class="screen-reader-text">Netflix</span>
      </span>
        <a href="/login" class="authLinks redButton" data-uia="header-login-link">ログイン</a>
      </div> -->
    </div>
    <div class="our-story-cards">
      <div class="top">
          <div class="our-story-card hero-card hero_fuji vlv">
            <div class="our-story-card-background">
              <div class="concord-img-wrapper">
                <!-- <img class="concord-img vlv-creative" src="/img/world.jpeg" srcset="" alt=""> -->
                <div class="concord-img-gradient"></div>
              </div>
            </div>
            <div class="our-story-card-text">
              <div class="main-title">
                  <h1 id="" class="our-story-card-title">生きた語学を学ぶ</h1>
                  <h2 id="" class="our-story-card-subtitle" >語学を習得するための<br>マッチングサービス</h2>
                <form class="cta-form email-form" action="signup.php">
                  <h3 class="email-form-title">新規登録をクリックして今すぐ始めよう！</h3>
                  <div class="email-form-lockup">
                    <div class="our-story-cta-container cta-link-wrapper">
                      <div class="row center-block text-center">
                        <div class="col-5 mx-auto" >
                          <input type="submit" class="btn btn-ligth btn-block" value="新規登録">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form class="cta-form email-form" action="login_form.php">
                  <div class="email-form-lockup">
                    <div class="our-story-cta-container cta-link-wrapper">
                      <div class="row center-block text-center">
                        <div class="col-5 mx-auto" >
                          <input type="submit" class="btn btn-ligth btn-block" value="ログイン">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      <div class="step_wrap">
        <div class="our-story-card">
            <div class="title">
              <h2>簡単ステップ</h2>
              <p>マッチングまでのステップをご紹介します。</p>
            </div>
            <section>
              <ol>
                  <li>
                    <div class="img_step_container">
                      <img class="img_step1" src="/img/seach.png">
                    <!-- <img class="img_step1" src="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step1.png?20220428173957" srcset="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step1@2x.png?20220428173957 2x,
                              https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step1@3x.png?20220428173957 3x" alt="" role="presentation"> -->
                    </div>
                      <article>
                        <h3><span> １. </span> まずは学びたい言語or教えたい言語とその相手を探します。</h3>
                        <p>サイトの上にある「相手を探す」をクリック！<br>どんな言語をどんなシチュエーションでどんな相手に学びたいか探すことができます。</p>
                      </article>
                  </li>

                  <li>
                    <div class="img_step_container">
                      <img class="img_step2" src="/img/profile.png">
                      <!-- <img class="img_step2" src="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step2.png?20220428173957" srcset="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step2@2x.png?20220428173957 2x,
                                https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step2@3x.png?20220428173957 3x" alt="" role="presentation"> -->
                    </div>
                      <article>
                        <h3><span> ２. </span> 気に入ったお相手に<br>「教わりたい」or「教えたい」を送る。</h3>
                        <p>条件の合うお相手を見つけたら、「教わりたい」or「教えたい」ボタンを押しましょう。</p>
                      </article>
                  </li>

                  <li>
                    <div class="img_step_container">
                      <img class="img_step3" src="/img/talk.png">
                      <!-- <img class="img_step3" src="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step3.png?20220428173957" srcset="https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step3@2x.png?20220428173957 2x,
                                https://www.pairs.lv/wp-content/themes/pairs_pc/img/img_step3@3x.png?20220428173957 3x" alt="" role="presentation"> -->
                    </div>
                      <article>
                        <h3><span> ３. </span> マッチング後、<br>メッセージ交換。</h3>
                        <p>お相手からも「教わりたい」or「教えたい」ボタンが押されたらメッセージができるようになります。
                          <br>メッセージもできるだけその言語で行い、設定したシチュエーションに行って語学を学ぼう！
                        </p>
                      </article>
                  </li>
              </ol>
            </section>
          </div>
        </div>


      <div class="our-story-card animation-card watchOnTv">
        <div class="animation-card-container">
          <div class="third-title">
            <div class="our-story-card-text">
              <h2 id="" class="our-story-card-title">色んなシチュエーションで学べる</h2>
              <h3 id="" class="our-story-card-subtitle">
                買い物、食事、スポーツ、道案内などの様々なシチュエーションで実際に体験しながら学ぶことができます。
              </h3>
            </div>
          </div>
            <div class="our-story-card-img-container">
              <div class="wrap">
                <div class="our-story-card-animation-container">
                  <img alt="" class="our-story-card-img" src="/img/eat.webp">
                  <img alt="" class="our-story-card-img" src="/img/travel.jpeg">
                  <img alt="" class="our-story-card-img" src="/img/tennis.jpeg">
                  <img alt="" class="our-story-card-img" src="/img/shopping.jpeg">
                </div>
              </div>
            </div>
            <div class="center-pixel" style="position:absolute"></div>
        </div>
      </div>

      <div class="story-card animation-card downloadAndWatch flipped">
        <div class="animation-card-container">
          <div class="third-title">
            <div class="story-card-text">
              <h2 id="" class="story-card-title">様々な言語を好きな時に学べる</h2>
              <h3 id="" class="story-card-subtitle">
                マッチングに制限はありません。色んな人とマッチングをすれば同時にたくさんの言語を学べます。
              </h3>
            </div>
         </div>
          <div class="story-card-img-container">
            <div class="story-card-animation-container">
              <img alt="" class="story-card-img" src="/img/hello.png">
            </div>
          </div>
            <div class="center-pixel" style="position:absolute"></div>
        </div>
      </div>

      <div class="oour-story-card animation-card watchOnDevice">
        <div class="animation-card-container">
          <div class="third-title">
            <div class="oour-story-card-text">
              <h2 id="" class="oour-story-card-title">安心・安全</h2>
              <h3 id="" class="oour-story-card-subtitle">
                メッセージのやり取りには本人確認を行います。
                <br>不適切な言動のあったユーザーは退会処理を行います。
              </h3>
            </div>
          </div>
          <div class="oour-story-card-img-container">
            <div class="oour-story-card-animation-container">
              <img alt="" class="oour-story-card-img" src="/img/passport.jpeg">
            </div>
          </div>
              <div class="center-pixel" style="position:absolute"></div>
        </div>
      </div>

    </div>
  </div>
</div>
<script src="/js/js.js"></script>
<?php endif; ?>

 </main>
</body>
</html>

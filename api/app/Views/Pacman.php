<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="Play Pacman for free!">
    <meta name="keywords" content="Pacman,arcade,8-bit,classic,fun,games">
    <meta name="auhtor" content="Angelo">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-142539004-1'></script>
    <script>
        const BASE_URL = '<?= base_url() ?>';
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-142539004-1');
    </script>

    <script src='<?= base_url() ?>build/app.js'></script>
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'>
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons'
      rel='stylesheet'>
      <style>
          .invisibleA {
              text-decoration: none; /* Remove underline */
              color: inherit; /* Inherit text color */
              display: block; /* Make the anchor behave like a block element */
          }
      </style>
    <title>Pacman</title>
  </head>

  <body>
    <div id='overflow-mask' class='overflow-mask'>
      <img id='backdrop' class='backdrop' src='<?= base_url() ?>app/style/graphics/backdrop.png'>

      <div id='fps-display' class='fps-display'></div>
      <div id='preload-div' class='preload-div'></div>

      <div id='main-menu-container' class='main-menu-container'>
        <img id='logo' class='logo' src='<?= base_url() ?>app/style/graphics/pacman_logo.png'>
        <button id='game-start' class='game-start'>
          PLAY
        </button>
      </div>

      <div class='header-buttons'>
        <button>
          <i id='pause-button' class='material-icons'>
            pause
          </i>
        </button>
        <button>
          <i id='sound-button' class='material-icons'></i>
        </button>
      </div>

      <div id='paused-text' class='paused-text'>
        PAUSED
      </div>

      <div id='game-ui' class='game-ui'>
        <div id='row-top' class='row top'>
          <div class='column _25'>
            <div class='one-up'>1UP</div>
            <div id='points-display'></div>
          </div>
          <div class='column _50'>
            <div>HIGH SCORE</div>
            <div id='high-score-display'></div>
          </div>
            <a href="<?= base_url() ?>leaderboard" class="invisibleA">
                <div class='column _25'>
                    <div>LEADER</div>
                    <div id='leader-high-score-display'></div>
                </div>
            </a>
        </div>

        <div id='maze' class='maze'>
          <img id='maze-img' class='maze-img' src='<?= base_url() ?>app/style//graphics/spriteSheets/maze/maze_blue.svg'>
          <div id='maze-cover' class='maze-cover'></div>
          <div id='dot-container'></div>
          <p id='pacman' class='pacman'></p>
          <p id='pacman-arrow' class='pacman'></p>
          <p id='clyde' class='ghost'></p>
          <p id='inky' class='ghost'></p>
          <p id='pinky' class='ghost'></p>
          <p id='blinky' class='ghost'></p>
        </div>

        <div id='bottom-row' class='row bottom'>
          <div id='extra-lives' class='extra-lives'></div>


          <div id='fruit-display' class='fruit-display'></div>
            <button class='leaderboard-button' onclick="window.location.href='<?= base_url() ?>leaderboard'">Leaderboard</button>
        </div>
      </div>

      <div id='movement-buttons' class='movement-buttons'>
        <div class='row'>
          <button id='button-up' class='button-up'>
            <i class='material-icons'>keyboard_arrow_up</i>
          </button>
        </div>
        <div class='row'>
          <button id='button-left' class='button-left'>
            <i class='material-icons'>keyboard_arrow_left</i>
          </button>
          <button id='button-right' class='button-right'>
            <i class='material-icons'>keyboard_arrow_right</i>
          </button>
        </div>
        <div class='row'>
          <button id='button-down' class='button-down'>
            <i class='material-icons'>keyboard_arrow_down</i>
          </button>
        </div>
      </div>

      <div id='left-cover' class='loading-cover left'></div>
      <div id='right-cover' class='loading-cover right'></div>
      <div id='loading-container' class='loading-container'>
        <div id='loading-pacman' class='loading-pacman'></div>
        <div id='loading-dot-mask' class='loading-dot-mask'></div>
        <div class='loading-dot _5'></div>
        <div class='loading-dot _10'></div>
        <div class='loading-dot _15'></div>
        <div class='loading-dot _20'></div>
        <div class='loading-dot _25'></div>
        <div class='loading-dot _30'></div>
        <div class='loading-dot _35'></div>
        <div class='loading-dot _40'></div>
        <div class='loading-dot _45'></div>
        <div class='loading-dot _50'></div>
        <div class='loading-dot _55'></div>
        <div class='loading-dot _60'></div>
        <div class='loading-dot _65'></div>
        <div class='loading-dot _70'></div>
        <div class='loading-dot _75'></div>
        <div class='loading-dot _80'></div>
        <div class='loading-dot _85'></div>
        <div class='loading-dot _90'></div>
        <div class='loading-dot _95'></div>
      </div>

      <div id='error-message' class='error-message'>
        <div class='header'>
          <div>OOPS!</div>
          <div class='error-pacman'></div>
        </div>
        <div class='body'>
          We were unable to load the images/sounds needed to play the game.</br></br>

          This could be due to a poor connection, a strict network policy, or
          by playing on an unsupported browser.
        </div>
      </div>

      <script>
        //import GameCoordinator from "<?php //= base_url() ?>//app/scripts/core/gameCoordinator";

        window.onload = () => {
          let gameCoordinator = new GameCoordinator();
        }
      </script>
    </div>
  </body>
</html>

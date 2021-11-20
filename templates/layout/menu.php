<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Innova Jobs vagas pra todos';
?>
<!DOCTYPE html>
<html>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <!-- CSS e FONTES -->

  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?= $this->Html->css(['addlogin', 'cake', 'default', 'inicial', 'login', 'menu', 'miligram.min', 'normalize.min', 'style', 'user', 'vermais']) ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>

<body>
 <!-- antigo -->
  <div class="translogmenu" id="teste"></div>
 <nav class="menu-bar content ">
    <div class="top-nav-title">
      <a href="/home">
        <?php echo $this->Html->image("logo.png", ['fullBase' => false, 'class' => 'logo']); ?>
      </a>
    </div>

    <div class="top-nav-links">
      <nav class="nav">
        <a class="nav-link active" href="/vagas/vagaexibirlog">Todas as vagas</a>
        <a class="nav-link active" href="/vagas/index">Minhas vagas</a>
        <a class="nav-link" href="/vagas/add">Cadastro de vagas</a>
        <a class="nav-link" href="/sobrelog">Sobre</a>

        <div class="dropdown">
          <a class="btnconta dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Minha conta
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/users/index">Meus dados</a>

            <a class="dropdown-item" href="/logout">Sair</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="translog" id="google_translate_element"></div>
    
    <div class="menuu-burguer">
      <input type="checkbox" id="checkbox-menu">
      <label for="checkbox-menu" class="label">
        <span></span>
        <span></span>
        <span></span>
        <div class="dropdown-contentt">
          <a class="nav-link active" style="color: #fff;" href="/vagas/vagaexibirlog">Todas as vagas</a>
          <hr class="hrr">
          <a class="nav-link active" style="color: #fff;" href="/vagas/index">Minhas vagas</a>
          <hr class="hrr">
          <a class="nav-link active" style="color: #fff;" href="/vagas/add">Cadastro de vagas</a>
          <hr class="hrr">
          <a class="nav-link active" style="color: #fff;" href="/sobretextos/sobrelog">Sobre</a>
          <hr class="hrr">
          <a class="nav-link active" style="color: #fff;" href="/users/index">Meus dados</a>
          <hr class="hrr">
          <?= $this->Html->link("Sair", ['controller' => 'Users', 'action' => 'logout', 'class' => 'nav-link active']) ?>
        </div>
      </label>

    </div>
  </nav> 


        <!-- menu responsivo -->
        <main class="main">
          <div class="containerprincipal">
            <?= $this->Flash->render() ?>
            <div vw class="enabled">
              <div vw-access-button class="active"></div>
              <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
              </div>
            </div>
            <?= $this->fetch('content') ?>
          </div>
        </main>
        <!-- Footer -->
        <footer>
          <div class="text-center textos">
            <p class="text-subtitle1 text-weight-bold text-light">Siga nossa redes sociais</p>
            <p class="text-subtitle1 text-weight-bold text-light">Entre em contato por nossas redes sociais ou email para obter suporte</p>
          </div>

          <div class="redessociais">
            <div class="icones"> <?php echo $this->Html->image("instagram.png", ['fullBase' => false]); ?> <a href="https://www.instagram.com/innovajobs/"> innovajobs</a> </div>
            <div class="icones"> <?php echo $this->Html->image("facebook.png", ['fullBase' => false]); ?> <a href="https://www.facebook.com/Innova-Jobs-107427481671256">Innova Jobs</a> </div>
            <div class="icones"> <?php echo $this->Html->image("gmail.png", ['fullBase' => false]); ?> <a href="#">innovajobs@gmail.com</a></div>
          </div>

          <div class="bg-light text">
            <p class="text-center text-dark ">2021 / Desenvolvido pela equipe Innova Jobs</p>
          </div>
        </footer>
        <!-- Vlibras -->
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
          new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>

        <!-- GTranslate: https://gtranslate.io/ -->
        <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({
              pageLanguage: 'pt',
              layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
              autoDisplay: false,
              includedLanguages: ''
            }, 'google_translate_element');
          }
        </script>

        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script>
          var add = document.getElementById('teste');
          var del = document.getElementById('google_translate_element');
          var largura = window.innerWidth;
          if (largura < 1102) {
            add.id = ('google_translate_element');
            del.id = ('teste');
          }
        </script>
</body>

</html>
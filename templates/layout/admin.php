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
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Material Kit -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <?= $this->Html->css(['dashboard']) ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>

</head>

<body>
  <div class="container">
    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="title">Innova Jobs</span>
          </a>
        </li>

        <li>
          <a href="/textoshome" type="button" class="btndropdown-toggle" data-bs-toggle="dropdown">
            <span class="icon">
              <ion-icon name="home"></ion-icon>
            </span>
            <span class="title">Inicial</span>
          </a>

        </li>
        <li>
          <a href="#" type="button" class="btndropdown-toggle" data-bs-toggle="dropdown">
            <span class="icon">
              <ion-icon name="info"></ion-icon>
            </span>
            <span class="title">Sobre</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Textos </a></li>
            <li><a class="dropdown-item" href="#">Imagens</a></li>
          </ul>
        </li>
        <li>
          <a href="#" type="button" class="btndropdown-toggle" data-bs-toggle="dropdown">
            <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <span class="title">Vagas</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Textos </a></li>
            <li><a class="dropdown-item" href="#">Imagens</a></li>
          </ul>
        </li>
       
        <li>
          <a href="/logout">
            <span class="icon">
              <ion-icon name="log-out"></ion-icon>
            </span>
            <span class="title">Sair</span>
          </a>
        </li>
      </ul>
    </div>

    <main class="main">
    <div class="">
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
    
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script>
    // MenuToggle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function() {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }

    // add hovered class in selected list item
    let list = document.querySelectorAll('.navigation li');

    function activeLink() {
      list.forEach((item) =>
        item.classList.remove('hovered'));
      this.classList.add('hovered');
    }
    list.forEach((item) =>
      item.addEventListener('mouseover', activeLink));
  </script>
</body>

</html>
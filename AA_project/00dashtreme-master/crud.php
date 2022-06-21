<?php
include('testasessao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Sistema Savier Produções</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="assets/images/favicon_io/site.webmanifest">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/original-app-style.css" rel="stylesheet"/>
  <link href="assets/css/css-tabela.css" rel="stylesheet"/>
  <link href="assets/css/bg-color.css" rel="stylesheet"/>
  <link href="assets/css/img_effect.css" rel="stylesheet"/>
  
</head>

<body class="cor-bg">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="crud.php">
       <img src="assets/images/newlogo.png" class="imgeffect mb-1" alt="logo icon">
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">NAVEGAÇÃO</li>
      <li>
        <a href="crud.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Home</span>
        </a>
      </li>

      <hr>
      <li>
        <a href="register.php" target="_blank">
          <i class="icon-plus"></i> <span>Registrar Usuário</span>
        </a>
      </li>
      <li><a href="sair.php"><i class="icon-power mr-2 text-danger"></i> <span>Finalizar Sessão</span></a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>

  </ul>
  <ul class="navbar-nav align-items-center right-nav-link">
    <!-- Itens desinteressantes e inúteis
      <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-envelope-open-o"></i></a>
      </li>
      <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-bell-o"></i></a>
      </li>
    -->
    <!-- Seletor de linguagem
      <li class="nav-item language">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
          </ul>
      </li>
    -->
    <!--
      <li class="nav-item">
        <a href="#"><span><?php echo $_SESSION['usuario'] ?></span></a>
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item user-details">
          <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
              <div class="media-body">
              </div>
             </div>
            </a>
          </li>
          <li class="dropdown-divider"></li>
          <a href="profile.php"><li class="dropdown-item"><i class="icon-settings mr-2"></i> Configurações</li></a>
          <li class="dropdown-divider"></li>
          <a href="sair.php"><li class="dropdown-item"><i class="icon-power mr-2"></i> Finalizar Sessão</li></a> 
        </ul>
      </li>
    -->
    <a href="inscricao.php" class="btn btn-success"><i class="zmdi zmdi-plus"></i></a>
    
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
        <?php
          if(isset($_GET ['alter'])){
              if ($_GET['alter']=='ok'){
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Alteração realizada com sucesso.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
              }
          }
          if(isset($_GET ['alter'])){
              if ($_GET['alter']=='erro'){
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Atenção!</strong> Erro ao alterar o usuário.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
            }
          }
          if(isset($_GET ['delete'])){
              if ($_GET['delete']=='ok'){
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Usuário excluido com sucesso.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
          }
          }
        ?>
            <div class="card-body">
              <form method="POST" action="crud.php">
                <div class="row">
                  <div class="input-group mb-3 col col-9">
                    <input type="text" name="texto" id="texto" class="form-control" placeholder="Busca de inscritos" aria-label="Recipient's username" aria-describedby="basic-addon2" autocomplete="off">
                    <div class="input-group-append">
                      <input class="btn btn-light" id="enviar" type="hidden">
                    </div>
                  </div>
                  <div class="form-group col col-3">
                    <select class="form-control" id="uf" name="uf">
                      <option value="" data-default disabled selected><span>Filtrar por:<strong> Estado</strong></span></option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espírito Santo</option>
                      <option value="GO">Goiás</option>
                      <option value="MA">Maranhão</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Pará</option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select>
                  </div>
                </div>
              </form>
              <hr>
              <div class="table-responsive">
                <table class="table table-hover align-items-center table-borderless">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>Email</th>
                      <th>Contato</th>
                      <th>CEP</th>
                      <th>Evento</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      if(isset($_POST['texto'],$_POST['uf'])){
                        $texto = $_POST['texto'];
                        $estado = $_POST['uf'];
                        //fazendo conexão com o banco de dados
                        include('banco.php');
                        //criar sql de consulta  
                        $sql2 = "select * from tb_inscritos where nome like '%$texto%' and estado = '$estado'";
                        //realizar consulta
                        $consulta2 = $conexao->query($sql2);
                        if ($consulta2 == true){
                          //verifica se encontrou pelo menos uma linha
                          if($consulta2->num_rows > 0){
                            //recebendo valor da consulta
                            while($linha=$consulta2->fetch_array(MYSQLI_ASSOC)){
                              echo '
                              <tr>
                                <td>'.$linha['cod_ins'].'</td>
                                <td>'.$linha['nome'].'</td>
                                <td>'.$linha['cpf'].'</td>
                                <td>'.$linha['email'].'</td>
                                <td>'.$linha['contato'].'</td>
                                <td>'.$linha['cep'].'</td>
                                <td>'.$linha['evento'].'</td>
                                <td>
                                <a class="btn btn-success mr-1" href="frmcadalterains.php?id='.$linha['cod_ins'].'"><i class="zmdi zmdi-edit"></i></a>
                                <a class="btn btn-danger" href="excluirusu.php?id='.$linha['cod_ins'].'"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              ';
                            }
                          }
                        }
                      }else{
                        if(isset($_POST['texto'])){
                          $texto = $_POST['texto'];
                          include('banco.php');
                          $sql1 = "select * from tb_inscritos where nome like '%$texto%'";
                          //echo $sql1;
                          $consulta1 = $conexao->query($sql1);
                          if($consulta1 == true){
                            while($linha=$consulta1->fetch_array(MYSQLI_ASSOC)){
                              echo '
                              <tr>
                                <td>'.$linha['cod_ins'].'</td>
                                <td>'.$linha['nome'].'</td>
                                <td>'.$linha['cpf'].'</td>
                                <td>'.$linha['email'].'</td>
                                <td>'.$linha['contato'].'</td>
                                <td>'.$linha['cep'].'</td>
                                <td>'.$linha['evento'].'</td>
                                <td>
                                <a class="btn btn-success mr-1" href="frmcadalterains.php?id='.$linha['cod_ins'].'"><i class="zmdi zmdi-edit"></i></a>
                                <a class="btn btn-danger" href="excluirusu.php?id='.$linha['cod_ins'].'"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              ';
                            }
                          }
                        }
                      }
                    ?>
                    <!-- 
                      <td>
                        <button class="btn btn-success mr-1"><i class="zmdi zmdi-edit"></i></button>
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                      </td>
                    -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2022 Savier Produções
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	<script>
    /*
    $(document).ready(function(){
      $(".trbody").click(function() {
        $(location).attr('href', 'crud.php');
        
      });
    })
    */ 
    $(document).ready(function(){
      $("#texto").focusout(function() {
        let texto = $('#texto').val();
        if(texto.length>0){
          $('#enviar').attr("type","submit")
        }
        else{
          $('#enviar').attr("type","hidden")
        }
      });
    })
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Cadastro para eventos</title>
  <!-- Adicionando JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
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
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <link href="assets/css/bg-color.css" rel="stylesheet"/>

  
  
</head>

<body class="cor-bg">
  <!--Importando Script Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
  <!--
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="index.html">
        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        <h5 class="logo-text">Dashtreme Admin</h5>
      </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="index.html">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="icons.html">
            <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
          </a>
        </li>

        <li>
          <a href="forms.html">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
          </a>
        </li>

        <li>
          <a href="tables.html">
            <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          </a>
        </li>

        <li>
          <a href="calendar.html">
            <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
            <small class="badge float-right badge-light">New</small>
          </a>
        </li>

        <li>
          <a href="profile.html">
            <i class="zmdi zmdi-face"></i> <span>Profile</span>
          </a>
        </li>

        <li>
          <a href="login.html" target="_blank">
            <i class="zmdi zmdi-lock"></i> <span>Login</span>
          </a>
        </li>

        <li>
          <a href="register.html" target="_blank">
            <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
          </a>
        </li>
      </ul>
    
    </div>
  -->
    <!--End sidebar-wrapper-->
  

<!--Start topbar header-->
<!-- 

  <header class="topbar-nav">
   <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
    </ul>
       
    <ul class="navbar-nav align-items-center right-nav-link">
      <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-envelope-open-o"></i></a>
      </li>
      <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-bell-o"></i></a>
      </li>
      <li class="nav-item language">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
          </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item user-details">
          <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
              <div class="media-body">
              <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
              <p class="user-subtitle">mccoy@example.com</p>
              </div>
             </div>
            </a>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
        </ul>
      </li>
    </ul>
  </nav>
  </header>
-->
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="col col-lg-9 m-auto">
      <div class="alert alert-light alert-dismissible fade show" role="alert">
        Preencha todos os campos para realizar a inscrição.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
        if(isset($_GET['cad'])){
            if($_GET['cad']=='ok'){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>OBA!</strong> Inscrição realizada com sucesso!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
        }
        if(isset($_GET['cad'])){
            if($_GET['cad']=='non'){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Atenção!</strong> CPF já cadastrado.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
        }
      ?>
    </div>
    <div class="container-fluid">
      
      <div class="row mt-3">
        <div class="col-lg-12">
         <div class="card col col-9 m-auto">
           <div class="card-body">
            <form name="f1" method="POST" action="salvarinsc.php">
           <div class="form-group">
            <label for="input-1">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" autocomplete="off">
           </div>
           <div class="form-group">
            <label for="input-2">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
           </div>
           <div class="form-group">
            <label for="input-3">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email" autocomplete="off">
           </div>
           <div class="form-group">
            <label for="input-4">Contato</label>
            <input type="text" class="form-control" id="contato" name="contato" placeholder="Digite seu contato">
           </div>
           <hr>
           <div class="form-group">
            <label for="input-5">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP">
           </div>
           <div class="form-group">
            <label for="input-6">Estado</label>
            <select class="form-control" id="uf" name="estado">
              <option value="" data-default disabled selected></option>
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
           <div class="form-group">
            <label for="input-7">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade" autocomplete="off">
           </div>
           <div class="form-group">
            <label for="input-8">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite seu bairro" autocomplete="off">
           </div>
           <div class="form-group">
            <label for="input-9">Endereço</label>
            <input type="text" class="form-control" id="logradouro" name="endereco" placeholder="Digite seu endereço" autocomplete="off">
           </div>
           <div class="form-group">
            <label for="input-10">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número da sua casa" autocomplete="off">
           </div>
           <div class="form-group">
            <label for="input-11">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite um complemento" autocomplete="off">
           </div>
           <hr>
           <div class="form-group">
              <label for="input-12">Evento</label>
              <select class="form-control" id="evento" name="evento">
                <option value="" data-default disabled selected></option>
                <option value="Ultra Worldwide">Ultra Worldwide</option>
                <option value="Glow by Fashion Week">Glow by Fashion Week</option>
                <option value="Smithereens - Joji">Smithereens - Joji</option>
                <option value="A Volta do que não foi - Whindersson Nunes">A Volta do que não foi - Whindersson Nunes</option>
              </select>
           </div>
           <div class="form-group">
            <label for="input-13">Por onde você soube do evento?</label>
            <input type="text" class="form-control" id="pos_evento" name="pos_evento" autocomplete="off">
           </div>
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox1" checked=""/>
            <label for="user-checkbox1">Eu aceito os <a href="#"> TERMOS & CONDIÇÕES</a></label>
            </div>
           </div>
           <div class="form-group">
            <input type="hidden" class="btn btn-light col col-12" id="enviar">
          </div>
          </form>
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
      <div class="container ">
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
	
  <!--*************** MASCARAS ***************-->
  <script src="mascaras/jquery.maskMoney.js" type="text/javascript"></script>
  <script src="mascaras/jquery.inputmask.js" type="text/javascript"></script> 
  <!--*************** MASCARAS FIM ***************-->

  <script>
      $(document).ready(function(){
        //$('#myModal').on('shown.bs.modal', function () {
        //$('#myInput').trigger('focus')
        //})

        $("#nasc").inputmask("99/99/9999");
        $("#cpf").inputmask("999.999.999-99");
        $("#cep").inputmask("99999-999");
        $("#contato").inputmask("(99) 9 9999-9999");
        $("#rg").inputmask("999999999999");
      
      //SCRIPT CAMPOS OBRIGATÓRIOS
        $('input:text, select').change(function(){
          let nome = $('#nome').val();
          let cpf = $('#cpf').val();
          let email = $('#email').val();
          let contato = $('#contato').val();
          let cep = $('#cep').val();
          let cidade = $('#cidade').val();
          let bairro = $('#bairro').val();
          let endereco = $('#logradouro').val();
          let numero = $('#numero').val();
          let complemento = $('#complemento').val();
          let pos_evento = $('#pos_evento').val();
          var evento = $("#evento option:selected").text();
          var estado = $("#uf option:selected").text();

          if((evento.length>1)&&(estado.length>1)){
            $('#enviar').attr("type","submit")
          }
          if((nome.length>1)&&(cpf.length==14)){
            $('#enviar').attr("type","submit")
          }
          if((email.length>1)&&(contato.length==16)){
            $('#enviar').attr("type","submit")
          }
          if((cep.length==9)&&(cidade.length>1)){
            $('#enviar').attr("type","submit")
          }
          if((bairro.length>1)&&(endereco.length>1)){
            $('#enviar').attr("type","submit")
          }
          if((numero.length>=1)&&(complemento.length>1)){
            $('#enviar').attr("type","submit")
          }
          if((pos_evento.length>1)){
            $('#enviar').attr("type","submit")
          }
          
          else{
            $('#enviar').attr("type","hidden")
          }
        })

        /*SCRIPT PREENCHER AUTOMATICAMENTE ANTIGO
        $('#estado').change(function(){
          var estado = $("#estado").val()
          //let cidade = $("#cidade").val();
          if(estado='CE'){
            $('#cidade').attr("value","Sobral")
          }
        })
        */

        //SCRIPT MUDANÇA DE BACKGROUND
        $("#evento").change(function(){
          let ev = $(this).val()
          if(ev == 'Ultra Worldwide'){
            $("body").css("background-image","url(assets/images/insc_bg_themes/1ultra.png)")
          }
          if(ev == 'Glow by Fashion Week'){
            $("body").css("background-image","url(assets/images/insc_bg_themes/2glow.png)")
          }
          if(ev == 'Smithereens - Joji'){
            $("body").css("background-image","url(assets/images/insc_bg_themes/3joji.png)")
          }
          if(ev == 'A Volta do que não foi - Whindersson Nunes'){
            $("body").css("background-image","url(assets/images/insc_bg_themes/4whind.png)")
          }
        })
        //$('#butao').click(function(){
          //swal("Good job!", "You clicked the button!", "success"); 
        //})

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#logradouro").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#logradouro").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#numero").focus();
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
      })
  </script>

</body>
</html>

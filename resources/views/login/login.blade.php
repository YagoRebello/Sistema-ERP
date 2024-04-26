<?php
/**
 *Ar2Sistemas
 *@autor Yago Rebello
 */
?>

<link rel="stylesheet" href="site/css/style.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link href="site/image/favicon.png" rel="icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('site/js/login/login.js')}}" ></script>
<title>Login - YR SYSTEM</title>
<head>
    <style>
        .select2-results {
            color: black !important;
        }
        input{
            color: black !important;
        }

        .header{
            padding: 10px;
        }

        body {
            background-image: url("site/image/background.png");
            font-family: Roboto, sans-serif;
            background-size: 100% auto; /* Ajuste para cobrir a largura da tela e manter a altura original */
            background-repeat: no-repeat;
            background-position-x: center;
            background-position-y: bottom;
        }

        #loginCase{
            max-width: 1000px;
        }

        @media only screen and (max-width: 780px){
            .content{
                display: grid !important;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
{{--<script src="https://www.google.com/recaptcha/enterprise.js?render=6LfK2p8hAAAAAOO2ApPP7sSe0exHtfJIMLg4FpbI"></script>--}}
<!------ Include the above in your HEAD tag ---------->
<div id="loginCase" class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="card" style="border-radius: 20px;background-color:#101129;box-shadow: 5px 5px 10px 2px #31567c91;">
            <div class="header">
                <h4 style="text-align: center;"></h4>
            </div>

            <div class="card-body">
                <form  method="post" action="{{route('auth.user')}}">
                    @csrf
                    <input type="hidden" class="hide" id="csrf_token" name="csrf_token" value="C8nPqbqTxzcML7Hw0jLRu41ry5b9a10a0e2bc2">

                    <div class="content" style="display: flex">
                        <div class="logos">
                            <div>
                                <img src="site/image/logo.png" height="270px";/>
                            </div>
                        </div>
                        <div class="campos row">
                            <div class="col-11">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Cadastrado" required>
                                    <label for="">Email <i class="fa fa-envelope-open-o" aria-hidden="true"></i></label>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                            <div class="col-11">
                                <div class="form-floating mb-3">
                                    <input  type="password" id="password" class="form-control" name="password" placeholder="Senha" >
                                    <label for="password" id="password">Senha <i class="fa fa-unlock" aria-hidden="true"></i></label>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                            <div class="col-1" style="margin-top:22px ">
                                <div class="form-floating mb-3" >
                                    <a  type="button" id="mostrarSenha" title="Visualizar  Senha"><i id="icon" class="bi bi-eye-slash" style="color:#47b2e4;font-size:20px;height:50%"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="redirect" value="">
                                <button id="Btnlogin" class="btn btn-lg btn-block" style="background-color: #47b2e4">Entrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

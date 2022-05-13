<?php include 'header.php'; ?>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <?php include 'topbar.php' ?>
        <!-- End Navigation -->

        <?php include 'menu.php'?>

    </div>
    <!-- End Sidebar -->

    <!-- download -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Forms</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Forms</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="far fa-check-square"></i> Form Contacts</h3>
                            </div>

                            <div class="card-body">
                                <?php

                                if(isset($_GET['msg'])) {?>
                                    <div class="alert alert-success" role="alert">
                                      Contato inserido com sucesso!
                                  </div>
                              <?php } ?>
                              <form action="insert_contact.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" placeholder="Your name" name="name" required autocomplete="off">                                 </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" class="form-control" placeholder="Enter e-mail" name="mail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tel</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telephone" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Business</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="business" placeholder="Your Business" required autocomplete="off">
                                    </div>
                                    <div style="text-align: right">
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div><!-- end card-->
                    </div>

                    <script type="text/javascript">
                        $("#phone").mask("(00) 00000-0000");
                            $("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
                            $('.date').mask('00/00/0000');
                            $('.time').mask('00:00:00');
                            $('.date_time').mask('00/00/0000 00:00:00');
                            $('.cep').mask('00000-000');
                            $('.phone_with_ddd').mask('(00) 0000-0000');
                            $('.phone_us').mask('(000) 000-0000');
                            $('.mixed').mask('AAA 000-S0S');
                            $('.cpf').mask('000.000.000-00', {reverse: true});
                            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
                            $('.money').mask('000.000.000.000.000,00', {reverse: true});
                            $('.money2').mask("#.##0,00", {reverse: true});
                            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                                translation: {
                                    'Z': {
                                        pattern: /[0-9]/, optional: true
                                    }
                                }
                            });
                            $('.ip_address').mask('099.099.099.099');
                            $('.percent').mask('##0,00%', {reverse: true});
                            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
                            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
                            $('.fallback').mask("00r00r0000", {
                                translation: {
                                    'r': {
                                        pattern: /[\/]/,
                                        fallback: '/'
                                    },
                                    placeholder: "__/__/____"
                                }
                            });
                            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
                        </script>

                        <!-- END container-fluid -->

                    </div>
                    <!-- END content -->

                </div>
                <!-- END content-page -->

                <?php include 'footer.php' ?>
<?php include 'header.php'; ?>


<script>
    $(function(){
        $('#editModal').on('show.bs.modal', function (event) {
            //atribuindo os data-name (name)
            var button = $(event.relatedTarget) 
            var recipient = button.data('id') 
            var recipient2 = button.data('name')
            var recipient3 = button.data('mail')
            var recipient4 = button.data('tel')
            var recipient5 = button.data('business')
            var modal = $(this)
            //insere os valores dentro dos inputs pelo id 
            modal.find('.modal-title').text('Verification Code ' + recipient)
            modal.find('#recipient-id').val(recipient)
            modal.find('#recipient-name').val(recipient2)
            modal.find('#recipient-mail').val(recipient3)
            modal.find('#recipient-tel').val(recipient4)
            modal.find('#recipient-business').val(recipient5)
        });

    });
</script>

<script>
    $(function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var recipient = button.data('id-delete') 
            var recipient2 = button.data('name-delete')
            var modal = $(this)
            modal.find('.modal-title').text('Delete Code: ' + recipient)
            modal.find('#recipient-id-delete').val(recipient)
            modal.find('#recipient-name-delete').val(recipient2)
            
        });

    });
</script>


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
                            <h1 class="main-title float-left">Dashboard</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">List Contacts</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-12">
                    <?php
                    if(isset($_GET['msg'])) {
                        if($_GET['msg'] == 1) {?>
                            <div class="alert alert-success" role="alert">
                                Contact Changed!
                            </div>

                        <?php } else { ?>

                            <div class="alert alert-danger" role="alert">
                                Contact Deleted!
                            </div>


                        <?php }

                    }   ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-check-square"></i> List Contacts</h3>
                        </div>

                        <div class="card-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card mb-3">

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-bordered table-hover display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Mail</th>
                                                        <th>Phone</th>
                                                        <th>Business</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include 'conection.php';
                                                    $sql = "SELECT * FROM agenda";
                                                    $search = mysqli_query($conection,$sql);

                                                    while($array = mysqli_fetch_array($search)) {
                                                        $id = $array['id'];
                                                        $name = $array['name'];
                                                        $mail = $array['mail'];
                                                        $phone = $array['phone'];
                                                        $business = $array['business'];

                                                        ?>
                                                        <tr>
                                                            <td><?php echo $name ?></td>
                                                            <td><?php echo $mail ?></td>
                                                            <td><?php echo $phone ?></td>
                                                            <td><?php echo $business ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" title="Edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $id ?>" data-name="<?php echo $name ?>" data-mail="<?php echo $mail ?>" data-tel="<?php echo $phone ?>" data-business="<?php echo $business ?>"><i class="fas fa-user-edit"></i></button>

                                                                <button type="button" class="btn btn-danger" title="Delete" data-toggle="modal" data-target="#deleteModal" data-id-delete="<?php echo $id ?>" data-name-delete="<?php echo $name ?>"><i class="fas fa-user-minus"></i></button>
                                                            </td>
                                                        </tr>

                                                        <!-- Edit Modal -->
                                                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form action="edit_contact.php" method="post">
                                                              <div class="form-group">
                                                                <!--<input type="text" class="form-control" id="recipient-id" style="display: none;">-->
                                                                <label for="message-text" class="col-form-label">Code:</label>
                                                                <input type="text" class="form-control" id="recipient-id" readonly name="id">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Name:</label>
                                                                <input type="text" class="form-control" id="recipient-name" name="name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Mail:</label>
                                                                <input type="text" class="form-control" id="recipient-mail"  name="mail">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Phone:</label>
                                                                <input type="text" class="form-control telefone" id="recipient-tel"  name="tel">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Business:</label>
                                                                <input type="text" class="form-control" id="recipient-business" name="business">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Change</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                            <form action="delete_contact.php" method="post">
                                              <div class="form-group">
                                                <!--<input type="text" class="form-control" id="recipient-id" style="display: none;">-->
                                                <label for="message-text" class="col-form-label">Code:</label>
                                                <input type="text" class="form-control" id="recipient-id-delete" readonly name="id">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control" id="recipient-name-delete" readonly name="name">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php  } ?>
                </tbody>
            </table>
        </div>
        <!-- end table-responsive-->

    </div>
    <!-- end card-body-->

</div>
<!-- end card-->

</div>

</div>

</div>
</div><!-- end card-->
</div>

<!-- END container-fluid -->

</div>
<!-- END content -->

</div>
<!-- END content-page -->

<?php include 'footer.php' ?>

<script type="text/javascript">
    $(".telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( { } );
    } );
</script>
<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"></script>
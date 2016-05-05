<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Contacts
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

         <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#all" id="all"><i class="fa fa-users"> </i> Contacts </a></li>
            <li><a data-toggle="tab" href="#pending" id="pending"><i class="fa fa-exclamation-triangle"> </i> Pending Invites </a></li>
            <li><a data-toggle="modal" data-target="#invite" href="#send"><i class="fa fa-user-plus"> </i> Send Invite </a></li>
          </ul>

          <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
             


            <div class="row">
                  <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Friend since</th>
                        <th>Add to project</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>thoaha</td>
                        <td>r4shyd@gmail.com</td>
                        <td>pending</td>
                        <td>2015</td>
                        <td>

                         <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select A project
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">One </a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                      </ul>
                    </div>

                        </td>
                        <td> 
                     <div class="btn-group">
                      <button type="button" class="btn btn-warning"><i class="fa fa-ban"></i> Block</button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-user-times"></i> Remove</button>
                    </div>

                    </td>
                      </tr>
                      
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Friend since</th>
                        <th>Add to project</th>
                        <th>Actions</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
              





            </div>
            <div id="pending" class="tab-pane fade">
              <h3>pending invites</h3>
              <p>xx</p>
            </div>
           
          </div>

          <!-- invite Modal -->
            <div id="invite" class="modal fade" role="dialog">
              <div class="modal-dialog modal-sm modal-primary">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Invite Friends</h4>
                  </div>
                  <div class="modal-body">
                  <form role="form" method="POST" action="<?php echo base_url('index.php/contacts/send_invite');?>">
                  <label>Enter Email address</label> <br>
                    <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="email" name="email_add" class="form-control" placeholder="Email">
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline">Save changes</button>
                  </div>
                </div>
</form>
              </div>
            </div>



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->

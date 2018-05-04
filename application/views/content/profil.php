  <div class="callout callout-info">
          <h4>Profil!</h4>
        </div>
<section class="content">

      <div class="row">
        <div class="col-md-6">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url('assets/dist/img/pegawai/'.$this->session->userdata('foto'))?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $this->session->userdata('nama'); ?></h3>

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <!-- /.col -->
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings">Profil</a></li>
            </ul>
            <div class="tab-content">
                <form class="form-horizontal" action="<?=base_url('user/profil')?>">
<?php $query=$this->db->get_where('user',['user_kode'=>$this->session->userdata('user')])->row(); ?>
<input type="hidden" name="id" value="<?=$query->user_id?>">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon" style="background: #ddd;">
                          <i class="fa fa-user-o"></i>
                      </div>
                      <input type="text" class="form-control" name="user" value="<?=$query->user_username?>" disabled>
                    </div>                   
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon" style="background: #ddd;">
                          <i class="fa fa-lock"></i>
                          </div>
                       <input class="form-control" id="pass" name="pass" value="<?=$query->user_password?>" disabled>
                    </div>                   
                  </div>

                </form>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>

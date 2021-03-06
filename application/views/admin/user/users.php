
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">

            
           <div class="panel panel-info">
                <div class="panel-heading"> <i class="fa fa-list"></i> All Users
				
				
				 <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;New User</a> &nbsp;

                    <a href="<?php echo base_url('admin/user/power') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp;User Power</a>
                <?php else: ?>
                    <!-- check logged user role permissions -->

                    <?php if(check_power(1)):?>
                        <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;New User</a>
                    <?php endif; ?>
                <?php endif ?>
				
				</div>
				
                <div class="panel-body table-responsive">
				
				 <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
							<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Login</th>
                                    <th>Perfil</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                
                                <tr>

                                    <td><?php echo $user['nome_usuario']; ?></td>
                                    <td><?php echo $user['login'];?></td>
                                    

                                    <td>
                                        <?php if ($user['cod_pessoa'] == 0): ?>
                                            <div class="label label-table label-danger">Admin</div>
                                        <?php else: ?>
                                            <div class="label label-table label-success">User</div>
                                        <?php endif ?>
                                    </td>
                                    

                                    <td class="text-nowrap">

                                        <?php if ($this->session->userdata('role') == 'admin'): ?>
										
										<a href="<?php echo base_url('admin/user/update/'.$user['id_usuario']) ?>"><button type="button" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></button></a>
																				
											<a href="<?php echo base_url('admin/user/delete/'.$user['id_usuario']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button></a>


                                        <?php else: ?>

                                            <!-- check logged user role permissions -->

                                            <?php if(check_power(2)):?>

<a href="<?php echo base_url('admin/user/update/'.$user['id']) ?>"><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-edit"></i></button></a>

                                            <?php endif; ?>
											
                                            <?php if(check_power(3)):?>
											
												
<a href="<?php echo base_url('admin/user/delete/'.$user['id']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button></a>

                                            <?php endif; ?>

                                        <?php endif ?>

                                        
                                        
                                     
                                        
                                    </td>
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
                    </div>
					
					
            </div>
        </div>
    </div>

 </div>

    <!-- End Page Content -->
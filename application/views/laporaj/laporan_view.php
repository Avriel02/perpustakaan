<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:green"> </i>  <?= $title_web;?>
    </h1>
    <ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-file-text"></i>&nbsp; <?= $title_web;?></li>
    </ol>
  </section>
  <section class="content">
 
	<div class="row">
	    <div class="col-md-12">
		<div class="box box-primary">
                <div class="box-header with-border">
                <div class="col-md">
                   <button onclick="window.print()"class="btn btn-danger">
						<i class="fa fa-print"> </i> Print</button></a>
                    </div>
                   

                </div>
				<!-- /.box-header -->
				<div class="box-body">
                    <br/>
					<div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Pinjam</th>
                                <th>ID Anggota</th>
                                <th>Nama</th>
                                <th>Pinjam</th>
                                <th style="width:10%">Status</th>
                                
                            </tr>
						</thead>
						<tbody>
						<?php $no=1;foreach($pinjam->result_array() as $isi){
									$anggota_id = $isi['anggota_id'];
									$ang = $this->db->query("SELECT * FROM tbl_login WHERE anggota_id = '$anggota_id'")->row();

									$pinjam_id = $isi['pinjam_id'];
									$denda = $this->db->query("SELECT * FROM tbl_denda WHERE pinjam_id = '$pinjam_id'");
									
						?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['pinjam_id'];?></td>
                                <td><?= $isi['anggota_id'];?></td>
                                <td><?= $ang->nama;?></td>
                                <td><?= $isi['tgl_pinjam'];?></td>
                                <td><?= $isi['status'];?></td>
                                
                            </tr>
                        <?php $no++;}?>
						</tbody>
					</table>
			    </div>
			    </div>
	        </div>
    	</div>
    </div>
</section>
</div>

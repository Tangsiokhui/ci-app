<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
 				<div class="card-header">
					    Form Ubah Data Mahasiswa
					  </div>
					  <div class="card-body">
					  <form action="" method="post">
					  	<input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
  					  <div class="form-group">
			   				 <label for="name">Name</label>
			   				 <input type="text" name="name" class="form-control" id="name" value="<?= $mahasiswa['name']; ?>">
			   				 <small class="form-text text-danger" ><?= form_error('name'); ?></small>
		  				</div>
		  				 <div class="form-group">
			   				 <label for="nrp">NRP</label>
			   				 <input type="number" name="nrp" class="form-control" id="nrp" value="<?= $mahasiswa['nrp']; ?>">
			   				 <small class="form-text text-danger" ><?= form_error('nrp'); ?></small>
		  				</div>
		  				<div class="form-group">
			   				 <label for="email">Email</label>
			   				 <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
			   				 <small class="form-text text-danger" ><?= form_error('email'); ?></small>
		  				</div>
		  				 <div class="form-group">
						    <label for="jurusan">Jurusan</label>
						    <select class="form-control" id="jurusan" name="jurusan">
						    	<?php foreach ( $jurusan as $j ) : ?>
						    		<?php if( $j == $mahasiswa['jurusan']) : ?> 
						    			<option value="<?= $j; ?>" selected><?= $j; ?></option>
						      	<?php else : ?>
						      			<option value="<?= $j; ?>"><?= $j; ?></option>
						  		<?php endif; ?>
						     <?php endforeach; ?>		    
						    </select>
						    </div>
						    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
						</form>  
					  
					</div>
			</div>
		</div>
	</div>
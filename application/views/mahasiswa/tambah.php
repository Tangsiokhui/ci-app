<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
 				<div class="card-header">
					    Form Tambah Data Mahasiswa
					  </div>
					  <div class="card-body">
					  <form action="" method="post">
  					  <div class="form-group">
			   				 <label for="name">Name</label>
			   				 <input type="text" name="name" class="form-control" id="name">
			   				 <small class="form-text text-danger" ><?= form_error('name'); ?></small>
		  				</div>
		  				 <div class="form-group">
			   				 <label for="nrp">NRP</label>
			   				 <input type="number" name="nrp" class="form-control" id="nrp">
			   				 <small class="form-text text-danger" ><?= form_error('nrp'); ?></small>
		  				</div>
		  				<div class="form-group">
			   				 <label for="email">Email</label>
			   				 <input type="text" name="email" class="form-control" id="email">
			   				 <small class="form-text text-danger" ><?= form_error('email'); ?></small>
		  				</div>
		  				 <div class="form-group">
						    <label for="jurusan">Jurusan</label>
						    <select class="form-control" id="jurusan" name="jurusan">
						      <option value="Information Technology">Information Technology</option>
						      <option value="Accounting">Accounting</option>
						      <option value="Multimedia">Multimedia</option>
						      <option value="Logistic">Logistic</option>
						      <option value="Bussiness">Bussiness</option>						    
						    </select>
						    </div>
						    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
						</form>  
					  
					</div>
			</div>
		</div>
	</div>
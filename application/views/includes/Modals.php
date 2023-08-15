<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body form">
				<form action="#" id="form" class="form-horizontal">
					<input type="hidden" value="" name="id"/> 
					<div class="form-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Product Name</label>
								<input type="text" class="form-control" name="product_name" id="product_name">
								<span class="help-block notif" ></span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Product Price</label>
								<input type="text" class="form-control" name="product_price" id="product_price">
								<span class="help-block notif" ></span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Product Platform</label>
								<select class="form-control" name="product_platform" id="product_platform"></select>
								<span class="help-block notif" ></span>
							</div>
						</div>

					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label class="control-label">Product Status</label>
									<select class="form-control" name="product_status" id="product_status"></select>
								<span class="help-block notif" ></span>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Featured</label>
								<select class="form-control" name="product_featured" id="product_featured"></select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Sale Price</label>
								<input type="text" class="form-control" name="sale_price" id="sale_price">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Product Quantity</label>
								<input type="text" class="form-control" name="product_quan" id="product_quan">
							</div>
						</div>
					</div>
																	
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Product Description</label>
								<textarea class="form-control" name="product_desc" id="product_desc" rows="5"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
				</form>
		</div>
			<div class="modal-footer">
					<button type="button" id="btnSave" onclick="save();myAlertAdd();" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
    </div>
  </div>
</div>


<!-- Delete Game -->
<div class="modal fade" id="ModalDeleteGame" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure, you want to Delete? 
      </div>
      <div class="modal-footer">
				<form action="#" id="delForm" class="form-horizontal">
					<div class="form-body">    
						<div class="form-groupD">      
							<input type="hidden" name="id" value="">
						</div>
						<button type="button" id="btnDel" onclick="deleteG()" class="btn btn-danger">Permanent Delete</button>
						<button type="button" id="btnTDel" onclick="TempdeleteG()" class="btn btn-warning">Temporary Delete</button>
					</div>
				</form>
      </div>
		</div>
  </div>
</div>


<!-- CMS ADD modal -->
<div class="modal fade" id="modal_cmsadd" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body form">
				<form action="#" id="formCMS" class="form-horizontal ">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-groupC">                            
									<select class="form-control" name="gtype" id="gtypeAdd">
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-groupC">
									<input type="text" class="form-control" name="addCMSTitle" id="addCMSTitle">
								</div>
							</div>
					</div>
				</form>
			</div>
		</div>
			<div class="modal-footer">
					<button type="button" id="btnSave" onclick="save_cms()" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
    </div>
  </div>
</div>


<!-- CMS UPDATE modal -->
<div class="modal fade" id="modal_cmsupdate" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body form">
				<form action="#" id="formUpdateCMS" class="form-horizontal ">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-groupCU">                            
									<select class="form-control" onclick="FindType()" name="gtypeUpdate" id="gtypeUpdate"></select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-groupCU">                            
									<select class="form-control"  onclick="TypeChange()" name="selectType" id="selectType"></select>
								</div>
							</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-groupCU">
							<label></label>
								<input type="hidden" class="form-control" name="cmsID" id="cmsID" value="">
								<input type="text" class="form-control" name="updateType" id="updateType">
								<span class="help-block notif" ></span>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnUpdateCMS" onclick="cms_update()" class="btn btn-info">Update</button>
				<button type="button"  id="btnDeleteCMS" onclick="cms_delete()" class="btn btn-danger">Delete</button>
			</div>
    </div>
	</div>
</div>

<!-- Export Products -->
<div class="modal fade" id="ModalExport" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Export Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body form">
				<div class="row">
					<a href="<?= base_url()."Home/Export"?>" class="ExportButton"><button class="btn btn-warning ExportButton" title="Export CSV"><span class="icon mobile"><img src="assets/images/export_games.svg" /></span>Export Games</button></a>
				</div>
				<div class="row">
					<a href="<?= base_url()."Home/ExportCMS"?>" class="ExportButton"><button class="btn btn-warning ExportButton" title="Export Content"><span class="icon mobile"><img src="assets/images/export_cms.svg" /></span>Export CMS</button></a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button"  id="btnDeleteCMS" data-dismiss="modal" class="btn btn-danger">Close</button>
			</div>
    </div>
	</div>
</div>

<!-- Export CMS -->
<div class="modal fade" id="ModalRegister" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Register an Account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body form">
				<form method="post" action="<?= base_url()."Home/Register"?>">
				<div class="form-group">
					Username:
					<input type="text" class="form-control" name="reg_name" id="reg_name" required>
</div>
				<div class="form-group">
					Email Address:
					<input type="email" class="form-control" name="reg_email" id="reg_email" required>
</div><div class="form-group">
					Password:
					<input type="password" class="form-control" name="reg_password" id="reg_password" required></div>
					<div class="form-group">Confirm Password:
					<input type="password" class="form-control" name="reg_conf" id="reg_conf" required></div>
				
			</div>
			<div class="modal-footer"><div class="form-group">
				<button type="submit"  id="" class="btn btn-success">Register</button></div>
				<button type="button"  id="btnDeleteCMS" data-dismiss="modal" class="btn btn-danger">Close</button>
				</form>
			</div>
    </div>
	</div>
</div> -->
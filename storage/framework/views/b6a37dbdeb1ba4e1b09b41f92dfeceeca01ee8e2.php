<?php $__env->startSection("content-header"); ?>
<div id="app">
	<section class="content-header">
			<h1>
				Upload Banner
				<small></small>
			</h1>
	</section>

	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-success" @click=";$('#modal-default').modal('show')"><i class="fa fa-plus"></i> Upload Banner</button>
							<h3>  </h3>
							<div v-if="tableLoading" class="fa-5x text-center">
									<i class="fa fa-spinner fa-spin"></i>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<h2> Priview Banner </h2>
									<?php if(!empty($prop->banner)): ?>
									<img src="<?php echo e(asset("$prop->banner")); ?>" style="width:300px;">
									<?php else: ?>
									<h3 style="text-align: center;">Belum Upload Banner</h3>
									<?php endif; ?>
								</div>
							</div>
						
							
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-success" @click=";$('#modal-default2').modal('show')"><i class="fa fa-plus"></i> Upload Business Model Canvas</button>
							<h3>  </h3>
							<div v-if="tableLoading" class="fa-5x text-center">
									<i class="fa fa-spinner fa-spin"></i>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<h2> Priview Business Model Canvas </h2>
									<?php if(!empty($prop->canvas)): ?>
									<img src="<?php echo e(asset("$prop->canvas")); ?>" style="width:300px;">
									<?php else: ?>
									<h3 style="text-align: center;">Belum Upload Business Model Canvas</h3>
									<?php endif; ?>
								</div>
							</div>
						
							
					</div>
				</div>
				<div class="ajax-content">
				</div>
				<div class="modal fade in" id="modal-default">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span></button>
							<h4 class="modal-title">Upload Banner</h4>
						</div>
						<div class="modal-body">
							<div :class="Boolean(errors.file)? 'form-group has-error' : 'form-group'">
								<label >File</label>
								<input type="file"  class="error form-control" ref="file" @change="fileHandler()" placeholder="file" accept=".png,jpg,jpeg">
								<span v-if="Boolean(errors.file)"class="help-block">
									<ul>
										<li v-for="(item,index) in errors.file">{{ item }}</li>
									</ul>
								</span>
							</div>

							

							<div v-if="Boolean(errors.error)" class="alert alert-danger">
								<h4><i class="icon fa fa-danger"></i> Error !</h4>
								<ul>
									<li v-for="(item,index) in errors.error">{{ item }}</li>
								</ul>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" @click="saveHandler">Tambah</button>
						</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
					</div>

					<div class="modal fade in" id="modal-default2">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span></button>
								<h4 class="modal-title">Upload Business Model Canvas</h4>
							</div>
							<div class="modal-body">
								<div :class="Boolean(errors.file2)? 'form-group has-error' : 'form-group'">
									<label >File</label>
									<input type="file"  class="error form-control" ref="file2" @change="fileHandler2()" placeholder="file" accept=".png,jpg,jpeg">
									<span v-if="Boolean(errors.file2)"class="help-block">
										<ul>
											<li v-for="(item,index) in errors.file2">{{ item }}</li>
										</ul>
									</span>
								</div>
	
								<div v-if="Boolean(errors.error)" class="alert alert-danger">
									<h4><i class="icon fa fa-danger"></i> Error !</h4>
									<ul>
										<li v-for="(item,index) in errors.error">{{ item }}</li>
									</ul>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" @click="saveHandler2">Tambah</button>
							</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
						</div>
			</div>
			
			<!-- /.box-body -->
			<div class="box-footer">
				Footer
			</div>
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->
		
	</section>
</div>
	<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
	<?php if(is_null($prop)): ?>
		alert("Belum Input data proposal !")
		window.location = "<?php echo e(url('/uplProposal')); ?>"
	<?php endif; ?>
function reloadTable(id){
	app.reloadTable(id);
}

var app = new Vue({
	el: '#app',
	data: {
		orderType : 0,
		dt : 0,
		file : undefined,
		file2 : undefined,
		errors: {},
		orderId : 1,
		modal1 : false,
		tableLoading : false
	},
	methods: {
		saveHandler : function (){
			
			let formData = new FormData()
			formData.append('file', this.file);
			<?php if(!is_null($prop)): ?>
			formData.append('id', '<?php echo e($prop->id); ?>');
			<?php endif; ?>

			axios.post( '<?php echo e(url('/uploadBanner')); ?>',
						formData,
						{
							headers: {
								'Content-Type': 'multipart/form-data'
							}
						}
				).then(function(){
					app.errors = {}
					window.location.reload()
					
				})
				.catch(function(error){
					if(Boolean(error.response.data.errors)){
						app.errors = error.response.data.errors;
					}
					else{
						app.errors = error.response.data.data;
					}
				});
		},
		fileHandler : function(){
			this.file = this.$refs.file.files[0]
		},
		saveHandler2 : function (){
			
			let formData = new FormData()
			formData.append('file2', this.file2);
			<?php if(!is_null($prop)): ?>
			formData.append('id', '<?php echo e($prop->id); ?>');
			<?php endif; ?>

			axios.post( '<?php echo e(url('/uploadCanvas')); ?>',
						formData,
						{
							headers: {
								'Content-Type': 'multipart/form-data'
							}
						}
				).then(function(){
					app.errors = {}
					window.location.reload()
					
				})
				.catch(function(error){
					if(Boolean(error.response.data.errors)){
						app.errors = error.response.data.errors;
					}
					else{
						app.errors = error.response.data.data;
					}
				});
		},
		fileHandler2 : function(){
			this.file2 = this.$refs.file2.files[0]
		},
		
	},
	async mounted() {
		
	},
	watch : {
		
	}
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\IF\Semester 8\Projekan Menpro\menpro\resources\views/uplBanner.blade.php ENDPATH**/ ?>
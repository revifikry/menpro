<?php $__env->startSection("content-header"); ?>
<div id="app">
	<section class="content-header">
			<h1>
				Register Kelompok
				<small></small>
			</h1>
	</section>

	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Pendaftaran Kelompok</h3>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-4">
							<div class="form-group">
								<label for="">Judul Proposal</label>
								<input type="text"  class="error form-control" id="" placeholder="Judul Proposal">
								<span v-if="Boolean(errors.name)"class="help-block">
									<ul>
										<li v-for="(item,index) in errors.name">{{ item }}</li>
									</ul>
								</span>
							</div>
							<div class="form-group">
								<label for="">List NRP Kelompok</label>
								<textarea class="form-control">
								</textarea>
								<span v-if="Boolean(errors.name)"class="help-block">
									<ul>
										<li v-for="(item,index) in errors.name">{{ item }}</li>
									</ul>
								</span>
							</div>
							<div class="form-group">
								<label for="">Nama Dosen Pembimbing</label>
								<input type="text"  class="error form-control" id="" placeholder="Dosen Pembimbing">
								<span v-if="Boolean(errors.name)"class="help-block">
									<ul>
										<li v-for="(item,index) in errors.name">{{ item }}</li>
									</ul>
								</span>
							</div>
							<div class="form-group">
								<label for="">Kelas</label>
								<input type="text"  class="error form-control" id="" placeholder="Kelas">
								<span v-if="Boolean(errors.name)"class="help-block">
									<ul>
										<li v-for="(item,index) in errors.name">{{ item }}</li>
									</ul>
								</span>
							</div>

							<div class="form-group">
									<label for="">File Proposal</label>
									<input type="file"  class="error form-control" id="" placeholder="Kelas">
									<span v-if="Boolean(errors.name)"class="help-block">
										<ul>
											<li v-for="(item,index) in errors.name">{{ item }}</li>
										</ul>
									</span>
								</div>

							<div class="form-group">
									<label for="">Banner</label>
									<input type="file"  class="error form-control" id="" placeholder="Kelas">
									<span v-if="Boolean(errors.name)"class="help-block">
										<ul>
											<li v-for="(item,index) in errors.name">{{ item }}</li>
										</ul>
									</span>
								</div>
					</div>
				</div>
				<div class="ajax-content">
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
				<button class="btn btn-primary"><i class="fa fa-sent"></i> Simpan</button>
			</div>
			<!-- /.box-footer-->
		</div>
		
	</section>
</div>
	<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
function reloadTable(id){
	app.reloadTable(id);
}

var app = new Vue({
	el: '#app',
	data: {
		orderType : 0,
		dt : 0,
		domain : '',
		errors: {},
		orderId : 1,
		modal1 : false,
		tableLoading : false
	},
	methods: {
		order : function(){
			if(this.orderType == 0){
				return 'Pending'
			}
			else if (this.orderType == 1) {
				return 'Expire'
			}
			else if (this.orderType == 2) {
				return 'Paid'
			}
		},
		saveHandler : function (){
			
			axios.post('asd',{
				orderId : this.orderId,
				domain : this.domain
			})
			.then(function (response) {
				console.log(response)
				app.errors = {}
				window.location.reload()
			})
			.catch(function (error) {
				if(Boolean(error.response.data.errors)){
					app.errors = error.response.data.errors;
				}
				else{
					app.errors = error.response.data.data;
				}
			})
		},
		reloadTable : async function (id) {
			swal({
				title: "Confirm Payment?",
				text: "",
				icon: "warning",
				buttons: true,
			})
			.then(async (confirmed) => {
				if (confirmed) {
					await $.ajax({
						url : "<?php echo e(url('user/deleteLicense')); ?>",
						method : "POST",
						dataType : "JSON",
						data : {"id" : id},
						success : function (data){
							// console.log(data)
						}

					})

					swal("License Deleted", {
					icon: "success",
					});

					this.dt.destroy();
					this.tableLoading = true
					await this.createDataTable();
					this.tableLoading = false

				}
			}); 
			
		},
		createDataTable : function(){
			$(document).ready(function(){
				app.dt = $('#example1').DataTable({
				processing: true,
				serverSide: true,
				ajax: {
						url : '<?php echo e(url("datagen/4")); ?>/',
						type: "GET",
						dataType: "JSON",
				},
				columns: [
							{ data: 'DT_RowIndex', name: 'DT_RowIndex' },
							{ data: 'idx0', name: 'idx0' },
							{ data: 'idx1', name: 'idx1' },
							{ data: 'idx2', name: 'idx2' },
							{ data: 'idx3', name: 'idx3' },
							{ data: 'action', name: 'action' },
				]
				});
			});
		}
	},
	async mounted() {
		await this.createDataTable();
	},
	watch : {
		orderType : async function(){
			this.dt.destroy();
			this.tableLoading = true
			await this.createDataTable();
			this.tableLoading = false
		}
	}
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\menpro\resources\views/regismahasiswa.blade.php ENDPATH**/ ?>
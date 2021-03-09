<?php $__env->startSection("content-header"); ?>
<div id="app">
	<section class="content-header">
			<h1>
				Data Proposal
				<small></small>
			</h1>
	</section>

	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						
							<h3>List Proposal Masuk : </h3>
							<div v-if="tableLoading" class="fa-5x text-center">
									<i class="fa fa-spinner fa-spin"></i>
							</div>
						<table  v-if="!tableLoading" id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Kelompok</th>
									<th>Kelas</th>
									<th>Judul Proposal</th>
									<th>Topik</th>
									<th>Keterangan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
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
							<h4 class="modal-title">Tambah Jurusan</h4>
						</div>
						<div class="modal-body">
							<div :class="Boolean(errors.domain)? 'form-group has-error' : 'form-group'">
								<label for="exampleInputEmail1">Nama Jurusan</label>
								<input type="text"  class="error form-control" id="exampleInputEmail1" v-model="domain" placeholder="Nama Jurusan">
								<span v-if="Boolean(errors.domain)"class="help-block">
									<ul>
										<li v-for="(item,index) in errors.domain">{{ item }}</li>
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

					<div class="modal fade in" id="modal-view">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span></button>
								<h4 class="modal-title">Detail Kelompok</h4>
							</div>
							<div class="modal-body">
								<table class="table " style="font-size:16px;">
									<tbody>
									<tr>
										<td><b>Nama Kelompok</b></td>
										<td>: Kelompok A Informatika</td>
									</tr>
									<tr>
										<td><b>Anggota Kelompok</b></td>
										<td>: • [15-2016-120] Randy Hardianto</option>
											<br>&nbsp; • [15-2016-121] Ridwa Ismail</option>
											<br>&nbsp; • [15-2016-122] Gustian P</option></td>
									</tr>
									<tr>
										<td><b>Dosen Pembimbing</b></td>
										<td>:[120011591] Dr. Zane Stroman</td>
									</tr>
									<tr>
										<td><b>Kelas</b></td>
										<td>: [IF20201A] Informatika A</td>
									</tr>
									
								  </tbody>
								</table>
								<table class="table " style="font-size:16px;">
									<tbody>
									<tr>
										<td><b>Judul</b></td>
										<td>: Aplikasi Parkir Berbasis Web</td>
									</tr>
									<tr>
										<td><b>Topik</b></td>
										<td>: Topik Proposal</td>
									</tr>
									<tr>
										<td><b>Bidang</b></td>
										<td>: Informatika</td>
									</tr>
									<tr>
										<td><b>Status Laporan Akhir</b></td>
										<td>: Belum Mengumpulkan</td>
									</tr>
									<tr>
										<td><b>Banner</b></td>
										<td>:<img src="<?php echo e(asset("images/asd.jpeg")); ?>" style="width:300px;"></td>
									</tr>
									
								  </tbody>
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
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
function reloadTable(id){
	app.reloadTable(id);
}

function viewModal(){
	app.viewModal();
	// alert("A")
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
		viewModal : function(){
			$("#modal-view").modal("show");
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
						url : '<?php echo e(url("datagen/5/cust2/download")); ?>/',
						type: "GET",
						dataType: "JSON",
				},
				columns: [
							{ data: 'DT_RowIndex', name: 'DT_RowIndex' },
							{ data: 'idx0', name: 'idx0' },
							{ data: 'idx1', name: 'idx1' },
							{ data: 'idx2', name: 'idx2' },
							{ data: 'idx3', name: 'idx3' },
							{ data: 'idx4', name: 'idx4' },
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
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\menpro\resources\views/dataProposal.blade.php ENDPATH**/ ?>
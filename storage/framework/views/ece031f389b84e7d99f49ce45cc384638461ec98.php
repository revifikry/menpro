<?php $__env->startSection("content-header"); ?>
<div id="app">
	<section class="content-header">
			<h1>
				Data Kelompok <?php if(!$isAda): ?> <button class="btn btn-success" @click="modalOpen('add')"><i class="fa fa-plus"></i> Daftarkan Kelompok</button>
				<?php else: ?>
				<button class="btn btn-warning" @click="editData(<?php echo e($kelompok->id); ?>)"><i class="fa fa-edit"></i> Edit Kelompok</button>
				<?php endif; ?>
				<small></small>
			</h1>
	</section>

	<section class="content">
		<!-- Default box -->
		<div class="row">
			<div class="col-md-6">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Data Kelompok</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<?php if($isAda): ?>
								<table class="table " style="font-size:16px;">
									<tbody>
									<tr>
										<td><b>Nama Kelompok</b></td>
										<td>: <?php echo e($kelompok->nama_kel); ?></td>
									</tr>
									<tr>
										<td><b>Anggota Kelompok</b></td>
										<td>
										<?php $__currentLoopData = $kelompok->mhs()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
										 • [<?php echo e($mhs->nomor); ?>] <?php echo e($mhs->nama); ?><br>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</td>
									</tr>
									<tr>
										<td><b>Dosen Pembimbing</b></td>
										<td>: [<?php echo e($kelompok->dosen->nomor); ?>] <?php echo e($kelompok->dosen->nama); ?></td>
									</tr>
									<tr>
										<td><b>Kelas</b></td>
										<td>: <?php echo e($kelompok->kelas->jurusan->nama); ?> [<?php echo e($kelompok->kelas->kelas); ?>]</td>
									</tr>
									
								  </tbody>
								</table>
								<?php else: ?>
								<h2 class="text-center"> Belum Daftar Kelompok</h2>
								<?php endif; ?>
							</div>
						</div>
						<div class="ajax-content">
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					</div>
					<!-- /.box-footer-->
				</div>
			</div>

			<div class="col-md-6">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Data Proposal</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<?php if(empty($kelompok->id_proposal)): ?>
								<h2 class="text-center"> Belum Input Data Proposal</h2>
								<?php else: ?>

								<div class="text-center col-md-4">
									<?php if(empty($kelompok->proposal->banner)): ?>
									<img src="<?php echo e(asset("images/noimg.png")); ?>" style="width:240px;border:1px solid #ccc;">
									<?php else: ?>
									<img src="<?php echo e(asset($kelompok->proposal->banner)); ?>" style="width:240px;border:1px solid #ccc;">
									<?php endif; ?>
								</div>
								<div class="col-md-6">
								<h3> Data Proposal </h3>
								<table class="table " style="font-size:16px;width:100%">
									<tbody>
									<tr>
										<td><b>Judul</b></td>
										<td>: <?php echo e($kelompok->proposal->judul); ?></td>
									</tr>
									<tr>
										<td><b>jenis</b></td>
										<td>: <?php echo e(ucfirst($kelompok->proposal->jenis)); ?></td>
									</tr>
									<tr>
										<td><b>Bidang</b></td>
										<td>: <?php echo e(ucfirst($kelompok->proposal->bidang)); ?></td>
									</tr>	
									<tr>
										<td><b>Deskripsi</b></td>
										<td> <?php echo $kelompok->proposal->deskripsi; ?></td>
									</tr>					
								  </tbody>
								</table>
							</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="ajax-content">
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					</div>
					<!-- /.box-footer-->
				</div>
			</div>

		</div>
		
			<h2>
				Histori Upload Proposal
				<small></small>
			</h2>
			
		
		<?php if(!$isUploaded->isEmpty()): ?>
		<ul class="timeline">
			<?php
			$col = ["maroon","green","blue","yellow","teal","purple","navy","maroon","red","green","blue","yellow","teal","purple","navy","maroon"];
			?>
			<!-- timeline time label -->
			<?php $__currentLoopData = $isUploaded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
			<li class="time-label">
				<span class="bg-<?php echo e($col[$k]); ?>"  style="padding:5px 15px">
					<?php echo e($v->upl_date); ?> 
				</span>
			</li>
			<!-- /.timeline-label -->
			
			<!-- timeline item -->
			<li>
				<!-- timeline icon -->
				<i class="fa fa-file bg-blue"></i>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> <?php echo e($v->upl_time); ?> </span>
					
					<h3 class="timeline-header"><a href="#"><?php echo e($v->judul_file); ?></a></h3>
					
					<div class="timeline-body">
						<?php echo e($v->keterangan); ?>

					</div>
					
					
				</div>
			</li>
			<!-- END timeline item -->
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<li>
				<i class="fa fa-clock-o bg-gray"></i>
				
			</li>
			
		</ul>
		<?php else: ?>
		<h4>
			Belum pernah upload proposal
			<small></small>
		</h4>
		<?php endif; ?>

		<div class="modal fade in" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span></button>
						<h4 class="modal-title">Daftarkan Kelompok</h4>
					</div>
					<div class="modal-body">
						<div :class="Boolean(errors.nama_kel)? 'form-group has-error' : 'form-group'">
							<label for="">Nama Kelompok</label>
							<input type="text"  class="error form-control" v-model="nama_kel" placeholder="Nama Kelompok">
							<span v-if="Boolean(errors.nama_kel)"class="help-block">
								<ul>
									<li v-for="(item,index) in errors.nama_kel">{{ item }}</li>
								</ul>
							</span>
						</div>
						<div :class="Boolean(errors.kel)? 'form-group has-error' : 'form-group'">
							<label for="">Anggota Kelompok</label><br>
							<select class="select2mhs form-control" onchange="app.kel = $('.select2mhs').val()" multiple="multiple" data-placeholder="Pilih anggota kelompok" style="width:100% !important;">
								<?php $__currentLoopData = $sel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php echo $s; ?>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<small v-if="kelTr">Silahkan pilih anggota</small>
							
							<span v-if="Boolean(errors.kel)"class="help-block">
								<ul>
									<li v-for="(item,index) in errors.kel">{{ item }}</li>
								</ul>
							</span>
						</div>
						<div class="form-group">
							<label for="">Dosen Pembimbing</label>
							<select class="select2dosen form-control" onchange="app.dosen = $('.select2dosen').val()" style="width:100% !important;">
								<option></option>
							</select>
							<span v-if="Boolean(errors.name)"class="help-block">
								<ul>
									<li v-for="(item,index) in errors.name">{{ item }}</li>
								</ul>
							</span>
						</div>
						<div class="form-group">
							<label for="">Kelas</label>
							<select class="select2kelas form-control" onchange="app.kelas = $('.select2kelas').val()" style="width:100% !important;">
								<option></option>
							</select>
							<span v-if="Boolean(errors.name)"class="help-block">
								<ul>
									<li v-for="(item,index) in errors.name">{{ item }}</li>
								</ul>
							</span>
						</div>
	
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
					<button v-if="mdTr == 'add'" type="button" class="btn btn-primary" @click="saveHandler">Tambah</button>
					<button v-if="mdTr == 'edit'" type="button" class="btn btn-primary" @click="editHandler">Simpan</button>
				</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
			</div>
		</div>
		
		
	</section>
	<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
$(document).ready(function() {
    $('.select2s').select2({
		maximumSelectionLength : 6
	});
});	
function reloadTable(id){
	app.reloadTable(id);
}

var app = new Vue({
	el: '#app',
	data: {
		orderType : 0,
		dt : 0,
		dtTb : {},
		nama_kel : '',
		kel : [],
		kelTr : false,
		dosen : '',
		kelas : '',
		errors: {},
		dtId : '',
		mdTr : '',
		modal1 : false,
		tableLoading : false
	},
	methods: {
		modalOpen : function(tr) {
			this.mdTr = tr
			if(tr == "add"){
				$('#modal-default').modal('show')
				this.nama_kel = ''
				this.kel = []
				this.dosen = ''
				this.kelas = ''
				this.errors = {}
			}
			else if(tr == 'edit'){
				$('#modal-default').modal('show')
				this.errors = {}
			}
		},
		editData : function(id) {
			<?php if($isAda): ?>
			$('.select2mhs').val(<?php echo e($idkel); ?>);
			$('.select2mhs').trigger('change');
			$('.select2dosen').val(<?php echo e($kelompok->id_dosbing); ?>);
			$('.select2dosen').trigger('change');
			$('.select2kelas').val(<?php echo e($kelompok->id_kelas); ?>);
			$('.select2kelas').trigger('change');

			this.nama_kel = '<?php echo e($kelompok->nama_kel); ?>'
			this.kel = <?php echo e($idkel); ?>

			this.dosen = <?php echo e($kelompok->id_dosbing); ?>

			this.kelas = <?php echo e($kelompok->id_kelas); ?>

			this.dtId = <?php echo e($kelompok->id); ?>

			<?php endif; ?>
			this.errors = {}
			this.modalOpen('edit')
		},
		getDataById : function(id) {
			return this.dtTb.filter(dtTb => dtTb.id == id)[0]
		},
		editHandler : function() {
			axios.post('<?php echo e(url("editKelompok")); ?>',{
				id : this.dtId,
				nama_kel : this.nama_kel,
				kel : this.kel,
				kelas : this.kelas,
				dosen : this.dosen
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
		saveHandler : function (){
			
			axios.post('<?php echo e(url("addKelompok")); ?>',{
				nama_kel : this.nama_kel,
				kel : this.kel,
				kelas : this.kelas,
				dosen : this.dosen
			})
			.then(function (response) {
				// console.log(response)
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
				console.log(app.errors)
			})
		},
		deleteHandler : async function (id) {
			swal({
				title: "Akan Menghapus?",
				text: "",
				icon: "warning",
				buttons: true,
			})
			.then(async (confirmed) => {
				if (confirmed) {
					await $.ajax({
						url : "<?php echo e(url('deleteKelas')); ?>",
						method : "POST",
						dataType : "JSON",
						data : {"id" : id},
						success : function (data){
							// console.log(data)
						}

					})

					swal("Data Dihapus!", {
					icon: "success",
					});

					this.dt.destroy();
					this.tableLoading = true
					await this.createDataTable();
					this.tableLoading = false

				}
			}); 
			
		},
		getDataKelas : function(){
			axios.get('<?php echo e(url("getKelas")); ?>')
			.then(function (response) {
				$('.select2kelas').select2({
					placeholder: "Pilih Kelas",
					data : response.data.data
				});
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
		getDataDosen : function(){
			axios.get('<?php echo e(url("getDosen")); ?>')
			.then(function (response) {
				$('.select2dosen').select2({
					placeholder: "Pilih Dosen Pembimbing",
					data : response.data.data
				});
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
		getDataMhs : function(){
			axios.get('<?php echo e(url("getMhs")); ?>')
			.then(function (response) {
				

			})
			.catch(function (error) {
				if(Boolean(error.response.data.errors)){
					app.errors = error.response.data.errors;
				}
				else{
					app.errors = error.response.data.data;
				}
			})
			$('.select2mhs').select2({
				maximumSelectionLength: 6,
				allowClear: true
			});
			setTimeout(function(){
				$(".select2-search__field").css({"width":"100%"});
				$(".select2-search__field").css({"padding-left":"15px"});
			},400)
		}
	},
	async mounted() {
		await this.getDataKelas();
		await this.getDataDosen();
		await this.getDataMhs();
		// await this.createDataTable();
	},
	watch : {
		kel : function(){
			if(this.kel.length <= 6){
				this.kelTr = true
			}
			else{
				this.kelTr = false
			}
		}
	}
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\menpro\resources\views/regismahasiswa.blade.php ENDPATH**/ ?>
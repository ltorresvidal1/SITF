@push('css')
<link href="/assets/js/plugins/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet" >
        <link href="/assets/js/plugins/datatables/css/responsive.bootstrap4.min.css" rel="stylesheet">
        <link href="/assets/js/plugins/datatables/css/buttons.bootstrap4.min.css" rel="stylesheet">

@endpush



@extends('layouts.plantillaFormularios')
@section('title','Informes')


@section('hrefformulario')

@endsection


@section('tituloformulario','Informes')
@section('principalformulario','Informes')
@section('accionformulario','TODOS')
@section('descripcionformulario','Listado De Informes')
@section('classformulario','')


@section('content')




			<!-- page header -->
		
      
			
	
      
		
			<!-- BEGIN rows -->
			<div class="row" data-masonry='{"percentPosition": true }'>
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-600 fs-16px">Total sales</div>
								<a href="#" class="text-decoration-none">View report</a>
							</div>
					
							<!-- stats -->
							<div class="d-flex align-items-center mb-4 h3">
								<div>$821.50</div>
								<small class="fw-400 ms-auto text-success">+5%</small>
							</div>
					
							<!-- chart -->
							<div>
								<div class="fs-13px fw-600 mb-3">SALES OVER TIME</div>
								<div class="chart mb-2" style="height: 190px">
									<canvas id="chart1" class="w-100" height="190"></canvas>
								</div>
								<div class="d-flex align-items-center">
									<i class="fa fa-square text-gray-300 me-2 ms-auto"></i> 
									<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
									<i class="fa fa-square text-primary me-2"></i> 
									<span class="fs-12px" data-id="today-date">&nbsp;</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-600 fs-16px">Online store sessions</div>
								<a href="#" class="text-decoration-none">View report</a>
							</div>
					
							<!-- stats -->
							<div class="d-flex align-items-center mb-4 h3">
								<div>39</div>
								<small class="fw-400 ms-auto text-danger">-2.5%</small>
							</div>
					
							<!-- stats small -->
							<div class="row mb-4">
								<div class="col-6">Visitors</div>
								<div class="col-3 text-center">2</div>
								<div class="col-3 text-end">
									<span class="text-danger">-</span> 50%
								</div>
							</div>
					
							<!-- chart -->
							<div>
								<div class="fs-13px fw-600 mb-3">SESSIONS OVER TIME</div>
								<div class="chart mb-2" style="height: 190px">
									<canvas id="chart2" class="w-100" height="190"></canvas>
								</div>
								<div class="d-flex align-items-center">
									<i class="fa fa-square text-gray-300 me-2 ms-auto"></i> 
									<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
									<i class="fa fa-square text-blue me-2"></i> 
									<span class="fs-12px" data-id="today-date">&nbsp;</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-3">
								<div class="flex-fill fw-600 fs-16px">Top product by units sold</div>
							</div>
					
							<!-- list -->
							<div>
								<div class="row mb-2">
									<div class="col-6">iPhone 11 Pro Max</div>
									<div class="col-3 text-center">329</div>
									<div class="col-3 text-center"><span class="text-success">+</span> 25%</div>
								</div>
								<div class="row mb-2">
									<div class="col-6">iPad Pro</div>
									<div class="col-3 text-center">219</div>
									<div class="col-3 text-center"><span class="text-danger">-</span> 5.2%</div>
								</div>
								<div class="row mb-2">
									<div class="col-6">Macbook Pro</div>
									<div class="col-3 text-center">125</div>
									<div class="col-3 text-center"><span class="text-success">+</span> 2.3%</div>
								</div>
								<div class="row mb-2">
									<div class="col-6">iPhone SE 2</div>
									<div class="col-3 text-center">92</div>
									<div class="col-3 text-center"><span class="text-success">+</span> 4.9%</div>
								</div>
								<div class="row mb-2">
									<div class="col-6">Apple pencil</div>
									<div class="col-3 text-center">52</div>
									<div class="col-3 text-center"><span class="text-success">+</span> 25%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-600 fs-16px">Returning customer rate</div>
							</div>
					
							<!-- stats -->
							<div class="d-flex align-items-center mb-4 h3">
								<div>52.85%</div>
								<small class="fw-400 ms-auto text-danger">-7%</small>
							</div>
					
							<!-- chart -->
							<div>
								<div class="fs-13px fw-600 mb-3">CUSTOMERS</div>
								<div class="chart mb-2" style="height: 190px">
									<canvas id="chart3" class="w-100" height="190"></canvas>
								</div>
								<div class="d-flex align-items-center">
									<i class="fa fa-square text-indigo me-2 ms-auto"></i> 
									<span class="fs-12px me-4">First-time</span>
									<i class="fa fa-square text-teal me-2"></i> 
									<span class="fs-12px">Returning</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-600 fs-16px">Conversion rate</div>
								<a href="#" class="text-decoration-none">View report</a>
							</div>
					
							<!-- stats -->
							<div class="d-flex align-items-center mb-4 h3">
								<div>5.29%</div>
								<small class="fw-400 ms-auto text-success">+83%</small>
							</div>
					
							<!-- list -->
							<div>
								<div class="fs-13px fw-600 mb-3">CONVERSION FUNNEL</div>
								<div class="row mb-2">
									<div class="col-6">
										<div>Added to cart</div>
										<div class="text-gray-700 fs-13px">55 session</div>
									</div>
									<div class="col-3 text-center">25.28%</div>
									<div class="col-3 text-center"><span class="text-danger">-</span> 5%</div>
								</div>
								<div class="row mb-2">
									<div class="col-6">
										<div>Reached checkout</div>
										<div class="text-gray-700 fs-13px">25 session</div>
									</div>
									<div class="col-3 text-center">15.28%</div>
									<div class="col-3 text-center"><span class="text-success">+</span> 82%</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div>Sessions converted</div>
										<div class="text-gray-700 fs-13px">5 session</div>
									</div>
									<div class="col-3 text-center">5.28%</div>
									<div class="col-3 text-center"><span class="text-success">+</span> 82%</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-600 fs-16px">Average order value</div>
							</div>
					
							<!-- stats -->
							<div class="d-flex align-items-center mb-4 h3">
								<div>$35.12</div>
								<small class="fw-400 ms-auto text-danger">-3.2%</small>
							</div>
					
							<!-- chart -->
							<div>
								<div class="chart mb-2" style="height: 190px">
									<canvas id="chart4" class="w-100" height="190"></canvas>
								</div>
								<div class="d-flex align-items-center">
									<i class="fa fa-square text-gray-300 me-2 ms-auto"></i> 
									<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
									<i class="fa fa-square text-blue me-2"></i> 
									<span class="fs-12px" data-id="today-date">&nbsp;</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-600 fs-16px">Total orders</div>
							</div>
					
							<!-- stats -->
							<div class="d-flex align-items-center mb-4 h3">
								<div>12</div>
								<small class="fw-400 ms-auto text-success">+57%</small>
							</div>
					
							<!-- chart -->
							<div>
								<div class="fs-13px fw-600 mb-3">ORDERS OVER TIME</div>
								<div class="chart mb-2">
									<canvas id="chart5" class="w-100" height="190"></canvas>
								</div>
								<div class="d-flex align-items-center">
									<i class="fa fa-square text-gray-300 me-2 ms-auto"></i> 
									<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
									<i class="fa fa-square text-blue me-2"></i> 
									<span class="fs-12px" data-id="today-date">&nbsp;</span>
								</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-3">
								<div class="flex-fill fw-600 fs-16px">Top pages by sessions</div>
							</div>
					
							<!-- list -->
							<div class="row mb-2">
								<div class="col-6"><div><a href="#" class="text-decoration-none">/phone/apple-11-pro-max</a></div></div>
								<div class="col-3 text-center">15</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 15%</div>
							</div>
							<div class="row mb-2">
								<div class="col-6"><div><a href="#" class="text-decoration-none">/tablet/apple-ipad-pro-128gb</a></div></div>
								<div class="col-3 text-center">12</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 8%</div>
							</div>
							<div class="row">
								<div class="col-6"><div><a href="#" class="text-decoration-none">/desktop/apple-mac-pro</a></div></div>
								<div class="col-3 text-center">4</div>
								<div class="col-3 text-center"><span class="text-danger">-</span> 3%</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-3">
								<div class="flex-fill fw-600 fs-16px">Sessions by device type</div>
								<a href="#" class="text-decoration-none">View report</a>
							</div>
					
							<!-- list -->
							<div class="row mb-2">
								<div class="col-6">
									<div>Desktop</div>
								</div>
								<div class="col-3 text-center">247</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 4.2%</div>
							</div>
							<div class="row mb-2">
								<div class="col-6">
									<div>Mobile</div>
								</div>
								<div class="col-3 text-center">198</div>
								<div class="col-3 text-center"><span class="text-danger">-</span> 2.2%</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div>Tablet</div>
								</div>
								<div class="col-3 text-center">35</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 8.9%</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
				
				<div class="col-sm-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-3">
								<div class="flex-fill fw-600 fs-16px">Visits from social sources</div>
								<a href="#" class="text-decoration-none">View report</a>
							</div>
					
							<!-- list -->
							<div class="row mb-2">
								<div class="col-6">
									<div>Facebook</div>
								</div>
								<div class="col-3 text-center">247</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 4.2%</div>
							</div>
							<div class="row mb-2">
								<div class="col-6">
									<div>Twitter</div>
								</div>
								<div class="col-3 text-center">153</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 8.2%</div>
							</div>
							<div class="row mb-2">
								<div class="col-6">
									<div>Instagram</div>
								</div>
								<div class="col-3 text-center">98</div>
								<div class="col-3 text-center"><span class="text-danger">-</span> 3.4%</div>
							</div>
							<div class="row mb-2">
								<div class="col-6">
									<div>Pinterest</div>
								</div>
								<div class="col-3 text-center">75</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 1.9%</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div>Dribbble</div>
								</div>
								<div class="col-3 text-center">22</div>
								<div class="col-3 text-center"><span class="text-success">+</span> 2.1%</div>
							</div>
						</div>
					</div>
					<!-- END card -->
				</div>
			</div>
			<!-- END row -->

      
                                

                                    
@endsection


@push('scripts')

<script src="/assets/js/btnEventos.js"></script>

		<script src="/assets/js/plugins/masonry-layout/dist/masonry.pkgd.min.js"></script>
		<script src="/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
		<script src="/assets/js/plugins/moment/min/moment.min.js"></script>
		<script src="/assets/js/demo/analytics.demo.js"></script>


  <script>
/*
  $('#datatableDefault').DataTable({
  dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    responsive: true,
    paging:false,
    ajax:"",
    columns:[
        {data:'codigo_rips'},
        {data:'periodo'},
        {data:'ano'},
        {data:'usuario'},
        {data:'fecharegistro'},
        {data:'idestado'},
        {data:'action',orderable:false},
        ],
    info:false,
    buttons: [ {title: 'Clientes', text: '<i class="fas fa-file-excel"></i>',  titleAttr: 'Exportar a Excel',extend: 'excelHtml5', className: 'btn btn-success', 
    exportOptions: {columns: [0, 1, 2,3,4] }}]
  });  
*/

/*
function actualizador(){
 $('#datatableDefault').DataTable().ajax.reload();
}

function descargar_errores(rips){
window.location = "{{route('rips.export', '')}}"+"/"+rips;
}

setInterval('actualizador()',10000);
*/

/* origignal
$('#datatableDefault').DataTable({
    dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    responsive: true,
    paging:false,
    info:false,
    buttons: [ {title: 'Clientes', text: '<i class="fas fa-file-excel"></i>',  titleAttr: 'Exportar a Excel',extend: 'excelHtml5', className: 'btn btn-success', 
    exportOptions: {columns: [0, 1, 2,3,4] }}]
  });  
*/
</script>


  
@endpush


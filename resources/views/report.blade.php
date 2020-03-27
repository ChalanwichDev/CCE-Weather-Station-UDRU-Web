@extends('master')
@section('title')
    - Report
@endsection
@section('sidebar-Report')
    w3-blue
@endsection
@section('header')

	 <div class="w3-center">
	 <div class="w3-bar" aligh="center">
			<button class="w3-bar-item w3-button w3-white  w3-border  w3-tiny" onclick="reporttoday()">{{trans('message.Today')}}</button>
			<button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="report1day()">{{trans('message.1 days')}}</button>
			<button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="report3day()">{{trans('message.3 days')}}</button>
			<button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="report5day()">{{trans('message.5 days')}}</button>
			<button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="report7day()">{{trans('message.7 days')}}</button>
		  </div>
		</div>                  
@endsection
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@endsection

@section('content')
    <div class="w3-container">
			<div id="order_table" style="overflow:auto; overflow-y:scroll;">
				<table id="data" class='table table-bordered table-striped' border='1' >
					<thead align="CENTER">
						<tr>
							<th>{{trans('message.Date')}}</th>
							<th>{{trans('message.Time')}}</th>
							<th>{{trans('message.PM10')}}</th>
							<th>{{trans('message.Temperature')}}</th>
							<th>{{trans('message.Humidity')}}</th>
							<th>{{trans('message.Wind')}}</th>
							<th>{{trans('message.Wind Direction')}}</th>
							<th>{{trans('message.Rain')}}</th>
							<th>{{trans('message.Rainfall')}}</th>
							<th>{{trans('message.Pressure')}}</th>
							<th>{{trans('message.Solar Radiation')}}</th>
							<th>{{trans('message.UV Index')}}</th>
						</tr>
					</thead>
                </table>
                	</div>
            </div>
            
            <div class="w3-container"><br><br>
			<h5><b><i class="fas fa-tachometer-alt"></i>&nbsp;{{trans('message.Data Summary')}}</b></h5>
			<div class="w3-center">
					<div class="w3-bar" aligh="center">
						   <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="datasummary1day()">{{trans('message.1 days')}}</button>
						   <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="datasummary3day()">{{trans('message.3 days')}}</button>
						   <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="datasummary5day()">{{trans('message.5 days')}}</button>
						   <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="datasummary7day()">{{trans('message.7 days')}}</button>
						   <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="datasummaryall()">{{trans('message.All')}}</button>
						 </div>
					   </div>                      
			<div id="order_table" style="overflow:auto; overflow-y:scroll;">
				<table id="datasumary" class='table table-bordered table-striped' border='1' >
					<thead align="CENTER">
						<tr>
							<th>{{trans('message.Date')}}</th>
                            <th>{{trans('message.PM10 Min')}}</th>
                            <th>{{trans('message.PM10 Max')}}</th>
                            <th>{{trans('message.Temperature Min')}}</th>
                            <th>{{trans('message.Temperature Max')}}</th>
                            <th>{{trans('message.Humidity Min')}}</th>
                            <th>{{trans('message.Humidity Max')}}</th>
                            <th>{{trans('message.Wind Min')}}</th>
                            <th>{{trans('message.Wind Max')}}</th>
                            <th>{{trans('message.Rain Min')}}</th>
							<th>{{trans('message.Rain Max')}}</th>
							<th>{{trans('message.Rainfall')}}</th>
                            <th>{{trans('message.Pressure Min')}}</th>
                            <th>{{trans('message.Pressure Max')}}</th>
                            <th>{{trans('message.Solar Radiation Min')}}</th>
                            <th>{{trans('message.Solar Radiation Max')}}</th>
						</tr>
                    </thead>
                </table>
                	</div>
            </div>

            	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>



		<script>
			this.reporttoday();
			//************************************ ย้อนหลังวันนี้ ********************************************************//
			function reporttoday(){
			$(document).ready(function() {
				$('#data').DataTable({
					"ajax":{
                        "url":"ajaxreporttoday",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "8%","data":"Date"},
                        {"data":"Time"},
                        {"data":"PM10"},
						{"data":"Tempurature"},
						{"data":"Humidity"},
						{"data":"Wind"},
						{"data":"Wind_Direction"},
						{"data":"Rain"},
						{"data":"Rainfall"},
						{"data":"Pressure"},
						{"data":"Solar"},
						{"data":"UV"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],
					"bDestroy": true
				});
			});
			}
			//*************************************************************************************************//

			//************** ย้อนหลัง 1 วัน **********************************************************************//
			function report1day(){
			$(document).ready(function() {
				$('#data').DataTable({
					"ajax":{
                        "url":"ajaxreport1day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "8%","data":"Date"},
                        {"data":"Time"},
                        {"data":"PM10"},
						{"data":"Tempurature"},
						{"data":"Humidity"},
						{"data":"Wind"},
						{"data":"Wind_Direction"},
						{"data":"Rain"},
						{"data":"Rainfall"},
						{"data":"Pressure"},
						{"data":"Solar"},
						{"data":"UV"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],
					"bDestroy": true
				});
			});
			}
			//***********************************************************************************************************//

			//***************ย้อนหลัง 3 วัน ********************************************************************************//
			function report3day(){
			$(document).ready(function() {
				$('#data').DataTable({
					"ajax":{
                        "url":"ajaxreport3day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "8%","data":"Date"},
                        {"data":"Time"},
                        {"data":"PM10"},
						{"data":"Tempurature"},
						{"data":"Humidity"},
						{"data":"Wind"},
						{"data":"Wind_Direction"},
						{"data":"Rain"},
						{"data":"Rainfall"},
						{"data":"Pressure"},
						{"data":"Solar"},
						{"data":"UV"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],
					"bDestroy": true
				});
			});
			}
			//*******************************************************************************************************//

			//************** ย้อนหลัง 5 วัน ****************************************************************************//
			function report5day(){
			$(document).ready(function() {
				$('#data').DataTable({
					"ajax":{
                        "url":"ajaxreport5day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "8%","data":"Date"},
                        {"data":"Time"},
                        {"data":"PM10"},
						{"data":"Tempurature"},
						{"data":"Humidity"},
						{"data":"Wind"},
						{"data":"Wind_Direction"},
						{"data":"Rain"},
						{"data":"Rainfall"},
						{"data":"Pressure"},
						{"data":"Solar"},
						{"data":"UV"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],
					"bDestroy": true
				});
			});
			}
			//*******************************************************************************************************//

			//******************* ย้อนหลัง 7 วัน **********************************************************************//
			function report7day(){
			$(document).ready(function() {
				$('#data').DataTable({
					"ajax":{
                        "url":"ajaxreport7day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "8%","data":"Date"},
                        {"data":"Time"},
                        {"data":"PM10"},
						{"data":"Tempurature"},
						{"data":"Humidity"},
						{"data":"Wind"},
						{"data":"Wind_Direction"},
						{"data":"Rain"},
						{"data":"Rainfall"},
						{"data":"Pressure"},
						{"data":"Solar"},
						{"data":"UV"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],
					"bDestroy": true
				});
			});
			}
			//*****************************************************************************************************//

			
		</script>
		
        <script>
			//******** สรุปทั้งหมด *************************************************************************//
			this.datasummaryall();
			function datasummaryall(){
			$(document).ready(function() {
				$('#datasumary').DataTable({
					"ajax":{
                        "url":"ajaxreportdatasummaryall",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "10%","data":"Date"},
                        {"data":"PM10_Low"},
                        {"data":"PM10_High"},
                        {"data":"Tempurature_Low"},
                        {"data":"Tempurature_High"},
                        {"data":"Humidity_Low"},
                        {"data":"Humidity_High"},
                        {"data":"Wind_Low"},
                        {"data":"Wind_High"},
                        {"data":"Rain_Low"},
                        {"data":"Rain_High"},
						{"data":"Rainfall"},
                        {"data":"Pressure_Low"},
                        {"data":"Pressure_High"},
                        {"data":"Solar_Low"},
                        {"data":"Solar_High"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel',
					],
					"bDestroy": true
				});
			});
			}
			//**************************************************************************************************//

			//******** สรุปย้อนหลัง 1 วัน  *************************************************************************//

			function datasummary1day(){
			$(document).ready(function() {
				$('#datasumary').DataTable({
					"ajax":{
                        "url":"ajaxreportdatasummary1day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "10%","data":"Date"},
                        {"data":"PM10_Low"},
                        {"data":"PM10_High"},
                        {"data":"Tempurature_Low"},
                        {"data":"Tempurature_High"},
                        {"data":"Humidity_Low"},
                        {"data":"Humidity_High"},
                        {"data":"Wind_Low"},
                        {"data":"Wind_High"},
                        {"data":"Rain_Low"},
                        {"data":"Rain_High"},
						{"data":"Rainfall"},
                        {"data":"Pressure_Low"},
                        {"data":"Pressure_High"},
                        {"data":"Solar_Low"},
                        {"data":"Solar_High"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel',
					],
					"bDestroy": true
				});
			});}
			//**************************************************************************************************//

			//******** สรุปย้อนหลัง 3 วัน *************************************************************************//
			function datasummary3day(){
			$(document).ready(function() {
				$('#datasumary').DataTable({
					"ajax":{
                        "url":"ajaxreportdatasummary3day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "10%","data":"Date"},
                        {"data":"PM10_Low"},
                        {"data":"PM10_High"},
                        {"data":"Tempurature_Low"},
                        {"data":"Tempurature_High"},
                        {"data":"Humidity_Low"},
                        {"data":"Humidity_High"},
                        {"data":"Wind_Low"},
                        {"data":"Wind_High"},
                        {"data":"Rain_Low"},
                        {"data":"Rain_High"},
						{"data":"Rainfall"},
                        {"data":"Pressure_Low"},
                        {"data":"Pressure_High"},
                        {"data":"Solar_Low"},
                        {"data":"Solar_High"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel',
					],
					"bDestroy": true
				});
			});}
			//**************************************************************************************************//

			//******** สรุปย้อนหลัง 5 วัน  *************************************************************************//
			function datasummary5day(){
			$(document).ready(function() {
				$('#datasumary').DataTable({
					"ajax":{
                        "url":"ajaxreportdatasummary5day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "10%","data":"Date"},
                        {"data":"PM10_Low"},
                        {"data":"PM10_High"},
                        {"data":"Tempurature_Low"},
                        {"data":"Tempurature_High"},
                        {"data":"Humidity_Low"},
                        {"data":"Humidity_High"},
                        {"data":"Wind_Low"},
                        {"data":"Wind_High"},
                        {"data":"Rain_Low"},
                        {"data":"Rain_High"},
						{"data":"Rainfall"},
                        {"data":"Pressure_Low"},
                        {"data":"Pressure_High"},
                        {"data":"Solar_Low"},
                        {"data":"Solar_High"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel',
					],
					"bDestroy": true
				});
			});}
			//**************************************************************************************************//

			//******** สรุปย้อนหลัง 7 วัน *************************************************************************//
			function datasummary7day(){
			$(document).ready(function() {
				$('#datasumary').DataTable({
					"ajax":{
                        "url":"ajaxreportdatasummary7day",
                        "dataSrc":""
                    },
                    "columns":[
                        { "width": "10%","data":"Date"},
                        {"data":"PM10_Low"},
                        {"data":"PM10_High"},
                        {"data":"Tempurature_Low"},
                        {"data":"Tempurature_High"},
                        {"data":"Humidity_Low"},
                        {"data":"Humidity_High"},
                        {"data":"Wind_Low"},
                        {"data":"Wind_High"},
                        {"data":"Rain_Low"},
                        {"data":"Rain_High"},
						{"data":"Rainfall"},
                        {"data":"Pressure_Low"},
                        {"data":"Pressure_High"},
                        {"data":"Solar_Low"},
                        {"data":"Solar_High"}
                    ],
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel',
					],
					"bDestroy": true
				});
			});}
			//**************************************************************************************************//
		</script>

@endsection

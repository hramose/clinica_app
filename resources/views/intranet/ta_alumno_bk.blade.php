<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Intranet</title>

	<meta name="description" content="Draggabble Widget Boxes with Persistent Position and State" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />

	<link rel="stylesheet" href="assets/css/index.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
	<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="assets/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="no-skin">
    <?php  echo view('intranet/menu'); ?>			
        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="index">Home</a>
                        </li>
                         <li class="active">Tareas acad&eacute;micas</li>
                         <li class="active">Alumnos</li>
                    </ul><!-- /.breadcrumb -->
                </div>

                <div class="page-content">
                    <div class="page-header">
                        <h1>Tareas acad&eacute;micas de alumnos</h1>
                    </div><!-- /.page-header -->

                    <p>Aqu&iacute; el alumno puede visualizar su avance en el curso.</p>

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <h3 class="header smaller lighter blue">R&uacute;brica de participaci&oacute;n (50%)</h3>

                            <div class="row">
                                <div class="col-xs-12">

                                    <table id="simple-table" class="table  table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center"># semana</th>
                                                <th class="hidden-480">Puntualidad</th>
                                                <th class="hidden-480">Participaci&oacute;n y discusi&oacute;n</th>
                                                <th>Suma de notas</th>
                                                <th class="detail-col">Comentarios</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- PRIMERA SEMANA -->
                                            <tr>
                                                <td style="text-align:center">1</td>
                                                <td class="hidden-480">
                                                    <span style="color:red">1/5</span>
                                                </td>
                                                <td class="hidden-480">
                                                    3/5
                                                </td>
                                                <td>
                                                    <span style="color:red">4/10</span>
                                                </td>
                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Ver comentarios">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Ver comentarios</span>
                                                        </a>
                                                        <a href="#" class="blue bigger-140" title="Nuevo comentario">
                                                            <i class="ace-icon fa fa-comment"></i>
                                                            <span class="sr-only">Nuevo comentario</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="timeline-items">
                                                                    <!-- COMENTARIO DE RESPUESTA -->
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                            <h5 class="widget-title smaller">Luis Flores</h5>
                                                                            <span class="widget-toolbar no-border">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                20 set 2016, 10:22
                                                                            </span>
                                                                        </div>
                                                                        <div class="widget-body">
                                                                            <div class="widget-main">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                                                                                Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit.
                                                                                Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                                <!-- OPCIONES PARA COMENTARIO DE RESPUESTA -->
                                                                                <div class="pull-right action-buttons">
                                                                                    <a href="#">
                                                                                        Responder <i class="ace-icon fa fa-reply light-green bigger-130"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="space-6"></div>
                                                                                <div class="space-6"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- COMENTARIO PROPIO -->
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                            <h5 class="widget-title smaller">
                                                                                Anthony Guti&eacute;rrez&nbsp;
                                                                                <i class="ace-icon fa fa-share"></i>
                                                                                Luis Flores
                                                                            </h5>
                                                                            <span class="widget-toolbar no-border">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                Ayer, 13:16
                                                                            </span>
                                                                        </div>
                                                                        <div class="widget-body">
                                                                            <div class="widget-main">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                                                                                Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit.
                                                                                Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                                <!-- OPCIONES PARA COMENTARIO PROPIO -->
                                                                                <div class="pull-right action-buttons">
                                                                                    <a href="#">
                                                                                        Editar <i class="ace-icon fa fa-comment blue bigger-125"></i>
                                                                                    </a>
                                                                                    <a href="#">
                                                                                        Eliminar <i class="ace-icon fa fa-times red bigger-125"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="space-6"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- FIN COMENTARIOS -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- SEGUNDA SEMANA -->
                                            <tr>
                                                <td style="text-align:center">2</td>
                                                <td class="hidden-480">
                                                    4/5
                                                </td>
                                                <td class="hidden-480">
                                                    5/5
                                                </td>
                                                <td>
                                                    9/10
                                                </td>
                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Ver comentarios">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Ver comentarios</span>
                                                        </a>
                                                        <a href="#" class="blue bigger-140" title="Nuevo comentario">
                                                            <i class="ace-icon fa fa-comment"></i>
                                                            <span class="sr-only">Nuevo comentario</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="timeline-items">
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                            <h5 class="widget-title smaller">Luis Flores</h5>
                                                                            <span class="widget-toolbar no-border">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                20 set 2016, 10:22
                                                                            </span>
                                                                        </div>
                                                                        <div class="widget-body">
                                                                            <div class="widget-main">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                                                                                Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit.
                                                                                Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- TERCERA SEMANA -->
                                            <tr>
                                                <td style="text-align:center">3</td>
                                                <td class="hidden-480">
                                                    <span style="color:red">2/5</span>
                                                </td>
                                                <td class="hidden-480">
                                                    <span style="color:red">0/5</span>
                                                </td>
                                                <td>
                                                    <span style="color:red">2/10</span>
                                                </td>
                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Ver comentarios">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Ver comentarios</span>
                                                        </a>
                                                        <a href="#" class="blue bigger-140" title="Nuevo comentario">
                                                            <i class="ace-icon fa fa-comment"></i>
                                                            <span class="sr-only">Nuevo comentario</span>
                                                        </a>
                                                    </div>
                                                </td>												
                                            </tr>
                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="timeline-items">
                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                            <h5 class="widget-title smaller">Luis Flores</h5>
                                                                            <span class="widget-toolbar no-border">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                20 set 2016, 10:22
                                                                            </span>
                                                                        </div>
                                                                        <div class="widget-body">
                                                                            <div class="widget-main">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                                                                                Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit.
                                                                                Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- CUARTA SEMANA -->
                                            <tr>
                                                <td style="text-align:center">4</td>
                                                <td class="hidden-480">
                                                    <span style="color:gray">Sin nota</span>
                                                </td>
                                                <td class="hidden-480">
                                                    <span style="color:gray">Sin nota</span>
                                                </td>
                                                <td>
                                                    <span style="color:gray">Sin nota</span>
                                                </td>
                                                <td class="center"></td>
                                            </tr>

                                            <!-- FIN TABLA -->
                                        </tbody>
                                    </table>

                                </div><!-- /.span -->
                            </div><!-- /.row -->

                            <h3 class="header smaller lighter blue">R&uacute;brica de seguimiento de casos (50%)</h3>

                            <div class="row">
                                <div class="col-xs-12">

                                    <table class="table  table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="center"># semana</th>
                                                        <th class="hidden-480">Relaci&oacute;n abogado-usuario</th>
                                                        <th class="hidden-480">Ejercicio profesional</th>
                                                        <th class="hidden-480">Investigaci&oacute;n y redacci&oacute;n</th>
                                                        <th class="hidden-480">Oralidad</th>
                                                        <th>Suma de notas</th>
                                                        <th class="detail-col">Comentarios</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                    <!-- PRIMERA SEMANA -->
                                                    <tr class="">
                                                        <td class="center">1</td>
                                                        <td class="hidden-480">
                                                            <span style="color:red">1/5</span>
                                                        </td>
                                                        <td class="hidden-480">3/5</td>
                                                        <td class="hidden-480">4/5</td>
                                                        <td class="hidden-480">3/5</td>
                                                        <td>11/20</td>
                                                        <td class="center">
                                                            <div class="action-buttons">
                                                                <a href="#" class="green bigger-140" title="Ver comentarios">
                                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                                    <span class="sr-only">Ver comentarios</span>
                                                                </a>
                                                                <a href="#" class="ace-icon fa fa-comment blue bigger-140 show-details-btn" title="Nuevo comentario">
                                                                    <!-- Si se le pone en formato como el de ver comentarios se reemplaza la imagen, arreglar eso en un futuro -->
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="detail-row">
                                                        <td colspan="8">
                                                            <div class="table-detail">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <form>
                                                                            <fieldset>
                                                                                <textarea class="width-100" resize="none" placeholder="Escribe algo..."></textarea>
                                                                            </fieldset>
                                                                            <div class="clearfix">
                                                                                <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                                    Enviar
                                                                                    <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- SEGUNDA SEMANA -->
                                                    <tr class="">
                                                        <td class="center">2</td>
                                                        <td class="hidden-480">4/5</td>
                                                        <td class="hidden-480">5/5</td>
                                                        <td class="hidden-480">3/5</td>
                                                        <td class="hidden-480">
                                                            <span style="color:red">2/5</span>
                                                        </td>
                                                        <td>14/20</td>
                                                        <td class="center">
                                                            <div class="action-buttons">
                                                                <a href="#" class="green bigger-140 show-details-btn" title="Ver comentarios">
                                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                                    <span class="sr-only">Ver comentarios</span>
                                                                </a>
                                                                <a href="#" class="blue bigger-140" title="Nuevo comentario">
                                                                    <i class="ace-icon fa fa-comment"></i>
                                                                    <span class="sr-only">Nuevo comentario</span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="detail-row">
                                                        <td colspan="8">
                                                            <div class="table-detail">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <span style="color:gray">A&uacute;n no hay comentarios.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- TERCERA SEMANA -->
                                                    <tr class="">
                                                        <td class="center">3</td>
                                                        <td class="hidden-480">
                                                            <span style="color:red">2/5</span>
                                                        </td>
                                                        <td class="hidden-480">
                                                            <span style="color:red">0/5</span>
                                                        </td>
                                                        <td class="hidden-480">
                                                            <span style="color:red">1/5</span>
                                                        </td>
                                                        <td class="hidden-480">3/5</td>
                                                        <td>
                                                            <span style="color:red">6/20</span>
                                                        </td>
                                                        <td class="center">
                                                            <div class="action-buttons">
                                                                <a href="#" class="green bigger-140 show-details-btn" title="Ver comentarios">
                                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                                    <span class="sr-only">Ver comentarios</span>
                                                                </a>
                                                                <a href="#" class="blue bigger-140" title="Nuevo comentario">
                                                                    <i class="ace-icon fa fa-comment"></i>
                                                                    <span class="sr-only">Nuevo comentario</span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="detail-row">
                                                        <td colspan="8">
                                                            <div class="table-detail">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="timeline-items">
                                                                            <div class="widget-box transparent">
                                                                                <span style="color:gray">A&uacute;n no hay comentarios.</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- CUARTA SEMANA -->
                                                    <tr class="">
                                                        <td class="center">4</td>
                                                        <td class="hidden-480">
                                                            <span style="color:gray">Sin nota</span>
                                                        </td>
                                                        <td class="hidden-480">
                                                            <span style="color:gray">Sin nota</span>
                                                        </td>
                                                        <td class="hidden-480">
                                                            <span style="color:gray">Sin nota</span>
                                                        </td>
                                                        <td class="hidden-480">
                                                            <span style="color:gray">Sin nota</span>
                                                        </td>
                                                        <td>
                                                            <span style="color:gray">Sin nota</span>
                                                        </td>
                                                        <td class="center"></td>
                                                    </tr>
                                                    <!-- FIN -->
                                                </tbody>
                                        </table>

                                </div>
                            </div>

                            <h3 class="header smaller lighter blue">Promedio final</h3>

                            <div class="row">
                                <div class="col-xs-12">

                                    <table class="table  table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="hidden-480 center">Promedio de participaci&oacute;n</th>
                                                        <th class="hidden-480 center">Promedio de seguimiento de casos</th>
                                                        <th class="center">Nota final</th>
                                                        <th class="center">Estado</th>
                                                        <th class="detail-col">Comentarios</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td class="hidden-480 center">
                                                            <span style="color:red">5/10</span>
                                                        </td>
                                                        <td class="hidden-480 center">
                                                            <span style="color:red">10.3/20</span>
                                                        </td>
                                                        <td class="center">
                                                            <span style="color:red">10.15/20</span>
                                                        </td>
                                                        <td class="center">En proceso</td>
                                                        <td class="center"></td>
                                                    </tr>
                                                    <tr class="detail-row">
                                                        <td colspan="8">
                                                            <div class="table-detail">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="timeline-items">
                                                                            <div class="widget-box transparent">
                                                                                <span style="color:gray">A&uacute;n no hay comentarios.</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                        </table>

                                </div>
                            </div>

                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

		<?php  echo view('intranet/footer'); ?>	

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
                jQuery('#litareas').addClass('active open');
                jQuery('#lialumnos').addClass('active');
				//initiate dataTables plugin
				
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
					
			
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>

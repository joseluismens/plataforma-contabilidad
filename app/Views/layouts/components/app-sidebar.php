				<div class="sticky">
				    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				    <div class="app-sidebar">
				        <div class="side-header">
				            <a class="header-brand1" href="<?php echo base_url('index'); ?>">
				                <img src="<?php echo base_url('assets/images/brand/logo.png'); ?>"
				                    class="header-brand-img desktop-logo" alt="logo">
				                <img src="<?php echo base_url('assets/images/brand/logo-1.png'); ?>"
				                    class="header-brand-img toggle-logo" alt="logo">
				                <img src="<?php echo base_url('assets/images/brand/logo-2.png'); ?>"
				                    class="header-brand-img light-logo" alt="logo">
				                <img src="<?php echo base_url('assets/images/brand/logo-3.png'); ?>"
				                    class="header-brand-img light-logo1" alt="logo">
				            </a><!-- LOGO -->
				        </div>
				        <div class="main-sidemenu">
				            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
				                    width="24" height="24" viewBox="0 0 24 24">
				                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
				                </svg>
				            </div>
				            <ul class="side-menu">
				                <li>
				                    <h3>Menu</h3>
				                </li>
				                <li class="slide">
				                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
				                        <i class="side-menu__icon fa fa-home"></i>
				                        <span class="side-menu__label">Inicio</span>
				                    </a>
				                </li>
				                <li>
				                    <h3>Remuneración</h3>
				                </li>
				                <li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-bank" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Empresa</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="<?=base_url()?>/index.php/empresa" class="slide-item">Nueva</a></li>
										<li><a href="<?=base_url()?>/index.php/empresa/listar" class="slide-item">listar</a></li>
				                        <li><a href="<?=base_url()?>/index.php/empresa/configurar" class="slide-item">Configurar</a></li>

				                    </ul>
				                </li>
								<li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-users" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Empleados</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="<?=base_url()?>/index.php/empresa" class="slide-item">Nueva</a></li>
										<li><a href="<?=base_url()?>/index.php/empresa/listar" class="slide-item">listar</a></li>

				                    </ul>
				                </li>
				                <li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-book" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Contratos</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="<?=base_url()?>/index.php/contrato/nuevo" class="slide-item">Nuevo</a></li>
				                        <li><a href="<?=base_url()?>/index.php/contrato/editar" class="slide-item">Buscar/Editar</a></li>
				                        <li><a href="<?=base_url()?>/index.php/contrato/configurar" class="slide-item">Configurar</a></li>
				                        <li><a href="<?=base_url()?>/index.php/contrato/sueldo_minimo" class="slide-item">Sueldo Mínimo</a></li>

				                    </ul>
				                </li>

								<li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-archive" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Adicionales</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="#" class="slide-item">HyD</a></li>
				                        <li><a href="#" class="slide-item">Horas Extras</a></li>
				                        <li><a href="#" class="slide-item">Licencias</a></li>
				                        <li><a href="#" class="slide-item">Vacaciones</a></li>
										<li><a href="#" class="slide-item">Prestamo</a></li>
										<li><a href="#" class="slide-item">Finiquitos</a></li>
										<li><a href="#" class="slide-item">Tratos</a></li>
										<li><a href="#" class="slide-item">HyD Fijos</a></li>
										<li><a href="#" class="slide-item">Atrasos</a></li>
				                    </ul>
				                </li>
								<li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-cubes" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Procesos</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="#" class="slide-item">Sueldos</a></li>
				                        <li><a href="#" class="slide-item">Nominas</a></li>
				                        <li><a href="#" class="slide-item">Libro DT</a></li>
				                        <li><a href="#" class="slide-item">Centralización</a></li>
										<li><a href="#" class="slide-item">Leyes especiales</a></li>
									
				                    </ul>
				                </li>
								<li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-file" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Informes</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="#" class="slide-item">Informes</a></li>
				                        <li><a href="#" class="slide-item">Configuración</a></li>
				                        <li><a href="#" class="slide-item">Gráficos</a></li>
				                        <li><a href="#" class="slide-item">Periodos</a></li>
										<li><a href="#" class="slide-item">Anexos</a></li>
										<li><a href="#" class="slide-item">Cumpleaños</a></li>
										<li><a href="#" class="slide-item">C. Vigentes</a></li>


									
				                    </ul>
				                </li>
								<li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-pencil-square-o" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Paramentros</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="#" class="slide-item">HyD</a></li>
				                        <li><a href="#" class="slide-item">C. de Costo</a></li>
				                        <li><a href="#" class="slide-item">Contratos</a></li>
				                        <li><a href="#" class="slide-item">Horarios</a></li>
										<li><a href="#" class="slide-item">Gratificación</a></li>
										<li><a href="#" class="slide-item">Indicadores</a></li>
										<li><a href="#" class="slide-item">Sucursales</a></li>
										<li><a href="#" class="slide-item">Finiquitos</a></li>
										<li><a href="#" class="slide-item">Tratos</a></li>
										<li><a href="#" class="slide-item">Anexos</a></li>
				                    </ul>
				                </li>
								<li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-file-archive-o" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Archivos</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="#" class="slide-item">HyD</a></li>
				                        <li><a href="#" class="slide-item">Personas</a></li>
				                        <li><a href="#" class="slide-item">Matrices</a></li>
				                        <li><a href="#" class="slide-item">Dias</a></li>
										<li><a href="#" class="slide-item">Bono Liquido</a></li>
										<li><a href="#" class="slide-item">Masivos</a></li>
									
				                    </ul>
				                </li>
								<li class="slide">
				                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
				                        <i class="fa fa-file-archive-o" style="margin-right:5px"></i>
				                        <span class="side-menu__label">Configuración</span><i class="angle fa fa-angle-right"></i>
				                    </a>
				                    <ul class="slide-menu">
				                        <li><a href="<?=base_url()?>/index.php/configuracion/roles" class="slide-item">Roles</a></li>
				                
									
				                    </ul>
				                </li>



				            </ul>

				        </div>
				    </div>
				</div>
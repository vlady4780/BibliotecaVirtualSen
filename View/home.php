<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                sistema bibliotecario
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="home.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="book.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="catalog.html"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="advancesettings.html"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Admin Name</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
        <div class="sistem" >
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Inicio</small></h1>
            </div>
        </div>
        
        <div class="cartas">
       
            <div class="card">
                <img src="img/img1.png">
                <br>
                <br>
                <h4>Administración de Empresas</h4>
                
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img2.png">
                <br>
                <br>
                <h4>Agroindustria</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img3.png">
                <br>
                <br>
                <h4>Artes Gráficas</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img4.png">
                <br>
                <br>
                <h4>Electrotécnia</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img5.png">
                <br>
                <br>
                <h4>Hoteleria y Turismo</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img6.png">
                <br>
                <br>
                <h4>Industria Manufacturera</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img7.png">
                <br>
                <br>
                <h4>Industrias Alimentarias</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img8.png">
                <br>
                <br>
                <h4>Informática</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img9.png">
                <br>
                <br>
                <h4>Mecánica Automotriz</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>
            
            <div class="card">
                <img src="img/img10.png">
                <br>
                <br>
                <h4>Metalmecánica</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>

            <div class="card">
                <img src="img/img11.png">
                <br>
                <br>
                <h4>Tecnologías Ambientales</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>
            
            <div class="card">
                <img src="img/img12.png">
                <br>
                <br>
                <h4>Textil Confecciones</h4>
                <a href="#"><div class="btncarreras"> Ver Proyectos</div></a>
            </div>
            
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <table>
            <tr>
            <?php foreach($data as $book):?>
                <td><?php echo $book['Titulo'];?></td>
            <?php endforeach;?> 
            </tr>
        </table>
       
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Trabajo grupal GG XD
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Steew Andersson Chara Romero <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Manuel Alonso Colonio Camargo <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Isaac Israel Sanchez Villanueva<i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© <script> var fecha = new Date(); document.write(fecha.getFullYear());</script> Senatinos Forever</div>
        </footer>
    </div>
</body>
</html>
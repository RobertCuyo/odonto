<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODENT Centro Odontológico</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("landing/styles.css") ?>">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="<?= base_url("landing/imagendent/biodent.png")?>" alt="BIODENT Logo">
            </div>
            <div class="nav-container">
                <ul class="nav-links">
                    <li><a href="#">ORTODONCIA</a></li>
                    <li><a href="#">IMPLANTES</a></li>
                    <li><a href="#">CIRUGÍA</a></li>
                    <li><a href="#">REHABILITACIÓN</a></li>
                    <li><a href="#">NOSOTROS</a></li>
                </ul>
                <div class="auth-buttons">
                <!-- Formulario de Registro -->
                <div id="register-modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('register-modal')">&times;</span>
                        <h2>Registro</h2>
                        <form id="register-form" action="registrar.php" method="post">
                            <label for="name">Nombre Completo:</label>
                            <input type="text" id="name" name="name" required>
                            
                            <label for="address">Dirección:</label>
                            <input type="text" id="address" name="address" required>
                            
                            <label for="city">Ciudad:</label>
                            <input type="text" id="city" name="city" required>
                            
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" required>
                            
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required>
                            <div class="show-password-container">
                                <input type="checkbox" id="show-password">
                                <label for="show-password">Mostrar Contraseña</label>
                            </div>                            
                            <button type="submit">Registrarse</button>
                        </form>
                        <div id="registro-correcto" style="display: none;">
                            <h2>¡Registro Correcto!</h2>
                            <img src="<?= base_url("landing/imagendent/check.gif")?>" alt="Check icon">
                        </div>
                    </div>
                </div>

                <!-- Formulario de Inicio de Sesión -->
                <div id="login-modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('login-modal')">&times;</span>
                        <h2>Iniciar Sesión</h2>
                        <form id="login-form">
                            <label for="login-email">Correo Electrónico:</label>
                            <input type="email" id="email-login" placeholder="E-mail" name="email" required>
                            
                            <label for="login-password">Contraseña:</label>
                            <input type="password" id="contrasena-login" placeholder="Contraseña" name="password" required>
                            <div class="show-password-container">
                                <input type="checkbox" id="show-login-password">
                                <label for="show-login-password">Mostrar Contraseña</label>
                            </div>
                            <button type="submit" onclick="login(event)">Ingresar</button>
                        </form>
                    </div>
                </div>

                <!-- Botones de Registro e Inicio de Sesión -->
                <div class="auth-buttons">
                    <button class="register" onclick="openModal('register-modal')">Registrarse</button>
                    <button class="login" onclick="openModal('login-modal')">Ingresar</button>
                </div>


                </div>
            </div>
            <div class="menu-icon" id="menu-icon">
                ☰
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-text-box">
            <div class="hero-text">
                <h1>LA SONRISA PERFECTA COMIENZA</h1>
                <h2>CON AMOR POR TU SALUD DENTAL</h2>
                <p>Con BioDent, tu salud dental y bienestar general están en las mejores manos. Nuestro compromiso con la innovación y la atención personalizada garantiza que cada visita a nuestro consultorio no solo mejore tu sonrisa, sino también tu calidad de vida.</p>
            </div>
        </div>
    </section>

    <!-- Custom Services Section -->
    <section class="custom-services">
        <div class="service-item service-highlight">
            <div class="service-text">
                <h2>DESCUBRE BIODENT:</h2>
                <h6>TRANSFORMA TU ESTÉTICA FACIAL, LUCE UN NUEVO ROSTRO Y ELEVA TU AUTOESTIMA CON LA ÚLTIMA TECNOLOGÍA EN SALUD DENTAL.</h6>
            </div>
        </div>
        <div class="service-item">
            <img src="<?= base_url("landing/imagendent/1.jpg")?>" alt="Implante Dentario">
            <div class="service-text">
                <h3>IMPLANTE DENTARIO</h3>
                <p>Los implantes dentales son una excelente opción para sustituir dientes dañados y lograr una apariencia facial armoniosa.</p>
            </div>
            <button class="learn-more">LEER MÁS</button>
        </div>
        <div class="service-item">
            <img src="<?= base_url("landing/imagendent/3.jpg")?>" alt="Diseño de Sonrisa">
            <div class="service-text">
                <h3>DISEÑO DE SONRISA</h3>
                <p>Es un procedimiento que consiste en ajustar el tamaño y la forma de los dientes para lograr una estética armoniosa.</p>
            </div>
            <button class="learn-more">LEER MÁS</button>
        </div>
        <div class="service-item">
            <img src="<?= base_url("landing/imagendent/4.jpg")?>" alt="Coronas Estéticas">
            <div class="service-text">
                <h3>CORONAS ESTÉTICAS</h3>
                <p>Es ideal para sustituir una corona natural dañada, mejorar la apariencia del rostro y corregir la desalineación dental.</p>
            </div>
            <button class="learn-more">LEER MÁS</button>
        </div>
    </section>
    <section class="nuestro-equipo">
        <h2>NUESTRO EQUIPO</h2>
        <div class="equipo">
            <div class="miembro">
                <img src="<?= base_url("landing/imagendent/f7.png")?>" alt="John Willims Perez Mamani">
                <h3>John Willims Perez Mamani</h3>
                <p class="titulo">Cirujano Dentista</p>
                <p>Probada experiencia en ortodoncia y ortopedia maxilar por la Universidad Nacional del Altiplano.</p>
            </div>
            <div class="miembro">
                <img src="<?= base_url("landing/imagendent/f7.png")?>" alt="Melva Ortega Rodrigues">
                <h3>Melva Ortega Rodrigues</h3>
                <p class="titulo">Cirujano Dentista</p>
                <p>Especialista en Endodoncia y Cariología con postgrado en Odontología Estética y Restauradora por la UNT.</p>
            </div>
            <div class="miembro">
                <img src="<?= base_url("landing/imagendent/f7.png")?>" alt="Betsy Encinas Quille">
                <h3>Betsy Encinas Quille</h3>
                <p class="titulo">Cirujano Dentista</p>
                <p>Especializada en endodoncia interceptiva en niños y rehabilitación oral por UNA Puno.</p>
            </div>
        </div>
    </section>

    <section class="como-podemos-ayudarte">
        <div class="contenedor">
            <div class="intro">
                <h2>Como podemos <span>Ayudarte?</span></h2>
                <p>En BioDent contamos con una trayectoria profesional de probada experiencia en las distintas especializadas de la medicina dental y modernos equipos e instrumental médico, para lograr la sonrisa más agradable y la mejor protección dental.</p>
            </div>
            <div class="servicios-especiales">
                <h3>Servicios especiales</h3>
                <p>Nos esforzamos por brindar atención oportuna, eficiente y de alta calidad, y somos un equipo en constante crecimiento e innovación.</p>
                <button>Conoce más</button>
            </div>
        </div>
        <div class="servicios">
            <div class="servicio">
                <img src="<?= base_url("landing/imagendent/ortodoncia.png")?>" alt="Ortodoncia">
                <h4>Ortodoncia</h4>
                <p>Es un tratamiento para corregir los dientes y huesos mal posicionados, el procedimiento permite conseguir una sonrisa agradable.</p>
            </div>
            <div class="servicio">
                <img src="<?= base_url("landing/imagendent/ortodoncia.png")?>" alt="Cirugía">
                <h4>Cirugía</h4>
                <p>Es una especialidad odontológica que consiste en el procedimiento quirúrgico para superar enfermedades bucales.</p>
            </div>
            <div class="servicio">
                <img src="<?= base_url("landing/imagendent/ortodoncia.png")?>" alt="Odontopediatra">
                <h4>Odontopediatra</h4>
                <p>Corrige patologías de colocación dental, problemas óseos de crecimiento o el paladar estrecho y diferentes tipos de maloclusiones.</p>
            </div>
        </div>
    </section>
    <section class="info-section">
        <div class="content">
            <h2>GRACIAS POR TU ELECCIÓN</h2>
            <h1>Información <span>útil para ti</span></h1>
            <p>Suscríbase al boletín para recibir todas las nuevas ofertas y descuentos de la clínica de DentaLike. Los descuentos solo son válidos para nuestros suscriptores del boletín.</p>
            <form>
                <input type="email" placeholder="Escribe tu correo electrónico" required>
                <button type="submit">SUSCRIBIR</button>
            </form>
        </div>
    </section>

    <div class="container">
        <div class="info">
            <h1>HORARIO DE ATENCIÓN</h1>
            <ul>
                <li><strong>LUN – JUE:</strong> 9AM – 8PM</li>
                <br>
                <li><strong>VIE:</strong> 9AM – 9PM</li>
                <br>
                <li><strong>SÁB:</strong> 9AM – 9PM</li>
                <br>
                <li><strong>DOM:</strong> Cerrado</li>
            </ul>
            <div class="contact-info">
                <p><strong>LLÁMANOS</strong><br><br>994687446</p>
                <p><strong>VISÍTANOS</strong><br><br>Calle Honduras Nro 100 - 2do. Piso - Oficina 5. AREQUIPA</p>
                <p><strong>RESERVAR UNA CITA</strong><br><br>Contáctenos para obtener un dentista exclusivo</p>
            </div>
        </div>
        <div class="map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.476438199329!2d-71.5303477852217!3d-16.409047642887154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a737e9d29ff%3A0xe4a2f45cb24d9b7!2sCalle%20Honduras%20100%2C%20Arequipa%2004014%2C%20Per%C3%BA!5e0!3m2!1ses!2sus!4v1657130644212!5m2!1ses!2sus" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
    <!-- Footer -->
   
    <footer class="footer">
        <div class="footer-top">
            <div class="footer-logo">
                <img src="<?= base_url("landing/imagendent/biodent.png")?>" alt="DentaLike Logo"> <!-- Reemplaza con la ruta de tu logo -->
            </div>
            <div class="footer-follow">
                <p>SÍGUENOS</p>
                <div class="social-icons">
                    <a href="#"><img src="path_to_facebook_icon.png" alt="Facebook"></a>
                    <a href="#"><img src="path_to_twitter_icon.png" alt="Twitter"></a>
                    <a href="#"><img src="path_to_instagram_icon.png" alt="Instagram"></a>
                    <a href="#"><img src="path_to_googleplus_icon.png" alt="Google+"></a>
                </div>
            </div>
        </div>
        <div class="footer-links">
            <div>
                <h3>ORTODONCIA</h3>
                <ul>
                    <li><a href="#">Bracket de Zafiro</a></li>
                    <li><a href="#">Brackets Autoligables</a></li>
                    <li><a href="#">Brackets Metálicos</a></li>
                </ul>
            </div>
            <div>
                <h3>IMPLANTES</h3>
                <ul>
                    <li><a href="#">Implante de carga inmediata</a></li>
                    <li><a href="#">Implante en dos fases</a></li>
                </ul>
            </div>
            <div>
                <h3>ESTÉTICA</h3>
                <ul>
                    <li><a href="#">Carilla de Porcelana</a></li>
                    <li><a href="#">Diseño de Sonrisa</a></li>
                    <li><a href="#">Curaciones Estéticas</a></li>
                    <li><a href="#">Blanqueamiento dental</a></li>
                </ul>
            </div>
            <div>
                <h3>REHABILITACIÓN</h3>
                <ul>
                    <li><a href="#">Puentes dentales</a></li>
                    <li><a href="#">Coronas estéticas</a></li>
                    <li><a href="#">Coronas pediátricas</a></li>
                </ul>
            </div>
            <div>
                <h3>CIRUGÍA</h3>
                <ul>
                    <li><a href="#">Cirugía de terceros molares</a></li>
                    <li><a href="#">Reposicionamiento labial</a></li>
                    <li><a href="#">Gingivoplastia</a></li>
                </ul>
            </div>
            <div>
                <h3>NOSOTROS</h3>
                <ul>
                    <li><a href="#">Nuestra pasión</a></li>
                    <li><a href="#">Historia</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contáctenos</a></li>
                </ul>
            </div>
            <div>
                <h3>BLOG</h3>
            </div>
            <div class="footer-contact">
                <p>994687446</p>
                <p>24/7 NÚMERO DE EMERGENCIA</p>
                <p>Llámennos si tiene una emergencia médica, le responderemos rápidamente y le brindaremos asistencia médica.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright DentaLike 2020. Todos los derechos reservados.</p>
            <div class="footer-bottom-links">
                <a href="#">UBICACIÓN</a>
                <a href="#">CONTÁCTENOS</a>
                <a href="#">SERVICIOS</a>
                <a href="#">VOLVER ARRIBA</a>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('menu-icon').addEventListener('click', function() {
            document.querySelector('.nav-container').classList.toggle('active');
        });

                // Función para abrir el modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        // Función para cerrar el modal
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Cierra el modal si el usuario hace clic fuera del contenido
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = "none";
            }
        }

        // Función para mostrar/ocultar la contraseña en el formulario de registro
        document.getElementById('show-password').addEventListener('change', function() {
            const passwordInput = document.getElementById('password');
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });

        // Función para mostrar/ocultar la contraseña en el formulario de inicio de sesión
        document.getElementById('show-login-password').addEventListener('change', function() {
            const passwordInput = document.getElementById('login-password');
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });

        function submitForm(event) {
            event.preventDefault(); // Prevenir envío por defecto
        
            // Validar el formulario (puedes agregar más validaciones si es necesario)
            let nombre = document.getElementById('nombre').value;
            let direccion = document.getElementById('direccion').value;
            let ciudad = document.getElementById('ciudad').value;
            let email = document.getElementById('email-login').value;
            let contrasena = document.getElementById('contrasena-login').value;
        
            if (nombre && direccion && ciudad && email && contrasena) {
                // Mostrar mensaje de registro correcto y ocultar formulario
                document.getElementById('registro-form').style.display = 'none';
                document.getElementById('registro-correcto').style.display = 'block';
            } else {
                // Si algún campo está vacío, puedes mostrar un mensaje de error o realizar otra acción
                alert('Por favor complete todos los campos.');
            }
        }
        function login(event) {
            event.preventDefault(); // Prevenir envío por defecto
        
            // Obtener datos del formulario
            let email = document.getElementById('email-login').value;
            let contrasena = document.getElementById('contrasena-login').value;
        
            // Simular autenticación (aquí debes implementar la autenticación real)
            // Supongamos una lista estática de usuarios por simplicidad
            let usuarios = [
                { email: 'admin@example.com', contrasena: 'admin123', rol: 'administrador' },
                { email: 'secretaria@example.com', contrasena: 'secretaria123', rol: 'secretaria' },
                { email: 'odontologo@example.com', contrasena: 'odontologo123', rol: 'odontologo' },
                { email: 'paciente@example.com', contrasena: 'paciente123', rol: 'paciente' }
            ];
        
            // Buscar usuario por email y contraseña
            let usuarioEncontrado = usuarios.find(usuario => usuario.email === email && usuario.contrasena === contrasena);
        
            if (usuarioEncontrado) {
                // Redireccionar según el rol del usuario
                switch (usuarioEncontrado.rol) {
                    case 'administrador':
                        window.open('perfil-administrador.html', '_blank');
                        break;
                    case 'secretaria':
                        window.open('perfil-secretaria.html', '_blank');
                        break;
                    case 'odontologo':
                        window.open('perfil-odontologo.html', '_blank');
                        break;
                    case 'paciente':
                        window.open('perfil-paciente.html', '_blank');
                        break;
                    default:
                        alert('Rol de usuario no válido.');
                }
            } else {
                alert('Correo electrónico o contraseña incorrectos.');
            }
        }
        
    </script>
</body>
</html>

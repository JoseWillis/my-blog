<?php require_once 'includes/helpers.php'; ?>

<aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Correo:</label>
                        <input type="email" name="email" />
                        <label for="pass">Contraseña:</label>
                        <input type="password" name="pass" />
                        <input type="submit" value="Entrar" />
                    </form>
                </div>
                <div id="registro" class="bloque">
                    
                    <h3>Registrarse</h3>
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                        
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
                        
                        <label for="email">Correo:</label>
                        <input type="email" name="email" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                        
                        <label for="pass">Contraseña:</label>
                        <input type="password" name="pass" />
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'pass') : ''; ?>
                        
                        <input type="submit" value="Registrar" />
                    </form>
                    <?php borrarErrores(); ?>
                </div>
            </aside>
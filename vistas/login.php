<section id="login">
    
    <form method="get" action="index.php" id="form_log" >
        <input type="text" placeholder="Nombre de Usuario" name="usuario" onfocus="this.placeholder=''" onblur="this.placeholder='Nombre de Usuario'">
        <input type="password" placeholder='Contraseña' name="clave" onfocus="this.placeholder=''" onblur="this.placeholder='Contraseña'">
        <button type="submit" name="entrar">Ingresar</button>
        <p id="reg">Registrarse</p>
    </form>

    <form method="get" action="index.php" id="form_reg">
        <input type="text" placeholder="Nombre de Usuario" name="usuarior" onfocus="this.placeholder=''" onblur="this.placeholder='Nombre de Usuario'">
        <input type="password" placeholder='Contraseña' name="claver1" onfocus="this.placeholder=''" onblur="this.placeholder='Contraseña'">
        <input type="password" placeholder='Contraseña' name="claver2" onfocus="this.placeholder=''" onblur="this.placeholder='Contraseña'">
        <button type="submit" name="registrar">Registrar</button>
        <p id="log">Login</p>
    </form>

</section>

<script type="text/javascript" src="login.js"></script>
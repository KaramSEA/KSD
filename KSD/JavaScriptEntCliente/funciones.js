const user={
    nombre:'Karam Serro',
    nombreUser:'karam9_',
    contrasena:'karam2002',
    login: function(nombreUser,contrasena) {
        if (nombreUser===this.nombreUser&&contrasena===this.contrasena) {
            console.log("Sesión iniciada con exito");
        }
        else{
            console.log("Credenciales no válidas");
        }
    }
}
user.login('karam9_','karam2002');
user.login('karam9_','karam22');

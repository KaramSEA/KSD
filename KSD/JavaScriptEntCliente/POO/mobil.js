  class Producto {
    constructor(nombre, precio){
      this.nombre=nombre;
      this.precio=precio;
    }
    mostrarDetalles(){
      console.log(`EL nombre del producto es: ${this.nombre} y su precio es ${this.precio}`);

    }
  }
  class Libro extends Producto{
    constructor(nombre, precio, autor){
      super(nombre, precio);
      this.autor=autor
    }
    mostrarDetalles(){
      super.mostrarDetalles();
      console.log(`y el autor es ${this.autor}`);
    }
  }
  class Camiseta extends Producto{
    constructor(nombre, precio, talla){
      super(nombre, precio);
      this.talla=talla
    }
    mostrarDetalles(){
      super.mostrarDetalles();
      console.log(`y la talla es ${this.talla}`);
    }
  }
  class Videojuego extends Producto{
    constructor(nombre, precio, genero){
      super(nombre, precio);
      this.genero=genero
    }
    mostrarDetalles(){
      super.mostrarDetalles();
      console.log(`y su genero es ${this.genero}`);
    }
  }
  const libro = new Libro("Aventuras de Luis", 24, "Karam Serroukh");
  const camiseta = new Camiseta("Camiseta", 5, "L");
  const videojuego = new Videojuego("Fifa 24", 64, "Deportes");
  
  libro.mostrarDetalles();

  camiseta.mostrarDetalles();

  videojuego.mostrarDetalles();
  
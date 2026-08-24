# Tienda_Tecnologia

## Descripción

Tienda_Tecnologia es una aplicación web básica e-commerce para una tienda de productos tecnológicos. Ofrece a los usuarios la posibilidad de explorar un catálogo de productos, ver detalles de los mismos, simular agregarlos a un carrito de compras y contactar con la empresa a través de un formulario.

## Objetivo

El objetivo de este proyecto es puramente académico. Busca demostrar el dominio práctico en el desarrollo de aplicaciones web utilizando tecnologías estándar del lado del cliente y servidor, estructurando el código de manera modular y aplicando principios básicos de diseño responsive.

## Tecnologías utilizadas

* PHP
* HTML5
* CSS3
* Bootstrap 5
* JavaScript
* Git
* GitHub

## Funcionalidades

* **Página principal:** Presentación de la tienda, categorías destacadas e información corporativa.
* **Catálogo:** Listado completo de productos tecnológicos disponibles.
* **Productos dinámicos:** Los datos se obtienen a través de un arreglo asociativo en PHP, renderizados con un ciclo `foreach`.
* **Detalle de producto:** Página individual para cada producto que muestra información específica obtenida mediante parámetros `GET`.
* **Categorías:** Visualización organizada de productos por tipo (Laptops, Celulares, etc.).
* **Carrito simulado:** Funcionalidad implementada en JavaScript para demostrar cómo se agregarían productos al carrito, con alertas visuales.
* **Formulario de contacto:** Formulario con validaciones básicas en el cliente.
* **Diseño responsive:** La interfaz se adapta correctamente a computadoras, tablets y teléfonos celulares utilizando el sistema de cuadrículas de Bootstrap.

## Estructura del proyecto

```text
Teinda_Tecnologia/
│
├── index.php
├── productos.php
├── detalle.php
├── nosotros.php
├── contacto.php
├── README.md
├── .gitignore
│
├── data/
│   └── productos.php
│
├── includes/
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
│
└── assets/
    ├── css/
    │   └── estilos.css
    │
    ├── js/
    │   └── script.js
    │
    └── img/
        └── (Las imágenes se consumen vía CDN de Unsplash en este proyecto demo)
```

## Instalación

Para ejecutar el proyecto localmente utilizando XAMPP:

1. Instalar [XAMPP](https://www.apachefriends.org/es/index.html).
2. Copiar toda la carpeta del proyecto dentro del directorio:
   `C:\xampp\htdocs\`
3. Iniciar el servicio **Apache** desde el panel de control de XAMPP.
4. Abrir tu navegador web e ingresar a:
   `http://localhost/Teinda_Tecnologia/`

## Git

Para clonar este repositorio:

```bash
git clone https://github.com/Darwin-Cabezas/Teinda_Tecnologia.git
```

## Ejecución

Una vez clonado el repositorio y colocado en la carpeta `htdocs` de XAMPP, asegúrate de que el servicio Apache esté corriendo y visita la URL indicada en la sección de instalación.

## Capturas de pantalla

### Página principal
![Página principal]()

### Productos
![Productos]()

### Detalle
![Detalle]()

## Enlace del proyecto

[Ver aplicación publicada](#)
*(El proyecto requiere un servicio de hosting compatible con PHP, como InfinityFree. El enlace se agregará una vez desplegado).*

## Integrantes

- Darwin Cabezas
- Anny Canche
- Mady Colobon

## Conclusiones

Durante el desarrollo de este proyecto, aprendimos a estructurar una aplicación web utilizando componentes reutilizables en PHP (`includes`), gestionar datos con arreglos asociativos, implementar diseño responsive con Bootstrap 5, y aplicar funcionalidades dinámicas básicas utilizando JavaScript. Todo el proceso fue versionado de forma segura mediante Git y GitHub.
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * Mapa de vistas y títulos. La clave se usa como nombre de vista y
     * para marcar el enlace activo del menú.
     */
    private $titulos = array(
        'index'      => 'Principal',
        'juego'      => 'El juego',
        'personajes' => 'Personajes',
        'videos'     => 'Videos',
        'contacto'   => 'Contacto',
        'tienda'     => 'Tienda',
        'usuario'    => 'Área de Usuario',
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    // http://localhost/Enoc/
    public function index()
    {
        $this->cargar('index');
    }

    // http://localhost/Enoc/el-juego
    public function juego()
    {
        $this->cargar('juego');
    }

    // http://localhost/Enoc/personajes
    public function personajes()
    {
        $this->cargar('personajes');
    }

    // http://localhost/Enoc/videos
    public function videos()
    {
        $this->cargar('videos');
    }

    // http://localhost/Enoc/contacto
    public function contacto()
    {
        $this->cargar('contacto');
    }

    // http://localhost/Enoc/tienda
    public function tienda()
    {
        $this->cargar('tienda');
    }

    // http://localhost/Enoc/usuario
    public function usuario()
    {
        $this->cargar('usuario');
    }

    /**
     * Carga siempre la misma estructura: cabecera (la nav) + vista de
     * contenido + pie de página.
     */
    private function cargar($vista)
    {
        $datos = array(
            'vista_actual' => $vista,
            'titulo'       => 'Vela Studio · ' . $this->titulos[$vista],
        );

        $this->load->view('partials/header', $datos);
        $this->load->view($vista);
        $this->load->view('partials/footer');
    }
}

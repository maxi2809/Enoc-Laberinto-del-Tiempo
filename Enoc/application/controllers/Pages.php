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
        $this->load->helper('form');

        $datos = array(
            'estado_contacto' => '',
            'tipo_estado_contacto' => '',
            'errores_formulario' => '',
        );

        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|max_length[100]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[254]');
            $this->form_validation->set_rules('asunto', 'Asunto', 'required|in_list[general,colaboraciones,prensa,otro]');
            $this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|required|max_length[5000]');
            $this->form_validation->set_message('required', 'El campo {field} es obligatorio.');
            $this->form_validation->set_message('valid_email', 'Ingresa un correo electrónico válido.');
            $this->form_validation->set_message('max_length', 'El campo {field} no puede superar {param} caracteres.');
            $this->form_validation->set_message('in_list', 'Selecciona un asunto válido.');

            if ($this->form_validation->run())
            {
                $asuntos = array(
                    'general' => 'Información general',
                    'colaboraciones' => 'Colaboraciones',
                    'prensa' => 'Prensa',
                    'otro' => 'Otro',
                );
                $nombre = $this->input->post('nombre', TRUE);
                $email = $this->input->post('email', TRUE);
                $asunto = $this->input->post('asunto', TRUE);
                $mensaje = $this->input->post('mensaje', TRUE);

                $smtp_host = getenv('ENOC_SMTP_HOST');
                $smtp_user = getenv('ENOC_SMTP_USER');
                $smtp_password = getenv('ENOC_SMTP_PASSWORD');

                if (!$smtp_host || !$smtp_user || !$smtp_password)
                {
                    log_message('error', 'Formulario de contacto: falta configurar las variables SMTP.');
                    $datos['estado_contacto'] = 'El envío de mensajes aún no está configurado en este servidor.';
                    $datos['tipo_estado_contacto'] = 'warning';
                }
                else
                {
                    $smtp_port = getenv('ENOC_SMTP_PORT');
                    $smtp_crypto = getenv('ENOC_SMTP_CRYPTO');

                    $this->load->library('email');
                    $this->email->initialize(array(
                        'protocol' => 'smtp',
                        'smtp_host' => $smtp_host,
                        'smtp_user' => $smtp_user,
                        'smtp_pass' => $smtp_password,
                        'smtp_port' => $smtp_port ? (int) $smtp_port : 587,
                        'smtp_crypto' => $smtp_crypto ? $smtp_crypto : 'tls',
                        'smtp_timeout' => 10,
                        'mailtype' => 'text',
                        'charset' => 'UTF-8',
                        'crlf' => "\r\n",
                        'newline' => "\r\n",
                        'wordwrap' => TRUE,
                    ));
                    $this->email->from($smtp_user, 'Vela Studio');
                    $this->email->to('maxicorreaavalos@gmail.com');
                    $this->email->reply_to($email);
                    $this->email->subject('Formulario web: ' . $asuntos[$asunto]);
                    $this->email->message(
                        "Nombre: " . $nombre . "\n" .
                        "Email: " . $email . "\n" .
                        "Asunto: " . $asuntos[$asunto] . "\n\n" .
                        $mensaje
                    );

                    if ($this->email->send())
                    {
                        $datos['estado_contacto'] = 'Tu mensaje fue enviado. Gracias por escribirnos.';
                        $datos['tipo_estado_contacto'] = 'success';
                    }
                    else
                    {
                        log_message('error', 'No se pudo enviar el formulario de contacto por correo.');
                        $datos['estado_contacto'] = 'No se pudo enviar el mensaje. Inténtalo más tarde.';
                        $datos['tipo_estado_contacto'] = 'danger';
                    }
                }
            }
            else
            {
                $datos['errores_formulario'] = $this->form_validation->error_string('<p>', '</p>');
            }
        }

        $this->cargar('contacto', $datos);
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
    private function cargar($vista, $datos_adicionales = array())
    {
        $datos = array_merge(array(
            'vista_actual' => $vista,
            'titulo'       => 'Vela Studio · ' . $this->titulos[$vista],
        ), $datos_adicionales);

        $this->load->view('partials/header', $datos);
        $this->load->view($vista);
        $this->load->view('partials/footer');
    }
}

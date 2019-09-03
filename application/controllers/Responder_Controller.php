<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Responder_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logado')) {
            redirect(base_url('login'));
        }
        $this->load->model("responder_model", "mresp");
        $this->load->model("formularios_model", "mform");
    }

    public function index()
    {
        $cliente = $this->session->userdata('userlogado');
        $this->formulario = $this->mresp->lista_formularios();
        $dados['p'] = $this->session->userdata('userlogado')->user_permissao;
        $dados['param'] = NULL;
        $dados['formulario'] = $this->formulario;
        $dados['title'] = "Gerenciar respostas";
        $dados['subtitle'] = " responstas do formularios";

        render_template("responder/ver", $dados);
    }

    public function montarFormulario($id)
    {
        $this->formulario = $this->mresp->montarFormulario($id, $this->session->userdata('userlogado')->user_id);

        $secoes = [];

        $opcoes = [];

        foreach ($this->formulario as $form) {

            array_push($secoes, $form['ses_nome']);
            if ($opcao = $this->mresp->montarOpcoes($form['cam_id'])) {
                $opcoes[$form['cam_id']] = $opcao;
            }
        }

        $dados['p'] = $this->session->userdata('userlogado')->user_permissao;

        $dados['param'] = $id;

        $dados['formularioMontado'] = $this->formulario;

        $dados['secoes'] = $secoes;

        $dados['opcoes'] = $opcoes;

        $dados['title'] = "Gerenciar respostas";

        $dados['subtitle'] = " responstas do formularios";

        render_template("responder/ver", $dados);
    }

    public function cadastrar($id)
    {
        $cliente = $this->session->userdata('userlogado');

        $Campos = $this->mresp->Campos($id);

        $success = false;

        for ($i = 0; $i < sizeof($Campos); $i++) {
            if ($Campos[$i]['cam_mandatory']) {
                $this->form_validation->set_rules($Campos[$i]['cam_name'], $Campos[$i]['cam_validation_message'], 'required');
                if ($this->form_validation->run() == FALSE) {
                    break;
                }
            } else {
                $arr_formulario = [
                    'res_resposta' => $this->input->post($Campos[$i]['cam_name']),
                    'res_campo' => $Campos[$i]['cam_id'],
                    'res_cliente' => $cliente->user_id
                ];

                $this->mresp->adicionar($arr_formulario) ? $success = true : $success = false;
            }

        }
        if ($success) {

            $urlRetorno = "responder/";

            redirect(base_url($urlRetorno));
        } else {

            $this->montarFormulario($id);

        }
    }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');$route['default_controller'] = 'Home_Controller';$route['404_override'] = '';$route['translate_uri_dashes'] = FALSE;/*painel*/$route['login'] = "Usuarios_Controller/pag_login";$route['cadastro'] = "Usuarios_Controller/pag_cadastro";$route['esqueci_senha'] = "Usuarios_Controller/pag_esquecisenha";$route['usuarios/login'] = "Usuarios_Controller/login";$route['usuarios/logout'] = "Usuarios_Controller/logout";/*VER*/ $route['categoria'] = "Categoria_Controller/index";$route['usuarios'] = "Usuarios_Controller/index";$route['formulario'] = "Formularios_Controller/index";$route['secao/(:any)'] = "Secao_Controller/index/$1";$route['itens'] = "Item_Controller/index";$route['campo/(:any)'] = "Item_Controller/index/$1";$route['responder/(:any)'] = "Responder_Controller/montarFormulario/$1";$route['responder'] = "Responder_Controller/index";$route['field/(:any)'] = "Field_Controller/index/$1";/*inserir*/$route['usuarios/cadastrar/(:any)'] = "Usuarios_Controller/cadastrar/$1";$route['categoria/inserir'] = "Categoria_Controller/inserir";$route['usuarios/inserir'] = "Usuarios_Controller/inserir";$route['formulario/inserir'] = "Formularios_Controller/inserir/";$route['secao/inserir/(:any)'] = "Secao_Controller/inserir/$1";$route['campo/inserir/(:any)'] = "Item_Controller/inserir/$1";$route['field/inserir/(:any)'] = "Field_Controller/inserir/$1";/*editar*/$route['categoria/editar/(:any)'] = "Categoria_Controller/editar/$1";$route['usuarios/editar/(:any)'] = "Usuarios_Controller/editar/$1";$route['formulario/editar/(:any)'] = "Formularios_Controller/editar/$1";$route['secao/editar/(:any)'] = "Secao_Controller/editar/$1";$route['campo/editar/(:any)/(:any)'] = "Item_Controller/editar/$1/$2";$route['field/editar/(:any)/(:any)'] = "Field_Controller/editar/$1/$2";/*salvar cadastro*/$route['categoria/cadastrar'] = "Categoria_Controller/cadastrar";$route['usuarios/cadastrar'] = "Usuarios_Controller/cadastrar";$route['formulario/cadastrar'] = "Formularios_Controller/cadastrar/";$route['secao/cadastrar/(:any)'] = "Secao_Controller/cadastrar/$1";$route['campo/cadastrar/(:any)'] = "Item_Controller/cadastrar/$1";$route['field/cadastrar/(:any)'] = "Field_Controller/cadastrar/$1";$route['responder/cadastrar/(:any)'] = "Responder_Controller/cadastrar/$1";/*salvar alterações*/$route['categoria/salvar_alteracoes'] = "Categoria_Controller/salvar_alteracoes";$route['usuarios/salvar_alteracoes'] = "Usuarios_Controller/salvar_alteracoes";$route['formulario/salvar_alteracoes/(:any)'] = "Formularios_Controller/salvar_alteracoes/$1";$route['secao/salvar_alteracoes/(:any)/(:any)'] = "Secao_Controller/salvar_alteracoes/$1/$2";$route['campo/salvar_alteracoes/(:any)/(:any)'] = "Item_Controller/salvar_alteracoes/$1/$2";$route['field/salvar_alteracoes/(:any)/(:any)'] = "Field_Controller/salvar_alteracoes/$1/$2";/*excluir*/$route['categoria/excluir/(:any)'] = "Categoria_Controller/excluir/$1";$route['usuarios/excluir/(:any)'] = "Usuarios_Controller/excluir/$1";$route['upload/excluir/(:any)'] = "Upload_Controller/excluir/$1"; $route['formulario/excluir/(:any)'] = "Formularios_Controller/excluir/$1";$route['secao/excluir/(:any)/(:any)'] = "Secao_Controller/excluir/$1/$2";$route['campo/excluir/(:any)/(:any)'] = "Item_Controller/excluir/$1/$2";$route['field/excluir/(:any)/(:any)'] = "Field_Controller/excluir/$1/$2";
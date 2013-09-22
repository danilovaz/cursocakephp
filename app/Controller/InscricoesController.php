<?php

	class InscricoesController extends AppController {

		public $uses = array('Inscricao');

		public function inscrever() {

			$isPost = $this->request->is('post');

			if ($isPost && !empty($this->request->data)) {

				if ($this->Inscricao->save($this->request->data)) {

					$this->redirect('/obrigado');
				}
			}


		}

	}
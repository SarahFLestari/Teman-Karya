<?php

	class Dashboard extends SI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }

		public function index(){
			$this->laman('v_dashboard');
		}
		public function poin(){
			$this->laman('v_poin');
		}
	}
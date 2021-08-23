<?php 
use \Stripe\Checkout\Session;
use \Stripe\Stripe;
	class Payment extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}

		public function index(){
			$this->load->view('checkout');
		}

		public function create(){
			$amount  = $this->input->post('amount');
			$qty  = $this->input->post('qty');
			Stripe::setApiKey($this->config->item('stripe_secret_key'));
			$checkout_session = Session::create([
				'line_items'=>[
					['amount'=>(int) $amount*100,
					'name'=>'For Buying',
					'quantity'=>$qty,
					'currency'=>$this->config->item('stripe_currency')]
				],
				'payment_method_types'=>[
					'card'
				],
				'mode'=>'payment',
				'success_url'=>base_url('payment/success'),
				'cancel_url'=>base_url('payment/cancel')
			]);

			header("Location:".$checkout_session->url);
			

		}

		public function success(){
			$this->load->view('success');
		}
		public function cancel(){
			$this->load->view('cancel');
		}
	}

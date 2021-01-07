<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CustomerRepository;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct (CustomerRepository $customerRepository) {
        $this->customerRepository = $customerRepository;
    }

    public function index() {
        $customers = $this->customerRepository->todos();
        return $customers;
    }

    public function show($customerId) {
        $customer = $this->customerRepository->encontrarPorId($customerId);
        return $customer;
    }

    public function update($customerId) {
        $this->customerRepository->actualizar($customerId);
        return redirect("/customers/" . $customerId);
    }

    public function delete($customerId) {
        $this->customerRepository->borrar($customerId);
        return redirect("/customers");
    }

    public function toggleActive ($customerId) {
        $this->customerRepository->activarOdesactivar($customerId);
        return redirect("/customers/" . $customerId);
    }
}

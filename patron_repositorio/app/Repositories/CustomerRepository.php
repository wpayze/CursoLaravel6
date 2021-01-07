<?php

namespace App\Repositories;

use App\Customer;

class CustomerRepository {

    public function todos () {
        return Customer::orderBy("name")
                    ->where("active",1)
                    ->with("user")
                    ->get()
                    ->map->format();
    }

    public function encontrarPorId($customerId) {
        return Customer::where("id", $customerId)
                        ->where("active", 1)
                        ->with("user")
                        ->firstOrFail()
                        ->format();
    }

    public function actualizar($customerId) {
        $customer = Customer::where("id", $customerId)->firstOrFail();

        $customer->update( request()->only("name") );
    }

    public function activarOdesactivar($customerId) {
        $customer = Customer::where("id", $customerId)->firstOrFail();

        $data = [
            "active" => $customer->active == 1 ? 0 : 1
        ];

        $customer->update( $data );
    }

    public function borrar($customerId) {
        Customer::where("id", $customerId)->delete();
    }

}

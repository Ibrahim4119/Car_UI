<?php

class VehicleManager extends VehicleBase implements VehicleActions {
    use FileHandler;

    public function addVehicle($data) {
        $vehicles = $this->getVehicles();
        $vehicles[] = $data;
        $this->write($vehicles);
    }

    public function editVehicle($id, $data) {
        $vehicles = $this->getVehicles();
        if (isset($vehicles[$id])) {
            $vehicles[$id] = $data;
            $this->write($vehicles);
        }
    }

    public function deleteVehicle($id) {
        $vehicles = $this->getVehicles();
        if (isset($vehicles[$id])) {
            unset($vehicles[$id]);
            $this->write($vehicles);
        }
    }

    public function getVehicles() {
        return $this->read();
    }

    public function getDetails() {
        return "Name: $this->name, Type: $this->type, Price: $this->price, Image: <img src='$this->image' alt='$this->name'>";
    }
}
?>

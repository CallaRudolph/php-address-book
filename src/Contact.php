<?php
    class Contact
    {
        private $name;
        private $phone_number;
        private $address;

        function __construct($name, $phone_number, $address)
        {
            $this->name = $name;
            $this->phone_number = $phone_number;
            $this->address = $address;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPhoneNumber($new_phone_number)
        {
            $this->phone_number = $new_phone_number;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function setAddress($new_address)
        {
            $this->address = $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }
    }
?>

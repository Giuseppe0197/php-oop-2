<!-- **
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     * -->

<?php

    class Person {

        private $name;

        private $surname;

        private $date;

        public function __construct($name, $surname){

            $this -> setName($name);

            $this -> setSurname($surname);
        }

        public function getName(){
            return $this -> name;
        }

        public function setName($name){
            $this -> name = $name;
        }

        public function getSurname(){
            return $this -> surname;
        }

        public function setSurname($surname){
            $this -> surname = $surname;
        }

        public function getDate(){
            return $this -> date;
        }

        public function setDate($date){
            $this -> date = $date;
        }

        public function printFullPerson(){
            return $this -> getName() . " " . $this -> getSurname() . ": " . $this -> getDate();
        }

        public function __toString(){
            return $this -> printFullPerson();
        }

        
    }
        $person1 = new Person("Mario", "Rossi");

        $person2 = new Person("Bianca", "Verdi");

        $person1 -> setDate("22/01/1978");

        $person2 -> setDate("01/09/1989");

        echo $person1 . "<br>";
        echo $person2 . "<br>";

        echo "<br>------------------<br><br>";

        class Employee extends Person {

            private $salary;

            private $dateStart;

            public function __construct($name, $surname, $salary){
                parent::__construct($name, $surname); 
                $this -> setSalary($salary);
            }

            public function getSalary(){
                return $this -> salary;
            }
        
            public function setSalary($salary){
                $this -> salary = $salary;
            }
        
            public function getDateStart(){
                return $this -> dateStart;
            }
        
            public function setDateStart($dateStart){
                $this -> dateStart = $dateStart;
            }

            public function printFullEmployee(){
                return $this -> getName() . " " . $this -> getSurname() . ": " . $this -> getSalary() . " " . "(" . $this -> getDateStart() . ")";
            }

            public function __toString(){
                return $this -> printFullEmployee();
            }

        }

        $employee1 = new Employee("Giulio", "Rossi", "13000$");

        $employee2 = new Employee("Marta", "Orsi", "18500$");

        $employee1 -> setDateStart("02/09/2009");

        $employee2 -> setDateStart("05/10/2003");

        echo $employee1 . "<br>";

        echo $employee2 . "<br>";

?>
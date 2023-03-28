<?php

    class Student
    {
        protected string $firstName;
        protected string $lastName;
        protected string $group;
        protected float $averageMark;

        public function __construct($firstName, $lastName, $group, $averageMark)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->group = $group;
            $this->averageMark = $averageMark;
        }

        public function getScholarship(): int
        {
            return ($this->averageMark < 5) ?  100 : 80;
        }

    }

    class Aspirant extends Student
    {

        private string $researchField;

        private string $projectName;

        public function __construct($firstName, $lastName, $group, $averageMark, $researchField, $projectName)
        {
            parent::__construct($firstName, $lastName, $group, $averageMark);
            $this->researchField = $researchField;
            $this->projectName = $projectName;
        }

        public function getScholarship(): int
        {
            return ($this->averageMark < 5) ?  200 : 180;
        }
    }

    $asp1 = new Aspirant('Ian', 'Curtis', '1234', 2.3, 'physics', 'Transmission of shadowplay');

    $asp2 = new Aspirant('Mykhailo', 'Gorshen\'ov', '5678', 3.9, 'ecology', 'Foresters and their influence on the wolf population in the forests of Siberia');

    $stud1 = new Student('Fajshdaj', 'Asdsjkjf', 'saashsjhfjhf', 5.0);

    $stud2 = new Student('Asjsdfhdjf', 'SAsjdhshah', '2982948', 3.4);


    $slavArray = [$asp1, $asp2, $stud2, $stud1];

    foreach ($slavArray as $slav)
    {
        $slav->getScholarship();
    }
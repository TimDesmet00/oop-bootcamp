<?php
class Student {

    public ?string $name;
    public ?string $group;
    public int $score;

    public function __construct(?string $name, ?string $group, int $score) {
        $this->name = $name;
        $this->group = $group;
        $this->score = $score;
    }public function setGroup(?string $group) {
        $this->group = $group;
    }

    public static function setGroupByName($students, $name, $newGroup) {
        foreach ($students as $student) {
            if ($student->name == $name) {
                $student->setGroup($newGroup);
                break;
            }
        }
    }

    public function displayInfo() {
        echo "Name: " . $this->name . ", Group: " . $this->group . ", Score: " . $this->score . "<br>";
    }

    public static function averagePerGroup($students, $group) {

        $sum = 0;
        $count = 0;

        foreach ($students as $student) {
            if ($student->group == $group) {
                $sum += $student->score;
                $count++;
            }
        }

        return $sum / $count;

    }

}

$students = [
    new Student("John", "A", 12),
    new Student("Jane", "A", 16),
    new Student("Mary", "A", 17),
    new Student("Peter", "A", 15),
    new Student("Harry", "A", 16),
    new Student("Paul", "A", 18),
    new Student("David", "A", 19),
    new Student("Marc", "A", 20),
    new Student("Joan", "A", 15),
    new Student("Philip", "A", 16),

    new Student("Richard", "B", 17),
    new Student("Robert", "B", 15),
    new Student("Bernard", "B", 16),
    new Student("Nicolas", "B", 18),
    new Student("William", "B", 19),
    new Student("Joseph", "B", 20),
    new Student("Charles", "B", 15),
    new Student("Thomas", "B", 16),
    new Student("Michael", "B", 17),
    new Student("Anthony", "B", 15),
];

echo "Average for group A: " . Student::averagePerGroup($students, "A") . "<br>";
echo "Average for group B: " . Student::averagePerGroup($students, "B") . "<br>";

Student::setGroupByName($students, "John", "B");
Student::setGroupByName($students, "Joseph", "A");

foreach ($students as $student) {
    if ($student->group == "A") {
        $student->displayInfo();
    }
}

foreach ($students as $student) {
    if ($student->group == "B") {
        $student->displayInfo();
    }
}

echo "Average for group A: " . Student::averagePerGroup($students, "A") . "<br>";
echo "Average for group B: " . Student::averagePerGroup($students, "B") . "<br>";

?>
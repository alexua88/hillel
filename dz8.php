<?php
//root555test
//lesson8
//T1h4W7y5

/*

-- pdo_sample.students definition

CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `age` integer (12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

*/

/*
try {
    $conn = new PDO("mysql:host=localhost;dbname=lesson8", 'root555test', 'T1h4W7y5');
    // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

*/


class Clients
{


    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=lesson8", 'root555test', 'T1h4W7y5');
    }

    // 1) Список всех клиентов

    public function try1()
    {
        //  $conn=$this->db;
        //  $t1 = $conn->query('SELECT * FROM clients');


        $t1 = $this->db->query('SELECT * FROM clients');


        foreach ($t1 as $row) {
            //   echo $row['name'] . "\n";
            //   printf("id: %s, age: %s, name: %s, iis_active: %s ", $row['id'], $row['age'], $row['name'], $row['is_active'] ) ;
            print_r($row);
        }


    }

    //2) Список клиентов который активны (поле is_active)
    public function try2()
    {

        $t1 = $this->db->query('SELECT * FROM `clients` WHERE `is_active` = 1');


        foreach ($t1 as $row) {
            print_r($row);
        }


    }


    //3) Список клиентов возраст которых больше или равно 30
    public function try3()
    {

        $t1 = $this->db->query('SELECT * FROM `clients` WHERE `age` >= 30');


        foreach ($t1 as $row) {
            print_r($row);
        }


    }

    //4) Список клиентов имя которых начинается на В (Вася, Владимир)
    public function try4()
    {

        $t1 = $this->db->query('SELECT * FROM `clients` WHERE `name` LIKE "В%"');


        foreach ($t1 as $row) {
            print_r($row);
        }


    }


    //5) Сколько клиентов у вас в базе всего
    public function try5()
    {

        $t1 = $this->db->query('SELECT COUNT(1) FROM `clients`');

        foreach ($t1 as $row) {
            print_r($row);
        }


    }


    //6) Самого старого (по возрасту клиента)
    public function try6()
    {

        $t1 = $this->db->query('SELECT * FROM `clients` ORDER BY `clients`.`age` DESC LIMIT 1');

        foreach ($t1 as $row) {
            print_r($row);
        }


    }



    //7) Сколько у вас активных клиентов
    //2) Список клиентов который активны (поле is_active)
    public function try7()
    {

        $t1 = $this->db->query('SELECT COUNT(1) FROM `clients`  WHERE `is_active` = 1');

        foreach ($t1 as $row) {
            print_r($row);
        }


    }


    //8) Получить и отсортировать всех клиентов по возрасту
    public function try8()
    {

        $t1 = $this->db->query('SELECT * FROM `clients` ORDER BY `clients`.`age` ASC');

        foreach ($t1 as $row) {
            print_r($row);
        }


    }

    //9) Получить и отсортировать всех клиентов по имени
    public function try9()
    {

        $t1 = $this->db->query('SELECT * FROM `clients` ORDER BY `clients`.`name` ASC');

        foreach ($t1 as $row) {
            print_r($row);
        }


    }

    //10) Посчтить сколько у вас активных клиентов старше 25.
    public function try10()
    {

        $t1 = $this->db->query('SELECT COUNT(1) FROM `clients` WHERE `age` >= 25');
        foreach ($t1 as $row) {
            print_r($row);
        }


    }







    //Практика на UPDATE и DELETE


    //11) Изменить возраст на 45 для клиента номер 2
    public function try11()
    {
        $this->db->query('UPDATE `clients` SET `age` = \'45\' WHERE `clients`.`id` = 2');
        $stmt = $dpo->prepare($sql);
        $stmt->execute($data);

    }

    //12) Изменит имя клиенту с номером 1
    public function try12()
    {
        $this->db->query('UPDATE `clients` SET `name` = \'Alex\' WHERE `clients`.`id` = 1');
    }


    //13) Деактивировать клиента номер 3 (подсказка - см. поле is_active)
    public function try13()
    {
        $this->db->query('UPDATE `clients` SET `is_active` = \'0\' WHERE `clients`.`id` = 3');
    }

    //14) Удалить всех не активных клиентов
    public function try14()
    {
        $this->db->query('DELETE FROM  `clients` WHERE `clients`.`is_active` = 0');
    }

    //15) Удалить всех созданных вами клиентов
    public function try15()
    {
        $this->db->query('TRUNCATE TABLE  clients');
    }


}


$t1 = new Clients();
$t1->try1();


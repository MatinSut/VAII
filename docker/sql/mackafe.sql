CREATE TABLE cats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    age_unit VARCHAR(10) NOT NULL DEFAULT 'roky',
    personality VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    adoption_status VARCHAR(30) NOT NULL DEFAULT 'Dostupná'
);

INSERT INTO `cats` (`name`, `age`, `age_unit`, `personality`, `description`, `adoption_status`) VALUES
('Huno', 4, 'roky', 'Pokojný a priateľský', 'Rád oddychuje v blízkosti ľudí a užíva si nežné pohladenie.', 'Dostupná'),
('Shaila', 2, 'roky', 'Hravá a zvedavá', 'Rada objavuje nové miesta a svojou energiou rozžiari každý deň.', 'Dostupná'),
('Frodo', 3, 'roky', 'Spoločenský a zvedavý', 'Rád spoznáva ľudí, hrá sa a pozoruje všetko zaujímavé vo svojom okolí.', 'Dostupná');

Warning: "continue" targeting switch is equivalent to "break". Did you mean to use "continue 2"? in C:\xampp\htdocs\scrumonline\vendor\doctrine\orm\lib\Doctrine\ORM\UnitOfWork.php on line 2640

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995
CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_45A0D2FF613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE polls (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, topic VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, url VARCHAR(255) NOT NULL, startTime DATETIME NOT NULL, endTime DATETIME NOT NULL, result DOUBLE PRECISION NOT NULL, consensus TINYINT(1) NOT NULL, INDEX IDX_1D3CC6EE613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE sessions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, isPrivate TINYINT(1) NOT NULL, token VARCHAR(255) NOT NULL, cardSet INT NOT NULL, lastAction DATETIME NOT NULL, currentPoll_id INT DEFAULT NULL, INDEX IDX_9A609D13DD3787E (currentPoll_id), INDEX date_idx (lastAction), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE votes (id INT AUTO_INCREMENT NOT NULL, poll_id INT DEFAULT NULL, member_id INT DEFAULT NULL, value DOUBLE PRECISION NOT NULL, highlighted TINYINT(1) NOT NULL, INDEX IDX_518B7ACF3C947C0F (poll_id), INDEX IDX_518B7ACF7597D3FE (member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE members ADD CONSTRAINT FK_45A0D2FF613FECDF FOREIGN KEY (session_id) REFERENCES sessions (id);
ALTER TABLE polls ADD CONSTRAINT FK_1D3CC6EE613FECDF FOREIGN KEY (session_id) REFERENCES sessions (id);
ALTER TABLE sessions ADD CONSTRAINT FK_9A609D13DD3787E FOREIGN KEY (currentPoll_id) REFERENCES polls (id);
ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF3C947C0F FOREIGN KEY (poll_id) REFERENCES polls (id);
ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF7597D3FE FOREIGN KEY (member_id) REFERENCES members (id);

Warning: "continue" targeting switch is equivalent to "break". Did you mean to use "continue 2"? in C:\xampp\htdocs\scrumonline\vendor\doctrine\orm\lib\Doctrine\ORM\UnitOfWork.php on line 2640

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995

Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\scrumonline\vendor\doctrine\annotations\lib\Doctrine\Common\Annotations\DocParser.php on line 995
CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_45A0D2FF613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE polls (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, topic VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, url VARCHAR(255) NOT NULL, startTime DATETIME NOT NULL, endTime DATETIME NOT NULL, result DOUBLE PRECISION NOT NULL, consensus TINYINT(1) NOT NULL, INDEX IDX_1D3CC6EE613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE sessions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, isPrivate TINYINT(1) NOT NULL, token VARCHAR(255) NOT NULL, cardSet INT NOT NULL, lastAction DATETIME NOT NULL, currentPoll_id INT DEFAULT NULL, INDEX IDX_9A609D13DD3787E (currentPoll_id), INDEX date_idx (lastAction), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE votes (id INT AUTO_INCREMENT NOT NULL, poll_id INT DEFAULT NULL, member_id INT DEFAULT NULL, value DOUBLE PRECISION NOT NULL, highlighted TINYINT(1) NOT NULL, INDEX IDX_518B7ACF3C947C0F (poll_id), INDEX IDX_518B7ACF7597D3FE (member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE members ADD CONSTRAINT FK_45A0D2FF613FECDF FOREIGN KEY (session_id) REFERENCES sessions (id);
ALTER TABLE polls ADD CONSTRAINT FK_1D3CC6EE613FECDF FOREIGN KEY (session_id) REFERENCES sessions (id);
ALTER TABLE sessions ADD CONSTRAINT FK_9A609D13DD3787E FOREIGN KEY (currentPoll_id) REFERENCES polls (id);
ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF3C947C0F FOREIGN KEY (poll_id) REFERENCES polls (id);
ALTER TABLE votes ADD CONSTRAINT FK_518B7ACF7597D3FE FOREIGN KEY (member_id) REFERENCES members (id);

<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20140110094411 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->addSql("ALTER TABLE  `test_paper_result` ADD  `rightItemCount` INT NOT NULL AFTER  `score`");

		$this->addSql("CREATE TABLE IF NOT EXISTS `question_favorite` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `questionId` int(11) NOT NULL,
            `testPaperResultId` int(11) NOT NULL,
            `userId` int(11) NOT NULL,
            `createdTime` int(11) NOT NULL,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");

        $this->addSql("ALTER TABLE  `test_paper_result` ADD  `checkTeacherId` INT NOT NULL AFTER  `status`");

        $this->addSql("ALTER TABLE  `test_paper_result` CHANGE  `endTIme`  `endTime` INT( 11 ) NOT NULL COMMENT  '结束时间'");
        
        $this->addSql("ALTER TABLE  `test_paper_result` ADD  `subjectiveScore` INT NOT NULL AFTER  `score`");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs

    }
}

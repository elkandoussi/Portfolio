<?php 

namespace App\tests\Entity;

use App\Entity\Skill;
use PHPUnit\Framework\TestCase;

class SkillTest extends TestCase{

    public function testDescription(){
        $skill = new Skill();

        $description = "mon premier test";
        $skill->setDescription($description);
        $this->assertEquals("mon premier test", $skill->getDescription());
    }
}